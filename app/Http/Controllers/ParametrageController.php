<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParametrageController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
            ->join('centres','users.centre_id','=','centres.id')
            ->join('roles','users.role_id','=', 'roles.id')
            ->select('users.*', 'centres.designation', 'roles.title')
            ->get();

        $roles = DB::table('roles')->select('roles.*')->get();

        $centres = DB::table('centres')->select('centres.*')->get();

        return view('/admin.parametrage', [
            'centres'=>$centres,
            'users'=>$users,
            'roles'=>$roles
        ]);
    }

}
