@extends('layouts.app')

@section('content')
<section class="ranking-section">
    <div class="container">
        <div class="ranking-card">

            <div class="ranking-title">
                <span>Hasil SPK</span>
            </div>

            <div style="overflow-x:auto;">
                <table class="cafe-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Cafe</th>
                            <th>Hasil Perhitungan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Anaga Coffee Space</td>
                            <td>0,11133</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Nyok Coffee</td>
                            <td>0,10245</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mbah Djie Coffee</td>
                            <td>0,09876</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection
