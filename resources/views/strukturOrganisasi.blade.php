@extends('layouts.app')

@section('content')

<!-- Judul "Struktur Organisasi" -->
<div class="title-so">
  <h2 class="text-center"> Mari Kenali Struktur Organisasi </h2>
  <h2 class="text-center"> SMP Negeri 1 Ujungjaya </h2>
</div>


<!-- ########################### -->
<!-- Kepala Sekolah -->
<div class="kepala-sekolah d-flex align-items-center">
  <!-- Section Kepala Sekolah -->
  <div class="mr-auto p-2 outer-wrap"> 
    <h3 class="text-center"> Kepala Sekolah </h3>

    <!-- Photo -->
    <div class="outer-wrap-photo">
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/kepsek.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description">
        <h5 class="description font-weight-bold"> ERAT SURATMI, S.Pd., M.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Kepala Sekolah </h5>
      </div>

    </div>
  </div>
</div>



<!-- Wakil Kepala Sekolah -->
<div class="wakasek d-flex align-items-center" 
     style="
      margin-top: 75px;
     ">
  <!-- Section Wakil Kepala Sekolah -->
  <div class="mr-auto p-2 outer-wrap"> 
    <h3 class="text-center"> Wakil Kepala Sekolah </h3>

    <!-- Content Wrap -->
    <div class="outer-wrap-photo wakasek-content">
  
      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/wakasek-iding.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> Drs. H. IDING SAHIDIN, M.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Wakil Kepala Sekolah Bidang Kesiswaan </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/wakasek-opin.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> H. OPIN SAMSUDIN, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Wakil Kepala Sekolah Bidang Kesiswaan </h5>
      </div>

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/wakasek-uu.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> UU AMAT SUHARA, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Wakil Kepala Sekolah Bidang Kesiswaan </h5>
      </div>
    </div>

  </div>
</div>
<div class="wakasek-bot d-flex align-items-center">
  <!-- Section Wakil Kepala Sekolah -->
  <div class="mr-auto p-2 outer-wrap"> 
    <!-- Content Wrap -->
    <div class="outer-wrap-photo wakasek-content">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/wakasek-yayah.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> YAYAH ROHAYATI, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Wakil Kepala Sekolah Bidang Humas  </h5>
      </div>
    </div>
  </div>

</div>



<!-- Staf Tata Usaha -->
<div class="staf-tu">
  <!-- Section Tata Usaha -->
  <div class="outer-wrap staf-tata-usaha" 
       style="
        width: 100%;
        margin: 0 auto;
       "> 
    <h3 class="text-center"> Staf Tata Usaha </h3>

    <!-- Content Wrap -->
    <div class="outer-wrap-photo staf-tu-content align-items-center"
         style="
          margin-left: 16rem;
         ">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Watma.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-tu-kiri">
        <h5 class="description font-weight-bold"> WATMA </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Staf Tata Usaha </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Kurnianingsih.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-tu">
        <h5 class="description font-weight-bold"> KURNIANINGSIH </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Staf Tata Usaha </h5>
      </div>

    </div>
  </div>

  <div class="mr-auto p-2 outer-wrap"> 
    
  </div>
</div>



<!-- DEWAN GURU -->
<!-- Guru Baris 1 -->
<div class="guru-top d-flex align-items-center margin-top: 100px;">
  <!-- Dewan Guru -->
  <div class="mr-auto p-2 outer-wrap"> 
    <h3 class="text-center"> Dewan Guru </h3>

    <!-- Content Wrap -->
    <div class="outer-wrap-photo wakasek-content">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Ade-2.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> ADE YAYAT, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-1"> Guru Mata Pelajaran Penjas </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/wakasek-opin.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> H. OPIN SAMSUDIN, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-1"> Guru Mata Pelajaran Penjas </h5>
      </div>

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/wakasek-uu.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> UU AMAT SUHARA, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-1"> Guru Mata Pelajaran Penjas </h5>
      </div>
    </div>

  </div>
</div>

<!-- Guru Baris 2 -->
<div class="guru d-flex align-items-center">
  <div class="mr-auto p-2 outer-wrap"> 

    <!-- Content Wrap -->
    <div class="outer-wrap-photo wakasek-content">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Didi.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> H. DIDI SUPRIADI </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-2"> Guru Mata Pelajaran IPS </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Nuraini.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> NURANI, S.E </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-2"> Guru Mata Pelajaran IPS </h5>
      </div>

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Sulaeman.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> SULAEMAN, S.E </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-2"> Guru Mata Pelajaran IPS </h5>
      </div>
    </div>

  </div>
</div>

<!-- Guru Baris 3 -->
<div class="guru d-flex align-items-center">
  <div class="mr-auto p-2 outer-wrap"> 

    <!-- Content Wrap -->
    <div class="outer-wrap-photo wakasek-content">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Neng.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> NENG WINDA L, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-2"> Guru Mata Pelajaran IPS </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/wakasek-yayah.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> YAYAH ROHAYATI, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Bahasa Indonesia </h5>
      </div>

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/yati.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> YATI KARYATI, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Bahasa Indonesia </h5>
      </div>
    </div>

  </div>
</div>

<!-- Guru Baris 4 -->
<div class="guru d-flex align-items-center">
  <div class="mr-auto p-2 outer-wrap"> 

    <!-- Content Wrap -->
    <div class="outer-wrap-photo wakasek-content">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Pipih.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> Dra. PIPIH TARLIAH </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Bahasa Indonesia </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Rovie.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> ROVIE NOPIANTO, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Bahasa Indonesia </h5>
      </div>

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Imas.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> IMAS TUTI, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Bahasa Indonesia </h5>
      </div>
    </div>

  </div>
