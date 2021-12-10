<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(<?= base_url('asset/images/banner/21.jpeg')?>);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url()?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Product <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Product </h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      <?php 
      foreach ($produk as $data) {
        ?>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry" style="width: 100%;">
            <a href="#" class="block-20" style="background-image: url('<?php echo base_url(). 'asset/produk/' . $data->foto_produk?>');">
            </a>
            <div class="text" style="min-height: 18em;">
              <div class="d-flex align-items-center mb-4 topp">
                <div class="one mr-3">
                  <span class="day" style="font-size: 15px;">Order Now</span>
                </div>
              </div>

              <h3 class="heading text-center" style="min-height: 3em;">
                <i class="fa fa-coffee" style="font-size:20px; color: #153374;"></i>
                <p style="font-size: 15px; color: #000000;"> <?= $data->nama_produk?> </p>
              </h3>
              <div class="row">
               <!--  <div class="col-sm-6">
                  <i class="fa fa-usd" style="font-size:20px; color: #153374;"></i>
                  Rp . <?= $data->harga?>
                </div>
                <div class="col-sm-6">
                  <i class="fa fa-user-o" style="font-size:20px; color: #153374;"></i>
                  <?= $data->jumlah?>
                </div> -->
              </div>
              <span style="color: black !important;"><hr></span>
              <div class="div">
                <p><?= $data->desc?> </p>
              </div>
              <div class="mx-auto" class="text-align: center;">
                <a href="https://api.whatsapp.com/send?phone=6281380825399&text=Hello I'm Interested on your Product!" class="text-center btn btn-primary btn-block" target="_blank"> <i class="fa fa-whatsapp"></i> Order Now</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <?php echo $pagination; ?>
          <!-- <ul>
            <li class="active"><a href=""></a></li>
          </ul> -->
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
