<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Red_Social;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {

        $banners = Banner::all();
        $posts = Red_Social::all();

        return view('guest-pages/home', compact('banners', 'posts'));
    }




    


}
