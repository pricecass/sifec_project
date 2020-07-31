<?php
/**
 * Created by PhpStorm.
 * User: price
 * Date: 26/05/2019
 * Time: 09:04
 */

namespace App\Models;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Validator;

trait Utilities
{

    public function getDateFormat2($indate='',$outformat='EN')
    {
        if (!empty($outformat) && !empty($indate)) {
            if ($outformat == 'FR') {
                $date_fr = substr($indate,0,10);
                $aa = substr($date_fr,0,4);
                $mm = substr($date_fr,5,2);
                $jj = substr($date_fr,8,2);
                $dateOut = $jj."/".$mm."/".$aa;
                switch($mm){
                    case '01':
                        $mm2 = 'janvier';
                        break;
                    case '02':
                        $mm2 = 'février';
                        break;
                    case '03':
                        $mm2 = 'mars';
                        break;
                    case '04':
                        $mm2 = 'avril';
                        break;
                    case '05':
                        $mm2 = 'mai';
                        break;
                    case '06':
                        $mm2 = 'juin';
                        break;
                    case '07':
                        $mm2 = 'juillet';
                        break;
                    case '08':
                        $mm2 = 'ao&ucirc;t';
                        break;
                    case '09':
                        $mm2 = 'septembre';
                        break;
                    case '10':
                        $mm2 = 'octobre';
                        break;
                    case '11':
                        $mm2 = 'novembre';
                        break;
                    case '12':
                        $mm2 = 'décembre';
                        break;
                    default:
                        $mm2 = 'janvier';
                        break;
                }

                $dateOut2 = $jj." ".$mm2." ".$aa;

            }
            if ($outformat == 'EN') {
                $date_fr = substr($indate,0,10);
                $aa = substr($date_fr,6,4);
                $mm = substr($date_fr,3,2);
                $jj = substr($date_fr,0,2);
                $dateOut2 = $aa."-".$mm."-".$jj;
            }

        }
        else $dateOut2 = $indate;

        return $dateOut2;
    }

    /** Permet de recuperer les informations du centre auquel
     * l'utilisateur est connecté
     *
     * @return mixed
     */
    public function getCentre()
    {
        Session::put('idCentre', Auth::user()->centre_id);

        $centre = DB::table('centres')
            ->select('centres.*')
            ->where('id', '=', session()->get('idCentre'))
            ->get()->first();

        return $centre;
    }

    public function listAnnees()
    {
        $annees = [];
        $year = date('Y');

       while ($year >= 1900)
       {
           $annees[] = $year;
           $year -= 1;
       }
       return $annees;

    }

    public function declValidator($request)
    {
        $validator = Validator::make($request->all(), [
            'nom_epoux'         =>'required|between:3,100|string',
            'prenom_epoux'      =>'min:0|string',
            'date_naiss_epoux'      =>'required',
            'lieu_naiss_epoux'      =>'required',
            'acte_naiss_epoux'      =>'required',
            'date_delivrance_acte_naiss_epoux'      =>'required',
            'lieu_delivrance_acte_naiss_epoux'      =>'required',
            'adresse_epoux'         =>'required|string',
            'profession_epoux'      =>'required|string',
            'situation_matrimoniale_epoux' =>'required',
            'parent1_epoux'         =>'required|between:3,100|string',
            'parent2_epoux'         =>'required|between:3,100|string',

            'nom_epouse'        =>'required|between:3,100|string',
            'prenom_epouse'     =>'min:0|string',
            'date_naiss_epouse'      =>'required',
            'lieu_naiss_epouse'      =>'required',
            'acte_naiss_epouse'      =>'required',
            'date_delivrance_acte_naiss_epouse'      =>'required',
            'lieu_delivrance_acte_naiss_epouse'      =>'required',
            'adresse_epouse'         =>'required|string',
            'profession_epouse'      =>'required|string',
            'situation_matrimoniale_epouse' =>'required',
            'parent1_epouse'         =>'required|between:3,100|string',
            'parent2_epouse'         =>'required|between:3,100|string',

            'nom_temoin1_epoux'      =>'required|string',
            'prenom_temoin1_epoux'      =>'required|string',
            'profession_temoin1_epoux'      =>'required|string',
            'domicile_temoin1_epoux'      =>'required|string',
            'nom_jeune_fille_temoin2_epoux'      =>'required|string',
            'profession_temoin2_epoux'      =>'required|string',
            'domicile_temoin2_epoux'      =>'required|string',

            'nom_temoin1_epouse'      =>'required|string',
            'prenom_temoin1_epouse'      =>'required|string',
            'profession_temoin1_epouse'      =>'required|string',
            'domicile_temoin1_epouse'      =>'required|string',
            'nom_jeune_fille_temoin2_epouse'      =>'required|string',
            'profession_temoin2_epouse'      =>'required|string',
            'domicile_temoin2_epouse'      =>'required|string',

            'date_celebration'  =>'required',
            'lieu_celebration'  =>'required',
            'heure_celebration'  =>'required',
        ]);

        return $validator;
    }

}
