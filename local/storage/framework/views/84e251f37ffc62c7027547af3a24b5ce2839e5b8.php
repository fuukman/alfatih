 
<?php $__env->startSection('content'); ?>
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Tambah Produk </div>
				<div class="panel-body">
					 
    				 <?php echo Form::open(array('url'=>route('admin.products.store'),'method'=>'POST', 'files'=>true)); ?>

						<?php echo $__env->make('products._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<?php echo Form::close(); ?>

	
				</div>
			</div>
		</div>
	</div>
</div>	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>