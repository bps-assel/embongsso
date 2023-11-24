@extends('layouts.bangkom')

@section('judul_isi')
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-10 text-center">
              <h2>Daftar pengembangan kompetensi yang sudah diikuti</h2>
              <p><i>Daftar kegiatan pengembangan kompetensi yang sudah diikuti sesuai dengan jabatan, tupoksi dan keperluan pengembangan karier ke depan</i></p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/rekap_anggota">Rekap</a></li>
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
                  <th>Nama Pelatihan/Diklat</th>
                  <td>Pelatihan Admin Pengembangan Kompetensi</td>
                </tr>
                <tr>
                  <th>Kategori</th>
                  <td>Teknis</td>
                </tr>
                <tr>
                  <th>Periode Pelatihan</th>
                  <td>25 September 2023 - 27 September 2023</td>
                </tr>
                <tr>
                  <th>Link WAG</th>
                  <td><a href="https://chat.whatsapp.com/Jwapbb0Pqeq93asg7kRW7z" target="_blank">Bergabung dengan WA Grup</a></td>
                </tr>
                <tr>
                  <th>Link WARKOP</th>
                  <td><a href="kelas_picbangkom_B" target="_blank">Bergabung dengan Kelas Warkop</a></td>
                </tr>
                <tr>
                  <th>Tempat</th>
                  <td>Pusat Pendidikan dan Pelatihan BPS</td>
                </tr>
                <tr>
                  <th>Pelaksana</th>
                  <td>Pusat Pendidikan dan Pelatihan BPS</td>
                </tr>
                <tr>
                  <th>Metode Pelaksanaan</th>
                  <td>Klasikal</td>
                </tr>
                <tr>
                  <th>Total Jam Pelatihan</th>
                  <td>21</td>
                </tr>
              </table>
            </article>
          </div>



 
@endsection