@extends('layouts.app')

@section('content')
<section class="content-header">
	<h1> Laporan Periode :

		<small> Tanggal {{ $from }} s/d {{ $to }}</small>
	</h1>

</section>
<div class="content">
	<div class="row">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class="panel-heading"></div>
				<div class="panel-body">
				
					
						<table class="table table-hover table-striped">
							<tr><th>Invoice</th><th>Tanggal</th><th>Nama Produk</th><th>Harga</th><th>Qty</th><th>Bukti</th><th>Total</th><th>Status</th></tr>
							
							@foreach( $transactions as $list )
							
							<tr>
								<td><a href="{!! url('invoice/'.$list->formid) !!}">{{ base64_decode($list->formid) }}</a></td>
								<td>{{ $list->tanggal }}</td>
								<td>{{ $list->product->name }}</td>
								<td>{{ "Rp ".number_format($list->product->price,2, ',', '.') }}</td>
								<td>{{ $list->qty }}</td>
								<td><a href="{{url($list->bukti)}}">{{ $list->bukti }}</a></td>
								<td>{{ "Rp ".number_format($list->total_price,2, ',', '.') }}</td>
								<td>
									<form method="post" action="{{route('postUbahStatus')}}" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<input type="hidden" name="invoice" value="{{$list->formid}}">
									<input type="hidden" name="nameUser" value="{{ App\User::find($list->id_users)->name }}">
									<input type="hidden" name="email" value="{{ App\User::find($list->id_users)->email }}">
									<div class="form-group">
										<div>
											<select name="status">
												<option value="Belum Terbayar">Belum Terbayar</option>
												<option value="Terbayar">Terbayar</option>
												<option value="{{ $list->status }}" selected>{{ $list->status }}</option>
												</select>
										</div>
									</div>    
									<button type="submit" value="Submit" class="item_add btn btn-fefault cart">Ubah Status</button>
								</form>

							</td>
						</tr>

						@endforeach

					</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
