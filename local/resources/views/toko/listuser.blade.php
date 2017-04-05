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
    <h1> Pelanggan
       
        <small> List Pelanggan</small>
    </h1>
 
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Daftar Pelanggan Toko</h3>
                </div><!-- /.box-header -->
               
                 
              
                <div class="box-body">
                    <table id="product-table" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                             
                            </tr>
                            </thead>
                             @foreach( $user as $users )
                            <tbody>
                            <tr>
                                <th>{{ $users->id }}</th>
                                <th>{{ $users->name }}</th>
                                <th><a href="mailto:{{ $users->email }}">{{ $users->email }}</a></th>
                               @if ($users->confirmed)
                                <th class="alert alert-success">Sudah verfikasi</th>
                               @else
                                <th class="alert alert-danger">belum verifikasi</th>
                                @endif

                            </tr>
                            </tbody>
                              @endforeach
                    </table>
                     <center><p>{!! $user->render() !!}</p></center>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@stop