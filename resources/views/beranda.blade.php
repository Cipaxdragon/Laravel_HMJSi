@extends('layouts.main')
@section('container')
<div class="kotakAtas container-fluid">
  <div class="judul">
      <h1 class="text-center text-white">SELAMAT DATANG</h1>
      <h4 class="text-center text-white">Di Website Himpunan Mahasiswa Jurusan Sistem Informasi</h4>
      <p class="text-center text-white fw-bold fs-5" style="margin-top: 370px;">Website ini ditujukan untuk peminat IT sebagai sumber informasi seputar Konten - konten yang ada di website ini antara lain berisi berbagai Berita dan kegiatan-kegiatan yang diadakan oleh HMJ - SI</p>
  </div>
</div>

<div class="berita-terkini container mt-5">
  <div class="dropdown">
      <button class="btn dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        BERITA TERKINI
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="info-beasiswa.html"><i class="fa-solid fa-graduation-cap"></i>Info Beasiswa</a></li>
        <li><a class="dropdown-item" href="info-pendaftaran.html"><i class="fa-solid fa-building-columns"></i> Info Pendaftaran</a></li>
        <li><a class="dropdown-item" href="pengumuman.html"><i class="fa-solid fa-circle-exclamation"></i></i> Info Pengumuman</a></li>
      </ul>
    </div>
    <div class="berita row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card">
          <img src="./image/IMG_9181 1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Company Visit</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="tombol">
                 <a href="company-visit.html" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="./image/WhatsApp Image 2022-08-31 at 17.36.png" class="card-img-top" alt="gambar bersama">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="tombol">
              <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
         </div>
          </div>
        </div>
      </div>
      <div class="col">
          <div class="card">
              <img src="./image/IMG_1075.png" class="card-img-top" alt="gambar bersama">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="tombol">
                  <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
             </div>
              </div>
            </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="./image/IMG_4846 1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="tombol">
              <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
         </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="kegiatan-terkini container">
  <div class="atas mt-5 d-flex justify-content-between">
      <p class="fw-bold">KEGIATAN TERKINI</p>
      <a href="kegiatan.html" class="text-secondary" style="text-decoration: underline;">Selengkapnya..</a>
  </div>
  <div class="kegiatan row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card">
          <img src="./image/IMG_9181 1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Company Visit</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="tombol">
                 <a href="company-visit.html" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="./image/WhatsApp Image 2022-08-31 at 17.36.png" class="card-img-top" alt="gambar bersama">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="tombol">
              <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
         </div>
          </div>
        </div>
      </div>
      <div class="col">
          <div class="card">
              <img src="./image/IMG_1075.png" class="card-img-top" alt="gambar bersama">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="tombol">
                  <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
             </div>
              </div>
            </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="./image/IMG_4846 1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="tombol">
              <a href="#" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
         </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="pengurus container">
  <p class="text-center fw-bold mt-5 fs-5">PENGURUS HMJ-SI</p>
  <div class="container">
      <div class="big-3 container">
        <div class="row row-cols-1 row-cols-md-4 row-cols-sm-4 g-4 m-auto">
          <div class="fajratul col">
              <div class="presidum card">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="./image/1.png" class="presidum card-img-top" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="nama card-title text-white fw-bold">M. FAJRATUL IKHSAN</h5>
                    <hr>
                    <p class="deskripsi card-text text-warning fw-bold">Ketua Umum</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="farid col mt-5">
              <div class="presidum card">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="./image/3.png" class="presidum card-img-top" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="nama card-title text-white fw-bold">NUR FARID MUFID NR</h5>
                      <hr>
                      <p class="deskripsi card-text text-warning fw-bold">Sekretaris Umum</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="irma col mt-5">
              <div class="presidum card">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="./image/2.png" class="presidum card-img-top" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="nama card-title text-white fw-bold">IRMA SURIANI S</h5>
                    <hr>
                    <p class="deskripsi card-text text-warning fw-bold">Bendahara Umum</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>

      <a class="text-secondary fw-bold float-end mt-2" style="text-decoration: underline;" href="tentang.html">Struktur Organisasi</a>
</div>

<div class="peta container mt-5">
  <p class="fw-bold"><i class="bi bi-geo-alt-fill"></i>HMJ SISTEM INFORMASI</p>
  <div class="maps embed-responsive embed-responsive-2by1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.3602177171547!2d119.49512881544499!3d-5.205954353927998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3a40ef0aa8f%3A0xad3e30fed1b78902!2sSekretariat%20HMJ%20Sistem%20Informasi%20UINAM!5e0!3m2!1sen!2sid!4v1680202270809!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
@endsection
