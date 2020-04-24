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
    return view('welcome');
});

use Illuminate\Support\Str;

Route::get('/string', function () {
    $texto = ' super duper framework Laravel 6.x super';
    $result = Str::of($texto)->trim()
        ->beforeLast('super')
        ->replace('6.x', '7.x')
        ->after('super');
    dd($result);
});
