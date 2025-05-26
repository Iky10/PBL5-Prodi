@extends('layouts.landing.index')

@section('content')
<section id="berita-lainnya" class="berita-section services section m-0 pt-4">
    <div class="container section-title pb-5" data-aos="fade-up">
        <h2 class="m-0">Map</h2>
    </div>
    <div class="container p-0 mt-0">
        <div class="row g-4 m-0 p-0">
            @if ($beritas->isNotEmpty())
                @foreach ($beritas as $berita)
                    <!-- Berita Item -->
                    <div class="col-lg-6 col-md-12 mx-auto" data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('berita-detail', $berita->id) }}" class="position-relative text-decoration-none text-black">  
                            <div class="service-item position-relative d-flex flex-row text-decoration-none gap-3">
                                <div class="row m-0 p-0">
                                    <div class="col-12 col-md-3 mb-3 mb-md-0 m-0 p-0">
                                        <div class="img-container">
                                            <img src="{{ Storage::url($berita->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-9 text-start m-0 p-0 ps-0 ps-md-3">
                                        <h5 class="title fw-bold lh-sm mb-2 m-0 p-0">{{ $berita->title }}</h5>
                                        <p class="date lh-sm mb-2 m-0 p-0">{{ $berita->formatted_date_dfy }}</p>
                                        <p class="description m-0 p-0">{{ \Illuminate\Support\Str::limit(strip_tags($berita->description), 200) }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <!-- Tampilkan Map jika tidak ada berita -->
                <div class="col-lg-4 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative text-decoration-none">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d282267.292705637!2d116.96264006639653!3d-0.5360356999999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df68080334dac99%3A0x5327a22a4028b267!2sPoliteknik%20Pertanian%20Negeri%20Samarinda!5e1!3m2!1sid!2sid!4v1748159015338!5m2!1sid!2sid" 
                            width="100%" 
                            height="300" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
