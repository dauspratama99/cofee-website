


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     CONTACT
   </h1>
   <ol class="breadcrumb">
    <li><a href="<?= base_url('backend')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Form Contact</li>
  </ol>
</section>

<section class="content">


  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Form Contact</h3>
      <!-- Alert -->
      <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-success" role="alert">
              Data Contact<strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>

        </div>
      <?php endif; ?>
    </div>



    <!-- /.box-header -->
    <div class="box-body">
      <form action="<?= base_url('backend/aksiInputContact')?>" method="POST">
        <div class="form-group">
          <label for="">Website </label>
          <input type="hidden" name="id" value="<?= $contact->id?>">
          <input type="text" name="website" class="form-control" value="<?=  $contact->website?>">    
        </div>

        <div class="form-group">
          <label>Facebook </label>
          <input type="text" name="facebook" class="form-control" value="<?=  $contact->facebook?>">    
        </div>

        <div class="form-group">
          <label>Instagram</label>
          <input type="text" name="instagram" class="form-control" value="<?=  $contact->instagram?>">      
        </div>

        <div class="form-group">
          <label>Alamat</label>
          <input type="text" name="alamat" class="form-control" value="<?=  $contact->alamat?>">      
        </div>

        <div class="form-group">
          <label>Telephone</label>
          <input type="text" name="telepon" class="form-control" value="<?= $contact->telepon?>">      
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control" value="<?= $contact->email?>">      
        </div>

        <div class="form-group">
          <label>Whatsaap</label>
          <input type="text" name="wa" class="form-control" value="<?= $contact->wa?>">      
        </div>
        <!-- /.box-body -->

        <div class="box-footer mx-2">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </div>
      </form>

    </div>
    <!-- /.box-body -->
  </div>

</section>

<!-- /.content -->
</div>












