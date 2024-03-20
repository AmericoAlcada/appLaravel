<?php

use App\Http\Controllers\controllerFutebolistas;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view("/futebolistas", "futebolistas");

// Route::get('/futebolistas', function () {
//         return "Olá";
//     });

// Route::view("/futebolistas", "futebolistas", ["name"=>"Messi"]);

// Route::get("/futebolistas/{id?}/{name?}", function ($id = null, $name = null)
// {
//     return view("futebolistas", ["idFutebolista"=>$id, "nomeFutebolista"=>$name]);
// })->where(['id' => '[0-9]+']);

// Route::get('/futebolistas', [controllerFutebolistas::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// })->name("casaDoChapéu-index");

Route::prefix("futebolistas")->group(function()
{
    Route::get("/", [controllerFutebolistas::class, 'index'])->name('futebolistas.index');
    Route::get("/create", [controllerFutebolistas::class, 'create'])->name('futebolistas.create');
    Route::post("/", [controllerFutebolistas::class, 'store'])->name('futebolistas.store');
    Route::get("/{id}/edit", [controllerFutebolistas::class, 'edit'])->where('id', '[0-9]+')->name('futebolistas.edit');
    Route::put("/{id}", [controllerFutebolistas::class, 'update'])->where('id', '[0-9]+')->name('futebolistas.update');
    Route::delete("/{id}", [controllerFutebolistas::class, 'destroy'])->where('id', '[0-9]+')->name('futebolistas.destroy');
    Route::get("/{id}/consult", [controllerFutebolistas::class, 'consult'])->where('id', '[0-9]+')->name('futebolistas.consult');
});

Route::fallback(function(){
    return "Erro!";
});