<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
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
