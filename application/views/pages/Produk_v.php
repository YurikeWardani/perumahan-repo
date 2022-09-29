  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Produk</h2>
        <ol>
          <li><a href="<?php echo ('Beranda') ?>">Beranda</a></li>
          <li>Produk</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Daftar Perumahan</h2>
        </div>
        <div class="row gy-4">
          <?php foreach ($perumahan->result() as $result) { ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative"  >
               <img src="assets/img/slider2.jpg" class="img-fluid" alt="">
               <div class="icon" style="margin-top: -70px">
                <i class="fa-solid fa-mountain-city" style=""></i>
              </div>
              <h3><?php echo $result->nama_perumahan ?></h3>
              <p><?php echo $result->alamat_perumahan ?></p>
              <a href="<?php echo site_url('Produk/produkrumah/' . $result->id_perumahan) ?>" class="readmore stretched-link">Lihat Semua Produk <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
        <?php } ?>
      </div>
    </div>
  </section><!-- End Services Section -->
</main><!-- End #main -->
