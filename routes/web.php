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

Route::view('/', 'home',
    [
        'title' => 'Home',
        'content' => 'Hello World',
        'nav' => [
            'Home' => '/',
            'About' => '/about',
            'Contact' => '/contacts'
        ]
    ]
);

Route::view('/about', 'about');
Route::view('/contacts', 'contacts');
