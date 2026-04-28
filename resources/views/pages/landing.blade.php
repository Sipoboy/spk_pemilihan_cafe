@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container hero-box">
            <div class="hero-text">
                <span class="hero-badge">SPK Rekomendasi Cafe</span>
                <h1>Temukan Cafe Terbaik<br>di Bondowoso</h1>
                <p>
                    Temukan cafe terbaik sesuai kebutuhanmu dengan rekomendasi cerdas
                    berdasarkan suasana, harga, jarak, luas parkiran, dan kecepatan wifi.
                </p>

                <div class="hero-actions">
                    <a href="#fitur-spk" class="btn-primary">Mulai Rekomendasi</a>
                    <a href="{{ url('/data-cafe') }}" class="btn-secondary">Lihat Data Cafe</a>
                </div>
            </div>

            <div class="hero-image">
                <img src="{{ asset('images/hero-cafe.png') }}" alt="Hero Cafe">
            </div>
        </div>
    </section>

    <section id="fitur-spk" class="spk-section">
        <div class="container">
            <div class="spk-card">
                <div class="section-title" id="spkTitle">
                    <span class="mini-badge">5 Aspek Penilaian</span>
                    <h2>Rekomendasi Cafe Berdasarkan Preferensi</h2>
                    <p>
                        Pilih setiap aspek sesuai kebutuhanmu. Setelah semua aspek dipilih,
                        sistem akan menampilkan rekomendasi cafe yang sesuai.
                    </p>
                </div>

                <div class="criteria-grid" id="criteriaGrid">
                    <button class="criteria-item" onclick="selectCriteria(this, 'Suasana')">
                        ☕ <span>Suasana</span>
                        <small>Pilih suasana</small>
                    </button>

                    <button class="criteria-item" onclick="selectCriteria(this, 'Harga Menu')">
                        💰 <span>Harga Menu</span>
                        <small>Pilih budget</small>
                    </button>

                    <button class="criteria-item" onclick="selectCriteria(this, 'Jarak')">
                        📍 <span>Jarak</span>
                        <small>Pilih jarak</small>
                    </button>

                    <button class="criteria-item" onclick="selectCriteria(this, 'Luas Parkiran')">
                        🅿️ <span>Luas Parkiran</span>
                        <small>Pilih parkiran</small>
                    </button>

                    <button class="criteria-item" onclick="selectCriteria(this, 'Kecepatan Wifi')">
                        📶 <span>Kecepatan Wifi</span>
                        <small>Pilih wifi</small>
                    </button>
                </div>

                <div class="modal-overlay" id="optionModal" style="display:none;">
    <div class="option-modal">
        <button class="modal-close" onclick="closeOptionModal()">×</button>

        <span class="mini-badge">Pilih Preferensi</span>
        <h3 id="optionTitle">Pilih Kriteria</h3>
        <p class="modal-desc">Pilih salah satu opsi yang paling sesuai dengan kebutuhanmu.</p>

        <div class="option-list" id="optionList"></div>
    </div>
