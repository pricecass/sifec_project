<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Date;


class Declaration extends Model
{
    protected $fillable = [
    	'nom_epoux',
        'prenom_epoux',
        'date_naiss_epoux',
        'lieu_naiss_epoux',
        'date_delivrance_acte_naiss_epoux',
        'acte_naiss_epoux',
        'adresse_epoux',
        'profession_epoux',
        'date_naiss_epoux',
        'nationalite_epoux',
        'situation_matrimoniale_epoux',
        'parent1_epoux',
        'parent2_epoux',
        'nom_temoin1_epoux',
        'prenom_temoin1_epoux',
        'profession_temoin1_epoux',
        'domicile_temoin1_epoux',
        'nom_jeune_fille_temoin2_epoux',
        'profession_temoin2_epoux',
        'domicile_temoin2_epoux',

        'nom_epouse',
        'prenom_epouse',
        'date_naiss_epouse',
        'lieu_naiss_epouse',
        'date_delivrance_acte_naiss_epouse',
        'acte_naiss_epouse',
        'adresse_epouse',
        'profession_epouse',
        'date_naiss_epouse',
        'nationalite_epouse',
        'situation_matrimoniale_epouse',
        'parent1_epouse',
        'parent2_epouse',
        'nom_temoin1_epouse',
        'prenom_temoin1_epouse',
        'profession_temoin1_epouse',
        'domicile_temoin1_epouse',
        'nom_jeune_fille_temoin2_epouse',
        'profession_temoin2_epouse',
        'domicile_temoin2_epouse',
        'date_celebration',
        'lieu_celebration',
        'centre_id',
    ];

    protected $dates = [
        'date_naiss_epoux'=>'timestamp:Y/m/d',
        'date_delivrance_acte_naiss_epoux'=>'timestamp:Y/m/d',
        'date_naiss_epouse'=>'timestamp:Y/m/d',
        'date_delivrance_acte_naiss_epouse'=>'timestamp:Y/m/d',
        'date_celebration'=>'timestamp:Y/m/d',
        'created_at'=>'timestamp:Y/m/d',
    ];

    protected function centre()
    {
        $this->belongsTo('Centre');
    }

    protected function oppositions()
    {
        $this->hasMany('App\Models\Opposition', 'declaration_id', 'id');
    }

}
