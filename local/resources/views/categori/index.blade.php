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
    <h1> Kategori
       
        <small>List Kategori</small>
    </h1>
 
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><a href="{{url('admin/categori/create')}}" class="btn btn-success">Tambah Kategori</a></h3>
                </div><!-- /.box-header -->
               
                 
              
                <div class="box-body">
                    <table id="product-table" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                             @foreach( $category as $cate )
                            <tbody>
                            <tr>
                                <th>{{ $cate->id }}</th>
                                <th>{{ $cate->name }}</th>
                                @if ($cate->status)
                                <th style="color:green;">Aktif</th>
                                @else 
                                <th style="color:red;">Tidak Aktif</th>
                                @endif
                                 <th><a href="{!! route('admin.categori.edit', [$cate->id]) !!}" class="btn btn-info">Edit</a></th>
                            </tr>
                            </tbody>
                              @endforeach
                    </table>
                     <center><p>{!! $category->render() !!}</p></center>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@stop