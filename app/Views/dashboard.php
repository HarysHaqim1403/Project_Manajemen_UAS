<!DOCTYPE html>
<html lang="en">

<head>
  <title>Maju Jaya Elektronik</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo base_url() ?>/public/home/images/iconweb.jpg"
    type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url() ?>/public/front_coffeeshop/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/public/front_coffeeshop/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/public/front_coffeeshop/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/public/front_coffeeshop/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/public/front_coffeeshop/css/magnific-popup.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>/public/front_coffeeshop/css/aos.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>/public/front_coffeeshop/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>/public/front_coffeeshop/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/public/front_coffeeshop/css/jquery.timepicker.css">


  <link rel="stylesheet" href="<?php echo base_url() ?>/public/front_coffeeshop/css/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/public/front_coffeeshop/css/icomoon.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/public/front_coffeeshop/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-thin-straight/css/uicons-thin-straight.css'>
  
  <link rel="stylesheet" href="https://www.flaticon.com/uicons">Flaticon</>
</head>

<body>
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="">Maju Jaya<small>Elektronik</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#beranda" class="nav-link">Beranda</a></li>
            <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#pelayanan" class="nav-link">Pelayanan</a></li>
            <li class="nav-item"><a href="#menu" class="nav-link">Produk</a></li>
            <li class="nav-item">
              <a type="button" class="nav-link" onclick="bukaModalKeranjang()">
                <i class="fa-solid fa-cart-shopping"></i> <b id="jmlPesanan">(0)</b></a>&nbsp;&nbsp;
            </li>

          </ul>
          <ul>

          </ul>
        </div>
      </div>
    </nav>
  </div>

  <main>
    <section class="home-slider owl-carousel" id="beranda">
      <div class="slider-item"
        style="background-image: url(<?php echo base_url() ?>/public/front_coffeeshop/images/bg001.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Selamat Datang</span>
              <h1 class="mb-4">Maju Jaya Elektronik Tempat yang Pas Untuk Mencari Produk Elektronik Pilihan Terbaik </h1>
              <style>
                html {
                  scroll-behavior: smooth;
                }
              </style>
              <p><a href="#lihat" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item"
        style="background-image: url(<?php echo base_url() ?>/public/front_coffeeshop/images/bg002.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Selamat Datang</span>
              <h1 class="mb-4">Barang Berkualitas &amp; Harga yang PAS</h1>
              <p><a href="#lihat" style="scroll-behavior: smooth;"
                  class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item"
        style="background-image: url(<?php echo base_url() ?>/public/front_coffeeshop/images/bg3.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Kami Pastikan</span>
              <h1 class="mb-4">Anda Puas dengan produk kami </h1>
              <p><a href="#lihat" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro" id="lihat">
      <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
          <div class="info">
            <div class="row no-gutters">
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-phone"></span></div>
                <div class="text">
                  <h3>No. Telepon</h3>
                  <p>0851 5527 8021</p>
                  <p>Untuk informasi lebih lanjut</p>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-my_location"></span></div>
                <div class="text">
                  <h3>Lokasi</h3>
                  <p>Jl. Karya Bakti III, Sukamelang, Subang (belakang Terminal Subang)</p>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="bi bi-calendar-day"></span></div>
                <div class="text">
                  <h3>Buka </h3>
                  <p>Minggu - Jumat</p>
                  <p>09.00 - 21.00</p>
                  <p>09.00 - 22.00 (Sabtu)</p>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="book p-4">
            <h3 class="text-center">Informasi</h3>
            <p class="text-white">Fitur pemesanan Offline untuk saat ini belum tersedia.
              Silahkan
              Melakukan pembayaran dengan menggunakan Transfer.</p>
            <p class="text-white text-center">-Admin-</p>
          </div> -->
        </div>
      </div>
    </section>

    <section class="ftco-about d-md-flex" id="about">
      <div class="one-half img"
        style="background-image: url(<?php echo base_url() ?>/public/front_coffeeshop/images/bg004.jpg);"></div>
      <div class="one-half ftco-animate">
        <div class="overlap">
          <div class="heading-section ftco-animate ">
            <span class="subheading">About Us</span>
            <h2 class="mb-4">Maju Jaya Elektronik</h2>
          </div>
          <div>
            <p>Maju Jaya Elektronik merupakan tempat yang tepat dan terpercaya untuk mencari produk - produk elektronik pilihan terbaik.</p>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-services" id="pelayanan">
      <div class="container">
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-choices"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pemesanan Mudah</h3>
                <p>Bingung cara pesan? kami akan membantu anda dalam membuat pemesanan</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-delivery-truck"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pelayanan Cepat</h3>
                <p>Tidak usah takut menunggu lama, karena kami melayani pesanan dengan secepat dan semaksimal mungkin
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="fi fi-ts-computer-speaker"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Produk Pilihan Terbaik</h3>
                <p>Menyediakan banyak produk pilihan terbaik dari kami hanya untuk Anda
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter"
      data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="fi fi-ts-computer-speaker"></span></div>
                    <strong class="number" data-number="18">0</strong>
                    <span>Perangkat</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="fi fi-ts-computer-speaker"></span></div>
                    <strong class="number" data-number="700">0</strong>
                    <span>Produk Terjual</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="fi fi-ts-computer-speaker"></span></div>
                    <strong class="number" data-number="599"></strong>
                    <span>Pelanggan</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="fi fi-ts-computer-speaker"></span></div>
                    <strong class="number" data-number="5">0</strong>
                    <span>Karyawan</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-menu" id="menu">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Pilihan Produk Elektronik</span>
            <h2 class="mb-4">Konsumen, Rumah Tangga, Hiburan</h2>
          </div>
        </div>
        <div class="row d-md-flex">
          <div class="col-lg-12 ftco-animate p-md-5">
            <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
                  aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
                    aria-controls="v-pills-1" aria-selected="true">Konsumen</a>

                  <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                    aria-controls="v-pills-2" aria-selected="false">Hiburan</a>

                  <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                    aria-controls="v-pills-3" aria-selected="false">Rumah Tangga</a>
                </div>
              </div>
              <div class="col-md-12 d-flex align-items-center">
                <div class="tab-content ftco-animate" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                    <?php if ($makanan): ?>
                      <div class="row">
                        <?php for ($i = 0; $i < count($makanan); $i++):
                          if ($makanan[$i]["jenis"] == 1): ?>
                            <!--Makanan-->
                            <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                <a disabled class="menu-img img mb-4"
                                  style="background-image: url(<?= base_url() ?>/public/images/menu/<?= $makanan[$i]["foto"] ?>);"></a>
                                <div class="text">
                                  <h3>
                                    <?= $makanan[$i]["nama"] ?>
                                  </h3>
                                  <p class="price"><span>Rp.
                                      <?= $makanan[$i]["harga"] ?>
                                    </span></p>
                                </div>
                                <button class="btn btn-primary btn-sm btn-fw mt-2" style="border-radius:20px" <?php if ($makanan[$i]["status"] == 0) {
                                  echo "disabled";
                                } ?> onclick='tambahPesanan(<?= $makanan[$i]["id"] ?>, "<?= $makanan[$i]["nama"] ?>", <?= $makanan[$i]["harga"] ?> )'><?php if ($makanan[$i]["status"] == 0) {
                                           echo "Habis";
                                         } else {
                                           echo "Tambah";
                                         } ?></button>

                              </div>
                            </div>
                            <?php
                          endif;
                        endfor; ?>
                        <!--Makanan End-->
                      </div>
                      <?php
                    endif; ?>
                  </div>

                  <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                    <?php if ($minumanDingin): ?>
                      <div class="row">
                        <?php for ($i = 0; $i < count($minumanDingin); $i++):
                          if ($minumanDingin[$i]["jenis"] == 3): ?>
                            <!--Minuman-->
                            <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                <a disabled class="menu-img img mb-4"
                                  style="background-image: url(<?= base_url() ?>/public/images/menu/<?= $minumanDingin[$i]["foto"] ?>);"></a>
                                <div class="text">
                                  <h3>
                                    <?= $minumanDingin[$i]["nama"] ?>
                                  </h3>
                                  <p class="price"><span>Rp.
                                      <?= $minumanDingin[$i]["harga"] ?>
                                    </span></p>
                                </div>
                                <button class="btn btn-primary btn-sm btn-fw mt-2" style="border-radius:20px" <?php if ($minumanDingin[$i]["status"] == 0) {
                                  echo "disabled";
                                } ?> onclick='tambahPesanan(<?= $minumanDingin[$i]["id"] ?>, "<?= $minumanDingin[$i]["nama"] ?>", <?= $minumanDingin[$i]["harga"] ?> )'><?php if ($minumanDingin[$i]["status"] == 0) {
                                           echo "Habis";
                                         } else {
                                           echo "Tambah";
                                         } ?></button>

                              </div>
                            </div>
                            <?php
                          endif;
                        endfor; ?>
                        <!--Minuman End-->
                      </div>
                    <?php endif; ?>
                  </div>

                  <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                    <?php if ($snack): ?>
                      <div class="row">
                        <?php for ($i = 0; $i < count($snack); $i++):
                          if ($snack[$i]["jenis"] == 2): ?>
                            <!--Kopi-->
                            <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                <a disabled class="menu-img img mb-4"
                                  style="background-image: url(<?= base_url() ?>/public/images/menu/<?= $snack[$i]["foto"] ?>);"></a>
                                <div class="text">
                                  <h3>
                                    <?= $snack[$i]["nama"] ?>
                                  </h3>

                                  <p class="price"><span>Rp.
                                      <?= $snack[$i]["harga"] ?>
                                    </span></p>
                                </div>
                                <button class="btn btn-primary btn-sm btn-fw mt-2" style="border-radius:20px" <?php if ($snack[$i]["status"] == 0) {
                                  echo "disabled";
                                } ?> onclick='tambahPesanan(<?= $snack[$i]["id"] ?>, "<?= $snack[$i]["nama"] ?>", <?= $snack[$i]["harga"] ?> )'><?php if ($snack[$i]["status"] == 0) {
                                           echo "Habis";
                                         } else {
                                           echo "Tambah";
                                         } ?></button>

                              </div>
                            </div>
                            <?php
                          endif;
                        endfor; ?>
                        <!--Kopi End-->
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="ftco-gallery" id="galeri">
      <div class="container-wrap">
        <div class="heading-section ftco-animate text-center">
          <span class="subheading">Gallery</span>
          <h2 class="mb-4">Galeri Selver's</h2>
        </div>
        <div class="row no-gutters">
          
          <div class="col-md-3 ftco-animate">
            <a disabled class="gallery img d-flex align-items-center"
              style="background-image: url(<?php echo base_url() ?>/public/front_coffeeshop/images/cafe1.jpg);">
            </a>
          </div>
          
        </div>
      </div>
    </section> -->

    <!-- <section class="ftco-section" id="pemilik">
      <div class="container-xxl pt-5 pb-3">
        <div class="container">
          <div class="heading-section text-center ftco-animate">
            <span class="subheading">Founders</span>
            <h2 class="mb-4">Pemilik Maju Jaya Elektronik</h2>
          </div>
          <div>
            <center>
              <div class="col-lg-3 col-md-6 ftco-animate">
                <div class="team-item text-center rounded overflow-hidden">
                  <div class="rounded-circle overflow-hidden m-4">
                    <img class="img-fluid" src="<?php echo base_url() ?>/public/front_coffeeshop/images/p.jpg"
                      alt="">
                  </div>
                  <h5>Ujang</h5>
                  <span>Anak Nicola Tesla</span>
                  <ul class="ftco-footer-social list-unstyled mt-3">
                    <li class="ftco-animate"><a href="#pemilik"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#pemilik"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#pemilik"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </center>
          </div>
        </div>
      </div>
    </section> -->

    <footer class="ftco-footer ftco-section img" id="informasi">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Social Media</h2>
              <p>Jangan lupa follow social media kami</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#informasi"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#informasi"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#informasi"><span class="icon-youtube"></span></a></li>
                <li class="ftco-animate"><a href="#informasi"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Informasi</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Jl. Karya Bakti III, Sukamelang, Subang (belakang Terminal Subang)</span></li>
                  <li><span class="icon icon-phone"></span><span class="text">0851 5527 8021</span></li>
                  <li><span class="icon icon-envelope"></span><span class="text">Majujaya@gmail.com</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              &copy;
              <script>document.write(new Date().getFullYear());</script> Store | Staff only
              <a type="button" class="text-warning" onclick="bukaModalLogin()"><i
                  class="mdi mdi-account-check"></i>Login</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="modalKeranjang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pesanan</h5>
          </div>
          <div class="modal-body p-0 text-center">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-warning text-white">Nama</span>
                      <input type="text" id="nama" class="" style=" width:150px;" Amount (to the nearest
                        dollar)>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="col-6">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-warning text-white">No Meja</span>
                      <input type="number" id="noMeja" class="" style=" width:140px;"
                        aria-label="Amount (to the nearest dollar)">
                    </div>

                  </div>
                </div>
              </div> -->
            </div>
            <div style="overflow: auto">
              <table class=" text-center bg-white" width="100%" id="">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Jml</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Hapus</th>
                  </tr>
                </thead>
                <tbody id="tabelPesanan">
                  <td colspan="5">Data Kosong</td>
                </tbody>
              </table>
            </div>
            <b id="peringatan" class="badge badge-danger">Silahkan isi nama.</b><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="tutupModalKeranjang()">Tutup</button>
            <button type="button" class="btn btn-warning" onclick="prosesTransaksi()" id="simpanTransaksi">Pesan</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <style>
      .modal {
        overflow-y: auto;
      }
    </style>
    <div class="modal fade" id="modalSelesai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pesanan Sedang Diproses...:)</h5>
          </div>
          <div class="modal-body">
            Atas nama <b id="namaPemesan"></b> dengan lokasi meja <b id="lokasiMeja"></b>.
            <br><br>Menu Pembayaran: <br>

            <button onclick="showBankNumber()" style="border: none;"><img
                src="<?php echo base_url() ?>/public/pembayaran/bri.png" width="65" alt=""></button>
            <div id="bankNumber" style="display:none; border: none;" data-inline="true">
              Nomor rekening untuk pembayaran BRI: <br>
              1234-5678-9012-3456 a.n Mewtwo
            </div>
            <script>
              function showBankNumber() {
                var bankNumber = document.getElementById("bankNumber");
                if (bankNumber.style.display === "none") {
                  bankNumber.style.display = "block";
                } else {
                  bankNumber.style.display = "none";
                }
              }
            </script>

            <button onclick="showBankNumber2()" style="border: none;"><img
                src="<?php echo base_url() ?>/public/pembayaran/dana.png" width="65" alt=""></button>
            <div id="bankNumber2" style="display:none; border: none;" data-inline="true">
              Nomor rekening untuk pembayaran Dana: <br>
              0851-5527-8021 a.n Mewtwo
            </div>
            <script>
              function showBankNumber2() {
                var bankNumber = document.getElementById("bankNumber2");
                if (bankNumber.style.display === "none") {
                  bankNumber.style.display = "block";
                } else {
                  bankNumber.style.display = "none";
                }
              }
            </script>

            <button onclick="showBankNumber3()" style="border: none;"><img
                src="<?php echo base_url() ?>/public/pembayaran/paypal.png" width="65" alt=""></button>
            <div id="bankNumber3" style="display:none; border: none;" data-inline="true">
              Email untuk pembayaran Paypal: <br>
              Mewwtwo@gmail.com
            </div>
            <script>
              function showBankNumber3() {
                var bankNumber = document.getElementById("bankNumber3");
                if (bankNumber.style.display === "none") {
                  bankNumber.style.display = "block";
                } else {
                  bankNumber.style.display = "none";
                }
              }
            </script>
            <br>
            <i>langsung dibayar ya, Terima kasih... </i>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" onclick="tutupModalSelesai()">Siap :)</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">Login admin.</h5>
          </div>
          <div class="modal-body">
            <div id="errorLogin" class="mb-3"></div>
            <form action="">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-warning">Username</span>
                  </div>
                  <select id="idUser" class="" style="width:200px;">
                    <?php for ($i = 0; $i < count($user); $i++) {
                      echo "<option value='" . $user[$i]["id"] . "'>" . $user[$i]["nama"] . "</option>";
                    } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-warning ">Password&nbsp;</span>
                  </div>
                  <input type="password" style="width:201px;" id="pass" class=" text-dark"
                    aria-label="Amount (to the nearest dollar)">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="tutupModalLogin()">Batal</button>
            <button type="button" class="btn btn-warning" onclick="login()" id="simpanTransaksi">Log in</button>
          </div>
        </div>
      </div>
    </div>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
          stroke="#F96D00" />
      </svg></div>
  </main>
