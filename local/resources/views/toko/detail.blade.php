@extends('welcome')
@section('slider')
@overwrite
@section('js')
@endsection
@section('content')

<div class="col-sm-9 padding-right">
    <div class="product-details"><!--product-details-->
        <div class="col-sm-5">
            <ul id="etalage">
             @if(count($product->getPictures()->get()) > 0)
             @foreach($product->getPictures()->get() as $k=>$v)
             <li>
                 <a  href="optionallink.html">
                    <img class="etalage_thumb_image" src="{{asset($v->path_full)}}" />
                    <img class="etalage_source_image" src="{{asset($v->path_full)}}" />
                </a>
            </li>
            @endforeach
            @else
            <li>
                <a href="optionallink.html">
                    <img class="etalage_thumb_image" src="http://placehold.it/350x150" />
                    <img class="etalage_source_image" src="http://placehold.it/350x150" />
                </a>
            </li>
            @endif
        </ul>
        
    </div>
    <div class="col-sm-7 simpleCart_shelfItem anotherCart_shelfItem">
        <div class="product-information">
            <i class="item_thumb" style="display:none"></i>
            <i class="item_productid" style="display:none"></i>
            <i class="item_price" style="display:none"></i>
            <img src="{{asset('theme/front/eshopper/images/product-details/new.jpg')}}" class="newarrival" alt="" />
            <h1 class="item_name">{{ $product->name }}</h1>
            <hr>
            {!! $product->desc !!}
            
            <p>
                <span>  
                    <span>{{ "Rp ".number_format($product->price,2, ',', '.') }} </span>  
                </span>
            </p>
            <span>
                <form method="post" action="{{route('product.save')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$product->id}}">
                    
                    <div class="form-group">
                     <label>Ukuran</label>
                     <div>
                        <select required="" name="size">
                           <option  value="">Pilih Ukuran</option>
                           <option  value="S">S</option>
                           <option value="M">M</option>
                           <option value="L">L</option>
                           <option value="XL">XL</option>
                           <option value="XXL">XXL</option>        
                       </select>
                   </div>
               </div>     
               <div class="alert alert-success">
                 <strong>Stok </strong>{{$product->stok}} Item
               </div>
                  
               <label>Quantity:</label>
               <div class="form-group">
                <input type="number" name="quantity" class="item_quantity" min="1" max="{{$product->stok}}"  value="1">
                <!-- <a href="{!! url('product/cart/'.$product->id) !!}" class="item_add btn btn-fefault cart">Masukan ke Keranjang</a> -->
                <button type="submit" value="Submit" class="item_add btn btn-fefault cart">Masukan Ke Keranjang</button>

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
                <p>SKU : {{$product->sku}}</p>
                <hr>
                <p>Berat : {{$product->berat}} gram</p>
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

@stop
