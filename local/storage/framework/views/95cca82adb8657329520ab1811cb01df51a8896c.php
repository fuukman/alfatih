<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>  
       
        <small></small>
    </h1>
 
</section>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Masuk</div>
                <div class="panel-body">

                        <?php if(Session::has('message')): ?>
                            <div class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>">
                            <?php echo e(Session::get('message')); ?></div>
                            <?php endif; ?>

                    <?php echo Form::open(['url'=>'login', 'class'=>'form-horizontal']); ?>

                        <?php /* csrf_field() */ ?>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('email', 'Alamat E-Mail', ['class'=>'col-md-4 control-label']); ?>


                            <div class="col-md-6">
                                <?php echo Form::email('email', null, ['class'=>'form-control']); ?>

                                <?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('password', 'Password', ['class'=>'col-md-4 control-label']); ?>


                            <div class="col-md-6">
                                <?php echo Form::password('password', ['class'=>'form-control']); ?>

                                <?php echo $errors->first('password', '<p class="help-block">:message</p>'); ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <?php echo Form::checkbox('remember'); ?> Ingatkan Saya
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Masuk
                                </button>

                                <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">Lupa Password?</a>
                            </div>
                        </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>