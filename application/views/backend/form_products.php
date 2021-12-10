


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      FORM PRODUCT
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('backend')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Form Product</li>
    </ol>
  </section>

  <section class="content">


    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Form Product</h3>
        <!-- Alert -->
        <?php if ($this->session->flashdata('flash')) : ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success" role="alert">
                Data Product<strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>

          </div>
        <?php endif; ?>
        <div>
          <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal" style="float: right;"><i class="fa fa-plus"></i> Tambah Data</button>
        </div>
      </div>



      <!-- /.box-header -->
      <div class="box-body table-responsive">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Gambar Product</th>
              <th>Nama Product</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>


          <tbody>
            <?php 
            $count = 0;
            foreach ($tampil as $data) {
             $count = $count + 1;
             ?>
             <tr>
              <td><?php echo $count;?></td>
              <td><img src="<?php echo base_url(). 'asset/produk/' . $data->foto_produk?>" style="height: 100px;"></td>
              <td><?php echo $data->nama_produk?></td>
              <td><?php echo $data->harga?></td>
              <td><?php echo $data->jumlah?></td>
              <td><?php echo $data->desc?></td>
              <td><a href="<?php echo base_url('backend/form_editproduk/'). $data->id?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a> <a href="<?php echo base_url('backend/aksiHapusProduct/'). $data->id?>"  Onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data ini!')" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
            </tr>

          <?php } ?>
        </tbody>


      </table>

    </div>
    <!-- /.box-body -->
  </div>

</section>

<!-- /.content -->
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <?php
     echo form_open_multipart('backend/aksiInsertProduct');
     ?>
     <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel">Form Tambah Data</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">

     <div class="form-group">
      <label for="">Gambar Product</label>
      <input type="file"  name="foto_produk" required>
    </div>     
    <div class="form-group">
      <label>Nama Product</label>
      <input type="text" name="nama_produk" class="form-control" placeholder="Nama Product" required>   
    </div>
    <div class="form-group">
      <label>Jumlah</label>
      <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" required>    
    </div>
    <div class="form-group">
      <label>harga</label>
      <input type="text" name="harga" class="form-control" placeholder="Harga" required>    
    </div>
    <div class="form-group">
      <label>Deskripsi</label>
      <textarea class="form-control" name="desc" placeholder="Deskripsi" required></textarea>  
    </div>

  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>    
  </div>


  <?php echo form_close(); ?>

</div>
</div>
</div>








