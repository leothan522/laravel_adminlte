<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SearchController extends Controller
{
    public function showNavbarSearchResults(Request $request)
    {
        // Check that the search keyword is present.

        if (! $request->filled('searchVal')) {
            return back();
        }

        // Get the search keyword.

        $keyword = $request->input('searchVal');

        //obtiene ruta anterior
        $route = redirect()->getUrlGenerator()->previous();

        //chequeamos las rutas
        if (strpos($route, '/dashboard/usuarios') !== false){
            verSweetAlert2("Resultados encontrados", 'toast');
            return redirect()->route('usuarios.index', $keyword);
        }

        //en caso de no encontrar ninguna ruta
        verSweetAlert2("Opcion no encontrada", 'toast');
        return back();

        // TODO: Create the search logic and return adequate response (maybe a view
        // with the results).
        // ...
    }
}
