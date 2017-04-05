<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
         <?php foreach($kategori as $kate): ?>     
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        <?php echo e($kate->name); ?>

                        <span class="label label-success pull-right"></span>
                    </a>
                    <h4 class="panel-title"><a href="#"></a></h4>
                </h4>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
</div>