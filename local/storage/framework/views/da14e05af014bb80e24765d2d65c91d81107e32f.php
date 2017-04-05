<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('theme/backend/plugins/iCheck/all.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('theme/backend/plugins/fileinput/fileinput.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('theme/backend/plugins/iCheck/icheck.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('theme/backend/plugins/fileinput/fileinput.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('theme/backend/plugins/bootbox/bootbox.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('theme/backend/plugins/input-mask/jquery.inputmask.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('theme/backend/plugins/input-mask/jquery.inputmask.extensions.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')); ?>"></script>
 <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
<script src="<?php echo e(asset('theme/backend/plugins/input-mask/jquery.inputmask.numeric.extensions.js')); ?>" type="text/javascript"></script>
<script>
$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
});
//Red color scheme for iCheck
$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
    radioClass: 'iradio_minimal-red'
});
//Flat red color scheme for iCheck
$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    checkboxClass: 'icheckbox_flat-green',
    radioClass: 'iradio_flat-green'
});
$("#price").inputmask();
$("#input-2").fileinput({
    uploadUrl: "",
    uploadAsync: true,
    minFileCount: 1,
    maxFileCount: 5,
    allowedFileExtensions: ["jpg", "gif", "png", "jpeg"],
    uploadExtraData: function() {  // callback example
        var out = {_token: "<?php echo e(csrf_token()); ?>"};
        return out;
    }
});
var max_fields = 10; //maximum input boxes allowed
var wrapper = $(".input_fields_wrap"); //Fields wrapper
var add_button = $(".add_field_button"); //Add button 
var button = '<div class="form-group"><div class="row"><div class="col-xs-2"><input type="text" class="form-control" placeholder="Name" name="name[]"></div><div class="col-xs-2"><input type="text" class="form-control" placeholder="Value" name="value[]"></div><div class="col-xs-3"><button type="button" class="btn btn-default remove_field">Remove field</button></div></div></div>'

var x = 1; //initlal text box count
$(add_button).click(function(e) { //on add input button click
    e.preventDefault();
    if (x < max_fields) { //max input box allowed
        x++; //text box increment
        $(wrapper).append(button); //add input box
    }
});

$(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
    $(this).closest('.form-group').remove();
    x--;
})
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        
        <small></small>
    </h1>
 
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(count($errors)): ?>
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    <?php foreach($errors->all() as $error): ?>
                                    <li><?php echo e($error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#add_pro" data-toggle="tab">Add Product</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="add_pro">
                                        <form role="form" method="post" files="true" action="<?php echo e(route('admin.products.store')); ?>" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select id="form-field-select-3" class="form-control search-select" name="id_cat">
                                                    <option value="">Pilih Category</option>
                                                    <?php foreach($kategori as $kate): ?>
                                                    <option value="<?php echo e($kate->id); ?>"><?php echo e($kate->name); ?></option>
                                                        <?php endforeach; ?>
                                                </select>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <input type="text" name="name" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Product Description</label>
                                                <textarea name="desc" class="form-control"></textarea>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label>SKU</label>
                                                <input type="text" name="sku" class="form-control" value="">
                                            </div>

                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" name="price" class="form-control" value="">
                                            </div>
                                             <div class="form-group">
                                                <label>Stok Product</label>
                                                <input type="text" name="stok" class="form-control" value="">
                                            </div>
                                             <div class="form-group">
                                                <label>Berat</label>
                                                <input type="text" name="berat" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Images</label>
                                                <input id="input-2" type="file" name='image[]' multiple=true class="file-loading" data-show-upload="false">
                                            </div>

                                     
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div><!-- /.tab-pane -->
                                </div><!-- /.tab-content -->
                            </div><!-- nav-tabs-custom -->
                        </div><!-- /.col -->
                    </div> <!-- /.row -->
                    <!-- END CUSTOM TABS -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>