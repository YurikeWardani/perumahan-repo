  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Marketing</h2>
        <ol>
          <li><a href="<?php echo ('Beranda') ?>">Beranda</a></li>
          <li>Marketing</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Temukan Kami</h2>
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
