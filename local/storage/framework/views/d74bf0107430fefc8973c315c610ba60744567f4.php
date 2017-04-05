<?php $__env->startSection('content'); ?>
<!-- app/views/productcart.blade.php -->

	<div class="container">
		<h4><i class="fa fa-shopping-cart"></i> Keranjang Belanja</h4>
		<!-- Panel -->
		<div class="panel">
			<div class="panel-heading"></div>
			<table class="table table-striped m-b-none text-sm">
				<thead>
					<tr>
						<th width="8">No</th>
						<th width="300">Nama Product</th>                    
						<th>Harga</th>
						<th width="75">Jumlah</th>
						<th width="10">Ukuran</th>
						<th width="200">Total</th>
						<th width="75">Action</th>
					</tr>
				</thead>

				<tbody>
					<?php $i = 1; ?>
					<?php foreach($cart_content as $cart): ?>
						<tr>
							<td><?php echo e($i); ?></td>
							<td><?php echo e($cart->name); ?></td>
							<td><?php echo e("Rp ".number_format($cart->price,2, ',', '.')); ?></td>
							<td><?php echo e($cart->qty); ?></td>
							<td><?php echo e($cart->size); ?></td>
							<td><?php echo e("Rp ".number_format($cart->price * $cart->qty,2, ',', '.')); ?></td>
							<td>
								<a href="<?php echo e(url('cart/delete/'.$cart->rowId)); ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>	
							</td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
					<tr>
						<td class="highrow"></td>
						<td class="highrow"></td>
						<?php if(\Entrust::hasRole('member')): ?>
							<td><strong>Subtotal <!-- (discount 5%) --></strong></td>
						<?php else: ?>
							<td><strong>Subtotal</strong></td>
						<?php endif; ?>
						<td class="highrow"></td>
						<?php if(\Entrust::hasRole('member')): ?>
							<td><strong><?php echo e("Rp ".Cart::subtotal(2, ',', '.')); ?></strong></td>
						<?php else: ?>
							<!-- <td><strong><?php echo e("Rp ".Cart::total(2, ',', '.')); ?></strong></td> -->
							<td><strong><?php echo e("Rp ".Cart::subtotal(2, ',', '.')); ?></strong></td>
						<?php endif; ?>
						<td class="highrow"></td>
					</tr>
				</tbody>
			</table>

			<div class="panel-footer">
				<a href="<?php echo e(url('/')); ?>" class="btn btn-white">Lanjut Belanja</a>
				<?php if(Cart::count() != 0): ?>
					<a href="<?php echo e(url('cart/checkout')); ?>" class="btn btn-info">Bayar</a>
				<?php endif; ?>
			</div>

		</div>
		<!-- / Panel -->
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>