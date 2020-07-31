<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opposition extends Model
{
    protected $fillable = [
        'nom_opp',
        'prenom_opp',
        'qualite_opp',
        'motif_opp',
        'declaration_id',
        'adresse_opp',
        'tel_opp',
    ];

    protected function declaration()
    {
        $this->belongsTo('App\Models\Declaration', 'id', 'declaration_id');
    }

}
