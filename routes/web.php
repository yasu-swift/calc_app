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
Route::get('/route/hello', function () {
return '<h1>計算アプリ</h1>';
});

Route::get('/calcs/{a}/{b}/{c}', function ($a, $b, $c) {
    return view('message.con', [
        'a' => $a,
        'b' => $b,
        'c' => $c,
    ]);
});



Route::get('calcs/{a}/{b}/{c}', [App\Http\Controllers\CalcController::class, 'con']);

