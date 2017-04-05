<?php $__env->startSection('content'); ?>

<center>
<?php if(\Entrust::hasRole('member')): ?>


	<div class="container">
		<h4></h4>
		<!-- Panel -->
		<div class="panel">
		 <ul class="nav nav-tabs">
		 			<li class="active"><a data-toggle="tab" href="#menu1">Alamat sama</a></li>
	   			 	<li><a data-toggle="tab" href="#home">Alamat Berbeda</a></li>
	    			
	  			</ul>
				

  <div class="tab-content">
    <div id="home" class="tab-pane fade in">

      <article>
		<h4 align="center">Isikan Data Baru</h4>
		<?php echo Form::open(['route'=>['customer.save',$formid],'role'=> 'form', 'class' => 'form-horizontal']); ?>

		  <input type="hidden" name="id" value="<?php echo e($id); ?>">
		  <input type="hidden" name="nameUser" value="<?php echo e($name); ?>">
		  <input type="hidden" name="email" value="<?php echo e($email); ?>">
		  <input type="hidden" name="ongkir" value="<?php echo e($pilih); ?>">

		<div class="panel-body">

			<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
				<?php echo Form::label('name', 'Nama Lengkap', ['class' => 'col-md-4 control-label']); ?>

				<div class="col-md-6">
					<input required="" type="text" class="form-control" value="" name="name" placeholder="Nama">
				</div>
				<?php echo Form::hidden('formid', $formid); ?>

			</div>

			<div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
				<?php echo Form::label('phone', 'Nomor Handphone', ['class' => 'col-md-4 control-label']); ?>

				<div class="col-md-6">
					<input required="" type="number" class="form-control" name="phone" value="" placeholder="Nomor Handphone">
				</div>
			</div>

			<div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
				<?php echo Form::label('address', 'Alamat lengkap', ['class' => 'col-md-4 control-label']); ?>

				<div class="col-md-6">
					<input required="" type="text" class="form-control" name="address" placeholder="Alamat Lengkap">
				</div>
			</div>

			<div  class="form-group<?php echo e($errors->has('province') ? ' has-error' : ''); ?>">
				<?php echo Form::label('province', 'Provinsi', ['class' => 'col-md-4 control-label']); ?>

				<div  class="col-md-6">
					<input required="" type="text" class="form-control" name="province" placeholder="Provinsi">
				</div>
			</div>

			<div class="form-group<?php echo e($errors->has('postal_code') ? ' has-error' : ''); ?>">
				<?php echo Form::label('postal_code', 'Kodepos', ['class' => 'col-md-4 control-label']); ?>

				<div class="col-md-6">
					<input required="" type="number" class="form-control" name="postal_code" placeholder="Kode Pos">
				</div>
			</div>

			<div class="col-md-12 form-group text-center">
				<?php echo Form::submit('Submit', ['class'=>'btn btn-primary btn-large']); ?>

			</div>
			<?php echo Form::close(); ?>

		</div>
	</article>
    </div>
    <div id="menu1" class="tab-pane fade in active">
        <article>
		<h4 align="center">Isikan Data Anda</h4>
		<?php echo Form::open(['route'=>['customer.save',$formid],'role'=> 'form', 'class' => 'form-horizontal']); ?>

		  <input type="hidden" name="id" value="<?php echo e($id); ?>">
		  <input type="hidden" name="nameUser" value="<?php echo e($name); ?>">
		  <input type="hidden" name="email" value="<?php echo e($email); ?>">
		  <input type="hidden" name="ongkir" value="<?php echo e($pilih); ?>">

		<div class="panel-body">

			<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
				<?php echo Form::label('name', 'Nama Lengkap', ['class' => 'col-md-4 control-label']); ?>

				<div class="col-md-6">
					<input required="" type="text" readonly="readonly" class="form-control" value="<?php echo e((Auth::user()->name)); ?>" name="name" placeholder="Nama">
				</div>
				<?php echo Form::hidden('formid', $formid); ?>

			</div>

			<div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
				<?php echo Form::label('phone', 'Nomor Handphone', ['class' => 'col-md-4 control-label']); ?>

				<div class="col-md-6">
					<input required="" type="number" readonly="readonly" class="form-control" name="phone" value="<?php echo e($phone); ?>" placeholder="Nomor Handphone">
				</div>
			</div>

			<div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
				<?php echo Form::label('address', 'Alamat lengkap', ['class' => 'col-md-4 control-label']); ?>

				<div class="col-md-6">
					<input required="" type="text" readonly="readonly" class="form-control" name="address" value="<?php echo e($address); ?>" placeholder="Alamat Lengkap">
				</div>
			</div>

			<div  class="form-group<?php echo e($errors->has('province') ? ' has-error' : ''); ?>">
				<?php echo Form::label('province', 'Provinsi', ['class' => 'col-md-4 control-label']); ?>

				<div  class="col-md-6">
					<input required="" type="text" readonly="readonly" class="form-control" name="province" value="<?php echo e($province); ?>" placeholder="Provinsi">
				</div>
			</div>

			<div class="form-group<?php echo e($errors->has('postal_code') ? ' has-error' : ''); ?>">
				<?php echo Form::label('postal_code', 'Kodepos', ['class' => 'col-md-4 control-label']); ?>

				<div class="col-md-6">
					<input required="" type="number" readonly="readonly" class="form-control" name="postal_code" value="<?php echo e($postal_code); ?>" placeholder="Kode Pos">
				</div>
			</div>

			<div class="col-md-12 form-group text-center">
				<?php echo Form::submit('Submit', ['class'=>'btn btn-primary btn-large']); ?>

			</div>
			<?php echo Form::close(); ?>

		</div>
	</article>
    </div>
    
  </div>
</div>
	<?php else: ?>
	<div class="alert alert-info">
  <strong>Info!</strong> Untuk Melanjutkan Proses Pembelian Silahkan
	</div>
	<div class="panel-body">
	<a href="<?php echo e(url('/login')); ?>"><button type="button" class="btn btn-info">Masuk</button></a> Atau
	<a href="<?php echo e(url('/register')); ?>"><button type="button" class="btn btn-success">Mendaftar</button></a> 
	</div>
	<?php endif; ?>
    </div>
    </div>
    
	</center>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>