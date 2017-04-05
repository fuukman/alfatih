    @extends('layouts.app')
    @section('content')

    <div class="container">
        <div class="row">
    <div class="col-md-12">
                <div class="text-center">
                <h4>Silakan transfer sesuai invoice</h4>
                    <img src="{{asset('images/logo.png')}}" class="fa fa-search-plus pull-left icon" width="130" height="130"></img>
                    <h2> Invoice :  {{ base64_decode($notrans->formid) }}</h2><br>
                    <h3> Tanggal :  {{ $notrans->created_at->format('d-m-Y')}}</h3>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12 ">
                        <div class="panel panel-default height">
                            <div class="panel-heading">Alamat Pengiriman</div>
                            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-condensed">
                                    <thead>
                                      <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Propinsi</th>
                                        <th>Kodepos</th>
                                        <th>No Telp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td>{{ $customer->province }}</td>
                                        <td>{{ $customer->postal_code}}</td>
                                        <td>{{ $customer->phone}}</td>
                                    </tr>     
                                </tbody>
                            </table>               
                          <div class="alert alert-info">
                              <strong>Bukti Pembayaran</strong> 
                              @if ($notrans->bukti != "Belum Kirim bukti")
                              <p><img src="{{asset($notrans->bukti)}}" width="400" height="300"></p>
                              @else
                              <h3>{{$notrans->bukti}}</h3>
                              @endif
                          </div>
                          <hr>
                        </div>
                          <div class="row">
                          <center>   
                          <div class="alert alert-info">
                              <strong>Info!</strong> Setelah Tranfer Hubungi kami Lewat SMS / WhatsApp / Telp
                          </div>
                          <div class="col-xs-12 col-sm-6">
                              <h3>Transfer</h3>
                              <img src="{{asset('images/mandiri.png')}}" width="220" height="100">
                              <h4>Nama : Arih</h4>
                              <h4>NoRek : 1370011309651 </h4>
                          </div>
                          <div class="col-xs-12 col-sm-6">
                              <h3>Kontak</h3>
                              <img src="{{asset('images/kontak.png')}}" width="300" height="100">
                              <h4>085742155733</h4>
                              <h4>(Arih)</h4>
                          </div>
                  </center>

              </div>  
          </div>
      </div>
  </div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center"><strong>Order summary</strong></h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td><strong>Item Name</strong></td>
                                <td class="text-center"><strong>Item Price</strong></td>
                                <td class="text-center"><strong>Item Quantity</strong></td>
                                <td class="text-center"><strong>Item ukuran</strong></td>
                                <td class="text-center"><strong>Total Price</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction as $list)
                            <tr>
                                <td>{{ $list->product->name }}</td>
                                <td class="text-center">{{ "Rp ".number_format($list->product->price,2, ',', '.') }}</td>
                                <td class="text-center">{{ $list->qty }}</td>
                                <td class="text-center">{{ $list->size }}</td>
                                <td class="text-center">{{ "Rp ".number_format($list->total_price,2, ',', '.') }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="highrow"></td>
                                <td class="highrow"></td>
                                @if(\Entrust::hasRole('member'))
                                <td class="highrow text-center"><strong>Subtotal</strong></td>
                                @else
                                <td class="highrow text-center"><strong>Subtotal</strong></td>
                                @endif

                                <td class="highrow text-center">{{ $notrans->subtotal }} + Ongkir Rp {{$notrans->ongkir}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center">
        <a href="{!! url('/') !!}" class="btn btn-primary">Selesai</a>
        <a href="{!! url('/pdf/' .$notrans->formid ) !!}" class="btn btn-primary">Download PDF</a></p>
    </div>
</div>
</div>

@endsection
