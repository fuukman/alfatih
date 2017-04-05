@extends('welcome')

@section('content')

<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Features Items</h2>
        @if(count($product))
        @foreach($product as $item)
       
        <div class="col-sm-4">
            <div class="thumbnail">
                <div class="hover01 column">

                    <figure> <img src="{{ asset('images/products/full/'.$item->img_name) }}" class="img-responsive"></figure>   

                </div>
                <div class="caption">
                </br>
            </br>
        </br>
    </br>
    <h4><p>{{ $item->name }}</p></h4>
    <h5><p>{{ "Rp ".number_format($item->price,2, ',', '.') }}</p></h5>
    <p>
        <hr>
        <center>
            <a href="{!! url('/product/'.$item->id.'/show') !!}" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> lihat selengkapnya</a>
        </center>
        <hr>
    </p>
</div>
</div>
</div>

@endforeach
</div>
</div>


<div align="center">
    {!! $product->render() !!}
</div>
@else
<div class="alert alert-danger">
  Oops.. Produk yang dicari Tidak Ditemukan
</div>
@endif
@endsection