</body>

</html>



</html>
<script src="<?php echo base_url() ?>/public/js/jquery/jquery.min.js"></script>
<script>
  var pesanan = [];
  var ditemukan = false
  var jmlPesanan = 0

  function bukaModalKeranjang() {
    tampilkanPesanan()
    $("#modalKeranjang").modal("show")
    $("#peringatan").hide()
  }

  function bukaModalLogin() {
    $("#modalLogin").modal("show")
  }

  function login() {
    idUser = $("#idUser").val()
    pass = $("#pass").val()

    if ($("#idUser").val() == "") {
      $("#idUser").focus();
    }
    if ($("#idUser") & $("#pass").val() == "") {
      $("#idUser") & $("#pass").focus();
    } else {
      $.ajax({
        type: 'POST',
        data: 'idUser=' + idUser + '&pass=' + pass,
        url: '<?= base_url() ?>/dashboard/auth',
        dataType: 'json',
        success: function (data) {
          if (data == "") {
            window.location.href = "menu";
          } else {
            $("#errorLogin").html(data)
          }
        }
      });
    }
  }

  function prosesTransaksi() {
    var nama = $('#nama').val();
    var noMeja = $('#noMeja').val();
    if (nama == "") {
      $("#nama").focus()
      $("#peringatan").show()
    } else if (noMeja == "") {
      $("#noMeja").focus()
      $("#peringatan").show()
    } else {
      $("#simpanTransaksi").html('<i class="mdi mdi-reload fa-pulse"></i> Memproses..')
      $.ajax({
        type: 'POST',
        url: '<?= base_url() ?>/dashboard/tambahPesanan',
        data: {
          'pesanan': pesanan,
          'nama': nama,
          'noMeja': noMeja
        },
        dataType: 'json',
        success: function (data) {
          $("#modalKeranjang").modal("hide")
          pesanan = [];
          $('#nama').val("");
          $('#noMeja').val("");
          tampilkanPesanan();

          $("#simpanTransaksi").html('Pesan dan Bayar')
          $("#namaPemesan").html(nama)
          $("#lokasiMeja").html(noMeja)
          $("#modalSelesai").modal("show")
        }
      });
    }
  }

  function tutupModalKeranjang() {
    $("#modalKeranjang").modal("hide")
  }

  function tutupModalSelesai() {
    $("#modalSelesai").modal("hide")
  }

  function tutupModalLogin() {
    $("#modalLogin").modal("hide")
  }

  function tambahPesanan(id, nama, harga) {
    ditemukan = false
    jmlPesanan = 0
    for (let i = 0; i < pesanan.length; i++) {
      if (pesanan[i][0] == id) {
        pesanan[i][2] += 1
        ditemukan = true
      }
      jmlPesanan += pesanan[i][2]
    }
    if (ditemukan == false) {
      pesanan.push([id, nama, 1, harga])
      jmlPesanan += 1
    }

    $("#jmlPesanan").html("(" + jmlPesanan + ")")
  }

  function tampilkanPesanan() {
    var isiPesanan = ""

    for (let i = 0; i < pesanan.length; i++) {
      isiPesanan += "<tr><td>" + pesanan[i][1] + "</td><td>" + pesanan[i][2] + "</td><td>" + formatRupiah(pesanan[i][3].toString()) + "</td><td>" + formatRupiah((pesanan[i][2] * pesanan[i][3]).toString()) + "</td><td><button href='#' class='badge badge-danger' onClick='hapusPesanan(" + i + ")'>x</button></td></tr>"
    }
    if (pesanan.length < 1) {
      $("#simpanTransaksi").prop("disabled", true)
      isiPesanan = "<td colspan='5'>Pesanan Masih Kosong :)</td>"
    } else {
      $("#simpanTransaksi").prop("disabled", false)
    }

    $("#tabelPesanan").html(isiPesanan)
  }

  function hapusPesanan(id) {
    pesanan.splice(id, 1)
    tampilkanPesanan()
  }

  function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  }
</script>

<script src="https://kit.fontawesome.com/a10474845d.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/aos.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/jquery.animateNumber.min.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/jquery.timepicker.min.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/google-map.js"></script>
<script src="<?php echo base_url() ?>/public/front_coffeeshop/js/main.js"></script>