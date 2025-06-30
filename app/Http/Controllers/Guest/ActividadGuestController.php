<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadGuestController extends Controller
{
    public function index()
    {

        $actividades = Actividad::with('medios')->get();

        return view('guest-pages/actividades', compact('actividades'));
    }

}
