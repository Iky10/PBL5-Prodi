@extends('layouts.landing.index')

@section('content')
<section id="berita-detail" class="berita-section services section m-0 pt-4">
    <div class="container p-0 mt-0">
        <h3 class="fw-bold">
            {{ $berita->title }}
        </h3>
        <p class="m-0 p-0 mb-5">{{ $berita->formatted_date_dfy }}</p>
        <p class="lh-sm m-0 p-0">{!! $berita->description !!}</p>
    </div>
</section>
@endsection
