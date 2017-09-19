@extends('layouts.app')

@section('content')
<!-- app/views/productcart.blade.php -->

	<div class="container">
		<h4><i class="fa fa-shopping-cart"></i> Keranjang Belanja</h4>
		<!-- Panel -->
		<div class="panel">
		 <ul class="nav nav-tabs">
		 			<li class="active"><a data-toggle="tab" href="#menu1">Kirim-Kirim</a></li>
	   			 	<li><a data-toggle="tab" href="#home">COD</a></li>
	    			
	  			</ul>
				
			<div class="panel-heading"></div>
				
<div class="tab-content">
    <div id="home" class="tab-pane fade">
     <table class="table table-striped m-b-none text-sm">
				<thead>
					<tr>
						<th width="8">No</th>
						<th width="300">Nama Product</th>                    
						<th width="150">Harga</th>
						<th width="10">Jumlah</th>
						<th width="100">berat</th>
						<th width="100">Ukuran</th>
						<th width="200">Total</th>
						<th width="75">Action</th>
					</tr>
				</thead>

				<tbody>
					<?php $i = 1; ?>
					@foreach($cart_content as $cart)
						<tr>
							<td>{{ $i }}</td>
							<td>{{ $cart->name }}</td>
							<td>{{ "Rp ".number_format($cart->price,2, ',', '.') }}</td>
							<td>{{ $cart->qty }}</td>
							<td>{{ $cart->berat }} gram</td>
							<td>{{ $cart->size }}</td>
							
							<td>{{ "Rp ".number_format($cart->price * $cart->qty,2, ',', '.') }}</td>
							<td>
								<a href="{{ url('cart/delete/'.$cart->rowId) }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>	
							</td>
						</tr>
						<?php $i++; ?>
					@endforeach
					<tr>
						<td class="highrow"></td>
						<td class="highrow"></td>
						@if(\Entrust::hasRole('member'))
							<td><strong>Subtotal <!-- (discount 5%) --></strong></td>
						@else
							<td><strong>Subtotal</strong></td>
						@endif
						<td class="highrow"></td>
						@if(\Entrust::hasRole('member'))
							<td><strong>{{ "Rp ".Cart::subtotal(2, ',', '.') }} + Ongkir (Rp {{$pilih}}) </strong></td>
						@else
							<!-- <td><strong>{{ "Rp ".Cart::total(2, ',', '.') }}</strong></td> -->
							<td><strong>{{ "Rp ".Cart::subtotal(2, ',', '.') }}</strong></td>
						@endif
						<td class="highrow"></td>
					</tr>
				</tbody>
			</table>

			<div class="panel-footer">
				<a href="{{ url('/') }}" class="btn btn-white" type="submit">Lanjut Belanja</a>
				@if (Cart::count() != 0)
							  <form class="form-horizontal" action="{{route('simpanOngkir')}}" method="POST">
 							 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 							 <input type="hidden" name="ongkir" value="{{$pilih}}">
					<!-- <a href="{{ url('cart/checkout') }}" class="btn btn-info">Bayar</a> -->
							<button type="submit" class="btn btn-info">Bayar</button>
						  </form>
				@endif
			</div>

    </div>
    <div id="menu1" class="tab-pane fade in active">
    <table class="table table-striped m-b-none text-sm">
				<thead>
					<tr>
						<th width="8">No</th>
						<th width="300">Nama Product</th>                    
						<th width="150">Harga</th>
						<th width="10">Jumlah</th>
						<th width="100">berat</th>
						<th width="100">Ukuran</th>
						<th width="200">Total</th>
						<th width="75">Action</th>
					</tr>
				</thead>

				<tbody>
					<?php $i = 1; ?>
					@foreach($cart_content as $cart)
						<tr>
							<td>{{ $i }}</td>
							<td>{{ $cart->name }}</td>
							<td>{{ "Rp ".number_format($cart->price,2, ',', '.') }}</td>
							<td>{{ $cart->qty }}</td>
							<td>{{ $cart->berat }} gram</td>
							<td>{{ $cart->size }}</td>
							
							<td>{{ "Rp ".number_format($cart->price * $cart->qty,2, ',', '.') }}</td>
							<td>
								<a href="{{ url('cart/delete/'.$cart->rowId) }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>	
							</td>
						</tr>
						<?php $i++; ?>
					@endforeach
					<tr>
						<td class="highrow"></td>
						<td class="highrow"></td>
						@if(\Entrust::hasRole('member'))
							<td><strong>Subtotal <!-- (discount 5%) --></strong></td>
						@else
							<td><strong>Subtotal</strong></td>
						@endif
						<td class="highrow"></td>
						@if(\Entrust::hasRole('member'))
							<td><strong>{{ "Rp ".Cart::subtotal(2, ',', '.') }} + Ongkir (Rp {{$pilih}}) </strong></td>
						@else
							<!-- <td><strong>{{ "Rp ".Cart::total(2, ',', '.') }}</strong></td> -->
							<td><strong>{{ "Rp ".Cart::subtotal(2, ',', '.') }}</strong></td>
						@endif
						<td class="highrow"></td>
					</tr>
				</tbody>
			</table>

			<div class="panel-footer">
				<a href="{{ url('/') }}" class="btn btn-white" type="submit">Lanjut Belanja</a>
				@if (Cart::count() != 0)
							  <form class="form-horizontal" action="{{route('simpanOngkir')}}" method="POST">
 							 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 							 <input type="hidden" name="ongkir" value="{{$pilih}}">
					<!-- <a href="{{ url('cart/checkout') }}" class="btn btn-info">Bayar</a> -->
							<button type="submit" class="btn btn-info">Bayar</button>
						  </form>
				@endif
			</div>

     <h2>Cek Ongkir</h2>

  <form class="form-horizontal" action="{{route('cekOngkir')}}" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kota Asal</label>
      <div class="col-sm-10">
        <input type="text" autocomplete="off" class="form-control" value="Yogyakarta" readonly="readonly" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Kota Tujuan</label>
      <div class="col-sm-10">
		<input type="text" placeholder="ex : Bandung" name="kota" required="" id="autocomplete" class="form-control"/>
		<input type="hidden" name="kota_asal" value="" />
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Berat (gram)</label>
      <div class="col-sm-10">
      @foreach($cart_content as $cart)
      {{$cart->berat}}
       @endforeach
        <input type="number" autocomplete="off" value="" required="required" class="form-control" name="berat" placeholder="Berat Kiriman">
       
      </div>
    </div>

    	<div class="row" style="width: 500px; height: 50px; margin-left: 100px;">
       <div class="radio-inline">
      <label>
       <input type="radio" name="courier" id="optionsRadios1" value="jne" checked>
         JNE
       </label>
        </div>

        <div class="radio-inline">
      <label>
       <input type="radio" name="courier" id="optionsRadios1" value="tiki" checked>
         TIKI
       </label>
        </div>

        <div class="radio-inline">
      <label>
       <input type="radio" name="courier" id="optionsRadios1" value="pos" checked>
        POS
       </label>
        </div>

       </div>


    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Cek Tarif</button>
      </div>
    </div>
  </form>
   
  </div>
</div>

</div>			

</div>
	</div>

@endsection
@section('scripts')

<!-- <script>
  $( function() {
    var availableTags = 
    [ 
   
    @foreach($ongkir as $datas)
    "{{ $datas['city_id']}}","{{ $datas['city_name']}}",
    @endforeach


   
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
<script>
	function rubahValue(){
		var data = document.getElementById("tags").value;
		document.getElementById("keluaran").value = data;
	}
</script>
 -->
 <script>
var dataCities = [
		 @foreach($ongkir as $datas)
			{"value": "{{ $datas['city_name']}}", "data": "{{ $datas['city_id']}}"}, 
			  @endforeach
]
$(document).ready(function () {
$('#autocomplete').autocomplete({
    lookup: dataCities,
    onSelect: function (suggestion) {
        $("input[name=kota_asal]").val(suggestion.data);
    }
});
});
</script>

@endsection