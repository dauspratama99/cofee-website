


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      FORM EDIT SLIDER
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('backend')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Form Edit Slider</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">


    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Form Edit Data Slider</h3>

        <!-- Alert -->
        <?php if ($this->session->flashdata('flash')) : ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success" role="alert">
                Data Tampilan<strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>

          </div>
        <?php endif; ?>

      </div>

      <!-- general form elements -->
      <div class="">

        <!-- /.box-header -->
        <!-- form start -->
        <?php
        echo form_open_multipart('backend/aksiUpdate');
        ?>
        <div class="box-body">
          <div class="form-group">
            <label for="">Gambar Tampilan Depan</label>
            <p style="color: red;">saat update gambar wajib di isi</p>
            <input type="hidden" name="id" value="<?php echo $slider->id?>">
            <input type="file"  name="gambar" required>
          </div> 
          <div class="">
            <img src="<?= base_url('asset/img/' . $slider->gambar) ?>"   id="foto"  alt="Gambar" class="thumbnail" width="170" height="180">

          </div>     
          <div class="form-group">
            <label>Nama Web</label>
            <input type="text" name="nama_web" class="form-control" placeholder="Nama Web" value="<?php echo $slider->nama_web?>" required>   
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" name="desc" class="form-control" placeholder="Deskripsi" value="<?php echo $slider->desc?>" required>    
          </div>     

          <!-- /.box-body -->

          <div class="box-footer mx-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('backend/form_slider') ?>" class="btn btn-warning">Kembali</a>
          </div>
          <?php echo form_close();?>
        </div>


        <!-- /.box-header -->

        <!-- /.box-body -->
      </div>

    </section>  
    <!-- /.content -->
  </div>

 <!--  <script>

    var img = document.getElementById("foto");
    function ganti() {
      img.src= '<?= base_url('asset/img/' . $makanan->Gambar) ?>';
    }

  </script> -->







