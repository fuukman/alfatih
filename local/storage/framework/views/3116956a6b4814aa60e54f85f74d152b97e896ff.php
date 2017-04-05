<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Laporan Pemesanan Periode</div>
				<div class="panel-body">

					<?php echo Form::model(new App\Transaction, ['class' => 'form-horizontal','files'=>true, 'route' => ['report.show']]); ?>


					<div class="form-group<?php echo e($errors->has('begin') ? ' has-error' : ''); ?>">
						<?php echo Form::label('begin', 'Periode Awal', ['class' => 'col-md-4 control-label']); ?>

						<div class="col-md-6">
							<?php echo Form::text('begin',null, ['id' => 'datepicker','class' => 'form-control']); ?>

							<?php echo $errors->first('begin', '<p class="help-block">:message</p>'); ?>

						</div>
					</div>

					<div class="form-group<?php echo e($errors->has('end') ? ' has-error' : ''); ?>">
						<?php echo Form::label('end', 'Periode Akhir', ['class' => 'col-md-4 control-label']); ?>

						<div class="col-md-6">
							<?php echo Form::text('end',null, ['id' => 'datepicker2','class' => 'form-control']); ?>

							<?php echo $errors->first('end', '<p class="help-block">:message</p>'); ?>	
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<?php echo Form::submit('Kirim', ['class'=>'btn btn-primary']); ?>

						</div>
						<?php echo Form::close(); ?>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
	$(function() {
		$( "#datepicker" ).datepicker();
		$( "#datepicker2" ).datepicker();
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>