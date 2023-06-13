@extends('layouts.main')
@section('container')

<style>
    a{
        color : #1245ba;
        text-decoration: none;
    }
</style>
<div class="kontak container mt-5">
    <div class="kontak-top container fw-bold">
        <div class="row">
          <div class="col">
            <ul>
                <li>Facebook :</li>
                <hr>
                <li>Instagram :</li>
                <hr>
                <li>Twitter :</li>
                <hr>
                <li>Youtube :</li>
                <hr>
                <li>Email :</li>
                <hr>
                <li>Alamat :</li>
            </ul>
          </div>
          <div id="nama-sosmed" class="col">
            <ul>
                <li><a href="https://www.facebook.com/hmjsi.uinam">HMJ Sistem Informasi UINAM</a>
                    </li>
                <hr>
                <li><a href="https://www.instagram.com/hmjsi.uinam/">hmjsi.uinam</a> </li>
                <hr>
                <li><a href="https://twitter.com/hmjsi_uinam">hmjsi_uinam</a>
                    </li>
                <hr>
                <li><a href="https://www.youtube.com/@hmjsisteminformasiuinam8821">HMJ Sistem Informasi UINAM<</a>
                </li>
                <hr>
                <li>hmj.si@uin-alauddin.ac.id</li>
                <hr>
                <li>Gedung Sekretariat Fak. SainTek No. 3</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- akhir bagian atas -->

      <div class="kontak-mid my-5">
        <p class="title fw-bold">Tulis Pesan</p>
        <div class="container text-center">
            <div class="row">
              <div class="col">
                <div class="input-group mb-3">
                    <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
                    <input type="text" class="form-control" placeholder="Nama" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="col">
                <div class="input-group mb-3">
                    <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
                    <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                </div>
              </div>
            </div>
            <div class="input-group">
                <!-- <span class="input-group-text">With textarea</span> -->
                <textarea class="form-control" placeholder="Pesan" aria-label="With textarea"></textarea>
              </div>
          </div>
          <div class="button-kontak mt-3 d-flex justify-content-end" style="padding-right: 20px">
              <button type="submit" class="btn btn-primary">Kirim</button>
          </div>
      </div>
      <!-- akhir kontak-mid -->

      <div class="kontak-low container mt-5">
        <p class="fw-bold fs-5" style="color: #1245BA;"><i class="bi bi-geo-alt-fill"></i>HMJ SISTEM INFORMASI</p>
        <div class="maps embed-responsive embed-responsive-2by1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.3602177171547!2d119.49512881544499!3d-5.205954353927998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3a40ef0aa8f%3A0xad3e30fed1b78902!2sSekretariat%20HMJ%20Sistem%20Informasi%20UINAM!5e0!3m2!1sen!2sid!4v1680202270809!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>



@endsection
