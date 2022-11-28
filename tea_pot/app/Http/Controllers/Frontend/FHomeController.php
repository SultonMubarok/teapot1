<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class FHomeController extends Controller
{
    //
    public function index()
    {
        $banner = Banner::all();
        return view('frontend.home',compact('banner'));
    }
}
