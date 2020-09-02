<?php

use App\NegocioDigital;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $arrayOrden = [];
    // $negocios = NegocioDigital::all();
    $negocios = NegocioDigital::orderBy('orden', 'asc')->get();
    $data = array('orden' => $arrayOrden, 'negocios' => $negocios);
    return view('welcome', compact('data'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('negocios', 'NegocioDigitalController');

// Para hacer accesibles las imágenes de la carpeta STORAGE
Route::group(['middleware' => ['web']], function () {
    Route::get('storage/app/public/imagenes/tu-negocio-digital/{filename}', function ($filename) {
        return Image::make(storage_path() . '/app/public/imagenes/tu-negocio-digital/' . $filename)->response();
    });
});
