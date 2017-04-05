<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('backend/plugins/datatables/dataTables.bootstrap.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('backend/plugins/datatables/jquery.dataTables.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('backend/plugins/datatables/dataTables.bootstrap.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('backend/plugins/bootbox/bootbox.min.js')); ?>" type="text/javascript"></script>

<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Akun
       
        <small>List Pembelian</small>
    </h1>
 
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <?php if($history = $history): ?>
               
                  <?php if(Session::has('message')): ?>
             <div class="alert alert-success">
                <?php echo e(Session::get('message')); ?>

              </div>
              <?php endif; ?>
              
                <div class="box-body">
                    <table id="product-table" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Nama Product</th>
                                <th>Invoice</th>
                                <th>Sku</th>
                                <th>Qty</th>
                                <th>Bukti</th>
                                <th>Size</th>
                                <th>subtotal + Ongkir</th>
                                <th>Status</th>
                                <th>Menu</th>
                            </tr>
                            </thead>  
                                <?php foreach($history as $his): ?>
                            <tbody>
                            <tr>
                                <td><?php echo e($his->produkNama); ?></td>
                                <td><a href="<?php echo url('invoice/' .$his->formid); ?>"><?php echo e(base64_decode($his->formid)); ?></a></td>
                                <td><?php echo e($his->sku); ?></td>
                                <td><?php echo e($his->qty); ?></td>
                                <td><?php echo e($his->bukti); ?></td>
                                <td><?php echo e($his->size); ?></td>
                                <td><?php echo e($his->subtotal); ?> + Rp <?php echo e($his->ongkir); ?></td>
                                
                                <?php if($his->status ==  'Terbayar' OR $his->status ==  'terbayar'): ?>
                                <th style="color:green;">Terbayar</th>
                                <?php else: ?>
                                <th style="color:red;">Belum Terbayar</th>
                                <?php endif; ?>
                                <th>
                                <a href="<?php echo e(url('akun/bukti/'.$his->formid)); ?>" class="btn btn-info">Upload Bukti Pembayran</a>
                                <a href="<?php echo e(url('akun/delete/'.$his->id)); ?>" class="btn btn-danger">Batal Pesan</a></th>
                            </tr>
                            </tbody>
                              <?php endforeach; ?>
                    </table>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <?php else: ?>
    <center>
      <div class="alert alert-info">
        <strong>Info!</strong> Belum ada daftar transaksi Pembelian
      </div>
    </center>
    <?php endif; ?>
        
</section><!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>