@extends('layouts.app')

@section('content')
<div class="top-background">
  <div class="container">
    <div class="top-background-title">
      <h1 class="text-light" style="
          /* border: 1px solid #000; */
          max-width: 115vh;
          padding-top: 70px;
      "> 
        Fasilitas Yang Kami Miliki Untuk Menunjang Pembelajaran Siswa Siswi Agar Dapat Berprestasi 
      </h1>
      <hr class="horizontal-divider">
    </div>

    <div class="laboratorium-wrap">
      <h2 class="laboratorium-top-item"> Laboratorium Dengan Peralatan yang Mendukung </h2> <!-- JADIIN BOLD -->

      <div class="laboratorium-item-1">
        <div class="image">
          <img src="{{ URL::to('/assets/image/fasilitas/lab-ipa.jpg') }}">
        </div>
        <div class="description-wrap">
          <h4> Laboratorium IPA </h4>
          <div class="description-item-left">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, 
              purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor 
              rhoncus dolor purus non enim praesent elementum facilisis leo, vel
            </p>
          </div>
        </div>
      </div>

      <div class="laboratorium-item-2 item-2">
        <div class="description-wrap">
          <h4> Laboratorium Komputer </h4>
          <div class="description-item-right">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, 
              purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor 
              rhoncus dolor purus non enim praesent elementum facilisis leo, vel
            </p>
          </div>
        </div>
        <div class="image">
          <img src="{{ URL::to('/assets/image/fasilitas/lab-kom.jpg') }}">
        </div>
      </div>


    </div>

    
    
  </div>
</div>
<div class="below-top-background"></div>

<!-- ------------------------------- -->

<div class="container">
  <div class="ruang-kelas-wrap text-center">
    <div class="title-description">
      <h2> Ruang Kelas Yang Nyaman Untuk Semua </h2>
      
      <p> 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, 
        purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor 
        rhoncus dolor purus non enim praesent elementum facilisis leo, vel 
      </p>
    </div>

    <div class="item-wrap">
      <div class="item-select-1">
        <img src="{{ URL::to('/assets/image/fasilitas/kelas/tima-1.jpg') }}">
      </div>
      
      <div class="item-select-2">
        <div class="item-select-child">
          <img src="{{ URL::to('/assets/image/fasilitas/kelas/tima-2.jpg') }}">
        </div>
        <div class="item-select-child-bottom">
          <img src="{{ URL::to('/assets/image/fasilitas/kelas/tima-3.jpg') }}">
        </div>
      </div>
    </div>

  </div>
</div>

<!-- ------------------------------- -->
<div class="divider-rectangle">
  <h1 class="title-divider-rectangle text-light text-center"> Ratusan Koleksi Buku di Perpustakaan </h1>

  <div class="divider-content">
    <!-- <img src="{{ URL::to('/assets/image/fasilitas/perpus.svg') }}"> -->
  </div>
</div>

@endsection