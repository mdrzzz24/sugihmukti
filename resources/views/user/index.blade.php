@extends('layouts.app')

@section('content')
    <div id="beranda" class="position-relative vh-100 bg-cover bg-center" style="background-image: url('{{asset('images/waterfall.png')}}');">
        <div class="position-absolute top-0 bottom-0 start-0 end-0 bg-dark opacity-50"></div>
        <div class="container w-75 position-relative z-10 h-100 d-flex flex-column justify-content-center align-items-center text-white text-center">
            <h1 class="display-1 fw-bold mb-3">
                SELAMAT DATANG<br>
                DI DESA SUGIHMUKTI
            </h1>
            <p class="h3 mb-3">Kab. Bandung</p>
            <a href="#tentang" class="btn btn-secondary fw-bold py-2 px-8 rounded-pill">
                Lihat Selengkapnya
            </a>
        </div>
    </div>

    <section id="tentang" class="py-5 bg-white">
        <div class="container w-75">
            <h2 class="display-6 fw-bold mb-4 text-center">Tentang Desa Sugihmukti</h2>
            <div class="row mt-5 align-items-center">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/tea.png') }}" alt="Tentang Sugihmukti" class="img-fluid rounded mb-4">
                </div>
                <div class="col-md-8">
                    <p class="h3 mb-4 fw-normal">Desa Sugihmukti, terletak di Kecamatan Pasirjambu, Kabupaten Bandung, Jawa Barat, adalah sebuah desa yang dikenal dengan keindahan alamnya yang memukau dan udara sejuk karena posisinya di dataran tinggi. Daya tarik utama desa ini adalah wisata alamnya yang meliputi kebun teh yang luas, hutan pinus yang asri, dan air terjun yang menawan.</p>
                    <a href="/tentang" class="btn fw-bold py-2 px-6 rounded-pill" style="background-color: #80AF81; border-color: #80AF81; color: white;">
                        Lanjut Membaca
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang-wisata" class="py-5 bg-light">
        <div class="container w-75">
            <h2 class="display-6 fw-bold mb-4 text-center">Wisata Desa Sugihmukti</h2>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                  <div class="card">
                    <img src="{{ asset('images/paket1.jpeg') }}" alt="Wisata" class="img-fluid rounded ms-3 me-3 mt-3">
                    <div class="card-body">
                      <a href="/wisata" class="btn fw-bold py-2 px-6 rounded-pill mt-4" style="background-color: #80AF81; border-color: #80AF81; color: white;">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                    <img src="{{ asset('images/paket2.jpeg') }}" alt="Wisata" class="img-fluid rounded ms-3 me-3 mt-3">
                    <div class="card-body">
                      <a href="/wisata" class="btn fw-bold py-2 px-6 rounded-pill mt-4 " style="background-color: #80AF81; border-color: #80AF81; color: white;">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                    <img src="{{ asset('images/paket3.jpeg') }}" alt="Wisata" class="img-fluid rounded ms-3 me-3 mt-3">
                    <div class="card-body">
                        <a href="/wisata" class="btn fw-bold py-2 px-6 rounded-pill mt-4" style="background-color: #80AF81; border-color: #80AF81; color: white;">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                    <img src="{{ asset('images/paket4.jpeg') }}" alt="Wisata" class="img-fluid rounded ms-3 me-3 mt-3">
                    <div class="card-body">
                        <a href="/wisata" class="btn fw-bold py-2 px-6 rounded-pill mt-4" style="background-color: #80AF81; border-color: #80AF81; color: white;">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>

    <section id="tentang-produk" class="py-5 bg-white">
        <div class="container w-75">
            <h2 class="display-6 fw-bold mb-4 text-center">Produk Desa Sugihmukti</h2>
            <div class="row mt-5 align-items-center">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/kerajinan.png') }}" alt="Produk Sugihmukti" class="img-fluid rounded mb-4 ">
                </div>
                <div class="col-md-8">
                    <p class="h3 mb-4 fw-normal">Desa Sugihmukti di Kabupaten Bandung memiliki berbagai produk Usaha Mikro, Kecil, dan Menengah (UMKM) yang dihasilkan oleh masyarakat setempat. Produk-produk ini mencerminkan kekayaan alam dan budaya lokal. Berikut adalah beberapa produk UMKM yang terkenal dari Desa Sugihmukti:</p>
                    <ul class="h3 fw-normal list-decimal">
                        <li>Produk Pertanian</li>
                        <li>Kerajinan Tangan</li>
                    </ul>
                    <a href="/pertanian" class="btn fw-bold py-2 px-6 rounded-pill mt-4" style="background-color: #80AF81; border-color: #80AF81; color: white;">
                        Lihat Lainnya
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang-berita" class= "bg-light">
        <div class="container py-5 w-75">
            <div class="d-flex align-items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-newspaper me-3" viewBox="0 0 16 16">
                  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
                  <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
                </svg>
                <h1 class="mb-0">Berita Desa</h1>
            </div>

            <div class="mb-4">
                <button class="btn fw-normal py-2 px-6 rounded-pill mb-2 mt-4" style="background-color: white; border-color: #80AF81; color: #80AF81;">Terbaru</button>
                <button class="btn fw-normal py-2 px-6 rounded-pill mb-2 mt-4" style="background-color: white; border-color: #80AF81; color: #80AF81;">Berita Desa</button>
                <button class="btn fw-normal py-2 px-6 rounded-pill mb-2 mt-4" style="background-color: white; border-color: #80AF81; color: #80AF81;">Agenda Desa</button>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('images/berita 1.png') }}" alt="Berita1" class="img-fluid rounded ms-3 me-3 mt-3">
                    <div class="card-body">
                      <h5 class="card-title">Program Penanganan Sampah untuk menjaga lingkungan agar tetap asri di wilayah Desa Sugihmukti</h5>
                      <p class="card-text text-muted small d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-1" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z"/>
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                          </svg> 24 Mei 2024
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person ms-3 me-1" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                          </svg> Admin
                      </p>
                      <p class="card-text" style="max-height: 6em; overflow: hidden; text-overflow: ellipsis; white-space: normal;">Pengeloaan Sampah diwilayah Desa Sugihmukti dengan metode bank sampah, untuk memicu masyarakat sadar akan pengeloaan sampah........ </p>
                      <a href="#" class="text-success">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('images/berita 2.png') }}" alt="Berita2" class="img-fluid rounded ms-3 me-3 mt-3">
                    <div class="card-body">
                      <h5 class="card-title">TP-PKK Desa Sugihmukti Mengikuti Lomba Nasi Tumpeng Dalam Rangka Hari Jadi Kab.bandung Ke-383</h5>
                      <p class="card-text text-muted small d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-1" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z"/>
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                          </svg> 24 Mei 2024
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person ms-3 me-1" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                          </svg> Admin
                      </p>
                      <p class="card-text" style="max-height: 6em; overflow: hidden; text-overflow: ellipsis; white-space: normal;">Ibu TP-PKK Desa sugihmukti Mengikuti Lomba Pembuatan Nasi Tumpeng Di kecamatan Pasirjambu Kab.Bandung. untuk memeriahkan Hari Jadi Kab.Bandung yang ke 383...... </p>
                      <a href="#" class="text-success">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('images/berita 3.png') }}" alt="Berita3" class="img-fluid rounded ms-3 me-3 mt-3">
                    <div class="card-body">
                      <h5 class="card-title">Kepala Desa Sugihmukti Mengikuti Upacara Hari jadi Kabupaten Bandung ke 383</h5>
                      <p class="card-text text-muted small d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-1" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z"/>
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                          </svg> 24 Mei 2024
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person ms-3 me-1" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                          </svg> Admin
                      </p>
                      <p class="card-text" style="max-height: 6em; overflow: hidden; text-overflow: ellipsis; white-space: normal;">Kepala Desa Sugihmukti menghadiri kegiatan apel Di Kantor kecamatan Pasirjambu memperingati hari jadi kabupaten Bandung yang ke 383....... </p>
                      <a href="#" class="text-success">Selengkapnya</a>
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
