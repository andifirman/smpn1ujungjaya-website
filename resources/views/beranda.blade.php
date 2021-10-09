@extends('layouts.app')

@section('content')
<div class="container">

  <!-- INI BAGIAN ATAS -->
  <div class="d-flex align-items-center">
    <div class="mr-auto p-2">
      <h3> Selamat Datang di </h3>
      <h2> SMP Negeri 1 Ujungjaya </h2>
      <h4> Junun Jucung Agamis Wanter Rancage </h4>
    </div>
    <div class="p-2 bg-main-atas-kiri">
      <img src="{{ URL::to('/assets/image/bg-main-isometric.png') }}">
    </div>
  </div>

  <!-- SAMBUTAN KEPALA SEKOLAH -->
  <div class="beranda square square-lg align-item-center">
      <div class="text-title"> 
        <h2 class="text-center"> Sambutan Kepala Sekolah </h2> 
      </div>
    
    <div class="beranda-container">
      <div class="greeting-photo">
        <img src="{{ URL::to('/assets/image/img_kepsek.png') }}">
      </div>
      <div class="greeting-words">
        <div class="title"> 
          <h4> “SMP Negeri 1 Ujungjaya menciptakan peserta didik yang bertaqwa, unggul, tangguh dan disiplin“ </h4>
        </div>
        <div class="sub-title">
          <p> Kami membantu memberikan peningkatan kualitas pendidikan dan melayani kebutuhan siswa secara maksimal </p>
        </div>
        <div>
          <br>
          <br>
          <p> 
            ERAT SURATMI, S.Pd., M.Pd <br>
            Kepala Sekolah SMP Negeri 1 Ujungjaya 
          </p>
        </div>
      </div>
    </div>
  </div>
  
  <!-- BODY UNTUK ARTIKEL -->
  <div class="row">
    <div class="article-container">
      <ul class="cards">
        <li>
          <a href="" class="card">
            <img src="{{ URL::to('/assets/image/yoona.png') }}" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                <img class="card__thumb" src="{{ URL::to('/assets/image/flight-rose.jpg') }}" alt="" />
                <div class="card__header-text">
                  <h3 class="card__title"> Andi Firmansyah </h3>            
                  <span class="card__status"> 1 hour ago </span>
                </div>
              </div>

              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>

            </div>
          </a>
        </li>

        <li>
          <a href="" class="card">
            <img src="{{ URL::to('/assets/image/dinda.jpg') }}" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                <img class="card__thumb" src="{{ URL::to('/assets/image/flight-rose.jpg') }}" alt="" />
                <div class="card__header-text">
                  <h3 class="card__title"> Andi Firmansyah </h3>
                  <span class="card__status"> 1 hour ago </span>
                </div>
              </div>

              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>

            </div>
          </a>
        </li>

        <li>
          <a href="" class="card">
            <img src="{{ URL::to('/assets/image/rose.jpg') }}" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                <img class="card__thumb" src="{{ URL::to('/assets/image/flight-rose.jpg') }}" alt="" />
                <div class="card__header-text">
                  <h3 class="card__title"> Andi Firmansyah </h3>            
                  <span class="card__status"> 1 hour ago </span>
                </div>
              </div>

              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>

            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <!-- UNTUK EMBEDDED VIDEO -->
  <div class="d-flex">
    <div class="p-2 embedded-vid">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/AJ7NAkP5gSU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
    </div>
      <div class="p-2">
        <h2 class="align-items-center"> Kami Mendukung Upaya Pemerintah Dalam Memutus Penyebaran Covid-19 </h2>
        <h5 class="align-items-center"> 
          Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, 
          purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor 
          rhoncus dolor purus non enim praesent elementum facilisis leo, vel 
        </h5>
      </div>
    </div>
  </div>

<!-- UNTUK GALERI (DI BAWAH) -->
<div class="near-footer-container">
  <div class="content-1">
  asd
  </div>
</div>

<!-- DI BAWAH GALERI -->

  

<!-- Carousel -->
<!-- Top content -->
<!-- <div class="top-content">
    <div class="container-fluid">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <img src="{{ URL::to('/assets/image/dinda.jpg') }}" class="img-fluid mx-auto d-block" alt="img1">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ URL::to('/assets/image/rose.jpg') }}" class="img-fluid mx-auto d-block" alt="img2">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ URL::to('/assets/image/flight-rose.jpg') }}" class="img-fluid mx-auto d-block" alt="img3">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ URL::to('/assets/image/yoona.jpeg') }}" class="img-fluid mx-auto d-block" alt="img4">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ URL::to('/assets/image/dinda.jpg') }}" class="img-fluid mx-auto d-block" alt="img5">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ URL::to('/assets/image/flight-rose.jpg') }}" class="img-fluid mx-auto d-block" alt="img6">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ URL::to('/assets/image/yoona.jpeg') }}" class="img-fluid mx-auto d-block" alt="img7">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ URL::to('/assets/image/rose.jpg') }}" class="img-fluid mx-auto d-block" alt="img8">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div> -->





<!-- UNTUK PENUTUP BAWAH GALERI -->
<!-- <div class="under-footer-container">
  <div class="content">
    asd
  </div>
</div> -->

<!-- <script src="/path/to/flickity.pkgd.min.js"></script> -->
@endsection