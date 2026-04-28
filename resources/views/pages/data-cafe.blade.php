@extends('layouts.app')

@section('content')
<section class="data-cafe-section">
    <div class="container">
        <div class="data-header">
            <div>
                <span class="mini-badge">Database Cafe</span>
                <h1>Data Cafe Bondowoso</h1>
                <p>Daftar alternatif cafe yang digunakan sebagai bahan perhitungan rekomendasi SPK.</p>
            </div>

            <a href="{{ url('/') }}" class="btn-secondary">Kembali ke Dashboard</a>
        </div>
           <div class="search-box">
    <input type="text" id="searchCafe" placeholder="Cari nama cafe..." onkeyup="searchCafe()">
</div>
        <div class="summary-grid">
            <div class="summary-card">
                <h3>5</h3>
                <p>Total Cafe</p>
            </div>
            <div class="summary-card">
                <h3>5</h3>
                <p>Kriteria</p>
            </div>
            <div class="summary-card">
                <h3>WP</h3>
                <p>Metode SPK</p>
            </div>
        </div>

        <div class="cafe-card-grid">
            <div class="data-cafe-card cafe-data-item">
                <div class="cafe-card-number">01</div>
                <h3>Nyok Coffee</h3>
                <div class="tag-row">
                    <span>Nyaman</span>
                    <span>10k–15k</span>
                    <span>1km–2km</span>
                </div>
                <ul>
                    <li><b>Luas Parkiran:</b> 21m–30m</li>
                    <li><b>Kecepatan Wifi:</b> 5mbps–10mbps</li>
                    <li><b>Jarak:</b> 1km–2km</li>
                </ul>
            </div>

            <div class="data-cafe-card cafe-data-item">
                <div class="cafe-card-number">02</div>
                <h3>Anaga Coffee Space</h3>
                <div class="tag-row">
                    <span>Nyaman</span>
                    <span>10k–15k</span>
                    <span>1km–2km</span>
                </div>
                <ul>
                    <li><b>Luas Parkiran:</b> 21m–30m</li>
                    <li><b>Kecepatan Wifi:</b> 5mbps–10mbps</li>
                    <li><b>Jarak:</b> 1km–2km</li>
                </ul>
            </div>

            <div class="data-cafe-card cafe-data-item">
                <div class="cafe-card-number">03</div>
                <h3>Mbah Djie Coffee</h3>
                <div class="tag-row">
                    <span>Sangat Nyaman</span>
                    <span>10k–15k</span>
                    <span>1km–2km</span>
                </div>
                <ul>
                    <li><b>Luas Parkiran:</b> 31m–50m</li>
                    <li><b>Kecepatan Wifi:</b> 5mbps–10mbps</li>
                    <li><b>Jarak:</b> 1km–2km</li>
                </ul>
            </div>

            <div class="data-cafe-card cafe-data-item">
                <div class="cafe-card-number">04</div>
                <h3>Tentrem</h3>
                <div class="tag-row">
                    <span>Sangat Nyaman</span>
                    <span>10k–20k</span>
                    <span>1km</span>
                </div>
                <ul>
                    <li><b>Luas Parkiran:</b> 12m–20m</li>
                    <li><b>Kecepatan Wifi:</b> 5mbps–10mbps</li>
                    <li><b>Jarak:</b> 1km</li>
                </ul>
            </div>

            <div class="data-cafe-card cafe-data-item">
                <div class="cafe-card-number">05</div>
                <h3>Yisoen</h3>
                <div class="tag-row">
                    <span>Nyaman</span>
                    <span>10k–25k</span>
                    <span>1km–2km</span>
                </div>
                <ul>
                    <li><b>Luas Parkiran:</b> 21m–30m</li>
                    <li><b>Kecepatan Wifi:</b> 5mbps–10mbps</li>
                    <li><b>Jarak:</b> 1km–2km</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
    function searchCafe() {
        const input = document.getElementById('searchCafe').value.toLowerCase();
        const cards = document.querySelectorAll('.cafe-data-item');

        cards.forEach(card => {
            const text = card.innerText.toLowerCase();

            if (text.includes(input)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>
@endsection