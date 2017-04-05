<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('backend/plugins/datatables/dataTables.bootstrap.css')); ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('backend/plugins/datatables/jquery.dataTables.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('backend/plugins/datatables/dataTables.bootstrap.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('backend/plugins/bootbox/bootbox.min.js')); ?>" type="text/javascript"></script>
<script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/morris/morris.css"></script>
        <!-- <script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script> -->
        <!-- <script src="https://almsaeedstudio.com/themes/AdminLTE/bootstrap/js/bootstrap.min.js"></script> -->
        <script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/fastclick/fastclick.js"></script>
        <!-- <script src="https://almsaeedstudio.com/themes/AdminLTE/dist/js/app.min.js"></script> -->
        <!-- <script src="https://almsaeedstudio.com/themes/AdminLTE/dist/js/demo.js"></script> -->
        <script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/flot/jquery.flot.min.js"></script>
        <script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/flot/jquery.flot.categories.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/morris/morris.min.js"></script>

        
        <script>
 var bar_data = {
      data: [
      
      <?php foreach($stok as $stk): ?>
        [ "<?php echo e($stk['name']); ?>",<?php echo e($stk['stok']); ?> ],
      <?php endforeach; ?>
      // ["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 30], ["June", 9],["asd", 10]

      ],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart", [bar_data], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });


</script>

<script>
  //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a"],
      data: [
      <?php foreach($laris as $lrs): ?>
      {label: "<?php echo e($lrs['name']); ?>", value: <?php echo e($lrs['jumlah']); ?> },

      <?php endforeach; ?>
      ],
      hideHover: 'auto'
    });
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Dashboard 
       
        <small>Control panel</small>
    </h1>
 
</section>

<section class="content">
   <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo e($countTotalTrans); ?></h3>

              <p>Total Transaksi</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo e($countUserUniver); ?></h3>

              <p>Belum Verifikasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo e($countUser); ?></h3>

              <p>Total Pelanggan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo e($countProduct); ?></h3>

              <p>Total Product</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
</section><!-- /.content -->

<section class="content">
<div class="row">
     <div class="col-md-12">
          <!-- Bar chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Stok Barang</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="bar-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
          </div>
</section>


<section class="content">
<div class="row">
     <div class="col-md-6">
          <!-- Bar chart -->
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">3 Produk yang paling laris</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body -->
          </div>


        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <!-- Bar chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">8 Pelanggan Terakhir Daftar</h3>

             <div class="box-tools pull-right">
                    <span class="label label-danger">8 Pelanggan Terakhir Daftar</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                  <?php foreach($lates as $lat): ?>
                    <li>
                      <img src="<?php echo e(url('images/user.png')); ?>" alt="User Image" width="80" height="80">
                      <a class="users-list-name" href="#"><?php echo e($lat->name); ?></a>
                      <span class="users-list-date"><?php echo e($lat->created_at); ?></span>
                    </li>
                   <?php endforeach; ?>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="<?php echo e(url('/admin/listuser')); ?>" class="uppercase">lihat Semua</a>
                </div>
                <!-- /.box-footer -->
              </div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->          
            <!-- /.box-body-->
          </div>
          </div>
</section>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>