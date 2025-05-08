<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedSocialController extends Controller
{
    //

    public function index()
    {
        
        // return view('candidatos.index', [
        //     'vacante' => $vacante,
        // ]);

        return view('admin-pages.social');
    }

}
