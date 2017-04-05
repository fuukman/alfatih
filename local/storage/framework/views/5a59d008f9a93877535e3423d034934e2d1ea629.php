
<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
	<?php echo Form::label('name', 'Nama Produk', ['class' => 'col-md-4 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('name', null, ['class' => 'form-control']); ?>

		<?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

	</div>
</div>




<div class="form-group<?php echo e($errors->has('category') ? ' has-error' : ''); ?>">
	<?php echo Form::label('id_cat', 'category', ['class' => 'col-md-4 control-label']); ?>

	<div class="col-md-6">
		<select name="id_cat">
			<option value="">--Pilih Category--</option>
			<?php foreach($kategori as $kate): ?>
			<option value="<?php echo e($kate->id); ?>" >
				<?php echo e($kate->name); ?>

			</option>
			<?php endforeach; ?>
		</select>
		<?php echo $errors->first('category', '<p class="help-block">:message</p>'); ?>

	</div>
</div>

<div class="form-group<?php echo e($errors->has('desc') ? ' has-error' : ''); ?>">
	<?php echo Form::label('desc', 'Deskripsi', ['class' => 'col-md-4 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::textarea('desc', null, ['class' => 'form-control']); ?>

		<?php echo $errors->first('desc', '<p class="help-block">:message</p>'); ?>

	</div>
</div>

<div class="form-group<?php echo e($errors->has('sku') ? ' has-error' : ''); ?>">
	<?php echo Form::label('sku', 'SKU', ['class' => 'col-md-4 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('sku', null, ['class' => 'form-control']); ?>

		<?php echo $errors->first('sku', '<p class="help-block">:message</p>'); ?>

	</div>
</div>

<div class="form-group<?php echo e($errors->has('berat') ? ' has-error' : ''); ?>">
	<?php echo Form::label('berat', 'Berat', ['class' => 'col-md-4 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('berat', null, ['class' => 'form-control']); ?>

		<?php echo $errors->first('berat', '<p class="help-block">:message</p>'); ?>

	</div>
</div>

<div class="form-group<?php echo e($errors->has('stok') ? ' has-error' : ''); ?>">
	<?php echo Form::label('stok', 'Stok', ['class' => 'col-md-4 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('stok', null, ['class' => 'form-control']); ?>

		<?php echo $errors->first('stok', '<p class="help-block">:message</p>'); ?>

	</div>
</div>

<div class="form-group<?php echo e($errors->has('price') ? ' has-error' : ''); ?>">
	<?php echo Form::label('price', 'Harga', ['class' => 'col-md-4 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::number('price', null, ['class' => 'form-control']); ?>

		<?php echo $errors->first('price', '<p class="help-block">:message</p>'); ?>

	</div>
</div>

<div class="form-group<?php echo e($errors->has('image') ? ' has-error' : ''); ?>">
	<?php echo Form::label('image', 'Gambar Produk', ['class' => 'col-md-4 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::file('image[]', array('multiple'=>true)); ?>

		<?php echo $errors->first('image','<p class="help-block">:message</p>'); ?>

		<?php if(isset($product) && $product->image): ?>
		<p>
			<?php echo Html::image(asset('img/'.$product->image), null, ['class'=>'img-rounded', 'width'=>'100%', 'height'=>'100%']); ?>

		</p>
		<?php endif; ?>
	</div>
</div>										

<div class="form-group">
	<div class="col-md-6 col-md-offset-4">
		<?php echo Form::submit('Simpan Produk', ['class'=>'btn btn-primary']); ?>

	</div>
</div>
