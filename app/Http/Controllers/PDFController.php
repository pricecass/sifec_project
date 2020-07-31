<?php

namespace App\Http\Controllers;

use App\Models\Utilities;
use App\Repositories\LivretRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PDFController extends Controller
{

    use Utilities;

    /** Generation de l'acte de mariage
     *
     * @param $id
     * @return mixed
     */
    public function generateActeMariagePDF($id)
    {
        $centre = $this->getCentre();

        $acte = DB::table('mariages')
            ->join('declarations','mariages.declaration_id','=','declarations.id')
            ->join('registres','mariages.registre_id','=','registres.id')
            ->where('mariages.id','=',$id)
            ->select(
                'mariages.*',
                'declarations.*',
                'registres.reference'
            )->get()->first();

        $pdf = PDF::loadView('print.acte-pdf', compact('acte', 'centre'))
            ->setPaper('a4', 'portrait');

        $fileName = 'Acte-'.$acte->numero_acte.'-'.$acte->nom_epoux.'&'.$acte->nom_epouse;

        return $pdf->stream($fileName.'.pdf');
    }

    /** Generation de publication des bans
     *
     * @param $id
     * @return mixed
     */
    public function generatePublicationBansPDF($id)
    {
        $centre = $this->getCentre();

        $declaration = DB::table('declarations')
            ->select('declarations.*')
            ->where('declarations.id', $id)
            ->get()->first();

        $pdf = PDF::loadView('print.publication-bans-pdf', compact('declaration', 'centre'))
            ->setPaper('a4', 'portrait');

        $fileName = trim('pub'.$declaration->nom_epoux.'&'.$declaration->nom_epouse);

        return $pdf->stream($fileName.'.pdf');
    }

    public function generateLivretFamille(LivretRepository $livretRepository)
    {
        // We'll put code here
    }


}
