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
    return view('layout.base');
})->name('layout-base');

Route::get('/products', function () {
    $comics = config('comics');
    $imagesNav = config('imagesNav');
    return view('guest.products', ['comics' => $comics], ['imagesNav' => $imagesNav]);
})->name('guest-products');


Route::get('/products/{id}', function ($id) {
    $comic = config('comics');
    if(is_numeric($id) && $id >= 0 && $id < count($comic)){
        return view('guest.singleProducts', ['comics' => $comic[$id]]);
    }else {
        abort(404);
    };
})->name('guest-singleProducts');
