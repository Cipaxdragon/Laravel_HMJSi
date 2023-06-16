@extends('layouts.main')
@section("container")
<main>
    @include('partials.bar1')

  <div class="activity container">
      <p class="fs-5 mt-5 fw-bold" style="color:#1245BA;">Info Pengumuman</p>
      <div class="row">
        <div class="col">
          <div class="kegiatan row row-cols-1 row-cols-md-2 g-4">
            @foreach($postingan as $post)
            <div class="col">
              <div class="card">
                <img src="{{ $post->gambar }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->judul }}</h5>
                  <p class="card-text">{{ $post->teks }}</p>
                  <div class="tombol">
                       <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col">
          <div class="terkini container fs-4">
            <p class="judul fs-5" style="color:#1245BA; font-weight: 800;">Berita Terkini</p>
            <hr>
            @foreach($postingan as $post)
            <h5 style="color:#1245BA; font-weight: 800;">{{ $post->judul }}</h5>
            <hr>
            <p>{{ $post->teks }}</p>
            @endforeach
          </div>
        </div>
      </div>

      <div class="kegiatan row row-cols-1 row-cols-md-4 g-4 mt-1">
        @foreach($postingan as $post)
        <div class="col">
          <div class="card">
            <img src="{{ $post->gambar }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $post->judul }}</h5>
              <p class="card-text">{{ $post->teks }}</p>
              <div class="tombol">
                   <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <!-- tombol navigasi -->
      <div class="tombol-halaman mt-5">
        <a href="info-beasiswa.html" class="rounded-button bg-light text-dark">
          <h4>1</h4>
        </a>
        <a href="info-pendaftaran.html" class="rounded-button bg-light text-dark">
          <h4>2</h4>
        </a>
        <a href="pengumuman.html" class="rounded-button">
          <h4>3</h4>
        </a>
        <a href="#" class="rounded-button bg-light text-dark">
          <h4>4</h4>
        </a>
      </div>
  </div>
 </main>
@endsection
