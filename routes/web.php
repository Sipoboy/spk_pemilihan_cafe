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
route::get('/login', function(){
    return view('auth.login');
})->name('login');
Route::post('/login', function (Request $request) {
    $username = $request->username;
    $password = $request->password;

    // LOGIN SEMENTARA (hardcode)
    if ($username == 'admin' && $password == 'admin') {
        return redirect('/');
    }
    return back()->with('error', 'Username / Password salah');
})->name('login');
