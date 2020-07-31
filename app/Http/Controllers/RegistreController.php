<?php

namespace App\Http\Controllers;

use App\Models\Utilities;
use Illuminate\Http\Request;
use App\Repositories\RegistreRepository;
use Illuminate\Support\Facades\DB;
use App\Models\Mariage;
use Illuminate\Support\Facades\Auth;

class RegistreController extends Controller
{
    use Utilities;

    protected $registreRepository;

    public function __construct(RegistreRepository $repository)
    {
        $this->registreRepository = $repository;
    }

    public function index()
    {
        //$registers = $this->registreRepository->getPaginate(10);
        $numero = 0;

        $centre = $this->getCentre();

        $registers = DB::table('registres')
            ->leftJoin('mariages', 'mariages.registre_id', '=', 'registres.id')
            ->select(DB::raw('count(registre_id) as act_count, registres.id, registres.reference, registres.created_at'))
            ->groupBy('registres.id', 'registres.reference', 'registres.created_at')
            ->where('centre_id', '=',  Auth::user()->centre_id)
            ->get();

        //dd($registers);

        return view( 'registres.registers-list',
            compact('registers', 'numero', 'centre' )
        );
    }

    /**
     * Cette methode affiche les actes de mariages inscrits dans un registre
     */
    public function showRegisterContent($id)
    {
        $content = DB::table('registres')
            ->join('mariages', 'registres.id', '=', 'mariages.registre_id')
            ->join('declarations', 'mariages.declaration_id', '=', 'declarations.id')
            ->select(
                'registres.id',
                'registres.reference',
                'mariages.id',
                'mariages.updated_at',
                'mariages.numero_acte',
                'declarations.date_celebration',
                'declarations.nom_epoux',
                'declarations.prenom_epoux',
                'declarations.nom_epouse',
                'declarations.prenom_epouse',
                'declarations.nom_temoin1_epoux',
                'declarations.prenom_temoin1_epoux',
                'declarations.nom_jeune_fille_temoin2_epoux',
                'declarations.nom_temoin1_epouse',
                'declarations.prenom_temoin1_epouse',
                'declarations.nom_jeune_fille_temoin2_epouse'
            )
            ->where('registres.id','=', $id)
            ->orderBy('updated_at', 'desc')->get();

        // parametre pour l'affiche du numero de ligne dans le tableau
        $numero = 0;
        $centre = $this->getCentre();

        return view('registres.register-content', compact('content', 'numero', 'centre'));
    }

    public function showRegisterOpenContent()
    {
        // On recupere l'ID du registre
        $register_id = DB::table('registres')
            ->select('id')->where('active', '=', 1)
            ->get()->first()->id;

       return $this->showRegisterContent($register_id);
    }

}
