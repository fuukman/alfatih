<?php $__env->startSection('content'); ?>

<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Features Items</h2>
        <?php if(count($product)): ?>
        <?php foreach($product as $item): ?>
        <div class="col-sm-4">
            <div class="thumbnail">
                <div class="hover01 column">

                    <figure> <img src="<?php echo e(asset('images/products/full/'.$item->img_name)); ?>" class="img-responsive"></figure>   

                </div>
                <div class="caption">
                </br>
            </br>
        </br>
    </br>
    <h4><p><?php echo e($item->name); ?></p></h4>
    <h5><p><?php echo e("Rp ".number_format($item->price,2, ',', '.')); ?></p></h5>
    <p>
        <hr>
        <center>
            <a href="<?php echo url('/product/'.$item->id.'/show'); ?>" class="btn btn-info"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> lihat selengkapnya</a>
        </center>
        <hr>
    </p>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>


<div align="center">
    <?php echo $product->render(); ?>

</div>
<?php else: ?>
<div class="alert alert-danger">
  Oops.. Produk yang dicari Tidak Ditemukan
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>