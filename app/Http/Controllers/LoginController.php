<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Graphs;
use App\Models\Utilities;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use DB;

class LoginController extends Controller
{
    use Utilities;
    use Graphs;

    protected $redirectTo = '/home';
    protected $guard = 'web';

    public function getLogin()
    {
        if (Auth::guard($this->guard)->check()) {
            return redirect()->route('/');
        }

        return view('login');
    }

    public function postLogin(Request $request)
    {
        $auth = Auth::guard($this->guard)->attempt([
            'username'=>$request->username,
            'password'=>$request->password,
            'active'=>1
        ]);

        // Si le user est connecté on le ramene sur la page appropriée
        // Sinon on revient sur la page d'authentification
        if ($auth) {

            $centre = $this->getCentre();
            $nb_decl_enr = $this->declarationsSaved();
            $total_decl = $this->totalDeclarations();
            $nb_decl_pub = $this->declarationsPublished();
            $nb_mar_enr = $this->totalMarriages();

            return view('/home',
                compact('centre', 'nb_decl_enr', 'total_decl', 'nb_decl_pub', 'nb_mar_enr'));

        }

        return redirect()->route('/');
    }

    public function getLogout()
    {
        Auth::guard('web')->logout();

        return redirect()->route('/');
    }

    public function declarationsSaved()
    {
        $nb = DB::table('declarations')
            ->select(DB::raw('count(*)'))
            ->where('status', '=', 'Enregistré')
            ->get()->first();

        return $nb;
    }

    public function totalDeclarations()
    {
        $nb_decl = DB::table('declarations')->count();

        return $nb_decl;
    }

    public function declarationsPublished()
    {
        $nb_decl_pub = DB::table('declarations')
            ->select(DB::raw('count(*)'))
            ->where('status', '=', 'Publié')
            ->get()->first();

        return $nb_decl_pub;
    }

    public function totalMarriages()
    {
         return DB::table('mariages')->count();
    }

}
