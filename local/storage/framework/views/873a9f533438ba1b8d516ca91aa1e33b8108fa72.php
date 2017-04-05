 
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			<div class="panel-heading">Laporan Periode : Tanggal <?php echo e($from); ?> s/d <?php echo e($to); ?></div>
				<div class="panel-body">

					<table class="table table-hover table-striped">
						<tr><th>Invoice</th><th>Tanggal</th><th>Nama Produk</th><th>Harga</th><th>Qty</th><th>Total</th></tr>
						<?php foreach( $transaction as $list ): ?>
						<tr>
							<td><a href="<?php echo url('admin/invoice/'.$list->formid); ?>"><?php echo e($list->formid); ?></a></td>
							<td><?php echo e($list->tanggal); ?></td>
							<td><?php echo e($list->product->name); ?></td>
							<td><?php echo e("Rp ".number_format($list->product->price,2, ',', '.')); ?></td>
							<td><?php echo e($list->qty); ?></td>
							<td><?php echo e("Rp ".number_format($list->total_price,2, ',', '.')); ?></td>
						</tr>
						<?php endforeach; ?>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>