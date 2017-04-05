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
    <h1> Kategori
       
        <small>List Kategori</small>
    </h1>
 
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><a href="<?php echo e(url('admin/categori/create')); ?>" class="btn btn-success">Tambah Kategori</a></h3>
                </div><!-- /.box-header -->
               
                 
              
                <div class="box-body">
                    <table id="product-table" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                             <?php foreach( $category as $cate ): ?>
                            <tbody>
                            <tr>
                                <th><?php echo e($cate->id); ?></th>
                                <th><?php echo e($cate->name); ?></th>
                                <?php if($cate->status): ?>
                                <th style="color:green;">Aktif</th>
                                <?php else: ?> 
                                <th style="color:red;">Tidak Aktif</th>
                                <?php endif; ?>
                                 <th><a href="<?php echo route('admin.categori.edit', [$cate->id]); ?>" class="btn btn-info">Edit</a></th>
                            </tr>
                            </tbody>
                              <?php endforeach; ?>
                    </table>
                     <center><p><?php echo $category->render(); ?></p></center>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/layouts/index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>