</div>

                <div class="recommendation-result" id="recommendationResult" style="display:none;">
                    <div class="result-header">
                        <span class="mini-badge">Hasil Rekomendasi</span>
                        <h2>Cafe yang Cocok Untuk Kamu</h2>
                        <p>
                            Berdasarkan preferensi yang kamu pilih, berikut rekomendasi cafe terbaik.
                        </p>
                    </div>

                    <div class="cafe-list">
                        <div class="cafe-item">
                            <div class="rank-badge rank-1">1</div>
                            <div class="cafe-thumb">
                                <img src="{{ asset('images/nyok.png') }}" alt="Nyok Coffee">
                            </div>
                            <div class="cafe-info">
                                <h3>Nyok Coffee</h3>
                                <p>
                                    Cocok untuk kamu yang mencari cafe nyaman, harga murah,
                                    jarak dekat, dan parkiran cukup luas.
                                </p>
                            </div>
                        </div>

                        <div class="cafe-item">
                            <div class="rank-badge rank-2">2</div>
                            <div class="cafe-thumb">
                                <img src="{{ asset('images/anaga.png') }}" alt="Anaga Coffee Space">
                            </div>
                            <div class="cafe-info">
                                <h3>Anaga Coffee Space</h3>
                                <p>
                                    Alternatif rekomendasi dengan suasana nyaman dan fasilitas wifi
                                    yang lebih baik.
                                </p>
                            </div>
                        </div>

                        <div class="cafe-item">
                            <div class="rank-badge rank-3">3</div>
                            <div class="cafe-thumb">
                                <img src="{{ asset('images/mbah-djie.png') }}" alt="Mbah Djie Coffee">
                            </div>
                            <div class="cafe-info">
                                <h3>Mbah Djie Coffee</h3>
                                <p>
                                    Rekomendasi lain yang masih sesuai dengan beberapa preferensi
                                    pilihan kamu.
                                </p>
                            </div>
                        </div>
                    </div>

                    <button class="btn-secondary reset-btn" onclick="resetRecommendation()">
                        Pilih Ulang Kriteria
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="ranking-section">
        <div class="container">
            <div class="ranking-card">
                <div class="ranking-title">
                    <img src="{{ asset('images/medal.png') }}" alt="Medal">
                    <span>Top 3 Cafe Terbaik</span>
                </div>

                <div class="cafe-list">
                    <div class="cafe-item">
                        <div class="rank-badge rank-1">1</div>
                        <div class="cafe-thumb">
                            <img src="{{ asset('images/anaga.png') }}" alt="Anaga Coffee Space">
                        </div>
                        <div class="cafe-info">
                            <h3>Anaga Coffee Space</h3>
                            <p>Suasana nyaman, wifi cepat, harga mahal, parkiran lumayan luas, jaraknya dekat.</p>
                        </div>
                    </div>

                    <div class="cafe-item">
                        <div class="rank-badge rank-2">2</div>
                        <div class="cafe-thumb">
                            <img src="{{ asset('images/nyok.png') }}" alt="Nyok Coffee">
                        </div>
                        <div class="cafe-info">
                            <h3>Nyok Coffee</h3>
                            <p>Suasana nyaman, wifi lemot, harga murah, parkiran lumayan luas, jaraknya dekat.</p>
                        </div>
                    </div>

                    <div class="cafe-item">
                        <div class="rank-badge rank-3">3</div>
                        <div class="cafe-thumb">
                            <img src="{{ asset('images/mbah-djie.png') }}" alt="Mbah Djie Coffee">
                        </div>
                        <div class="cafe-info">
                            <h3>Mbah Djie Coffee</h3>
                            <p>Suasana nyaman, wifi lemot, harga murah, parkiran agak sempit, jaraknya agak jauh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    const selectedCriteria = {};

    const criteriaOptions = {
        'Suasana': ['Cukup Nyaman', 'Nyaman', 'Sangat Nyaman'],
        'Harga Menu': ['Murah', 'Sedang', 'Mahal'],
        'Jarak': ['Dekat', 'Sedang', 'Jauh'],
        'Luas Parkiran': ['Sempit', 'Sedang', 'Luas'],
        'Kecepatan Wifi': ['Lambat', 'Sedang', 'Cepat']
    };

    let activeButton = null;

    function selectCriteria(button, criteria) {
        activeButton = button;

        const optionModal = document.getElementById('optionModal');
        const optionTitle = document.getElementById('optionTitle');
        const optionList = document.getElementById('optionList');

        optionTitle.innerText = 'Pilih ' + criteria;
        optionList.innerHTML = '';

        criteriaOptions[criteria].forEach(option => {
            const optionButton = document.createElement('button');
            optionButton.className = 'option-button';
            optionButton.innerText = option;

            optionButton.onclick = function () {
                selectedCriteria[criteria] = option;

                activeButton.classList.add('selected');
                activeButton.querySelector('small').innerText = option;

                closeOptionModal();
                checkAllSelected();
            };

            optionList.appendChild(optionButton);
        });

        optionModal.style.display = 'flex';
    }

    function closeOptionModal() {
        document.getElementById('optionModal').style.display = 'none';
    }

    function checkAllSelected() {
        if (Object.keys(selectedCriteria).length === 5) {
            document.getElementById('criteriaGrid').style.display = 'none';
            document.getElementById('recommendationResult').style.display = 'block';

            document.getElementById('recommendationResult').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }

    function resetRecommendation() {
        Object.keys(selectedCriteria).forEach(key => delete selectedCriteria[key]);

        document.querySelectorAll('.criteria-item').forEach(item => {
            item.classList.remove('selected');

            const label = item.querySelector('span').innerText;

            if (label === 'Suasana') item.querySelector('small').innerText = 'Pilih suasana';
            if (label === 'Harga Menu') item.querySelector('small').innerText = 'Pilih budget';
            if (label === 'Jarak') item.querySelector('small').innerText = 'Pilih jarak';
            if (label === 'Luas Parkiran') item.querySelector('small').innerText = 'Pilih parkiran';
            if (label === 'Kecepatan Wifi') item.querySelector('small').innerText = 'Pilih wifi';
        });

        document.getElementById('criteriaGrid').style.display = 'grid';
        document.getElementById('recommendationResult').style.display = 'none';
    }
</script>
@endsection