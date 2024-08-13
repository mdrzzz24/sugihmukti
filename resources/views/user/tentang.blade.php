@extends('layouts.app')

@section('content')
<div class="container w-75">
    <h2 class="display-6 fw-bold mt-5 mb-4 text-center">Tentang Desa Sugihmukti</h2>
    <div class="row mt-5 align-items-center">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/tea.png') }}" alt="Tentang Sugihmukti" class="img-fluid rounded mb-4">
        </div>
        <div class="col-md-8">
            <p class="h3 mb-4 fw-normal">Desa Sugihmukti, terletak di Kecamatan Pasirjambu, Kabupaten Bandung, Jawa Barat, adalah sebuah desa yang dikenal dengan keindahan alamnya yang memukau dan udara sejuk karena posisinya di dataran tinggi. Daya tarik utama desa ini adalah wisata alamnya yang meliputi kebun teh yang luas, hutan pinus yang asri, 
                dan air terjun yang menawan. Selain itu, agrowisata juga menjadi daya tarik tersendiri di Sugihmukti, di mana wisatawan dapat belajar tentang proses penamaan dan pengolahan hasil pertanian langsung dari para petani.
                Keindahan alam yang disuguhkan oleh Desa Sugihmukti mkembuatnya menjadi tujuan favorit bagi wisatawan yang mencari ketenangan dan suasana alami yang menyegarkan.</p>
        </div>
    </div>
</div>
@endsection