<nav class="navbar">
        <div class="container navbar-content">
            <div class="logo">
                <img src="{{ asset('images/logo-five.png') }}" alt="Logo FIVE">
            </div>

            <div class="nav-menu">
                <a href="{{ route('landing.index') }}">Dashboard</a>
                <a href="{{ route('cafe.index') }}">Data Cafe</a>
                <a href="{{ route('spk.index') }}">Hasil Spk</a>
            </div>
        </div>
    </nav>
