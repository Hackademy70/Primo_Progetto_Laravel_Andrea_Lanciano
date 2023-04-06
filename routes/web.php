<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $links = 
    [
        "Home",
        "Destinazioni",
        "Contattaci"
    ];
    return view('welcome', ["links" => $links]);
});

Route::get('/contattaci', function () {
    return view('contattaci');
});

Route::get('/conoscici', function () {
    return view('conoscici');
});