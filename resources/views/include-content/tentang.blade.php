@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | Tentang')
@section('menuTentang', 'active')
@section('content')

<div class="content-wrapper">
    <div class="container">
      <section id="" class="about">
        <div class="container">

          <div class="row justify-content-between">
            <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
              <img src=" {{asset('assets/images/HIMTI.png')}}" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
              <h3 data-aos="fade-up">HIMTI - UMT</h3>
              <p data-aos="fade-up" data-aos-delay="100">
                Himpunan Mahasiswa Teknik Inmormatika Universitas Muhammadiyah Tangerang atau HIMTI - UMT adalah
                himpunan kampus yang tidak hanya berfokus pada organisasi saja tetapi terhadap akademik juga,
                bahkan tujuan utama HIMTI yaitu untuk meningkatkan nilai akademik
                Mahasiswa Teknik Informatika Universitas Muhammadiyah Tangerang.
              </p>
              <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Tanggal Berdiri HIMTI</h4>
                  <p></p>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Pendiri HIMTI</h4>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End About Section -->
      <section id="bg" class="team">
        <div class="container" class="faq section-bg">

          <div class="section-title" data-aos="fade-up">
            <h2>HIMTI</h2>
            <p>Struktural Program Studi</p>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"></div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="member">
                <img src=" {{asset('assets/struktur/kapro.jpg')}} " class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Yani Sugiyani, MM., M.Kom.</h4>
                    <span>Ketua Program Studi</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="member">
                <img src=" {{asset('assets/struktur/sekpro.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Dyas Yudi Priyanggodo, M.Kom.</h4>
                    <span>Sekretaris Program Studi</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"></div>
          </div>
        </div>
      </section>
      <section id="team" class="team">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>HIMTI</h2>
            <p>Struktural Periode 2020 - 2021</p>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"></div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="member">
                <img src=" {{asset('assets/struktur/kahim23.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Dandy Yustiaheni</h4>
                    <span>Bupati HIMTI</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="member">
                <img src=" {{asset('assets/struktur/wakahim23.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Idola Arief</h4>
                    <span>Wakil Bupati</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="member">
                <img src=" {{asset('assets/struktur/sek23.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Abi Fadilah</h4>
                    <span>Sekretaris 1</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="member">
                <img src=" {{asset('assets/struktur/sek223.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Muhammad Alfarizi</h4>
                    <span>Sekretaris 2</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="member">
                <img src=" {{asset('assets/struktur/bendahara23.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Riana Rachma P</h4>
                    <span>Bendahara</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="member">
                <img src=" {{asset('assets/struktur/sdm23.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Rochman Nur H</h4>
                    <span>Ketua Divisi SDM</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="member">
                <img src=" {{asset('assets/struktur/kominfo23.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Dwi Wahyu S</h4>
                    <span>Ketua Divisi KOMINFO</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="member">
                <img src=" {{asset('assets/struktur/organ23.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Ibnu Yasir</h4>
                    <span>Ketua Divisi Keorganisasian</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="member">
                <img src=" {{asset('assets/struktur/litbang23.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Ahmad Saipullah</h4>
                    <span>Ketua Divisi LITBANG</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="member">
                <img src=" {{asset('assets/struktur/danus23.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Renanda Rakasiwi</h4>
                    <span>Ketua Divisi DANUS</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="bg" class="faq section-bg">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>HIMTI</h2>
            <p>Visi & Misi</p>
          </div>
          <ul class="faq-list">
            <li data-aos="fade-up" data-aos-delay="100">
              <a data-toggle="collapse" class="" href="#faq1">Visi<i class="icofont-simple-up"></i></a>
              <div id="faq1" class="collapse show">
                <p>
                    Menjadikan organisasi yang melahirkan anggota profesional dalam bidang informatika dan
                    teknologi informasi serta menjunjung tinggi nilai-nilai organisasi.
                </p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a data-toggle="collapse" href="#faq2" class="collapsed">Misi<i class="icofont-simple-up"></i></a>
              <div id="faq2" class="collapse">
                <p>1. Menyelenggarakan dan mengembangkan potensi anggota HIMTI dalam bidang teknologi
                    informasi.
                </p>
                <p>2. Membentuk sumber daya manusia yang memiliki integritas, profesional dan kompeten dalam
                    bidang teknologi informasi.</p>
                <p>3. Menjalin relasi antara pihak internal dan eksternal kampus.</p>
                <p>4. Melakukan penelitian dan pengembangan dalam bidang teknologi informasi.</p>
                <p>5. Menghasilkan karya yang bermanfaat di dalam bidang teknologi informasi dilingkungan
                    masyarakat.</p>
              </div>
            </li>
          </ul>
        </div>
      </section>


    </div>
  </div>
            {{-- end visi misi --}}
        @endsection
