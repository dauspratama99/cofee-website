


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      FORM ABOUT
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('backend')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Form About</li>
    </ol>
  </section>

  <section class="content">


    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Form About</h3>
        <!-- Alert -->
        <?php if ($this->session->flashdata('flash')) : ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success" role="alert">
                Data About<strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>

          </div>
        <?php endif; ?>
      </div>


      <form action="<?= base_url('backend/aksiInputAbout')?>" method="POST">   
        <div class="box-footer">
          <label>Deskripsi</label>

          <input type="hidden" name="id" value="<?= $tampil->id?>">
          <textarea class="form-control" name="about" id="editor"><?= $tampil->isi_about?></textarea>

        </div>    
        <div class="box-footer mx-2">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

      </form>


      <!-- /.box-body -->
    </div>

  </section>

  <!-- /.content -->
</div>











