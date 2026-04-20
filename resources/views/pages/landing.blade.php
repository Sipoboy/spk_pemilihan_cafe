@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container hero-box">
            <div class="hero-text">
                <h1>Temukan Cafe Terbaik<br>di Bondowoso</h1>
                <p>
                    Temukan cafe terbaik di Bondowoso sesuai kebutuhanmu dengan
                    rekomendasi cerdas berdasarkan suasana, harga, jarak,
                    luas parkiran, dan kecepatan wifi
                </p>
            </div>

            <div class="hero-image">
                <img src="{{ asset('images/hero-cafe.png') }}" alt="Hero Cafe">
            </div>
        </div>
    </section>

    <section class="ranking-section">
        <div class="container">
            <div class="ranking-card">
                <div class="ranking-title">
                    <img src="{{ asset('images/medal.png') }}" alt="Medal">
                    <span>Top 3 cafe terbaik</span>
                </div>

                <div class="cafe-list">
                    <div class="cafe-item">
                        <div class="rank-badge rank-1">1</div>
                        <div class="cafe-thumb">
                            <img src="{{ asset('images/anaga.png') }}" alt="Anaga Coffee Space">
                        </div>
                        <div class="cafe-info">
                            <h3>Anaga Coffee Space</h3>
                            <p>Suasana nyaman, wifi cepat, harga mahal, parkiran lumayan luas, jaraknya dekat</p>
                        </div>
                    </div>

                    <div class="cafe-item">
                        <div class="rank-badge rank-2">2</div>
                        <div class="cafe-thumb">
                            <img src="{{ asset('images/nyok.png') }}" alt="Nyok Coffee">
                        </div>
                        <div class="cafe-info">
                            <h3>Nyok Coffee</h3>
                            <p>Suasana nyaman, wifi lemot, harga murah, parkiran lumayan luas, jaraknya dekat</p>
                        </div>
                    </div>

                    <div class="cafe-item">
                        <div class="rank-badge rank-3">3</div>
                        <div class="cafe-thumb">
                            <img src="{{ asset('images/mbah-djie.png') }}" alt="Mbah Djie Coffee">
                        </div>
                        <div class="cafe-info">
                            <h3>Mbah Djie Coffee</h3>
                            <p>Suasana nyaman, wifi lemot, harga murah, parkiran agak sempit, jaraknya agak jauh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
