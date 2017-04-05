
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	{!! Form::label('name', 'Nama Produk', ['class' => 'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
		{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
	</div>
</div>




<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
	{!! Form::label('id_cat', 'category', ['class' => 'col-md-4 control-label']) !!}
	<div class="col-md-6">
		<select name="id_cat">
			<option value="">--Pilih Category--</option>
			@foreach($kategori as $kate)
			<option value="{{$kate->id}}" >
				{{$kate->name}}
			</option>
			@endforeach
		</select>
		{!! $errors->first('category', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
	{!! Form::label('desc', 'Deskripsi', ['class' => 'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
		{!! $errors->first('desc', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('sku') ? ' has-error' : '' }}">
	{!! Form::label('sku', 'SKU', ['class' => 'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('sku', null, ['class' => 'form-control']) !!}
		{!! $errors->first('sku', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('berat') ? ' has-error' : '' }}">
	{!! Form::label('berat', 'Berat', ['class' => 'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('berat', null, ['class' => 'form-control']) !!}
		{!! $errors->first('berat', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('stok') ? ' has-error' : '' }}">
	{!! Form::label('stok', 'Stok', ['class' => 'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('stok', null, ['class' => 'form-control']) !!}
		{!! $errors->first('stok', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
	{!! Form::label('price', 'Harga', ['class' => 'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::number('price', null, ['class' => 'form-control']) !!}
		{!! $errors->first('price', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
	{!! Form::label('image', 'Gambar Produk', ['class' => 'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::file('image[]', array('multiple'=>true)) !!}
		{!! $errors->first('image','<p class="help-block">:message</p>') !!}
		@if (isset($product) && $product->image)
		<p>
			{!! Html::image(asset('img/'.$product->image), null, ['class'=>'img-rounded', 'width'=>'100%', 'height'=>'100%']) !!}
		</p>
		@endif
	</div>
</div>										

<div class="form-group">
	<div class="col-md-6 col-md-offset-4">
		{!! Form::submit('Simpan Produk', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
