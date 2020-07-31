<?php

namespace App\Http\Controllers;

use App\Models\Utilities;
use App\Repositories\MariageRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Maatwebsite\Excel\Facades\Excel;

class MariageController extends Controller
{
    use Utilities;

    protected $mariageRepository;

    public function __construct(MariageRepository $repository)
    {
        $this->mariageRepository = $repository;
    }


    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'option_matrimoniale'        =>'required',
            'regime_matrimonial'         =>'required',
            'montant_dot'                =>'numeric',
            'beneficiaire_dot'           =>'string',
            'coutume_presidant_union'    =>'required|string',
            'stipulation_particuliaire'  =>'required|string',
        ]);

        if ($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('whoops', 'Votre formulaire contient certainement des erreurs, veillez les corriger.');
        }
        $marriage = $this->mariageRepository->save($request->all());

//        $mariage_id = DB::table('mariages')
//            ->join('declarations', 'mariages.declaration_id', '=', 'declarations.id')
//            ->join('registres', 'registres.id', '=', 'mariages.registre_id')
//            ->select('mariages.id',
//                'registres.reference'
////                'declarations.nom_epoux',
////                'declarations.prenom_epoux',
////                'declarations.nom_epouse',
////                'declarations.prenom_epouse'
//            )->where('mariages.id','=', $mariage->id)->get()->first();

//        dd($marriage);

        return redirect()->back()
            ->with('success', 'Acte de mariage enregistré avec succès.')
            ->with('mariage_id', $marriage->id)
            ->with('acte_num', $marriage->numero_acte)
            ->withInput();
    }

    public function show($id)
    {
        $centre = $this->getCentre();

        $acteMariage = DB::table('mariages')
            ->join('declarations', 'mariages.declaration_id', '=', 'declarations.id')
            ->join('registres', 'registres.id', '=', 'mariages.registre_id')
            ->select('declarations.*',
                'mariages.*',
                'registres.reference'
            )->where('mariages.id','=', $id)->get()->first();

        return view('registres.acte-mariage', compact('acteMariage', 'centre'));
    }

    public function showLivretForm($id)
    {
        $centre = $this->getCentre();
        $mariage = $this->mariageRepository->getById($id);

        return view('registres.livret-form', compact('mariage', 'centre'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function marriageStats()
    {
        $centre = $this->getCentre();
        $years = $this->listAnnees();

        return view('admin.statistiques-mariages', compact('centre', 'years'))
            ->with('stat');
    }


    public function getStats(Request $request, $centre)
    {
        $years = $this->listAnnees();

        $statsAnnuelles = $this->getMarriageByYear(
            $request->input('date_inf'), $request->input('date_sup'), $centre);

        $dataList = $this->getMarriageOfYearByMonth(
            $request->input('date_inf'), $request->input('date_sup'), $centre);

        return view('admin/stats_mariages_intervalle_annees',
            compact('dataList', 'statsAnnuelles', $this->getCentre(), 'years'));
    }

    public function getMarriageByYear($date_inf, $date_sup, $centre)
    {
        $years_interval = $this->yearsInterval($date_inf, $date_sup);

        $valeurs = array();

        $totalMariage = 0;

        for ($i = 0; $i < count($years_interval); $i++)
        {
            $y = $years_interval[$i];

            $nb = DB::table('mariages' )
                ->join('declarations', 'declarations.id', '=', 'mariages.declaration_id')
                ->select(DB::raw('count(*) as mar_count'))
                ->where('centre_id', '=', $centre)
                ->whereYear('date_celebration', $y)
                ->get()->first();

            $valeurs[] = [$y, $nb];

            $totalMariage += (int) $nb->mar_count;

        }
        //  resultat final. ce resultat sera sous la forme
        //  [[annee, val], total_val]
        $dataList = [$valeurs, $totalMariage];

        return $dataList;

    }

    public function getMarriageOfYearByMonth($date_inf, $date_sup, $centre)
    {
        $years_interval = $this->yearsInterval($date_inf, $date_sup);

        $mois = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

        //  total mariages par mois
        $valeurs = array();

        // resultat final. ce resultat sera sous la forme
        //  [[annee, [val, val2, ...], total_val]]
        $dataList = array();

        //  on parcourt notre intervalle d'annees recuperees afin
        //  d'executer notre requette pour chaque annee de liste
        for ($j = 0; $j < count($years_interval); $j++)
        {
            $y = $years_interval[$j];
            $total = 0;

            //  on parcourt notre liste de mois afin d'obtenir la valeur de chaque mois
            for ($k = 0; $k < count($mois); $k++)
            {
                $m = $mois[$k];

                $valeurs[] = DB::table('mariages' )
                    ->join('declarations', 'declarations.id', '=', 'mariages.declaration_id')
                    ->select(DB::raw('count(*) as mar_count'))
                    ->where('centre_id', '=', $centre)
                    ->whereYear('date_celebration', $y)
                    ->whereMonth('date_celebration', $m)
                    ->get()->first();

            }

            //  on calcule le total des mariages de toute l'annee
            for ($i = 0; $i < count($valeurs); $i++)
            {
                $total += (int) $valeurs[$i]->mar_count;
            }

            $dataList[] = [$y, $valeurs, $total];

            $valeurs = null;

        }

        return $dataList;

    }

    public function yearsInterval($date_inf = null, $date_sup = null)
    {
        $interval = array();

        while ($date_inf <= $date_sup)
        {
            $interval[] = $date_inf.'';
            $date_inf += 1;
        }

        return $interval;

    }

    public function exportToExcel(Request $request, $centre)
    {
        $marriage_data = $this->getMarriageByYear(
            2017, 2019, $centre);

        $marriage_array = null;

        for($i = 0; $i < count($marriage_data[0]); $i++)
        {
            $marriage_array[] = array($marriage_data[0][$i][0] => $marriage_data[0][$i][1]->mar_count);
        }

        //dd($marriage_array);

        return Excel::download($marriage_array, 'data.xlsx');
    }


}
