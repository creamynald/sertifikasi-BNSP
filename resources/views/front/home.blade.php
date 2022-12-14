@extends('front.layouts.frontend')

@section('content')

  @include('front.includes.slide')
<!-- ======= sambutan kadis dan berita Section ======= -->
<section id="main" class="team">
  <div class="container">
    <div class="row">

      @foreach ($sambutan as $row)
      <div class="col-lg-8">
        <div class="sambutan">
          <div class="member align-items-start">
            <h3><b>{{ $row->judul }}</b></h3>
            <p>{!! $row->body !!}</p>
            <div class="d-flex align-items-start mt-3">
              <div class="minipic"><img src="{{ asset('uploads/' . $row->foto) }}" class="mr-3 rounded-circle" alt="{{ $row->nama }}" style="width:50px;"></div>
              <div class="member-info">
                <h4>{{ $row->nama }}</h4>
                <span>{{ $row->jabatan }}</span>
              </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="{{ route('detail-sambutan', $row->slug) }}"><button class="btn btn-danger btn-sm" type="button"><i class="fa-solid fa-share"></i> Selengkapnya</button></a>
            </div>
          </div>
        </div>
        @endforeach

        {{-- berita --}}
        @foreach ($post as $row)
        <div class="artikel mt-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="portfolio-wrap">
                  <a href="{{ route('detail-artikel', $row->slug) }}"><img src="{{ asset('uploads/' . $row->gambar_artikel) }}" class="img-fluid" alt=""></a>
                </div>
              </div>
              <div class="col-lg-6 mt-2">
                <span><i class="fa-regular fa-clock text-danger"></i> {{ $row->created_at->isoFormat('dddd, D MMMM Y | h:mm:ss a' ); }}</span>
                <h4><a href="{{ route('detail-artikel', $row->slug) }}"><b>{{ $row->judul }}</b></a></h4>
                <p>{!!\Illuminate\Support\Str::limit($row->body, 200, '...')!!}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        {{-- end berita --}}
      </div>
      {{-- end left --}}

      {{-- right --}}
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="member d-flex align-items-start">
          <div class="member-info">
            <span><h3><i class="fa-solid fa-calendar"></i> Agenda Kegiatan</h3></span>
            <div class="social">
            </div>
          </div>
        </div>
        
        <div class="member d-flex align-items-start mt-2">
          <div class="member-info">
            <h3><i class="fa-thin fa-hashtag"></i> Profil Pegawai</h3>
            <img src="{{ asset('uploads/'.$bannerS->gambar_banner) }}" alt="" style="width: 100%">
          </div>
        </div>
        
        <div class="member d-flex align-items-start mt-2">
          <div class="member-info">
            <h3><i class="fa-thin fa-hashtag"></i> Info Bengkalis</h3>
            <div class="social">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
              </ul>
            </div>
          </div>
        </div>
      </div>         

    {{-- end right --}}
    </div>

</section><!-- End Sambutna Kadis & Berita Section -->

<!-- ======= Covid Section ======= -->
<section id="covid" class="team">
  <div class="container">

    <div class="section-title">
      <span>{{ $playlistPertama[0]->judul_playlist }}</span>
          <h2>{{ $playlistPertama[0]->judul_playlist }}</h2>
        <p>{!! $playlistPertama[0]->deskripsi !!}</p> 
    </div>


    <div class="row">

      @foreach ($materi as $row)
      <div class="col-lg-6 mt-4">
        <div class="member d-flex align-items-start">
          <div class="pic"><a href="{{ route('detail-video', $row->slug) }}">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $row->link }}" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="member-info">
            <span><i class="fa-regular fa-clock text-danger"></i> {{ $row->created_at->isoFormat('dddd, D MMMM Y' ); }}</span>
            <h4><a href="{{ route('detail-video', $row->slug) }}">{{ $row->judul_materi }}</a></h4>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>

    <div align="center">
      <a href="#"><button class="btn btn-danger btn-sm mt-3" type="button"><i class="fa-solid fa-share"></i> Selengkapnya</button></a>
    </div>

  </div>
</section><!-- End Covid Section -->

<!-- ======= Galeri Section ======= -->
<section id="covid" class="team">
  <div class="container">

    <div class="section-title">
      <span>{{ $playlistPertama[1]->judul_playlist }}</span>
          <h2>{{ $playlistPertama[1]->judul_playlist }}</h2>
        <p>{!! $playlistPertama[1]->deskripsi !!}</p> 
    </div>

    <div class="row portfolio-container">

        @foreach ($galeriKegiatan as $row)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('uploads/' . $row->gambar_materi) }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <span><i class="fa-regular fa-clock text-danger"></i> {{ $row->created_at->isoFormat('dddd, D MMMM Y' ); }}</span>
              <h4><a href="{{ route('detail-foto', $row->slug) }}">{{ $row->judul_materi }}</a></h4>
            </div>
          </div>
        </div>
        @endforeach

    </div>

    <div align="center">
      <a href="#"><button class="btn btn-danger btn-sm mt-3" type="button"><i class="fa-solid fa-share"></i> Selengkapnya</button></a>
    </div>

  </div>
</section><!-- End Galeri Section -->
@endsection
