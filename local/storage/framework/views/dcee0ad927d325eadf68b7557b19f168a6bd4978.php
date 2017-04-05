<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
         <?php foreach($kategori as $kate): ?>     
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="<?php echo e(url('kategori/'. $kate->id)); ?>">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        <a href="<?php echo e(url('kategori/'. $kate->id)); ?>"><?php echo e($kate->name); ?></a>
                        <span class="label label-success pull-right"></span>
                    </a>
                        
                </h4>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
</div>