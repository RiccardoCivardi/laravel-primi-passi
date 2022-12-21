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

    $title = 'HELLO LARAVEL!';
    $link_text = 'VAI ALLA PAGINA DI ATTERRAGGIO';

    return view('home', compact('title','link_text'));
});

Route::get('/landing', function () {

    $title = 'Landing page LARAVEL';
    $link_text = 'TORNA ALLA HOME';

    return view('landing', compact('title','link_text'));
});
