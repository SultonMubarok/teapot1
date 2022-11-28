<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class AdminController extends Controller
{
    //
    public function index(){
		$banner = Banner::all();
		return view('backend.dashboard',compact('banner'));
	}

}
