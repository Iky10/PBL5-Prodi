@extends('layouts.landing.index')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <div class="container mt-5">
        <h1 class="text-center">Lab Persemaian</h1>
        
        <!-- Pindahkan gambar ke dalam container setelah navbar -->
        <div class="text-center mt-3">
            <img src="{{ asset('assets/img/persemaian.jpg') }}" alt="Lab Tanah dan Air" class="img-fluid">
        </div>

        <p class="mt-4">Persemaian di Politeknik Pertanian Negeri Samarinda (Politani Samarinda) memiliki beberapa fungsi utama, antara lain:</p>
        
        <div class="mt-4 space-y-4">
            <div class="mb-4"><strong>1. Tempat Pembibitan.</strong> <br> Sebagai lokasi pembibitan tanaman pertanian, kehutanan, dan hortikultura sebelum dipindahkan ke lahan utama.</div>
            <div class="mb-4"><strong>2. Sarana Praktikum dan Penelitian.</strong> <br> Digunakan oleh mahasiswa dan dosen untuk kegiatan praktikum, penelitian, dan pengembangan ilmu pertanian.</div>
            <div class="mb-4"><strong>3. Penyedia Bibit Berkualitas.</strong> <br> Berperan dalam menyediakan bibit unggul untuk program penghijauan, perkebunan, atau pertanian komersial.</div>
            <div class="mb-4"><strong>4. Konservasi Tanaman.</strong> <br> Membantu pelestarian jenis tanaman tertentu, khususnya yang memiliki nilai ekonomi atau ekologis tinggi.</div>
        </div>
    </div>

    @include('labs.tempat_persemaian') {{-- Gunakan @include jika hanya ingin menyertakan kontennya --}}
@endsection
