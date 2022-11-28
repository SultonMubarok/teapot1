<?php

namespace App\Http\Controllers\Backend;
use App\Services\PerhitunganService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Alternatif;
use App\Models\Perhitungan;
use Illuminate\Support\Facades\DB;


class BPerhitunganController extends Controller
{
    //
    public function index(Request $request){

        $kriteria = Kriteria::all();
        $alternatif = Alternatif::all();
        $bobot1= Kriteria::all('bobot');
        $sumbot = Kriteria::sum('bobot');
        //$step1 = $bobot1/$sumbot;
        /*
        foreach($alternatif as $a){
            $vi[]=[
                'vis'=>($a->rarity**($k->bobot/$sumbot))*($a->role**($k->bobot/$sumbot))*($a->weapon**($k->bobot/$sumbot))*($a->element**($k->bobot/$sumbot)),
            ];
        }
        */
        //$bobotra=DB::table('kriteria')->select('bobot','10')->get();
        //$bobotro=Kriteria::all('bobot')->where('id',1);
        //$step1=$bobot1/$sumbot;
        //$step2 = Alternatif::all()^$step1;
        //$step3 = Kriteria::all('bobot')/$sumbot;
         
		return view('backend.spk.perhitungan.index',compact('kriteria','alternatif','sumbot'));
	}
}
