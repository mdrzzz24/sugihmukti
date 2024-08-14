@extends('layouts.app')

@section('content')
<div class="container w-75">
    <h2 class="display-6 fw-bold mt-5 mb-4 text-center">Produk Desa Sugihmukti</h2>
    <div class="row mt-5 align-items-center">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/kerajinan.png') }}" alt="Kerajinan Sugihmukti" class="img-fluid rounded mb-5">
        </div>
        <div class="col-md-8">
            <p class="h2 mb-4 fw-bold">Produk Kerajinan Tangan</p>
            <p class="h3 mb-4 fw-bold">Anyaman Bambu</p>
            <p class="h3 mb-4 fw-normal">Produk anyaman bambu seperti keranjang, tikar, dan hiasan dinding yang dibuat oleh para perajin lokal.</p>
            <p class="h3 mb-4 fw-bold">Kerajinan Kayu</p>
            <p class="h3 mb-4 fw-normal">Beberapa pengrajin menghasilkan berbagai produk kayu seperti mainan tradisional, peralatan dapur, dan dekorasi rumah.</p>
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