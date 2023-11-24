@extends('layouts.bangkom')

@section('judul_isi')
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-10 text-center">
              <h2>Daftar pengembangan kompetensi yang akan diikuti</h2>
              <p><i>Daftar kegiatan pengembangan kompetensi yang akan diikuti sesuai dengan jabatan, tupoksi dan keperluan pengembangan karier ke depan</i></p>
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

          <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 posts-list">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Pilihan</p>

              <h2 class="title">
                <a href="/jadwal_bangkom_detail">Public Speaking</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author-list">BPS Povinsi</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Januari, 2024</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Pilihan</p>

              <h2 class="title">
                <a href="/jadwal_bangkom_detail">Memahami Big Data dan Data Science</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author-list">Direktorat Analisis dan Pengembangan Statistik</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Desember, 2024</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Administrasi</p>

              <h2 class="title">
                <a href="/jadwal_bangkom_detail">Analisis Dasar Penganggaran</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author-list">BPS Provinsi</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Desember 2023</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Manajerial</p>

              <h2 class="title">
                <a href="/jadwal_bangkom_detail">Leadership Training</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-4.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author-list">Pusdiklat BPS</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Februari 2024</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

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