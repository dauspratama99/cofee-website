

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      FORM EDIT PRODUK
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('backend')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Form Edit Produk</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">


    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Form Edit Data Produk</h3>

        <!-- Alert -->
        <?php if ($this->session->flashdata('flash')) : ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success" role="alert">
                Data produk<strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
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
        echo form_open_multipart('backend/aksiUpdateProduct');
        ?>
        <div class="box-body">
          <div class="form-group">
            <label for="">Gambar Product</label>
            <input type="hidden" name="id" value="<?= $produk->id?>">
            <input type="file"  name="foto_produk" required>
          </div>
          <div class="">
            <img src="<?= base_url('asset/produk
            /' . $produk->foto_produk) ?>"   id="foto"  alt="Gambar" class="thumbnail" width="170" height="180">

          </div>     
          <div class="form-group">
           <label>Nama Product</label>
           <input type="text" name="nama_produk" class="form-control" value="<?= $produk->nama_produk?>" required>    
         </div>

         <div class="form-group">
          <label>Jumlah</label>
          <input type="text" name="jumlah" class="form-control" value="<?= $produk->jumlah?>" required>      
        </div>

        <div class="form-group">
          <label>harga</label>
          <input type="text" name="harga" class="form-control" value="<?= $produk->harga?>" required>      
        </div>

        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control" name="desc" required><?= $produk->desc?></textarea>      
        </div>     

        <!-- /.box-body -->

        <div class="box-footer mx-2">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="<?= base_url('backend/form_product') ?>" class="btn btn-warning">Kembali</a>
        </div>
        <?php echo form_close();?>
      </div>


      <!-- /.box-header -->

      <!-- /.box-body -->
    </div>

  </section>  
  <!-- /.content -->
</div>








