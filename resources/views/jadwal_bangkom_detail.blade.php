@extends('layouts.bangkom')

@section('judul_isi')
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-10 text-center">
              <h2>Jadwal pengembangan kompetensi</h2>
              <p><i>Daftar kegiatan pengembangan kompetensi yang akan diikuti sesuai dengan jabatan, tupoksi dan keperluan pengembangan karier ke depan</i></p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/jadwal_bangkom">Rekap</a></li>
            <li>Detail</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
@endsection

@section('isi')
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4 posts-list">

          <div class="col-xl-12 col-md-6">
            <article>
              <table id="w0" class="table table-striped table-bordered detail-view">
                <tr>
                  <th>Nama Pengembangan Kompetensi</th>
                  <td>Memahami Big Data dan Data Science</td>
                </tr>
                <tr>
                  <th>Kategori</th>
                  <td>Pilihan</td>
                </tr>
                <tr>
                  <th>Jadwal Waktu Pelatihan</th>
                  <td>Desember 2024</td>
                </tr>
                <tr>
                  <th>Daftar Peserta </th>
                  <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> 4 Pegawai </button></td>
                </tr>
                <tr>
                  <th>Metode Pelaksanaan</th>
                  <td>E-learning</a></td>
                </tr>
                <tr>
                  <th>Tempat</th>
                  <td>-</td>
                </tr>
                <tr>
                  <th>Pelaksana</th>
                  <td>Direktorat Analisis dan Pengembangan Statistik</td>
                </tr>

                </tr>
                <tr>
                  <th>Rancangan Jam Pelatihan</th>
                  <td>18 JP</td>
                </tr>
              </table>
            </article>
          </div>

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Daftar pegawai yang akan mengikuti :</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Abdurrahman Assel</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Abdurrahman Datau</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Muhammad Syaiful</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Fitra Jaya Monoarfa</td>
                      </tr>
                      
                    </tbody>

                  </table>
                </div>
                
              </div>
            </div>
          </div>



 
@endsection