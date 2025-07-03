<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use Illuminate\Http\Request;

class serviciosInfoController extends Controller
{
    //

     public function index()
    {

        $servicios = Servicio::all();

        return view('guest-pages/servicios', compact('servicios'));
    }
}
