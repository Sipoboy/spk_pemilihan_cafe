<?php

namespace App\Http\Controllers;

class LandingPageController extends Controller
{
    public function index() {
        return view('pages.landing', [
            'tilte' => 'Dasboard'
        ]);
    }

    public function datacafe() {
        return view('pages.data-cafe', [
            'title' => 'Data Cafe'
        ]);
    }

    public function hasilspk() {
        return view('pages.hasil-spk', [
            'title' => 'Rangking Cafe'
        ]);
    }
}
