<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
        <title>Admin Panel Alfatih</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo e(asset('theme/backend/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />    
        <!-- FontAwesome 4.3.0 -->
        <link href="<?php echo e(asset('theme/backend/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="<?php echo e(asset('theme/backend/plugins/ionicons/ionicons.min.css')); ?>" rel="stylesheet" type="text/css" />    
        <!-- Theme style -->
        <link href="<?php echo e(asset('theme/backend/dist/css/AdminLTE.min.css')); ?>" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo e(asset('theme/backend/dist/css/skins/_all-skins.min.css')); ?>" rel="stylesheet" type="text/css" />
        <?php $__env->startSection('css'); ?>
        <?php echo $__env->yieldSection(); ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="<?php echo e(asset('backend/plugins/html5shiv.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/plugins/respond.min.js')); ?>"></script>
        <![endif]-->

    </head>
    <body class="skin-blue fixed">
        <div class="wrapper">
            <?php $__env->startSection('header'); ?>
            <?php echo $__env->make('backend.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldSection(); ?>

            <?php $__env->startSection('sidebar'); ?>
            <?php echo $__env->make('backend.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldSection(); ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <?php echo $__env->yieldContent('content'); ?>
            </div><!-- /.content-wrapper -->

            <?php $__env->startSection('footer'); ?>
            <?php echo $__env->make('backend.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldSection(); ?>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.3 -->
        <script src="<?php echo e(asset('theme/backend/plugins/jQuery/jQuery-2.1.3.min.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/backend/plugins/jQueryUI/jquery-ui.min.js')); ?>"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo e(asset('theme/backend/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>  
        <script src="<?php echo e(asset('theme/backend/plugins/blockui/jquery.blockUI.js')); ?>" type="text/javascript"></script>  
        <!-- iCheck -->
        <script src="<?php echo e(asset('theme/backend/plugins/iCheck/icheck.min.js')); ?>" type="text/javascript"></script>
        <!-- Slimscroll -->
        <script src="<?php echo e(asset('theme/backend/plugins/slimScroll/jquery.slimscroll.min.js')); ?>" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="<?php echo e(asset('theme/backend/plugins/fastclick/fastclick.min.js')); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo e(asset('theme/backend/dist/js/app.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')); ?>"></script>
        <!-- <script src="<?php echo e(asset('theme/front/eshopper/js/jquery.min.js')); ?>"></script> -->
        <script src="<?php echo e(asset('theme/front/eshopper/js/jquery.autocomplete.min.js')); ?>"></script>

        

        <script>
$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
        </script>
         <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>

  
        <?php $__env->startSection('scripts'); ?>

        <?php echo $__env->yieldSection(); ?>
    </body>
</html>