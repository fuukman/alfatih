@extends('layouts.app')

@section('content')

<center>
@if(\Entrust::hasRole('member'))


	<div class="container">
		<h4></h4>
		<!-- Panel -->
		<div class="panel">
		 <ul class="nav nav-tabs">
		 			<li class="active"><a data-toggle="tab" href="#menu1">Alamat sama</a></li>
	   			 	<li><a data-toggle="tab" href="#home">Alamat Berbeda</a></li>
	    			
	  			</ul>
				

  <div class="tab-content">
    <div id="home" class="tab-pane fade in">

      <article>
		<h4 align="center">Isikan Data Baru</h4>
		{!! Form::open(['route'=>['customer.save',$formid],'role'=> 'form', 'class' => 'form-horizontal']) !!}
		  <input type="hidden" name="id" value="{{$id}}">
		  <input type="hidden" name="nameUser" value="{{$name}}">
		  <input type="hidden" name="email" value="{{$email}}">
		  <input type="hidden" name="ongkir" value="{{$pilih}}">

		<div class="panel-body">

			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				{!! Form::label('name', 'Nama Lengkap', ['class' => 'col-md-4 control-label'])  !!}
				<div class="col-md-6">
					<input required="" type="text" class="form-control" value="" name="name" placeholder="Nama">
				</div>
				{!! Form::hidden('formid', $formid) !!}
			</div>

			<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
				{!! Form::label('phone', 'Nomor Handphone', ['class' => 'col-md-4 control-label'])  !!}
				<div class="col-md-6">
					<input required="" type="number" class="form-control" name="phone" value="" placeholder="Nomor Handphone">
				</div>
			</div>

			<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
				{!! Form::label('address', 'Alamat lengkap', ['class' => 'col-md-4 control-label'])  !!}
				<div class="col-md-6">
					<input required="" type="text" class="form-control" name="address" placeholder="Alamat Lengkap">
				</div>
			</div>

			<div  class="form-group{{ $errors->has('province') ? ' has-error' : '' }}">
				{!! Form::label('province', 'Provinsi', ['class' => 'col-md-4 control-label'])  !!}
				<div  class="col-md-6">
					<input required="" type="text" class="form-control" name="province" placeholder="Provinsi">
				</div>
			</div>

			<div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }}">
				{!! Form::label('postal_code', 'Kodepos', ['class' => 'col-md-4 control-label'])  !!}
				<div class="col-md-6">
					<input required="" type="number" class="form-control" name="postal_code" placeholder="Kode Pos">
				</div>
			</div>

			<div class="col-md-12 form-group text-center">
				{!! Form::submit('Submit', ['class'=>'btn btn-primary btn-large']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</article>
    </div>
    <div id="menu1" class="tab-pane fade in active">
        <article>
		<h4 align="center">Isikan Data Anda</h4>
		{!! Form::open(['route'=>['customer.save',$formid],'role'=> 'form', 'class' => 'form-horizontal']) !!}
		  <input type="hidden" name="id" value="{{$id}}">
		  <input type="hidden" name="nameUser" value="{{$name}}">
		  <input type="hidden" name="email" value="{{$email}}">
		  <input type="hidden" name="ongkir" value="{{$pilih}}">

		<div class="panel-body">

			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				{!! Form::label('name', 'Nama Lengkap', ['class' => 'col-md-4 control-label'])  !!}
				<div class="col-md-6">
					<input required="" type="text" readonly="readonly" class="form-control" value="{{(Auth::user()->name)}}" name="name" placeholder="Nama">
				</div>
				{!! Form::hidden('formid', $formid) !!}
			</div>

			<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
				{!! Form::label('phone', 'Nomor Handphone', ['class' => 'col-md-4 control-label'])  !!}
				<div class="col-md-6">
					<input required="" type="number" readonly="readonly" class="form-control" name="phone" value="{{$phone}}" placeholder="Nomor Handphone">
				</div>
			</div>

			<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
				{!! Form::label('address', 'Alamat lengkap', ['class' => 'col-md-4 control-label'])  !!}
				<div class="col-md-6">
					<input required="" type="text" readonly="readonly" class="form-control" name="address" value="{{$address}}" placeholder="Alamat Lengkap">
				</div>
			</div>

			<div  class="form-group{{ $errors->has('province') ? ' has-error' : '' }}">
				{!! Form::label('province', 'Provinsi', ['class' => 'col-md-4 control-label'])  !!}
				<div  class="col-md-6">
					<input required="" type="text" readonly="readonly" class="form-control" name="province" value="{{$province}}" placeholder="Provinsi">
				</div>
			</div>

			<div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }}">
				{!! Form::label('postal_code', 'Kodepos', ['class' => 'col-md-4 control-label'])  !!}
				<div class="col-md-6">
					<input required="" type="number" readonly="readonly" class="form-control" name="postal_code" value="{{$postal_code}}" placeholder="Kode Pos">
				</div>
			</div>

			<div class="col-md-12 form-group text-center">
				{!! Form::submit('Submit', ['class'=>'btn btn-primary btn-large']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</article>
    </div>
    
  </div>
</div>
	@else
	<div class="alert alert-info">
  <strong>Info!</strong> Untuk Melanjutkan Proses Pembelian Silahkan
	</div>
	<div class="panel-body">
	<a href="{{url('/login')}}"><button type="button" class="btn btn-info">Masuk</button></a> Atau
	<a href="{{url('/register')}}"><button type="button" class="btn btn-success">Mendaftar</button></a> 
	</div>
	@endif
    </div>
    </div>
    
	</center>
@endsection
