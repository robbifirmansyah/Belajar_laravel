<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about',[
        'nama' => 'Rizky',
        'umur' => '20'
    ]);
});

Route::get('/service', function () {
    return view('service',[
        'services' => 'We are a full-service digital agency that builds immersive user experience. 
        Our team creates an exceptional visualization and thought-out functionality.'
    ]);
});

Route::get('/about', [PostController::class, 'index']);



