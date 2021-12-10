      <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(<?= base_url('asset/images/bg_back.png')?>);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url()?>">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="index.html">Berita <i class="fa fa-chevron-right"></i></a></p>
                <h1 class="mb-0 bread">Detail Berita</h1>
              </div>
            </div>
          </div>
        </section>

        <section class="ftco-section ftco-no-pt ftco-no-pb">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 ftco-animate py-md-5 mt-md-5">
                <h2 class="mb-3"><?= $beritaa->judul?></h2>
                <input type="hidden" name="id" value="<?php echo $beritaa->id?>">
                <p>
                  <img src="<?php echo base_url(). 'asset/berita/' . $beritaa->gambar?>" alt="" class="img-fluid">
                </p>

                <span style="color: black !important;"> <p><?= $beritaa->desc?></p>
                </span>
              </div> <!-- .col-md-8 -->
              <div class="col-lg-4 sidebar ftco-animate bg-light py-md-5">
                <div class="sidebar-box ftco-animate">
                  <h3>Recent News</h3>
                  <?php 
                  foreach ($beritas as $data) {
                    ?>
                    <div class="block-21 mb-4 d-flex">
                      <a class="blog-img mr-4" style='background-image: url(<?php echo base_url(). 'asset/berita/' . $data->gambar?>);background-size: cover;'></a>
                      <div class="text">
                        <h3 class="heading"><a href="<?= base_url('frontend/detail_berita/'). $data->id?>"><?= $data->judul?></a></h3>
                        <div class="meta">
                          <div><a href="#"><span class="fa fa-calendar"></span> <?= date('F', strtotime($data->tgl_upload))?> <?= date('d', strtotime($data->tgl_upload))?>, <?= date('Y', strtotime($data->tgl_upload))?></a></div>
                          <div><a href="#"><span class="fa fa-user"></span> <?= $data->upload_by?></a></div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
</section>  <!-- END nav -->