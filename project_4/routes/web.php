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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('show_name', function(){
    return 'text';
});

Route::get('show_blade_city/{city}', function(string $city){
    return View('city', ['cityName' => $city ]);
});

Route::get('/pages/{page}', function(string $page){
    $pages = [
        'home' => 'Strona domowa',
        'contact' => 'bob.bobson@o2.pl',
        'address' => 'Pozań, ul. Długa 12/3',
    ];
    return $pages[$page];
});

Route::get('/views/{view}', function(string $view){
    $views = [
        'city' => 'city',
        'name' => 'profile.name',
        'strona_glowna' => 'welcome',
    ];
    return View($views[$view]);
});