@extends('layouts.landing.index')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <div class="container mt-5">
        <h1 class="text-center">Lab Silfikutur</h1>
        
        <!-- Pindahkan gambar ke dalam container setelah navbar -->
        <div class="text-center mt-3">
            <img src="{{ asset('assets/img/silfikutur.jpg') }}" alt="Lab Tanah dan Air" class="img-fluid">
        </div>

        <p class="mt-4">
            Laboratorium Tanah dan Air digunakan untuk penelitian dan praktikum yang berfokus pada analisis kualitas tanah dan air.
            Berbagai fasilitas tersedia untuk mendukung kegiatan akademik dan penelitian mahasiswa.
        </p>
    </div>

    @include('labs.tempat_silfikutur') {{-- Gunakan @include jika hanya ingin menyertakan kontennya --}}
@endsection
