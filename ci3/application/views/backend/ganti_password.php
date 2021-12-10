
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      FORM GANTI PASSWORD
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('backend')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Form Ganti Password</li>
    </ol>
  </section>

  <section class="content">


    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Form Ganti Password</h3>
        <!-- Alert -->
        <?php if ($this->session->flashdata('flash') == '1') { ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success" role="alert">
                Password <strong>Berhasil!</strong> Dirubah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>

          </div>
        <?php } else if($this->session->flashdata('flash') == '2'){ ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-danger" role="alert">
                Password <strong>Gagal!</strong> Password Sudah Digunakan Sebelumnya
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>

          </div>
        <?php } else if($this->session->flashdata('flash') == '3'){ ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-danger" role="alert">
                Password <strong>Gagal!</strong> Password Lama Salah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>

          </div>
        <?php } ?>  
      </div>


      <form action="<?= base_url('backend/gantimang') ?>" method="POST">  

        <div class="box-footer">
          <label>Input Password lama</label>
          <input type="hidden" name="id" value="">

          <input type="text" name="pass_lama" class="form-control" placeholder="Password pass_lama">
        </div>  


        <div class="box-footer">
          <label>Input Password Baru</label>
          <input type="hidden" name="id" value="<?php echo $admin['id']; ?>">

          <input type="text" name="pass_baru" class="form-control" placeholder="Password Baru">
        </div>  


        <div class="box-footer mx-2">
          <button type="submit" name="change_pass" class="btn btn-primary">Simpan</button>
        </div>  



        <!--  -->
      </form>


      <!-- /.box-body -->
    </div>

  </section>

  <!-- /.content -->
</div>











