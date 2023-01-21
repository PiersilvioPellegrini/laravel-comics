<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name("index");

Route::get('/comics', function(){

    // assegno ad una variabile i dati del data base comics da utilizzare in questa pagina 
    $comics = config('dbComics');
    $bluefooter =config('itemsBlueFooter');



    return view("comics.comics", [
        "Comics" => $comics,
        "ItemsList" => $bluefooter
    ]);
})->name('comics');
