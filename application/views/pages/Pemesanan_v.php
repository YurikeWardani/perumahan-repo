  <main id="main">

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Pemesanan</h2>
        <ol>
          <li><a href="<?php echo ('Beranda') ?>">Beranda</a></li>
          <li>Pemesanan</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->
     <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">
          <div class="col-lg-3 d-flex align-items-center" data-aos="fade-up"></div>

          <div class="col-lg-5 align-items-center" data-aos="fade">

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

            <form action="<?php echo ('Loginuser/aksi_login')?>" class="bg-white p-5 contact-form" method="POST" class="php-email-form">  
               <span class=""><h5><b>Login Marketing</b></h5></span><br>
               <div class="row gy-3">
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
              </div>
              <div class="col-md-12 form-group">
               <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="col-md-12 form-group text-center">
                <input type="submit" value="Login" class="btn btn-warning py-2 px-5 rounded" style="color: white;">
              </div></div>
            </form>

          </div><!-- End Quote Form -->

          <div class="col-lg-3 d-flex align-items-center" data-aos="fade-up"></div>
        </div>

      </div>
    </section><!-- End Get Started Section -->

  </main><!-- End #main -->
