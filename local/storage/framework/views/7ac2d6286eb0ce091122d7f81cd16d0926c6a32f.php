<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BeliSob</title>

        <link href="<?php echo e(asset('theme/front/eshopper/css/etalage.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('theme/front/eshopper/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('theme/front/eshopper/css/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('theme/front/eshopper/css/prettyPhoto.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('theme/front/eshopper/css/price-range.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('theme/front/eshopper/css/animate.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('theme/front/eshopper/css/main.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('theme/front/eshopper/css/responsive.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('theme/front/eshopper/css/style.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <style>
            ul.dropdown-cart{
                min-width:180px;
            }
            ul.dropdown-cart li .item{
                display:block;
                padding:3px 0px;
                margin: 3px 0;
            }
            ul.dropdown-cart li .item:hover{
                background-color:#f3f3f3;
            }
            ul.dropdown-cart li .item:after{
                visibility: hidden;
                display: block;
                font-size: 0;
                content: " ";
                clear: both;
                height: 0;
            }

            ul.dropdown-cart li .item-left{
                float:left;
            }
            ul.dropdown-cart li .item-left img,
            ul.dropdown-cart li .item-left span.item-info{
                float:left;
            }
            ul.dropdown-cart li .item-left span.item-info{
                margin-left:10px;   
            }
            ul.dropdown-cart li .item-left span.item-info span{
                display:block;
            }
            ul.dropdown-cart li .item-right{
                float:right;
            }
            ul.dropdown-cart li .item-right button{
                margin-top:14px;
            }
        </style>
        <?php $__env->startSection('css'); ?>
        <?php echo $__env->yieldSection(); ?>
        <!--[if lt IE 9]>
        <script src="<?php echo e(asset('front/eshopper/js/html5shiv.js')); ?>"></script>
        <script src="<?php echo e(asset('front/eshopper/js/respond.min.js')); ?>"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="<?php echo e(asset('theme/front/eshopper/images/ico/favicon.ico')); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('theme/front/eshopper/images/ico/apple-touch-icon-144-precomposed.png')); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(asset('theme/front/eshopper/images/ico/apple-touch-icon-114-precomposed.png')); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(asset('theme/front/eshopper/images/ico/apple-touch-icon-72-precomposed.png')); ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('theme/front/eshopper/images/ico/apple-touch-icon-57-precomposed.png')); ?>">

</head>
<body>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('slider'); ?>
<?php echo $__env->make('layouts.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldSection(); ?>
<?php echo $__env->make('layouts._flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

    <!-- Page Content -->


       
      
    <section>
            <div class="container">
                <div class="row">
                    <?php $__env->startSection('sidebar'); ?>
                    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->yieldSection(); ?>
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
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </section>
    

        <!-- Footer -->
    <?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldSection(); ?>

        <script src="<?php echo e(asset('theme/front/eshopper/js/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/front/eshopper/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/front/eshopper/js/jquery.scrollUp.min.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/front/eshopper/js/price-range.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/front/eshopper/js/jquery.prettyPhoto.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/front/eshopper/js/jquery.etalage.min.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/front/eshopper/js/main.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/front/eshopper/js/simpleCart.js')); ?>"></script>
        <script>
            var data2 = [
                {view: "image", attr: "thumb", label: false},
                {attr: "productid", label: "ID"},
                /* Name */
                {attr: "name", label: "Product"},
                /* Quantity */
                {attr: "quantity", label: "Qty"},
                /* Price */
                {attr: "price", label: "Price", view: 'currency'},
                {view: function(item, column) {
                        var str = '';
                        var telo = item.get('options');
                        for (var key in telo) {
                            if (key !== 'productid' && key !== 'thumb') {
                                str += key + ' : ' + telo[key] + '<br />';
                            }
                        }
                        return str;

                    }, label: 'Options'},
                /* Remove */
            ];
            var data = [
                {view: "image", attr: "thumb", label: false},
                {attr: "productid", label: "ID"},
                /* Name */
                {attr: "name", label: "Product"},
                /* Quantity */
                {attr: "quantity", label: "Qty"},
                /* Price */
                {attr: "price", label: "Price", view: 'currency'},
                {view: function(item, column) {
                        var str = '';
                        var telo = item.get('options');
                        for (var key in telo) {
                            if (key !== 'productid' && key !== 'thumb') {
                                str += key + ' : ' + telo[key] + '<br />';
                            }
                        }
                        return str;

                    }, label: 'Options'},
                /* Remove */
            ];
            data2.push({view: "remove", text: "Remove", label: false})
            simpleCart({
                cartStyle: "table",
                cartColumns: data2,
                shippingFlatRate: 0,
            });
            simpleCart.currency({
                code: "IDR",
                name: "Rupiah",
                symbol: "Rp. ",
                delimiter: ".",
                after: false,
                accuracy: 0
            });
            var anotherCart = simpleCart.copy("anotherCart");
            anotherCart({
                cartStyle: "table",
                cartColumns: data,
                shippingFlatRate: 0,
            });
            anotherCart.currency({
                code: "IDR",
                name: "Rupiah",
                symbol: "Rp. ",
                delimiter: ".",
                after: false,
                accuracy: 0
            });
            simpleCart.bind('beforeRemove', function(item) {
                anotherCart.find(item.get('id')).remove();
            });

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,
                show_hint: true,
                click_callback: function(image_anchor, instance_id) {
                    alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                }
            });
            $("#logout").click(function(e) {
                e.preventDefault();
                simpleCart.empty();
                anotherCart.empty();
                return window.location.replace("<?php echo e(url('logout')); ?>");
            });

        </script>

        <!-- hover effek -->
            <script type="text/javascript">
        $( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});
    </script>
    <!-- end hover -->
        
        <?php $__env->startSection('js'); ?>
        <?php echo $__env->yieldSection(); ?>
  
</body>
</html>
