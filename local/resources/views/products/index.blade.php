@extends('backend/layouts/index')
@section('css')
<link href="{{asset('backend/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Product
       
        <small>List Product</small>
    </h1>
 
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><a href="{{url('admin/products/create')}}" class="btn btn-success">Tambah Product</a></h3>
                </div><!-- /.box-header -->
               
                 
              
                <div class="box-body">
                    <table id="product-table" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Deskripsi</th>
                                <th>Price</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                             @foreach( $product as $products )
                            <tbody>
                            <tr>
                                <th>{{ $products->name }}</th>
                                <th>{{ $products->desc }}</th>
                                <th>{{ "Rp ".number_format($products->price, 2, ',', '.') }}</th>
                                <th>{{ App\Category::find($products->id_cat)->name }}</th>
                                <th>{{ $products->stok }}</th>
                                <th><a href="{!! route('admin.products.edit', [$products->id]) !!}" class="btn btn-info">Edit</a><a href="{{ route('admin.products.show', [$products->id]) }}" class="btn btn-danger">hapus</a></th>
                            </tr>
                            </tbody>
                              @endforeach
                    </table>
                     <center><p>{!! $product->render() !!}</p></center>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@stop