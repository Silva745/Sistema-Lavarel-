<?php


use App\http\Controllers\pasta\arquivoController;
use App\http\Controllers\admin\formController;


use App\http\Controllers\testando\segundoController;
use Illuminate\Support\Facades\Route;

// Route::get('/nomedarota', function () {
//     return view('Pasta/arquivo');
// });

Route::post('/formulario', [formController::class, 'guardar']) -> name('formulario.guardar');


Route::get('/formulario/criar', [formController::class, 'criar'])->name('formulario.criar');


Route::get('/formulario', [formController::class, 'index'])->name('formulario.index');


Route::get('/nomedarota', [arquivoController::class, 'metodo']);

Route::get('/segunda', [segundoController::class, 'views']);

Route::get('/', function () {
    return view('welcome');
});
