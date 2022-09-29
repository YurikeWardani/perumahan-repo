  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Lokasi</h2>
        <ol>
          <li><a href="<?php echo ('Beranda') ?>">Beranda</a></li>
          <li>Lokasi</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="contact" class="contact" style="padding-bottom: 10%;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 mt-1">
         <div class="col-lg-6">
            <div id="map" style="border:0; width: 384px; height: 384px;" allowfullscreen></div>
          </div><!-- End Google Maps -->

         
         <div class="col-lg-6">
          <form action="#" class="php-email-form" id="ordered_data">
           <center><h4><b>  INFO LOKASI</b></h4></center><br>
           <?php foreach ($perumahan->result() as $result) : ?>
            <input type="hidden" id="lat_<?= $result->id_perumahan ?>" value="<?= $result->lat ?>">
            <input type="hidden" id="long_<?= $result->id_perumahan ?>" value="<?= $result->long ?>">
            <a href="javascript:;" onclick="getMaps('<?= $result->lat ?>', '<?= $result->long ?>')" class="mb-0 font-weight-bold"><b><?php echo $result->nama_perumahan ?></b><br></a>
            <?php echo $result->alamat_perumahan ?><br><br>
          <?php endforeach; ?>
        </form>
      </div><!-- End Contact Form -->
    </div>

  </div>
</section><!-- End Contact Section -->


</main><!-- End #main -->

<script>
  window.onload = function() {
    let ordered_data = $('#ordered_data');

    if (ordered_data.length > 0) {
      if (ordered_data.children().length > 0) {
        let firstChild = ordered_data.children().children();
        let getLat = $(firstChild[0]).val();
        let getLong = $(firstChild[1]).val();

        let createFrame = document.createElement('iframe');
        createFrame.setAttribute('width', 635);
        createFrame.setAttribute('height', 450);
        createFrame.setAttribute('frameborder', 0);
        createFrame.setAttribute('aria-hidden', false);
        createFrame.setAttribute('tabindex', 0);
        createFrame.setAttribute('src', `https://maps.google.com/maps?q=7°51'20.8"S,112°42'12.7"E&hl=id;z=14&output=embed`);

        $('#map').html(createFrame);
      }
    }
  };

  function getMaps(lat, long) {
    let createFrame = document.createElement('iframe');
    createFrame.setAttribute('width', 635);
    createFrame.setAttribute('height', 450);
    createFrame.setAttribute('frameborder', 0);
    createFrame.setAttribute('aria-hidden', false);
    createFrame.setAttribute('tabindex', 0);
    createFrame.setAttribute('src', `https://maps.google.com/maps?q=${lat},${long}&hl=id;z=14&output=embed`);

    $('#map').html(createFrame);
  }
</script>