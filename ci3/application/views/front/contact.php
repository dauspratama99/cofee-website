<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(<?= base_url('asset/images/banner/gambar_tampilan.png')?>);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url()?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Contact</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb contact-section mb-4">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-4 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-map-marker"></span>
          </div>
          <h3 class="mb-2">Address</h3>
          <p><?php echo $contact['alamat']?></p>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-phone"></span>
          </div>
          <h3 class="mb-2">Phone Number</h3>
          <p><a href=""><?php echo $contact['telepon']?></a></p>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-paper-plane"></span>
          </div>
          <h3 class="mb-2">E-mail</h3>
          <p><a href=""><?php echo $contact['email']?></a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section ftco-no-pt">
  <div class="container">
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="<?= base_url('frontend/aksiInsertMessageContact')?>" method="POST" class="bg-light p-5 contact-form">


          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Message</h2>
          </div>
          <!-- Alert -->
          <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                  Data Message<strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>

            </div>
          <?php endif; ?>

          <div class="form-group">
            <input type="text" class="form-control" name="nama" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="kepala" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea name="isi_pesan"  cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
          </div>
          <div class="form-group">
            <button type="submit" name="send" class="btn btn-primary py-3 px-5">Send Text</button>
          </div>
        </form>

      </div>

      <div class="col-md-6 d-flex">


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.229198976948!2d100.39547101427327!3d-0.9846203356480341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4ba3580518f7b%3A0xd30b7ea7896c7d8d!2sJl.%20Bakti%20Abri%20No.27%2C%20Pagambiran%20Ampalu%20Nan%20XX%2C%20Kec.%20Lubuk%20Begalung%2C%20Kota%20Padang%2C%20Sumatera%20Barat%2025225!5e0!3m2!1sid!2sid!4v1637634826584!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- cara pesan -->
<section class="ftco-intro-tes" style="background-image: url(<?= base_url('asset/images/banner/banner_bawah.jpg')?>);">
  <div class="overlay-tes"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading" style="color: white;font-family: 'arizona', cursive;">"When words don't speak much anymore, a cup of coffee can be an intermediary and lighten the mood".</h2>
      </div>
     <!--  <div class="col-md-5 d-flex align-items-center">
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




