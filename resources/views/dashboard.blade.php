@extends('templates.dashboard-guest')

@section('title', $title ?? "Dashboard")

@section('content')
    <div class="row">
        <div class="col-md my-3">
            <h1>Sistem Informasi Hasil Produksi Panen</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md my-3">
            <img src="{{ asset('img/logo dkp.png') }}" alt="" class="img-fluid">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8">
            <h5>Sistem informasi ini merupaka aplikasi pemetaan tempat hasil panen di wilayah Kota Banjarmasin. Aplikasi ini memuat informasi dan lokasi dari tempat hasil panen pertanian di Banjarmasin.</h5>
        </div>
    </div>
@endsection