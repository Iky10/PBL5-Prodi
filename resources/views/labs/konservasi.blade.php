@extends('layouts.landing.index')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <div class="container mt-5">
        <h1 class="text-center">JUDUL FOTO 4</h1>
        
        <!-- Pindahkan gambar ke dalam container setelah navbar -->
        <div class="text-center mt-3">
            <img src="{{ asset('assets/img/.jpg') }}" alt="FOTO 4" class="img-fluid">
        </div>

        <p class="mt-4">
            ISI
        </p>

        <div class="mt-4 space-y-4">
            <div class="mb-4"><strong>ISI</strong> <br>ISI</div>
        </div>
    </div>

    @include('labs.tempat_konservasi') {{-- Gunakan @include jika hanya ingin menyertakan kontennya --}}
@endsection
