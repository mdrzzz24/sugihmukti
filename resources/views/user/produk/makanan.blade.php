@extends('layouts.app')

@section('content')
<div class="container w-75">
    <h2 class="display-6 fw-bold mt-5 mb-4 text-center">Produk Desa Sugihmukti</h2>
    <div class="row mt-5 align-items-center">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/kesehatan.png') }}" alt="Makanan Sugihmukti" class="img-fluid rounded mb-5">
        </div>
        <div class="col-md-8">
            <p class="h2 mb-4 fw-bold">Produk Makanan dan Minuman</p>
            <p class="h3 mb-4 fw-bold">Kue Tradisional</p>
            <p class="h3 mb-4 fw-normal">Berbagai kue tradisional seperti kue putu, onde-onde, dan klepon yang dibuat oleh ibu-ibu di desa.</p>
            <p class="h3 mb-4 fw-bold">Jamu Tradisional</p>
            <p class="h3 mb-4 fw-normal">Jamu tradisional yang terbuat dari bahan alami dan diproses secara tradisional untuk menjaga kesehatan.</p>
        </div>
    </div>
</div>

<section id="makanan" class= "bg-white">
    <div class="container w-75">
        <div class="row mt-5 align-items-center">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/olahan-pangan.png') }}" alt="Makanan Sugihmukti" class="img-fluid rounded mb-5 mt-5">
            </div>
            <div class="col-md-8">
                <p class="h3 mb-4 fw-bold">Keripik Sayuran</p>
                <p class="h3 mb-4 fw-normal">Keripik yang terbuat dari berbagai jenis sayuran segar seperti bayam, wortel, dan kentang.</p>
                <p class="h3 mb-4 fw-bold">Selai Stroberi</p>
                <p class="h3 mb-4 fw-normal">Mengingat desa ini juga menghasilkan stroberi, selai stroberi buatan lokal menjadi salah satu produk andalan.</p>
            </div>
        </div>
    </div>
</section>


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