<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;

class BBannerController extends Controller
{
    //
    public function index()
    {
        $banner = Banner::all();
        return view('backend.banner.index',compact('banner'));
    }
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('backend.banner.edit',compact('banner'));
    }
	public function update($id, Request $request)
    {
		$banner = Banner::find($id);
        if($request->hasfile('image_banner'))
        {
            $file = $request->file('image_banner');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('assets/images/', $filename);
            $banner->image_banner = $filename;
        }
        $banner->save();

        return redirect()->route('banner.index')->with('success','Data Telah Berhasil Ditambah.');
    }
}
