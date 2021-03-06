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
        'students' => [
            [
                'name' => 'Vitantonio',
                'surname' => 'Paparella',
                'age' => 24
            ],
            [
                'name' => 'Morgan',
                'surname' => 'Tarquini',
                'age' => 29
            ],
            [
                'name' => 'Carlo',
                'surname' => 'Lollobrigida',
                'age' => 22
            ],
            [
                'name' => 'Sara',
                'surname' => 'Genuardi',
                'age' => 25
            ],
        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/join-us', function () {
    return view('join-us');
})->name('join-us');
