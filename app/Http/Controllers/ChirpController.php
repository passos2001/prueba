<?php

namespace App\Http\Controllers;

use Illuminate\View\View; // Esta línea se añade para importar la clase View

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View // La función ahora devuelve una View
    {
        return view('chirps', [ // Devuelve la vista 'chirps.blade.php'
            // Puedes pasar datos a la vista aquí si es necesario
        ]);
    }
}