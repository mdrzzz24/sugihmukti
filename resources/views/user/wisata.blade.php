@extends('layouts.app')

@section('content')
<div id="paket1" class="py-5 bg-white">
    <div class="container w-75">
      <h2 class="display-6 fw-bold mb-4 text-center">Paket Wisata Desa Sugihmukti</h2>
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="card-body border p-4">
            <div class="row">
              <div class="col-md-5 text-center">
                <img src="{{ asset('images/paket1.jpeg') }}" alt="Wisata Sugihmukti" class="img-fluid rounded mt-5 w-100">
              </div>
              <div class="col-md-7">
                <h3 class="card-title fw-bold text-center mb-5">Heal The Soul Sugihmukti</h3>
                <p class="h4 mb-4 fw-normal">
                  <strong>Pandai Besi - Kebun Kopi/Demplot - Curug Lemah Neneut - Kebun Pertanian - Bukit Sugih Lestari - Peternakan Kambing Etawa - Kedia Kopi<strong>
                </p>
                <p class="h4 mb-4 fw-normal">
                  Rasakan pengalaman menarik untuk merasakan kenyamanan mengelilingi alam asri yang sejuk dengan melakukan aktivitas menarik.
                </p>
                <div class="d-flex justify-content-between align-items-start">
                  <div class="d-flex align-items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-coin me-2" viewBox="0 0 16 16">
                      <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                      <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                    </svg> 
                    <span style="font-size: 1.5em;">Rp 200.000/orang</span>
                  </div>
                  <div>
                    <h4>Include:</h4>
                    <ul class="h4">
                      <li>Antar Jemput ke Meeting Point</li>
                      <li>P3K</li>
                      <li>Guide</li>
                      <li>HTM Objek Wisata</li>
                      <li>Makan + Snack</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Tombol Pesan Sekarang -->
            <div class="text-center mt-2">
              <button type="button" class="btn fw-bold py-2 px-6 rounded-pill" data-bs-toggle="modal" data-bs-target="#pesanModal" style="background-color: #80AF81; border-color: #80AF81; color: white;">
                Pesan Sekarang
              </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="pesanModal" tabindex="-1" aria-labelledby="pesanModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="pesanModalLabel">Pilih Metode Pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Silakan pilih metode pemesanan yang Anda inginkan:</p>
                    <div class="d-grid gap-2">
                      <a href="https://wa.me/628818612351?text=Halo,%20saya%20tertarik%20untuk%20memesan%20Paket%20Wisata%20Desa%20Sugihmukti%20Heal%20The%20Soul%20Sugihmukti." class="btn btn-success">
                        Pesan via WhatsApp
                      </a>
                      <a href="/pesanan" class="btn btn-primary">
                        Isi Formulir Pemesanan
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <section id="paket2" class="py-5 bg-light">
    <div class="container w-75">
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="card-body border p-4">
            <div class="row">
              <div class="col-md-5 text-center">
                <img src="{{ asset('images/paket2.jpeg') }}" alt="Wisata Sugihmukti" class="img-fluid rounded mt-5 w-100">
              </div>
              <div class="col-md-7">
                <h3 class="card-title fw-bold text-center mb-5">Explore Sugihmukti</h3>
                <p class="h4 mb-4 fw-normal">
                  Jangan lewatkan pengalaman menarik untuk merasakan kenyamanan mengelilingi alam asri yang sejuk dengan melakukan aktivitas-aktivitas menarik
                </p>
                <div class="row">
                  <div class="col-md-6 text-center mb-3">
                    <h4 class="fw-bold">Wisata Kebun Strawberry</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-coin me-3" viewBox="0 0 16 16">
                        <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                      </svg> 
                      <span class="fw-normal" style="font-size: 1.5em;">Rp 10.000/orang</span>
                    </div>
                  </div>
                  <div class="col-md-6 text-center mb-3">
                    <h4 class="fw-bold">Camping</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-coin me-3" viewBox="0 0 16 16">
                        <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                      </svg> 
                      <span class="fw-normal" style="font-size: 1.5em;">Rp 50.000/orang</span>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6 text-center">
                    <h4 class="fw-bold">Bird Watch</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-coin me-3" viewBox="0 0 16 16">
                        <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                      </svg> 
                      <span class="fw-normal" style="font-size: 1.5em;">Rp 100.000/orang</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Tombol Pesan Sekarang -->
            <div class="text-center mt-2">
              <button type="button" class="btn fw-bold py-2 px-6 rounded-pill" data-bs-toggle="modal" data-bs-target="#pesanModal" style="background-color: #80AF81; border-color: #80AF81; color: white;">
                Pesan Sekarang
              </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="pesanModal" tabindex="-1" aria-labelledby="pesanModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="pesanModalLabel">Pilih Metode Pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Silakan pilih metode pemesanan yang Anda inginkan:</p>
                    <div class="d-grid gap-2">
                      <a href="https://wa.me/628818612351?text=Halo,%20saya%20tertarik%20untuk%20memesan%20Paket%20Wisata%20Desa%20Sugihmukti%20Heal%20The%20Soul%20Sugihmukti." class="btn btn-success">
                        Pesan via WhatsApp
                      </a>
                      <a href="/pesanan" class="btn btn-primary">
                        Isi Formulir Pemesanan
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="paket3" class="py-5 bg-white">
  <div class="container w-75">
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card-body border p-4">
        <div class="row">
          <div class="col-md-5 text-center">
            <img src="{{ asset('images/paket3.jpeg') }}" alt="Wisata Sugihmukti" class="img-fluid rounded mt-5 w-100">
          </div>
          <div class="col-md-7">
            <h3 class="card-title fw-bold text-center mb-5">Let’s Sippin Coffe in Sugihmukti</h3>
            <p class="h4 mb-4 fw-normal">
              <strong>Kebun Kopi (proses panen dan pasca panen) - Roasting Kopi - Brewing Kopi<strong>
            </p>
            <p class="h4 mb-4 fw-normal">
              Rasakan pengalaman menikmati kopi spesial Desa Sugihmukti sambil melihat langsung proses pembuatannya sekaligus menikmati suasana alam sekitar yang masih asri dan sejuk
            </p>
            <div class="d-flex justify-content-between align-items-start">
              <div class="d-flex align-items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-coin me-2" viewBox="0 0 16 16">
                  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                  <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                </svg> 
                <span style="font-size: 1.5em;">Rp 150.000/orang</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Tombol Pesan Sekarang -->
        <div class="text-center mt-2">
          <button type="button" class="btn fw-bold py-2 px-6 rounded-pill" data-bs-toggle="modal" data-bs-target="#pesanModal" style="background-color: #80AF81; border-color: #80AF81; color: white;">
            Pesan Sekarang
          </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="pesanModal" tabindex="-1" aria-labelledby="pesanModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pesanModalLabel">Pilih Metode Pemesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Silakan pilih metode pemesanan yang Anda inginkan:</p>
                <div class="d-grid gap-2">
                  <a href="https://wa.me/628818612351?text=Halo,%20saya%20tertarik%20untuk%20memesan%20Paket%20Wisata%20Desa%20Sugihmukti%20Heal%20The%20Soul%20Sugihmukti." class="btn btn-success">
                    Pesan via WhatsApp
                  </a>
                  <a href="/pesanan" class="btn btn-primary">
                    Isi Formulir Pemesanan
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>

