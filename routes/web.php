<?php
use App\Http\Controllers\SongsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FavController;
use App\Http\Controllers\ListsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;

Route::get('/', function () {
    return view('songs.view');
})->middleware('auth');


Route::post('/authenticate', [LoginController::class,'authenticate'])->name("authenticate");
Route::post('/validar-registro', [LoginController::class,'register'])->name("validar-registro");
Route::get('/logout', [LoginController::class,'logout'])->name("logout");
Route::post('/validar-login', [LoginController::class,'login'])->name("validar-login");
Route::view('/register', 'songs.register');
Route::view('/login', 'songs.login')->name("login");
Route::view('/config', 'songs.config');

Route::resource('songs', SongsController::class)->middleware('auth');
Route::resource('favorites', FavController::class)->middleware('auth');
Route::resource('perfil', PerfilController::class)->middleware('auth');
Route::post('/subirSong', [SongsController::class,'subir'])->name("subirSong")->middleware('auth');
Route::get('/subirSongs', [SongsController::class,'subirSongs'])->name("subirSongs")->middleware('auth');
Route::get('/subirFav', [FavController::class,'subirFav'])->name("subirFav")->middleware('auth');
Route::get('/subirFavf', [FavController::class,'subirFavf'])->name("subirFavf")->middleware('auth');
Route::resource('listas', ListsController::class)->middleware('auth');
Route::get('/createList', [ListsController::class,'createList'])->name("createList")->middleware('auth');
Route::post('/subirList', [ListsController::class,'subirList'])->name("subirList")->middleware('auth');
//Route::get('/actualizarU', [PerfilController::class,'actualizarU'])->name("actualizarU")->middleware('auth');



use App\Http\Controllers\Prueba1Controller;

Route::resource('prueba1', App\Http\Controllers\Prueba1Controller::class)->middleware('auth');
Route::get('/subirprueba1', [App\Http\Controllers\Prueba1Controller::class,'subirprueba1'])->name('subirprueba1')->middleware('auth');
Route::delete('/deleteprueba1/{id}', [App\Http\Controllers\Prueba1Controller::class,'deleteprueba1'])->name('deleteprueba1')->middleware('auth');


use App\Http\Controllers\UnoController;

Route::resource('uno', App\Http\Controllers\UnoController::class)->middleware('auth');
Route::get('/subiruno', [App\Http\Controllers\UnoController::class,'subiruno'])->name('subiruno')->middleware('auth');
Route::delete('/deleteuno/{id}', [App\Http\Controllers\UnoController::class,'deleteuno'])->name('deleteuno')->middleware('auth');


use App\Http\Controllers\DosController;

Route::resource('dos', App\Http\Controllers\DosController::class)->middleware('auth');
Route::get('/subirdos', [App\Http\Controllers\DosController::class,'subirdos'])->name('subirdos')->middleware('auth');
Route::delete('/deletedos/{id}', [App\Http\Controllers\DosController::class,'deletedos'])->name('deletedos')->middleware('auth');


use App\Http\Controllers\TresController;

Route::resource('tres', App\Http\Controllers\TresController::class)->middleware('auth');
Route::get('/subirtres', [App\Http\Controllers\TresController::class,'subirtres'])->name('subirtres')->middleware('auth');
Route::delete('/deletetres/{id}', [App\Http\Controllers\TresController::class,'deletetres'])->name('deletetres')->middleware('auth');


use App\Http\Controllers\CuatroController;

Route::resource('cuatro', App\Http\Controllers\CuatroController::class)->middleware('auth');
Route::get('/subircuatro', [App\Http\Controllers\CuatroController::class,'subircuatro'])->name('subircuatro')->middleware('auth');
Route::delete('/deletecuatro/{id}', [App\Http\Controllers\CuatroController::class,'deletecuatro'])->name('deletecuatro')->middleware('auth');


use App\Http\Controllers\CincoController;

Route::resource('cinco', App\Http\Controllers\CincoController::class)->middleware('auth');
Route::get('/subircinco', [App\Http\Controllers\CincoController::class,'subircinco'])->name('subircinco')->middleware('auth');
Route::delete('/deletecinco/{id}', [App\Http\Controllers\CincoController::class,'deletecinco'])->name('deletecinco')->middleware('auth');


use App\Http\Controllers\SeisController;

Route::resource('seis', App\Http\Controllers\SeisController::class)->middleware('auth');
Route::get('/subirseis', [App\Http\Controllers\SeisController::class,'subirseis'])->name('subirseis')->middleware('auth');
Route::delete('/deleteseis/{id}', [App\Http\Controllers\SeisController::class,'deleteseis'])->name('deleteseis')->middleware('auth');


use App\Http\Controllers\SieteController;

Route::resource('siete', App\Http\Controllers\SieteController::class)->middleware('auth');
Route::get('/subirsiete', [App\Http\Controllers\SieteController::class,'subirsiete'])->name('subirsiete')->middleware('auth');
Route::delete('/deletesiete/{id}', [App\Http\Controllers\SieteController::class,'deletesiete'])->name('deletesiete')->middleware('auth');


use App\Http\Controllers\OchoController;

Route::resource('Ocho', App\Http\Controllers\OchoController::class)->middleware('auth');
Route::get('/subirOcho', [App\Http\Controllers\OchoController::class,'subirOcho'])->name('subirOcho')->middleware('auth');
Route::delete('/deleteOcho/{id}', [App\Http\Controllers\OchoController::class,'deleteOcho'])->name('deleteOcho')->middleware('auth');


use App\Http\Controllers\HolaController;

Route::resource('hola', App\Http\Controllers\HolaController::class)->middleware('auth');
Route::get('/subirhola', [App\Http\Controllers\HolaController::class,'subirhola'])->name('subirhola')->middleware('auth');
Route::delete('/deletehola/{id}', [App\Http\Controllers\HolaController::class,'deletehola'])->name('deletehola')->middleware('auth');


use App\Http\Controllers\PruebaController;

Route::resource('prueba', App\Http\Controllers\PruebaController::class)->middleware('auth');
Route::get('/subirprueba', [App\Http\Controllers\PruebaController::class,'subirprueba'])->name('subirprueba')->middleware('auth');
Route::delete('/deleteprueba/{id}', [App\Http\Controllers\PruebaController::class,'deleteprueba'])->name('deleteprueba')->middleware('auth');


use App\Http\Controllers\ExamenController;

Route::resource('examen', App\Http\Controllers\ExamenController::class)->middleware('auth');
Route::get('/subirexamen', [App\Http\Controllers\ExamenController::class,'subirexamen'])->name('subirexamen')->middleware('auth');
Route::delete('/deleteexamen/{id}', [App\Http\Controllers\ExamenController::class,'deleteexamen'])->name('deleteexamen')->middleware('auth');
