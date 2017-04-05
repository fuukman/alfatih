<?php $__env->startSection('slider'); ?>
<?php $__env->stopSection(true); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="col-sm-9 padding-right">
    <div class="product-details"><!--product-details-->
        <div class="col-sm-5">
            <ul id="etalage">
             <?php if(count($product->getPictures()->get()) > 0): ?>
             <?php foreach($product->getPictures()->get() as $k=>$v): ?>
             <li>
                 <a  href="optionallink.html">
                    <img class="etalage_thumb_image" src="<?php echo e(asset($v->path_full)); ?>" />
                    <img class="etalage_source_image" src="<?php echo e(asset($v->path_full)); ?>" />
                </a>
            </li>
            <?php endforeach; ?>
            <?php else: ?>
            <li>
                <a href="optionallink.html">
                    <img class="etalage_thumb_image" src="http://placehold.it/350x150" />
                    <img class="etalage_source_image" src="http://placehold.it/350x150" />
                </a>
            </li>
            <?php endif; ?>
        </ul>
        
    </div>
    <div class="col-sm-7 simpleCart_shelfItem anotherCart_shelfItem">
        <div class="product-information">
            <i class="item_thumb" style="display:none"></i>
            <i class="item_productid" style="display:none"></i>
            <i class="item_price" style="display:none"></i>
            <img src="<?php echo e(asset('theme/front/eshopper/images/product-details/new.jpg')); ?>" class="newarrival" alt="" />
            <h1 class="item_name"><?php echo e($product->name); ?></h1>
            <hr>
            <?php echo $product->desc; ?>

            
            <p>
                <span>  
                    <span><?php echo e("Rp ".number_format($product->price,2, ',', '.')); ?> </span>  
                </span>
            </p>
            <span>
                <form method="post" action="<?php echo e(route('product.save')); ?>">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                    
                    <div class="form-group">
                     <label>Ukuran</label>
                     <div>
                        <select name="size">
                           <option value="">Pilih Ukuran</option>
                           <option value="S">S</option>
                           <option value="M">M</option>
                           <option value="L">L</option>
                           <option value="XL">XL</option>
                           <option value="XXL">XXL</option>        
                       </select>
                   </div>
               </div>
               <label>Quantity:</label>
               <div class="form-group">
                <input type="number" name="quantity" class="item_quantity" min="1"  value="1">
                <!-- <a href="<?php echo url('product/cart/'.$product->id); ?>" class="item_add btn btn-fefault cart">Masukan ke Keranjang</a> -->
                <button type="submit" value="Submit" class="item_add btn btn-fefault cart">Masukan Ke Keranjang</button>
                <hr>
                <div class="alert alert-info">
                  <h4>Masih bingung cara pesen lewat website ??</h4>
              </div>
              <p>Pemesanan bisa melalui WA/LINE/SMS dengan format</p>
              <p><b>Nama_NamaProduct_Warna_Jumlah_Ukuran</b></p>
              <p>kemudian kirim ke kontak yang ada di bawah website</p>
          </div>
      </form>
  </span>
  
</div><!--/product-information-->
</div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#reviews" data-toggle="tab">Details</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="reviews" >
            <div class="col-sm-12">
                <br />
                <p>SKU : <?php echo e($product->sku); ?></p>
                <hr>
                <p>Berat : <?php echo e($product->berat); ?> kg</p>
            </div>
        </div>

    </div>
</div><!--/category-tab-->

<!--     <div class="recommended_items">

        <h2 class="title text-center">recommended items</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">	
                  
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="theme/images/home/recommend3.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>			
        </div>
    </div> -->
    <!-- recommended_items -->

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>