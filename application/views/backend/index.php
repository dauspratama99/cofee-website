


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
           <h3><?php echo $total['total'];?></h3>
           

           <p>Tampilan Depan</p>
         </div>
         <div class="icon">
          <i class="fa fa-tv"></i>
        </div>
        <a href="<?= base_url('backend/form_slider') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php echo $about['total'];?></h3>

          <p>About</p>
        </div>
        <div class="icon">
          <i class="fa fa-address-card"></i>
        </div>
        <a href="<?= base_url('backend/form_about')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo $product['total'];?></h3>

          <p>Product</p>
        </div>
        <div class="icon">
          <i class="fa fa-shopping-cart"></i>
        </div>
        <a href="<?= base_url('backend/form_product')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">
          <h3><?php echo $galery['total'];?></h3>

          <p>Galery</p>
        </div>
        <div class="icon">
          <i class="fa fa-bookmark"></i>
        </div>
        <a href="<?= base_url('backend/form_galery')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
         <h3><?php echo $berita['total'];?></h3>

         <p>Berita</p>
       </div>
       <div class="icon">
         <i class="fa fa-book"></i>
       </div>
       <a href="<?= base_url('backend/form_berita')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
     </div>
   </div>

   <!-- ./col -->
 </div>
 <!-- /.row -->
 <!-- Main row -->
 <div class="row">
  <!-- Left col -->

  <!-- /.Left col -->
  <!-- right col (We are only adding the ID to make the widgets sortable)-->

  <!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>


<!-- Logout Modal-->
<!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah Kamu ingin Keluar?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="">
            ×
          </span>
        </button>
      </div>
      <div class="modal-body">Tekan "Logout" Jika Ingin Keluar</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="">Logout</a>
      </div>
    </div>
  </div>
</div> -->