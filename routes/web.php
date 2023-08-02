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
    $data = 'first string in laravel';
    $array = [
        'key1' => 'value1',
        'key2' => 'value2',
        'key3' => 'value3',
    ];
    return view('home', compact('data', 'array'));
})->name('home');
Route::get('/link', function () {
    $data = 'first string in laravel';
    $array = [
        'key1' => 'value1',
        'key2' => 'value2',
        'key3' => 'value3',
    ];
    return view('link', compact('data', 'array'));
})->name('link');
