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
    $data = [
        'lists' => config('comics.lists')
    ];

    return view('home', $data);
})-> name('home');

Route::get('/product', function () {
    $data = [
        'series' => config('comics')
    ];

    return view('product', $data);
})-> name('product');

Route::get('/singleproduct/{index}', function ($index) {

        $series = config('comics')[$index];

        // if($index > count($series_total) - 1) {
        //     abort(404);
        // }

        // $series = $series_total[$index];

    return view('singleproduct', compact('series'));
})-> name('singleproduct');