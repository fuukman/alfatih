@extends('layouts.app') 
@section('content')
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Tambah Produk </div>
				<div class="panel-body">
					 
    				 {!! Form::open(array('url'=>route('admin.products.store'),'method'=>'POST', 'files'=>true)) !!}
						@include('products._form')
					{!! Form::close() !!}
	
				</div>
			</div>
		</div>
	</div>
</div>	

@endsection