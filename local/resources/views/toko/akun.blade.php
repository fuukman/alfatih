@extends('layouts.app')
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
    <h1> Akun
       
        <small>List Pembelian</small>
    </h1>
 
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            @if($history = $history)
               
                  @if(Session::has('message'))
             <div class="alert alert-success">
                {{ Session::get('message') }}
              </div>
              @endif
              
                <div class="box-body">
                    <table id="product-table" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Nama Product</th>
                                <th>Invoice</th>
                                <th>Sku</th>
                                <th>Qty</th>
                                <th>Bukti</th>
                                <th>Size</th>
                                <th>subtotal + Ongkir</th>
                                <th>Status</th>
                                <th>Menu</th>
                            </tr>
                            </thead>  
                                @foreach($history as $his)
                            <tbody>
                            <tr>
                                <td>{{$his->produkNama}}</td>
                                <td><a href="{!! url('invoice/' .$his->formid) !!}">{{base64_decode($his->formid)}}</a></td>
                                <td>{{$his->sku}}</td>
                                <td>{{$his->qty}}</td>
                                <td>{{$his->bukti}}</td>
                                <td>{{$his->size}}</td>
                                <td>{{$his->subtotal}} + Rp {{$his->ongkir}}</td>
                                
                                @if ($his->status ==  'Terbayar' OR $his->status ==  'terbayar')
                                <th style="color:green;">Terbayar</th>
                                @else
                                <th style="color:red;">Belum Terbayar</th>
                                @endif
                                <th>
                                <a href="{{url('akun/bukti/'.$his->formid)}}" class="btn btn-info">Upload Bukti Pembayran</a>
                                <a href="{{ url('akun/delete/'.$his->id) }}" class="btn btn-danger">Batal Pesan</a></th>
                            </tr>
                            </tbody>
                              @endforeach
                    </table>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        @else
    <center>
      <div class="alert alert-info">
        <strong>Info!</strong> Belum ada daftar transaksi Pembelian
      </div>
    </center>
    @endif
        
</section><!-- /.content -->
@stop