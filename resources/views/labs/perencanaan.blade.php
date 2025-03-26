@extends('layouts.landing.index')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <div class="container mt-5">
        <h1 class="text-center">Lab Tanah dan Air</h1>
        
        <!-- Pindahkan gambar ke dalam container setelah navbar -->
        <div class="text-center mt-3">
            <img src="{{ asset('assets/img/perencanaan.jpg') }}" alt="perencanaan" class="img-fluid">
        </div>

        <p class="mt-4">
            Laboratorium Tanah dan Air digunakan untuk penelitian dan praktikum yang berfokus pada analisis kualitas tanah dan air.
            Berbagai fasilitas tersedia untuk mendukung kegiatan akademik dan penelitian mahasiswa.
        </p>
    </div>

    @include('labs.tempat_perencanaan') {{-- Gunakan @include jika hanya ingin menyertakan kontennya --}}
@endsection
