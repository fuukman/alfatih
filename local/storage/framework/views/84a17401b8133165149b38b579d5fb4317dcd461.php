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
    <h1> Pelanggan
       
        <small> List Pelanggan</small>
    </h1>
 
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Daftar Pelanggan Toko</h3>
                </div><!-- /.box-header -->
               
                 
              
                <div class="box-body">
                    <table id="product-table" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                             
                            </tr>
                            </thead>
                             <?php foreach( $user as $users ): ?>
                            <tbody>
                            <tr>
                                <th><?php echo e($users->id); ?></th>
                                <th><?php echo e($users->name); ?></th>
                                <th><a href="mailto:<?php echo e($users->email); ?>"><?php echo e($users->email); ?></a></th>
                               <?php if($users->confirmed): ?>
                                <th class="alert alert-success">Sudah verfikasi</th>
                               <?php else: ?>
                                <th class="alert alert-danger">belum verifikasi</th>
                                <?php endif; ?>

                            </tr>
                            </tbody>
                              <?php endforeach; ?>
                    </table>
                     <center><p><?php echo $user->render(); ?></p></center>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/layouts/index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>