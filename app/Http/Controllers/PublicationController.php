<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function showPubList()
    {
        return view('/mariages.publication');
    }
}
