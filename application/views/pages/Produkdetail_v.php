  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style type="text/css">
    .bi-check-circle-fill{
      color: orange;
      padding-right: 10px;
    }
    .tab2-isi{
      color: orange; 
      font-size: 14px;
    }
    .mySlides { width: 100%; height: 100%; display: block;}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}

  </style>


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo base_url('assets/'); ?>img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Produk</h2>
        <ol>
          <li><a href="<?php echo site_url('Beranda') ?>">Beranda</a></li>
          <li><a href="<?php echo site_url('Produk') ?>">Produk</a></li>
          <li><a href="">Detail Produk</a></li>

        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="features" class="features section-bg">

      <div class="container" data-aos="fade-up">
        <div style="text-align: right;">
          <h2>Rumah Tipe <?php echo $detail->tipe ?></h2>
          <h4 style=" color: white;"><b style="background-color: orange; padding: 0 10px 0; ">Rp. <?php echo number_format($detail->harga_produk) ?>,-</b></h4>
          <br>
        </div>
        <ul class="nav nav-tabs row  g-2 d-flex">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Spesifikasi Rumah</h4>
            </a>
          </li><!-- End tab nav item -->
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Informasi Dasar</h4>
            </a>
          </li><!-- End tab nav item -->
        </ul>


        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100" >
            <div class="tab-content" style="background-color: white; padding-left: 20px; padding-top: -20px;">
              <div class="tab-pane " id="tab-1">
                <div class="row">
                  <!-- <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100" > -->
                    <div class="row">
                      <div class="col-md-6">
                        <ul class="features">
                          <li class="check"><span class="bi bi-check-circle-fill"></span>Tipe: <b><?php echo $detail->tipe ?></b></li>
                          <li class="check"><span class="bi bi-check-circle-fill"></span>Lantai: <b><?php echo $detail->lantai ?></b></li>
                          <li class="check"><span class="bi bi-check-circle-fill"></span>Kamar Tidur: <b><?php echo $detail->kamar_tidur ?></b></li>
                          <li class="check"><span class="bi bi-check-circle-fill"></span>Kamar Mandi: <b><?php echo $detail->kamar_mandi ?></b></li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul class="features">
                          <li class="check"><span class="bi bi-check-circle-fill"></span>Daun Pintu: <b><?php echo $detail->daun_pintu ?></b></li>
                          <li class="check"><span class="bi bi-check-circle-fill"></span>Rangka Atap: <b><?php echo $detail->rangka_atap ?></b></li>
                          <li class="check"><span class="bi bi-check-circle-fill"></span>Kusen: <b><?php echo $detail->kusen ?></b></li>
                        </ul>
                      </div>
                      <div class="col-md-12">
                        <ul class="features">
                          <li class="check"><span class="bi bi-check-circle-fill"></span>Pagar:<b> <?php echo $detail->pagar ?></b></li>
                          <li class="check"><span class="bi bi-check-circle-fill"></span>Plafon: <b><?php echo $detail->plafon ?></b></li>
                          <li class="check"><span class="bi bi-check-circle-fill"></span>Carpot:<b> <?php echo $detail->carpot ?></b></li>                                
                          <li class="check"><span class="bi bi-check-circle-fill"></span>Dinding: <b><?php echo $detail->dinding ?></b></li>
                        </ul>
                        <!-- </div> -->
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane active show" id="tab-2">
                  <div class="row">
                    <!-- <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100" > -->
                      <div class="row">
                        <div class="col-md-12">
                          <ul class="features">
                            <li class="check"><span class="tab2-isi">Nama Perumahan </span></li>
                            <b><?= $detail->nama_perumahan ?></b></li>
                            <li class="check"><span class="tab2-isi">Listrik </span></li>
                            <b><?php echo $detail->listrik ?></b></li>
                            <li class="check"><span class="tab2-isi">Pondasi</span></li>
                            <b><?= $detail->pondasi ?></b></li>
                            <li class="check"><span class="tab2-isi">Dinding </span></li>
                            <b><?php echo $detail->dinding ?></b></li>
                            <li class="check"><span class="tab2-isi">Sanitasi </span></li>
                            <b><?php echo $detail->sanitasi ?></b></li>
                          </ul>
                        </div>
                      </div>
                    </div></div>
                  </div>
                </div>

                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100" >
                  <div class="w3-content w3-display-container" style="width:100%; height: 100%;">
                    <img class="mySlides" src="<?php echo base_url('assets/'); ?>img/<?php echo $detail->slider1 ?>" style="width:100%">
                    <img class="mySlides" src="<?php echo base_url('assets/'); ?>img/<?php echo $detail->slider2 ?>" style="width:100%">
                    <img class="mySlides" src="<?php echo base_url('assets/'); ?>img/<?php echo $detail->slider3 ?>" style="width:100%">
                    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                      <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                      <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section><!-- End Features Section -->

        </main><!-- End #main -->

        <script>
          var slideIndex = 1;
          showDivs(slideIndex);

          function plusDivs(n) {
            showDivs(slideIndex += n);
          }

          function currentDiv(n) {
            showDivs(slideIndex = n);
          }

          function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
              if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";  
                }
                for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" w3-white", "");
                }
                x[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " w3-white";
              }
            </script>