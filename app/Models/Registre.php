<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Date;

class Registre extends Model
{
    protected $fillable = [
        'reference',
        'closed_at',
        'opened',
        'centre_id',
    ];

    protected $dates = [
        'closed_at',
        'opened_at',
        'created_at',
    ];

    public function centre()
    {
        return $this->belongsTo('Centre', 'id', 'centre_id');
    }

    public function mariages()
    {
        return $this->hasMany('Mariage');
    }
}
