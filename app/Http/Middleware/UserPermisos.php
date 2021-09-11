<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

class UserPermisos
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (leerJson(auth()->user()->permisos, Route::currentRouteName()) == true || auth()->user()->role == 100){
            return $next($request);
        }else{
            verSweetAlert2('No tienes Permisos Suficientes', 'toast', null, 'error');
            return redirect()->route('dashboard');
        }

    }
}
