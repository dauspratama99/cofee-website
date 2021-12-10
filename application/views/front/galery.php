<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(<?= base_url('asset/images/banner/gambar_tampilan.png')?>);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url()?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Galery <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Galery</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      <?php
      foreach ($galerys as $data) {
        ?>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry" style="width: 100%;">
            <a href="" class="block-20"
            style="background-image: url('<?php echo base_url(). 'asset/galery/' . $data->foto_galery?>');">
          </a>
          <div class="text" style="min-height: 5em;">

            <h3 class="heading" style="min-height: 3em;"><a
              href=""><?= $data->nama_galery?></a></h3> 
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <?php echo $pagination; ?>
            <!-- <li class="active"><a href="news-hal-1">1</a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- cara pesan -->
<section class="ftco-intro-tes" style="background-image: url(<?= base_url('asset/images/banner/banner_bawah.jpg')?>">
  <div class="overlay-tes"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading" style="color: white;font-family: 'arizona', cursive;">"When words don't speak much anymore, a cup of coffee can be an intermediary and lighten the mood".</h2>
      </div>
    </div>
  </div>
</section>
