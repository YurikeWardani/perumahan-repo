  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Produk</h2>
        <ol>
          <li><a href="<?php echo ('Beranda') ?>">Beranda</a></li>
          <li><a href="<?php echo ('Produk') ?>">Produk</a></li>
          <li><a href="">Produk Perumahan</a></li>

        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="recent-blog-posts" class="recent-blog-posts section-bg">
      <div class="container" data-aos="fade-up">
        <div class=" section-header">
          <h2>PRODUK</h2>
          <p> Pilihan produk </p>
        </div>
        <div class="row gy-5">
         <?php $a=0; $b=3; 
         foreach ($produk->result() as $result) { ?>
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100" >
            <div class="post-item position-relative h-100" style="background-color: white">

              <div class="post-img position-relative overflow-hidden">
                <img src="<?php echo base_url('assets/'); ?>/img/<?php echo $result->gambar_produk ?>" class="img-fluid" alt="">
                <span class="post-date">Rp. <?php echo number_format($result->harga_produk) ?>,-</span>
              </div>

              <div class="post-content d-flex flex-column">
                <h3 class="post-title"> 
                  <i>Tipe:</i> <span class="ps-2"><?php echo $result->tipe ?></span>
                </h3>
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bed"></i> <span class="ps-2"><?php echo $result->kamar_tidur ?></span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="fa-solid fa-shower"></i> <span class="ps-2"><?php echo $result->kamar_mandi ?></span>
                  </div>
                </div>
                <hr>

                <a href="<?php echo site_url('Produk/detailproduk/'.$result->id_produk) ?>" class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End post item -->
        <?php } ?>
      </div>
    </div>
  </section>

</main><!-- End #main -->
