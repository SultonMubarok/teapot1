<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alternatif;

class FCharController extends Controller
{
    public function index()
    {
      $alternatif = Alternatif::all();
      return view('frontend.char.index', ['alternatif' => $alternatif]);
    }
    public function edit($id)
    {
        $alternatif = Alternatif::find($id);
        return view('frontend.char.detail',compact('alternatif'));
    }
    public function update($id, Request $request)
    {
      $karakter = karakter::find($id);
      $karakter->name = $request->name;
      $karakter->rarity = $request->rarity;
      $karakter->role = $request->role;
      $karakter->weapon = $request->weapon;
      $karakter->element = $request->element;
      $karakter->save();

      return redirect()->route('frontend.char.index');
  }
}