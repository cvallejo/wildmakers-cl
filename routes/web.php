<?php

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

$url_base = 'https://wildmakers.com';

Route::get('/', function () use ($url_base) {
    return redirect($url_base);
});
Route::get('/{cualquier_cosa}', function () use ($url_base) {
    return redirect($url_base);
});