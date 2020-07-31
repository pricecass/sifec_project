<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;

class ResourceManager
{
    public static function getFromDateAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}