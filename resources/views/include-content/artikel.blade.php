@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | Artikel')
@section('menuArtikel', 'active')
@section('content')

    {{-- agenda --}}
    <div class="container">
        <section id="speakers">
            <div class="section-title" data-aos="fade-up">
                <h2>HIMTI</h2>
                <p>Artikel</p>
            </div>
            <div class="col-12 text-center pb-2">
                <p>Beberapa Artikel dari Kami:</p>
            </div>
            <div class="row">
                @forelse ($artikels as $artikel)
                    <div class="col-lg-4 col-md-4">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('storage/' . $artikel->image) }}" alt="Speaker 1" class="img-fluid">
                            <div class="details">
                                <h3><a href="{{ route('detailArtikel', $artikel->id) }}">{{ $artikel->tittle }}</a></h3>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4 class="text-center">Cooming Soon</h4>
                @endforelse

        </section>
        <br>

        <section class="customer-feedback" id="feedback-section">
            <div class="section-title" data-aos="fade-up">
                <h2>HIMTI</h2>
                <p>Partnership</p>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme grid-margin">
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/permikomnas.png') }}" width="89" height="89"
                                    alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Perhimpunan Mahasiswa Informatika Dan Komputer Nasional</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">PERMIKOMNAS</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/bangkukelas_ig-02.png') }}" width="89"
                                    height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted"><br>bangkukelas.id</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Bangku[KELAS]</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end partnership --}}
    @endsection
