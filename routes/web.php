<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PjeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pje/consulta', [PjeController::class, 'showForm'])->name('show.form');
Route::post('/pje/consultar-processo', [PjeController::class, 'consultarProcesso'])->name('consultar.processo');

