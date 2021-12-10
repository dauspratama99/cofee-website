<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(<?= base_url('asset/images/banner/gambar_tampilan.png')?>);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url()?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Berita <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Berita</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
     <?php 
     foreach ($beritas as $data) {
      ?>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
          <a href="" class="block-20" style="background-image: url('<?php echo base_url(). 'asset/berita/' . $data->gambar?>');">
          </a>
          <div class="text" style="min-height: 18em;">
            <!--<div class="d-flex align-items-center mb-4 topp">-->
            <!--  <div class="one mr-3">-->
            <!--    <span class="day"><?= date('d', strtotime($data->tgl_upload))?></span>-->
            <!--  </div>-->
            <!--  <div class="two">-->
            <!--    <span class="yr"><?= date('Y', strtotime($data->tgl_upload))?></span>-->
            <!--    <span class="mon" style="color: white;"><?= date('M', strtotime($data->tgl_upload))?></span>-->
            <!--  </div>-->
            <!--</div>-->
            <h3 class="heading" style="min-height: 3em;"><a href=""><?= $data->judul ?></a></h3>
            <span style="color: black !important;"><?= $data->desc?></span>
            <p><a href="<?= base_url('frontend/detail_berita/'). $data->id?>" class="btn btn-primary btn-block">Read more</a></p>
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
         <!--  <li class="active"><a href="news-hal-1">1</a></li> -->
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
      <!-- <div class="col-md-5 d-flex align-items-center">
        <div class="row">

          <div class="col-md-12 d-flex">
            <a href="https://api.whatsapp.com/send?phone=6282283634856&text=Halo... Saya ingin membeli biji kopi ini!"
            target="_blank" style="border-radius: 5px; background-color: white;" class="p-1 m-1"> <i class="fa fa-whatsapp"></i> 0822-836348-56</a>
          </div>

        </div>
      </div> -->
    </div>
  </div>
</section>
