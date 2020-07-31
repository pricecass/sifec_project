<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next )
    {
        $roles = $this->getRequiredRoleForRoute($request->route());

        if( $request->user()->hasRole($roles) || !$roles ) {
            return $next($request);
        }
        return redirect()->route('no-permission');
    }

    public function getRequiredRoleForRoute ( $route )
    {
        $action = $route->getAction();
        return isset($action['$roles']) ? $action['$roles'] : null;
    }
}
