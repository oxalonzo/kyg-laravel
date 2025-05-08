<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //para mostrar el dashboard

    public function index()
    {
        return view('admin-pages.dashboard');
    }
}
