<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Nuestra_Historia;
use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    
     public function index()
    {

        $historias = Nuestra_Historia::all();

        return view('guest-pages/nosotros', compact('historias'));
    }


}
