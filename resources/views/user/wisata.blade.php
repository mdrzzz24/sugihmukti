@extends('layouts.app')

@section('content')
<div class="container w-75">
    <h2 class="display-6 fw-bold mt-5 mb-4 text-center">Paket Wisata Desa Sugihmukti</h2>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('images/paket1.jpeg') }}" alt="Wisata" class="img-fluid rounded ms-3 me-3 mt-3">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection