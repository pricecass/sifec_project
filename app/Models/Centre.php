<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{

    protected $guarded=[];


    public function users()
    {
        return $this->hasMany('User');
    }

    public function declarations()
    {
        return $this->hasMany('Declaration');
    }

    public function registres()
    {
        return $this->hasMany('Registre', 'centre_id', 'id');
    }

    public function responsable()
    {
        return $this->belongsTo('User');
    }
}
