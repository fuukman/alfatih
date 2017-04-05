<?php $__env->startSection('content'); ?>

<center>
<?php if(\Entrust::hasRole('member')): ?>

<!-- Comment form -->
		<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
       <article>
		<h4 align="center">Isikan Data Anda</h4>
		<?php echo Form::open(['route'=>['customer.save',$formid],'role'=> 'form', 'class' => 'form-horizontal']); ?>

		  <input type="hidden" name="id" value="">

		<div class="panel-body">

			<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
				<?php echo Form::label('name', 'Nama Lengkap', ['class' => 'col-md-4 control-label']); ?>

				<div class="col-md-6">
					<?php echo Form::text('name', null,['class' => 'form-control', 'placeholder'=>'Nama']); ?>

					<?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

				</div>
				<?php echo Form::hidden('formid', $formid); ?>

			</div>

			<div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
				<?php echo Form::label('phone', 'Nomor Handphone', ['class' => 'col-md-4 control-label']); ?>

				<div class="col-md-6">
					<?php echo Form::text('phone', null, ['class' => 'form-control','placeholder'=>'handphone']); ?>

					<?php echo $errors->first('phone', '<p class="help-block">:message</p>'); ?>

				</div>
			</div>

			<div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
				<?php echo Form::label('address', 'Alamat lengkap', ['class' => 'col-md-4 control-label']); ?>

				<div class="col-md-6">
					<?php echo Form::text('address',null, ['class' => 'form-control','placeholder'=>'alamat']); ?>

					<?php echo $errors->first('address', '<p class="help-block">:message</p>'); ?>

				</div>
			</div>

			<div class="form-group<?php echo e($errors->has('province') ? ' has-error' : ''); ?>">
				<?php echo Form::label('province', 'Provinsi', ['class' => 'col-md-4 control-label']); ?>

				<div class="col-md-6">
					<?php echo Form::text('province', null, ['class' => 'form-control','placeholder'=>'provinsi']); ?>

					<?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

				</div>
			</div>

			<div class="form-group<?php echo e($errors->has('postal_code') ? ' has-error' : ''); ?>">
				<?php echo Form::label('postal_code', 'Kodepos', ['class' => 'col-md-4 control-label']); ?>

				<div class="col-md-6">
					<?php echo Form::text('postal_code', null, ['class' => 'form-control','placeholder'=>'kodepos']); ?>

					<?php echo $errors->first('postal_code', '<p class="help-block">:message</p>'); ?>

				</div>
			</div>

			<div class="col-md-12 form-group text-center">
				<?php echo Form::submit('Submit', ['class'=>'btn btn-primary btn-large']); ?>

			</div>
			<?php echo Form::close(); ?>

		</div>
	</article>
	
	<?php else: ?>
	<div class="alert alert-info">
  <strong>Info!</strong> Untuk Melanjutkan Proses Pembelian Silahkan
	</div>
	<a href="<?php echo e(url('/login')); ?>"><button type="button" class="btn btn-info">Masuk</button></a> Atau
	<a href="<?php echo e(url('/register')); ?>"><button type="button" class="btn btn-success">Mendaftar</button></a> 

	<?php endif; ?>
    </div>
    </div>
    
	</center>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>