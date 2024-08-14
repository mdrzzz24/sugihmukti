@extends('layouts.app')

@section('content')
<div class="container w-75">
    <h2 class="display-6 fw-bold mt-5 mb-4 text-center">Produk Desa Sugihmukti</h2>
    <div class="row mt-5 align-items-center">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/kesehatan.png') }}" alt="Kesehatan Sugihmukti" class="img-fluid rounded mb-5">
        </div>
        <div class="col-md-8">
            <p class="h2 mb-4 fw-bold">Produk Herbal dan Kesehatan</p>
            <p class="h3 mb-4 fw-bold">Teh Herbal</p>
            <p class="h3 mb-4 fw-normal">Desa ini juga memproduksi berbagai jenis teh herbal yang dibuat dari tanaman obat lokal.</p>
            <p class="h3 mb-4 fw-bold">Minyak Atsiri</p>
            <p class="h3 mb-4 fw-normal">Minyak atsiri yang dihasilkan dari tanaman aromatik lokal seperti serai, kayu putih, dan lavender.</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="py-3 d-flex align-items-center" style = "background-color: #80AF81">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="me-3 ms-5" style="width: 120px; height: 110px;">
    <div>
        <h2 class="h4 text-white fw-bold">DESA SUGIHMUKTI</h2>
        <p class="text-white mb-1">Kec. Pasirjambu</p>
        <p class="text-white mb-1">Kabupaten Bandung</p>
        <p class="text-white mb-1">Jawa Barat</p>
    </div>
</footer>
@endsection