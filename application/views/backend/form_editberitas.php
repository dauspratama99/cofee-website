


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      FORM EDIT BERITA
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('backend')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Form Edit Berita</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">


    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Form Edit Data Berita</h3>

        <!-- Alert -->
        <?php if ($this->session->flashdata('flash')) : ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success" role="alert">
                Data Berita<strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
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
        echo form_open_multipart('backend/aksiUpdateBerita');
        ?>
        <div class="box-body">
          <div class="form-group">
            <label for="">Gambar Berita</label>
            <input type="hidden" name="id" value="<?= $berita->id?>">
            <input type="file"  name="gambar" required>
          </div>
          <div class="">
            <img src="<?= base_url('asset/berita/' . $berita->gambar) ?>"   id="foto"  alt="Gambar" class="thumbnail" width="170" height="180">

          </div>  
          <div class="form-group">
            <label>Tanggal Upload</label>
            <input type="date" name="tgl_upload" class="form-control" value="<?= $berita->tgl_upload?>" required>    
          </div>   
          <div class="form-group">
           <label>Judul Berita</label>
           <input type="text" name="judul" class="form-control" value="<?= $berita->judul?>" required>    
         </div>

         <div class="form-group">
          <label>Upload By</label>
          <input type="text" name="upload_by" class="form-control" value="<?= $berita->upload_by?>" required>      
        </div>

        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control" name="desc" required><?= $berita->desc?></textarea>      
        </div>     

        <!-- /.box-body -->

        <div class="box-footer mx-2">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="<?= base_url('backend/form_berita') ?>" class="btn btn-warning">Kembali</a>
        </div>
        <?php echo form_close();?>
      </div>


      <!-- /.box-header -->

      <!-- /.box-body -->
    </div>

  </section>  
  <!-- /.content -->
</div>








