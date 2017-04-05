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
    <h1> Product
       
        <small>List Product</small>
    </h1>
 
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><a href="<?php echo e(url('admin/products/create')); ?>" class="btn btn-success">Tambah Product</a></h3>
                </div><!-- /.box-header -->
               
                 
              
                <div class="box-body">
                    <table id="product-table" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Deskripsi</th>
                                <th>Price</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                             <?php foreach( $product as $products ): ?>
                            <tbody>
                            <tr>
                                <th><?php echo e($products->name); ?></th>
                                <th><?php echo e($products->desc); ?></th>
                                <th><?php echo e("Rp ".number_format($products->price, 2, ',', '.')); ?></th>
                                <th><?php echo e(App\Category::find($products->id_cat)->name); ?></th>
                                <th><?php echo e($products->stok); ?></th>
                                <th><a href="<?php echo route('admin.products.edit', [$products->id]); ?>" class="btn btn-info">Edit</a><a href="<?php echo e(route('admin.products.show', [$products->id])); ?>" class="btn btn-danger">hapus</a></th>
                            </tr>
                            </tbody>
                              <?php endforeach; ?>
                    </table>
                     <center><p><?php echo $product->render(); ?></p></center>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/layouts/index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>