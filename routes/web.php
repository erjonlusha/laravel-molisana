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
    $pasta = json_decode(config('datiPasta.pasta'), true);
    return view('welcome', compact('pasta'));
})->name('home');

Route::get('products', function () {
    // dd( json_decode(config('app.pasta'), true) );
    $pasta = json_decode(config('datiPasta.pasta'), true);
    return view('products', compact('pasta'));
})->name('products');

Route::get('products/{id}', function ($id) {
    dd($id);
    $pasta = json_decode(config('datiPasta.pasta'), true);
    $prodotto = $pasta['id'];
    return view('product', compact('prodotto'));
})->name('product');


Route::get('contacts', function () {
    $pasta = json_decode(config('datiPasta.pasta'), true);
    return view('contacts', compact('pasta'));
})->name('contacts');
 