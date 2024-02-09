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
    return view('pages.welcome');
})->name('home');

Route::get('/contacteeeeee', function () {
    $nm="Cujba Boris";
    $mail="Cujba@gmail.com";

    return view('pages.contacts',['nm' => $nm],['mail' => $mail]);
})->name('contact');

Route::get('/about', function () {
    $grupe=["w-2041", "w-2042", "w-2043", "W-2044", "W-2045"];

    $name = "John Doe";

    $title = $name;

    return view('pages.about', compact('title', 'grupe'));
})->name('about');


