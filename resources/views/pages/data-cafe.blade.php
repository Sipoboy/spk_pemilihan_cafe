@extends('layouts.app')

@section('content')
<section class="ranking-section">
    <div class="container">
        <div class="ranking-card">

            <div class="ranking-title">
                <span>Data Cafe</span>
            </div>

            <div style="overflow-x:auto;">
                <table class="cafe-table">

                    {{-- HEADER --}}
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Cafe</th>
                            <th>Suasana</th>
                            <th>Luas Parkiran</th>
                            <th>Harga Menu</th>
                            <th>Kecepatan Wifi</th>
                            <th>Jarak</th>
                        </tr>
                    </thead>

                    {{-- DATA --}}
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nyok Coffee</td>
                            <td>Nyaman</td>
                            <td>21m–30m</td>
                            <td>10k–15k</td>
                            <td>5mbps–10mbps</td>
                            <td>1km–2km</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Anaga Coffee Space</td>
                            <td>Nyaman</td>
                            <td>21m–30m</td>
                            <td>10k–15k</td>
                            <td>5mbps–10mbps</td>
                            <td>1km–2km</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Mbah Djie Coffee</td>
                            <td>Sangat Nyaman</td>
                            <td>31m–50m</td>
                            <td>10k–15k</td>
                            <td>5mbps–10mbps</td>
                            <td>1km–2km</td>
                        </tr>
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</section>
@endsection
