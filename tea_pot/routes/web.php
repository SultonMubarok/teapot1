<?php

use Illuminate\Support\Facades\Route;

//http://127.0.0.1:8000/test-koneksi-database//
Route::get('/test-koneksi-database', function() {
	try {
		\DB::connection()->getPdo();

		echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});


//Admin/backend
Route::get('/', function () {
    return view('home');
});
Auth::routes();
Route::group(['namespace'=>'Backend'], function () {
    Route::prefix('admin')->group(function () {
		Route::resource('/dashboard', '\App\Http\Controllers\AdminController');
		Route::resource('/banner', '\App\Http\Controllers\Backend\BBannerController');
		Route::resource('/karakter', '\App\Http\Controllers\Backend\BCharController');
        Route::resource('/kriteria', '\App\Http\Controllers\Backend\BKriteriaController');
		Route::resource('/alternatif', '\App\Http\Controllers\Backend\BAlternatifController');
		Route::resource('/perhitungan', '\App\Http\Controllers\Backend\BPerhitunganController');
    });
});
//import alternatif
Route::post('/alternatif/import_excel', [App\Http\Controllers\Backend\BAlternatifController::class, 'import_excel'])->name('alternatif.import_excel');;
Route::post('/alternatif/clear', [App\Http\Controllers\Backend\BAlternatifController::class, 'clear'])->name('alternatif.clear');

//import karakter
Route::post('/karakter/import_excel', [App\Http\Controllers\Backend\BCharController::class, 'import_excel'])->name('karakter.import_excel');;
Route::post('/karakter/clear', [App\Http\Controllers\Backend\BCharController::class, 'clear'])->name('karakter.clear');

//Frontend
Route::group(['namespace'=>'Frontend'], function () {
    Route::prefix('user')->group(function () {
		Route::resource('/home', '\App\Http\Controllers\Frontend\FHomeController');
		Route::resource('/char', '\App\Http\Controllers\Frontend\FCharController');
		Route::resource('/spk', '\App\Http\Controllers\Frontend\FSpkController');
		Route::resource('/hasil', '\App\Http\Controllers\Hasil');
    });
});

