<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing', ['title' => 'Dashboard']);
});

Route::get('/data-cafe',function () {
    return view('pages.data-cafe', ['title' => 'Data Cafe']);
});

route::get('/hasil-spk', function(){
    return view('pages.hasil-spk', ['title' => 'Rangking Cafe']);
});
