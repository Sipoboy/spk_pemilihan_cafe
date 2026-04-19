<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Cafe</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f3f3f3;
            color: #222;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Navbar */
        .navbar {
            background: #fff;
            border-bottom: 2px solid #d9d9d9;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 28px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 800;
            font-size: 26px;
        }

        .logo img {
            height: 60px;
            width: auto;
        }

        .nav-menu {
            display: flex;
            gap: 40px;
            font-size: 20px;
            font-weight: 700;
        }

        .nav-menu a:hover {
            color: #7a5230;
        }

        /* Hero */
        .hero {
            padding: 60px 20px 30px;
        }

        .hero-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
            min-height: 340px;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-size: 54px;
            line-height: 1.15;
            color: #7a5230;
            margin-bottom: 22px;
            font-weight: 800;
        }

        .hero-text p {
            font-size: 28px;
            line-height: 1.35;
            color: #7a5230;
            max-width: 760px;
            font-weight: 700;
        }

        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image img {
            max-width: 100%;
            width: 520px;
        }

        /* Section top 3 */
        .ranking-section {
            padding: 10px 20px 40px;
        }

        .ranking-card {
            background: #f7f7f7;
            border: 2px solid #d7d7d7;
            border-radius: 32px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.12);
            padding: 22px 28px 18px;
        }

        .ranking-title {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 16px;
        }

        .ranking-title img {
            width: 46px;
            height: 46px;
        }

        .cafe-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .cafe-item {
            background: #e9e6e6;
            border-radius: 16px;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .rank-badge {
            min-width: 52px;
            height: 52px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
            font-weight: 800;
            color: #fff;
        }

        .rank-1 { background: #f2dd2f; color: #fff; }
        .rank-2 { background: #bdbdbd; }
        .rank-3 { background: #db8b2c; }

        .cafe-thumb img {
            width: 90px;
            height: 70px;
            object-fit: cover;
            border-radius: 10px;
        }

        .cafe-info h3 {
            font-size: 22px;
            margin-bottom: 6px;
            font-weight: 800;
        }

        .cafe-info p {
            font-size: 16px;
            color: #222;
            line-height: 1.4;
        }

        @media (max-width: 992px) {
            .hero-box {
                flex-direction: column;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 40px;
            }

            .hero-text p {
                font-size: 22px;
                margin: 0 auto;
            }

            .nav-menu {
                gap: 18px;
                font-size: 16px;
            }
        }

        @media (max-width: 768px) {
            .navbar-content {
                flex-direction: column;
                gap: 16px;
            }

            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
            }

            .cafe-item {
                flex-wrap: wrap;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container navbar-content">
            <div class="logo">
                <img src="{{ asset('images/logo-five.png') }}" alt="Logo FIVE">
            </div>

            <div class="nav-menu">
                <a href="#">Dashboard</a>
                <a href="#">Data Cafe</a>
                <a href="#">Ranking Cafe</a>
            </div>
        </div>
    </nav>

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
</body>
</html>
