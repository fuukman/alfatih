<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
           <div class="panel panel-default">
                     <?php foreach($kategori as $kate): ?>
                     <?php if($kate->status): ?>    
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="<?php echo e(url('kategori/'. $kate->id)); ?>">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        <a href="<?php echo e(url('kategori/'. $kate->id)); ?>"><?php echo e($kate->name); ?></a>
                        <span class="label label-success pull-right"></span>
                    </a>
                </h4>
            </div>
                      <?php else: ?>
                      <?php endif; ?>
                      <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
