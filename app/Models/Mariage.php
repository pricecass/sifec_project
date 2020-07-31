<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mariage extends Model
{
    protected $fillable=[
        'declaration_id',
        'registre_id',
        'user_id',
        'numero_acte',
        'option_matrimoniale',
        'regime_matrimonial',
        'montant_dot',
        'beneficiaire_dot',
        'qualite_beneficiaire_dot',
        'coutume_presidant_union',
        'stipulation_particuliaire',
    ];

    public function user()
    {
        $this->belongsTo('User');
    }

    public function registre()
    {
        return $this->belongsTo('Registre');
    }

    public function livret()
    {
        $this->hasOne('Livret');
    }
}
