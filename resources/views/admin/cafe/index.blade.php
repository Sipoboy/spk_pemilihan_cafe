@extends('layouts.admin')

@section('content')

<div class="page-title">
    <h1>DATA CAFE</h1>
</div>

<div class="action-bar">
    <input type="text" class="search-input" placeholder="Cari">
    <a href="#" class="btn-add">Tambah</a>
</div>

<div class="data-table-container">
    <table class="data-table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Cafe</th>
                <th>Suasana</th>
                <th>Luas Parkiran</th>
                <th>Harga Menu</th>
                <th>Kecepatan Wifi</th>
                <th>Jarak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Mbah Djie</td>
                <td>Sangat Nyaman</td>
                <td>31m-50m</td>
                <td>10k-15k</td>
                <td>5mbps-10mbps</td>
                <td>1km-2km</td>
                <td>
                    <a href="#" class="btn-action btn-edit">edit</a>
                    <form action="#" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-action btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Mbah Djie</td>
                <td>Sangat Nyaman</td>
                <td>31m-50m</td>
                <td>10k-15k</td>
                <td>5mbps-10mbps</td>
                <td>1km-2km</td>
                <td>
                    <a href="#" class="btn-action btn-edit">edit</a>
                    <form action="#" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-action btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Mbah Djie</td>
                <td>Sangat Nyaman</td>
                <td>31m-50m</td>
                <td>10k-15k</td>
                <td>5mbps-10mbps</td>
                <td>1km-2km</td>
                <td>
                    <a href="#" class="btn-action btn-edit">edit</a>
                    <form action="#" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-action btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="pagination">
    <a href="#" class="page-item active">1</a>
    <a href="#" class="page-item">2</a>
    <a href="#" class="page-item">3</a>
    <a href="#" class="page-item">4</a>
</div>

@endsection
