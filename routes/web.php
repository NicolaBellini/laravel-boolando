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



    return view('home');
})->name('home');

Route::get('/Prodotti', function () {
    $products= config('product');

    $newProducts = [];

        foreach ($products as $product) {
        $newProduct = $product;
        $newProduct['badges'][] = [
            'type' => '',
            'value' => '',
        ];
        $newProducts[] = $newProduct;
    }


    return view('product', compact('products'));
})->name('product');
