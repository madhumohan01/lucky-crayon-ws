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

Route::get('/video', function () {
    return redirect()->away("https://www.google.com");
});

Route::get('/tenali1', function () {
    return redirect()->away("https://www.youtube.com/playlist?list=PL0uP6KE3osm5HThdOBd20NiGnTo4dyhes");
});

Route::get('/bluefox', function () {
    return redirect()->away("https://www.youtube.com/watch?v=Ef-zqBLYulM");
});

Route::get('/cagedtiger', function () {
    return redirect()->away("https://www.youtube.com/watch?v=SfbvXq9bdgE");
});

Route::get('/hungrylion', function () {
    return redirect()->away("https://www.youtube.com/watch?v=HiXHQ6J8_MA");
});
