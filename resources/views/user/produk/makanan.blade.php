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
<footer class="py-4" style="background-color: #80AF81">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 text-center text-md-start mb-3 mb-md-0">
          <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 120px;">
        </div>
        <div class="col-md-5 mb-3 mb-md-0">
          <h2 class="h5 text-white fw-bold">DESA SUGIHMUKTI</h2>
          <p class="text-white mb-1">Kec. Pasirjambu, Kabupaten Bandung</p>
          <p class="text-white mb-1">Jawa Barat, Indonesia</p>
        </div>
        <div class="col-md-4">
          <h2 class="h5 text-white fw-bold">CONTACT US</h2>
          <p class="text-white mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt me-2" viewBox="0 0 16 16">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>Jalan Kacakaca Nomor 120, Desa Sugihmukti</p>
          <p class="text-white mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone me-2" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
            </svg>5927233</p>
          <p class="text-white mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope me-2" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
            </svg>sugihmuktikab.bdg@gmail.com</p>
        </div>
      </div>
    </div>
  </footer>
@endsection