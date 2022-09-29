
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">

  <div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
          <!-- <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>UpConstruction</span></h2>
            <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div> -->
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <?php foreach ($slider->result() as $result) : ?>
        <div class="carousel-item active" style="background-image: url(assets/img/<?php echo $result->nama_slider ?>)"></div>
      <?php endforeach; ?>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

   <section id="recent-blog-posts" class="recent-blog-posts section-bg">
    <div class="container" data-aos="fade-up">
      <div class=" section-header">
        <h2>PRODUK</h2>
        <p>Kami Menyediakan</p>
      </div>
      <div class="row gy-5">
        <?php $a=0; $b=3; 
        foreach ($produk->result() as $result) {
          $a++;
          if ($a<=$b) { ?>
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100" >
              <div class="post-item position-relative h-100" style="background-color: white">

                <div class="post-img position-relative overflow-hidden">
                  <img src="assets/img/<?php echo $result->gambar_produk ?>" class="img-fluid" alt="">
                  <span class="post-date">Rp. <?php echo number_format($result->harga_produk) ?>,-</span>
                </div>

                <div class="post-content d-flex flex-column">
                  <h3 class="post-title"><?= $result->nama_perumahan?></h3>
                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="fa-solid fa-bed"></i> <span class="ps-2"><?php echo $result->kamar_tidur ?></span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="fa-solid fa-shower"></i> <span class="ps-2"><?php echo $result->kamar_mandi ?></span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                      <i>Tipe:</i> <span class="ps-2"><?php echo $result->tipe ?></span>
                    </div>
                  </div>
                  <hr>

                  <a href="<?php echo site_url('Produk/detailproduk/'.$result->id_produk) ?>" class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End post item -->
          <?php } } ?>
        </div>
      </div>
    </section>

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Marketing</h2>
          <p>TEMUKAN KAMI</p>
        </div>

        <div class="row gy-5">

          <?php foreach ($sosmed->result() as $result) : ?>
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/<?php echo $result->logo ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href="<?php echo $result->link ?>"><i class="bi bi-link-45deg" ></i></a>
                </div>
              </div>
              <div class="member-info text-center">
                <h4><?php echo $result->nama_sosmed ?></h4>
              </div>
            </div><!-- End Team Member -->
          <?php endforeach; ?>


        </div>
      </div>
    </section><!-- End Our Team Section -->
  </main><!-- End #main -->
