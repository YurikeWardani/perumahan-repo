<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HOPEcreative</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/flaticon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>
<script type="text/javascript">
  window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
      $recaptcha.setAttribute("required", "required");
    }
  };
</script>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center"style="background-color: #000000; position: fixed; padding: 20px 0;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo ('Beranda') ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>HOMEcreative<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo site_url('Loginuser/logout') ?>">Logout</a></li>
        </ul>
      </nav><!-- .navbar -->
    </header><!-- End Header -->

 
    <style type="text/css">
      label{
        padding: 8px 0 3px;
        font-weight: bold;
        font-size: small;
        color: dimgray;
      }

    </style>
    <main>

     <section class="ftco-section contact-section section-bg">
      <div class="container">
        <div class="row block-12 justify-content-center">
          <section id="get-started" class="get-started">
            <div class="container" >
              <div class="row justify-content-between gy-4">
                <div class="col-lg-3 d-flex align-items-center" data-aos="fade-up" ></div>
                <div class="col-lg-6" data-aos="fade"  style="padding:60px; background-color: white;">
                  <?php 
                  if($this->session->flashdata('error') !='')
                  {
                   echo '<div class="alert alert-danger" role="alert">';
                   echo $this->session->flashdata('error');
                   echo '</div>';
                 }
                 ?>
                 
                 <?php 
                 if($this->session->flashdata('success_register') !='')
                 {
                   echo '<div class="alert alert-info" role="alert">';
                   echo $this->session->flashdata('success_register');
                   echo '</div>';
                 }
                 ?>
                 <center><h5><b>Profil Marketing</b></h5></center>
                 <form action="<?= base_url('Suratpesan/simpan')?>" class="form" method="POST">
                  <div class="form-group">
                    <label>Nama Marketing</label>
                    <input type="text" class="form-control" value="<?= $this->session->userdata('nama')?>" name="nama_marketing" id="select_marketing" readonly>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Nama Pembeli</label>
                    <input type="text" class="form-control" placeholder="Nama Pembeli" name="nama_pembeli" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">No. Identitas/KTP</label>
                    <input type="number" name="no_identitas" class="form-control" placeholder="No. Identitas/KTP" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Alamat Lengkap</label> 
                    <textarea cols="30" rows="7" class="form-control" placeholder="Alamat Lengkap" name="alamat" required></textarea>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">No. Hp/Whatsapp</label>
                    <input type="number" class="form-control" placeholder="No. HP/Whatsapp" name="no_hp" required>
                  </div><br><br>
                  <center><h5><b>Mengajukan penawaran pesanan :</b></h5></center>
                  <div class="form-group">
                    <label class="font-weight-bold">Perumahan</label>
                    <select name="nama_perumahan" id="select_perumahan" class="form-control" required>
                      <option value="">--- Pilih Perumahan --</option>
                      <?php foreach ($perumahan->result() as $result) : ?>
                        <option value="<?php echo $result->id_perumahan?>"><?php echo $result->nama_perumahan ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Tipe</label>
                    <select name="tipe" id="select_perumahan" class="form-control" required>
                      <option value="">--- Pilih Tipe --</option>
                      <?php foreach ($produk->result() as $result) : ?>
                        <option value="<?php echo $result->tipe ?>"><?php echo $result->tipe ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">No. Blok</label>
                    <input type="text" class="form-control" placeholder="No. Blok" name="no_blok" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Skema Pembayaran</label>
                    <select name="skema_bayar" id="select_bayar" class="form-control" required>
                      <option value="">--- Pilih Skema Pembayaran --</option>
                      <option value="Cash">Cash</option>
                      <option value="Inhouse">Inhouse</option>
                      <option value="KPR">KPR</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Tanggal ITJ</label>
                    <input type="date" name="tanggal_itj" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Sebagai Berikut</label> 
                    <textarea  cols="30" rows="7" class="form-control" placeholder="Detail Pemesanan" name="sbg_berikut" required></textarea>
                  </div>
                  <div class="g-recaptcha" data-sitekey="6LcmcecUAAAAAMT3_IsHPr-ayHagzl1bd-7pKVKP" required></div><br>
                  <div class="form-group text-center">
                    <input type="submit" value="Simpan" class="btn btn-warning py-2 px-5 rounded" style="color: white;">
                  </div>
                </form>
              </div><!-- End Quote Form -->
              <div class="col-lg-3 d-flex align-items-center" data-aos="fade-up"></div>
            </div>

          </div>
        </section><!-- End Get Started Section -->



      </div>
    </div>
  </section>
</main>