<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gaya.css">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="./image/android-chrome-192x192.png" type="image/x-icon">
</head>
<body>
    <div class="kontainer container-fluid">
     @include('partials.navbar')

    <div class="konteng">
        @yield('container')
    </div>

      <!-- AWAL FOOTER  -->
      <footer class="mt-5">
        <ul>
            <li class="kontak">
                <h4>Kontak</h4>
                <hr>
                <!-- <p class="fw-bold">UNIVERSITAS ISLAM NEGERI ALAUDDIN MAKASSAR</p> -->
                <p>EMAIL : hmj.si@uin-alauddin.ac.id</p>
                <p>KONTAK : +62 859-6429-6474 (NUR FARID MUFID NR)</p>
                <p>SEKRETARIAT HMJ SI, FAKULTAS SAINS &amp; TEKNOLOGI</p>
            </li>
            <li class="sosmed">
                <h4>Sosial Media</h4>
                <hr>
                <div class="sosmed">
                  <p><a href="https://www.instagram.com/hmjsi.uinam/"><i class="bi bi-instagram me-2"></i>hmjsi.uinam</a></p>
                  <p><a href="https://twitter.com/hmjsi_uinam"><i class="bi bi-twitter me-2"></i>hmjsi_uinam</a></p>
                  <p><a href="https://www.facebook.com/hmjsi.uinam"><i class="bi bi-facebook me-2"></i>HMJ Sistem Informasi UINAM</a></p>
                  <p><a href="https://www.youtube.com/@hmjsisteminformasiuinam8821"><i class="bi bi-youtube me-2"></i>HMJ Sistem Informasi UINAM</a></p>
                </div>
            </li>
            <li class="tentang">
                <h4>Tentang HMJ SI</h4>
                <hr>
                <p>Organisasi Ini Bernama Himpunan Mahasiswa Jurusan
                    Sistem Informasi Yang Di singkat HMJ SI. Berkedudukan Di Jalan. Yasin Limpo Samata Gowa Fakultas Sains Dan teknologi Universitas Alauddin Makassar.
                    HMJ SI Didirikan Pada Tanggal 2 Januari 2013</p>
            </li>
            <li class="tautan">
                <h4>Tautan</h4>
                <hr>
                <p>UIN ALAUDDIN MAKASSAR
                JURUSAN SISTEM INFORMASI</p>
            </li>
        </ul>
  </footer>
</div>
  <!-- AKHIR FOOTER  -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/7cfefc34bd.js" crossorigin="anonymous"></script>
</body>

</html>
