<?php

namespace App\Http\Controllers;


use App\Models\Centre;
use App\Models\Declaration;
use App\Models\Utilities;
use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use App\Repositories\DeclarationRepository;
use App\Repositories\RegistreRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Registre;
use Illuminate\Support\Facades\Session;

use Jenssegers\Date\Date;
use Validator;

class DeclarationController extends Controller
{
    use Utilities;

	  protected $declarationRepository;

	  public function __construct(DeclarationRepository $repository)
    {
        $this->declarationRepository = $repository;
    }

    public function index()
    {
        $centre = $this->getCentre(); // on recupère le centre connecté
        $numero = 0; // parametre pour l'affiche du numero de ligne dans le tableau

        $declarations = DB::table('declarations')
            ->select('declarations.*')
            ->where('centre_id', '=',  Auth::user()->centre_id)
            ->whereNotIn('id', function ($query) {
                $query->select(DB::raw('declaration_id'))
                ->from('mariages')
                ->whereRaw('mariages.declaration_id = declarations.id');
            })->orderBy('created_at', 'desc')->get();

        return view( 'mariages.declaration-list', compact('declarations', 'numero', 'centre'));
    }

    public function create()
    {
        $etatcivil = $this->getCentre();

        //dd($etatcivil->designation);

        $allCentres = Centre::all();
        $years = $this->listAnnees();

        $etatsCivils_dep = DB::table('centres')
            ->select('centres.*')
            ->where('centres.department','=', $etatcivil->department)
            ->get();

        return view('mariages.declaration-form',
            compact('etatcivil', 'etatsCivils_dep', 'allCentres', 'years')
        );
    }

    public function save(Request $request)
    {
        $validator = $this->declValidator($request);

        if ($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('whoops', 'Votre formulaire contient certainement des erreurs, veillez les corriger.');
        }

        //  On verifie le mariage des temoins de l'epoux existe, par rapport aux infos passées
        $marriage1 = $this->isActe(
            $request->input("numero_acte_temoins_epoux"),
            $request->input("reference_reg_acte_temoins_epoux"),
            $request->input("annee_delivrance_acte_mariage_temoins_epoux"),
            $request->input("lieu_delivrance_acte_mariage_temoins_epoux")
        );

        if (!$marriage1) {

            return redirect()->back()
                ->with('alert_mariage1', 'L\'acte de mariage des temoins de l\'époux est érroné.')
                ->withInput();
        }

        //  On verifie le mariage des temoins de l'epouse existe, par rapport aux infos passées
        $marriage2 = $this->isActe(
            $request->input("numero_acte_temoins_epouse"),
            $request->input("reference_reg_acte_temoins_epouse"),
            $request->input("annee_delivrance_acte_mariage_temoins_epouse"),
            $request->input("lieu_delivrance_acte_mariage_temoins_epouse")
        );

        if (!$marriage2) {

            return redirect()->back()
                ->with('alert_mariage2', 'L\'acte de mariage des temoins de l\'épouse est érroné.')
                ->withInput();
        }

        $this->declarationRepository->save($request->all());

        return redirect()->back()
            ->with('success', 'Votre déclaration de mariage a été engregistrée avec succès.')
            ->withInput();
    }

    public function show($id)
    {
        $declaration = $this->declarationRepository->getById($id);
        $centre = $this->getCentre();

        return view('mariages.declaration', compact('declaration', 'centre'));
    }

    /**
     *  Cette fonction retourne la vue mariage avec deux paramettres
     *  la declaration de mariage $declaration et le registre ouvert
     *  $register dans lequel ladite declaration va etre inscrite
     */
    public function showCelebrateForm($id)
    {
        $declaration = $this->declarationRepository->getById($id);
        // On recupere le resgistre active
        // select * from registres where active = 1
        $register = Registre::where('active',1)->first();

        $centre = $this->getCentre();

        return view('mariages.mariage', compact('declaration', 'register', 'centre'));
    }

    public function edit($id)
    {
        $declaration = $this->declarationRepository->getById($id);
        $centre = $this->getCentre();
        $allCentres = Centre::all();
        $years = $this->listAnnees();

        return view('mariages.declaration-form-edit',
            compact('declaration', 'centre', 'allCentres', 'years'))->with('edit', true);
    }

    public function update(Request $request, $id)
    {
        $validator = $this->declValidator($request);

        if ($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('whoops', 'Votre formulaire contient certainement des erreurs, veillez les corriger.');
        }
        $this->declarationRepository->update($id, $request->all());

        return redirect()->back()
            ->withInput()
            ->with('success', 'la déclaration '.$id.' a été modifiée avec succès.');
    }

    public function destroy($id)
    {
        $this->declarationRepository->destroy($id);

        return redirect()->back();
    }

    public function isActe($numActe, $refRegistre, $anneeReg, $etatCivil)
    {

        $acte = DB::table('registres')
            ->join('mariages', 'mariages.registre_id', '=', 'registres.id')
            ->join('centres', 'registres.centre_id', '=', 'centres.id')
            ->select('mariages.id')
            ->where([
                ['centres.designation', '=', $etatCivil],
                ['registres.reference', '=' , $refRegistre],
                ['mariages.numero_acte', '=', $numActe]
            ])
            ->whereYear('registres.created_at', $anneeReg)
            ->get()->first();

        return $acte != null ? true : false;

    }

    public function published($id)
    {
        $decl = DB::table('declarations')
            ->where('id', $id)
            ->update(['status' => 'Publié']);

        return redirect()->back();
    }

    public function marriageConfirm($decl_id)
    {

    }

    public function calendar()
    {
        return view('mariages/calendrier-mariages');
    }

}
