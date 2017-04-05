<?php $__env->startSection('content'); ?>
<section class="content-header">
	<h1> Laporan Periode :

		<small> Tanggal <?php echo e($from); ?> s/d <?php echo e($to); ?></small>
	</h1>

</section>
<div class="content">
	<div class="row">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class="panel-heading"></div>
				<div class="panel-body">
				
					
						<table class="table table-hover table-striped">
							<tr><th>Invoice</th><th>Tanggal</th><th>Nama Produk</th><th>Harga</th><th>Qty</th><th>Bukti</th><th>Total</th><th>Status</th></tr>
							
							<?php foreach( $transactions as $list ): ?>
							
							<tr>
								<td><a href="<?php echo url('invoice/'.$list->formid); ?>"><?php echo e(base64_decode($list->formid)); ?></a></td>
								<td><?php echo e($list->tanggal); ?></td>
								<td><?php echo e($list->product->name); ?></td>
								<td><?php echo e("Rp ".number_format($list->product->price,2, ',', '.')); ?></td>
								<td><?php echo e($list->qty); ?></td>
								<td><a href="<?php echo e(url($list->bukti)); ?>"><?php echo e($list->bukti); ?></a></td>
								<td><?php echo e("Rp ".number_format($list->total_price,2, ',', '.')); ?></td>
								<td>
									<form method="post" action="<?php echo e(route('postUbahStatus')); ?>" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
									<input type="hidden" name="invoice" value="<?php echo e($list->formid); ?>">
									<input type="hidden" name="nameUser" value="<?php echo e(Auth::user()->name); ?>">
									<input type="hidden" name="email" value="<?php echo e(Auth::user()->email); ?>">
									<div class="form-group">
										<div>
											<select name="status">
												<option value="Belum Terbayar">Belum Terbayar</option>
												<option value="Terbayar">Terbayar</option>
												<option value="<?php echo e($list->status); ?>" selected><?php echo e($list->status); ?></option>
												</select>
										</div>
									</div>    
									<button type="submit" value="Submit" class="item_add btn btn-fefault cart">Ubah Status</button>
								</form>

							</td>
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