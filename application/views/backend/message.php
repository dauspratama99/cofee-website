


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      FORM MESSAGE
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('backend')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Form Message</li>
    </ol>
  </section>

  <section class="content">


    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Form Message</h3>
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
        <div>

        </div>
      </div>



      <!-- /.box-header -->
      <div class="box-body table-responsive">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Pesan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
           <?php 
           $count = 0;
           foreach ($message as $data) {
             $count = $count + 1;
             ?>
             <tr>
              <td><?php echo $count;?></td>
              <td><?php echo $data->nama;?></td>
              <td><?php echo $data->email;?></td>
              <td><?php echo $data->kepala;?></td>
              <td><?php echo $data->isi_pesan;?></td>
              <td><a href="<?php echo base_url('backend/aksiHapusMessage/'). $data->id?>"  Onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data ini!')" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
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
     echo form_open_multipart('backend/aksiInputGalery');
     ?>
     <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel">Form Tambah Data</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">

     <div class="form-group">
      <label for="">Gambar Galery</label>
      <input type="file"  name="foto_galery" required>
    </div>    
    <div class="form-group">
      <label>Nama Galery</label>
      <input type="text" class="form-control" name="nama_galery" placeholder="Nama Galery" required>
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








