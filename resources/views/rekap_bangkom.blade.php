@extends('layouts.bangkom')

@section('title','Rekapitulasi Pengembangan Kompetensi')

@section('judul_isi')
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-10 text-center">
              <h2>Rekapitulasi Pengembangan Kompetensi</h2>
              <p><i>Rekapitulasi seluruh pengembangan kompetensi sesuai dengan jabatan, tupoksi dan keperluan pengembangan karier ke depan</i></p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->
@endsection

@section('isi')
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4 posts-list">

          <div class="col-xl-12 col-md-6">
            <article>
              <h3>Abdurrahman Assel, SST</h3> 
              <h6>Pranata Komputer Ahli Muda, BPS Provinsi Gorontalo</h6>
            </article>
          </div>
</div>

      <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 posts-list">

        <div class="col-xl-12 col-md-6">
            <article>
              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Pengembangan kompetensi yang dibutuhkan pegawai</th>
                      <th scope="col">Pengembangan kompetensi yang dibutuhkan unit kerja</th>
                      <th scope="col">Pengembangan kompetensi yang sudah diikuti</th>
                      <th scope="col">Pengembangan kompetensi yang akan diikuti</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Pelatihan Admin Pengembangan Kompetensi</td>
                      <td>Public Speaking</td>
                      <td>Pelatihan Admin Pengembangan Kompetensi</td>
                      <td>Public Speaking</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Pelatihan Instruktur Nasional Pendataan Lengkap Koperasi dan Usaha Mikro, Kecil dan Menengah Tahun 2023</td>
                      <td>Memahami Big Data dan Data Science</td>
                      <td>Pelatihan Instruktur Nasional Pendataan Lengkap Koperasi dan Usaha Mikro, Kecil dan Menengah Tahun 2023</td>
                      <td>Memahami Big Data dan Data Science</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Pelatihan Innas Groundcheck SBR-QIS 2023 Kelas A</td>
                      <td>Analisis Dasar Penganggaran</td>
                      <td>Pelatihan Innas Groundcheck SBR-QIS 2023 Kelas A</td>
                      <td>Analisis Dasar Penganggaran</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Diklat Teknis Komputer</td>
                      <td>Leadership Training</td>
                      <td>Diklat Teknis Komputer</td>
                      <td>Leadership Training</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Diklat Kepemimpinan Tingkat IV Angk. 98</td>
                      <td></td>
                      <td>Diklat Kepemimpinan Tingkat IV Angk. 98</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Pembinaan Evaluasi Penyelenggaraan Statistik Sektoral (EPSS) </td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
              </table>
            </article>
          </div>

        </div><!-- End blog posts list -->

        <div class="blog-pagination">
          <ul class="justify-content-center">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End blog pagination -->

      </div>
    </section>

 
@endsection