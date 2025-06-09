<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {

        $banners = Banner::all();

        return view('guest-pages/home', compact('banners'));
    }
}
