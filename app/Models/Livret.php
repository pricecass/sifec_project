<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livret extends Model
{

    public function mariage()
    {
        return $this->belongsTo('Mariage');
    }
}