</div>

<!-- Guru Baris 5 -->
<div class="guru d-flex align-items-center">
  <div class="mr-auto p-2 outer-wrap"> 

    <!-- Content Wrap -->
    <div class="outer-wrap-photo wakasek-content">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Yoyo.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> YOYO, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-2"> Guru Mata Pelajaran IPA </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Adela.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> ADELA, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-2"> Guru Mata Pelajaran IPA </h5>
      </div>

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Eulis.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> EULIS NENI ROHAENI, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Bahasa Indonesia </h5>
      </div>
    </div>

  </div>
</div>

<!-- Guru Baris 6 -->
<div class="guru d-flex align-items-center">
  <div class="mr-auto p-2 outer-wrap"> 

    <!-- Content Wrap -->
    <div class="outer-wrap-photo wakasek-content">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Heri.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> Drs.H.HERI HERMANA </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Bahasa Inggris </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Devi.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> DEVI YUNIAR, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Bahasa Inggris </h5>
      </div>

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Popon.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> Hj. POPON PATIMAH, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran IPA </h5>
      </div>
    </div>

  </div>
</div>

<!-- Guru Baris 7 -->
<div class="guru d-flex align-items-center">
  <div class="mr-auto p-2 outer-wrap"> 

    <!-- Content Wrap -->
    <div class="outer-wrap-photo wakasek-content">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Aghnia.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> AGHNIA FIKRI A, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Bahasa Inggris </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Hendi.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> HENDI ROCHAENDI, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Bahasa Inggris </h5>
      </div>

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Tati.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> TATI SUMIATI, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Bahasa Inggris </h5>
      </div>
    </div>

  </div>
</div>

<!-- Guru Baris 8 -->
<div class="guru d-flex align-items-center">
  <div class="mr-auto p-2 outer-wrap"> 

    <!-- Content Wrap -->
    <div class="outer-wrap-photo wakasek-content">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Wawat.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> Hj. WAWAT SUSILAWATI, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Matematika </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Tina.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> TINA AMELIA, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Matematika </h5>
      </div>

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Yanyan.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> YANYAN ARYANTI H, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Matematika </h5>
      </div>
    </div>

  </div>
</div>

<!-- Guru Baris 9 -->
<div class="guru d-flex align-items-center">
  <div class="mr-auto p-2 outer-wrap"> 

    <!-- Content Wrap -->
    <div class="outer-wrap-photo wakasek-content">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Iis.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> IIS RESMIATI, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Matematika </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Cece.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> Drs. CECE </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Bahasa Sunda </h5>
      </div>

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Yanti.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> YANTI SUSANTI, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-2"> Guru Mata Pelajaran Prakarya </h5>
      </div>
    </div>

  </div>
</div>

<!-- Guru Baris 10 -->
<div class="guru d-flex align-items-center">
  <div class="mr-auto p-2 outer-wrap"> 

    <!-- Content Wrap -->
    <div class="outer-wrap-photo wakasek-content">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Agus.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> H. AGUS KUSNO, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Seni Rupa </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Ade-1.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> ADE TETEN N, S.Sn </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Mata Pelajaran Seni Rupa </h5>
      </div>

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Mala.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> MALA K, S.Pd., M.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-2"> Guru Mata Pelajaran PPKn </h5>
      </div>
    </div>

  </div>
</div>

<!-- Guru Baris 11 -->
<div class="guru d-flex align-items-center">
  <div class="mr-auto p-2 outer-wrap"> 

    <!-- Content Wrap -->
    <div class="outer-wrap-photo wakasek-content">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/wakasek-iding.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> Drs. H. IDING SAHIDIN, M.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-2"> Guru Mata Pelajaran PAI </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Udin.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> UDIN RAMDANI, S.Ag </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-2"> Guru Mata Pelajaran PAI </h5>
      </div>

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Ade.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-wakasek">
        <h5 class="description font-weight-bold"> ADE TIYA MARYANI, S.Pd </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description"> Guru Bimbingan dan Konseling (BK) </h5>
      </div>
    </div>

  </div>
</div>




<!-- Caraka -->
<div class="staf-tu" style="margin-top: 100px;">
  <!-- Section Caraka -->
  <div class="outer-wrap staf-tata-usaha" 
       style="
        width: 100%;
        margin: 0 auto;
       "> 
    <h3 class="text-center"> Caraka </h3>

    <!-- Content Wrap -->
    <div class="outer-wrap-photo staf-tu-content align-items-center"
         style="
          margin-left: 16rem;
         ">

      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Elen.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-tu-kiri">
        <h5 class="description font-weight-bold"> ELEN SAHLAN </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-3"> Caraka </h5>
      </div>


      <!-- Photo -->
      <span class="outer-profile">
        <img src="{{ URL::to('/assets/image/struktur-organisasi/Otong.png') }}">
      </span>
    
      <!-- Description -->
      <div class="outer-description-tu">
        <h5 class="description font-weight-bold"> OTONG JUHARYA </h5>
        <div class="rectangle-outer"></div>
        <h5 class="description-other-3"> Caraka </h5>
      </div>

    </div>
  </div>

  <div class="mr-auto p-2 outer-wrap"> 
    
  </div>
</div>

@endsection