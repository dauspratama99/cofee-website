


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      FORM EDIT GALERY
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('backend')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Form Edit Galery</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">


    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Form Edit Data Galery</h3>

        <!-- Alert -->
        <?php if ($this->session->flashdata('flash')) : ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success" role="alert">
                Data galery<strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
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
        echo form_open_multipart('backend/aksiUpdateGalery');
        ?>
        <div class="box-body">
          <div class="form-group">
            <label for="">Gambar Galery</label>
            <input type="hidden" name="id" value="<?= $galerys->id?>">
            <input type="file"  name="foto_galery" required>
          </div>
          <div class="">
            <img src="<?= base_url('asset/galery/' . $galerys->foto_galery) ?>"   id="foto"  alt="Gambar" class="thumbnail" width="170" height="180">

          </div>     
          <div class="form-group">
           <label>Nama Galery</label>
           <input type="text" name="nama_galery" class="form-control" value="<?= $galerys->nama_galery?>" required>    
         </div>   

         <!-- /.box-body -->

         <div class="box-footer mx-2">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="<?= base_url('backend/form_galery') ?>" class="btn btn-warning">Kembali</a>
        </div>
        <?php echo form_close();?>
      </div>


      <!-- /.box-header -->

      <!-- /.box-body -->
    </div>

  </section>  
  <!-- /.content -->
</div>