<section id="paket3" class="py-5 bg-light">
  <div class="container w-75">
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card-body border p-4">
        <div class="row">
          <div class="col-md-5 text-center">
            <img src="{{ asset('images/paket4.jpeg') }}" alt="Wisata Sugihmukti" class="img-fluid rounded mt-5 w-100">
          </div>
          <div class="col-md-7">
            <h3 class="card-title fw-bold text-center mb-5">Family Trip To Sugihmukti</h3>
            <p class="h4 mb-4 fw-normal">
              <strong>Pandai Besi - Bukit Sugih Lestari - Peternakan Kambing Etawa - Kebun Pertanian (Sayuran) dan Buah (Strawberry)<strong>
            </p>
            <p class="h4 mb-4 fw-normal">
              Ayo ajak keluarga anda berlibur ke Desa Sugihmukti untuk merasakan liburan bersama yang penuh dengan pengalaman menarik dan menggembirakan serta mengedukasi anak-anak anda
            </p>
            <div class="d-flex justify-content-between align-items-start">
              <div class="d-flex align-items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-coin me-2" viewBox="0 0 16 16">
                  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                  <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                </svg> 
                <span style="font-size: 1.5em;">Rp 200.000/orang</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Tombol Pesan Sekarang -->
        <div class="text-center mt-2">
          <button type="button" class="btn fw-bold py-2 px-6 rounded-pill" data-bs-toggle="modal" data-bs-target="#pesanModal" style="background-color: #80AF81; border-color: #80AF81; color: white;">
            Pesan Sekarang
          </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="pesanModal" tabindex="-1" aria-labelledby="pesanModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pesanModalLabel">Pilih Metode Pemesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Silakan pilih metode pemesanan yang Anda inginkan:</p>
                <div class="d-grid gap-2">
                  <a href="https://wa.me/628818612351?text=Halo,%20saya%20tertarik%20untuk%20memesan%20Paket%20Wisata%20Desa%20Sugihmukti%20Heal%20The%20Soul%20Sugihmukti." class="btn btn-success">
                    Pesan via WhatsApp
                  </a>
                  <a href="/pesanan" class="btn btn-primary">
                    Isi Formulir Pemesanan
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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