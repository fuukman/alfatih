@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Pilih Tarif</div>
                <div class="panel-body">
                  <div class="panel-body"">
  <a href="{{url('product/cart')}}"><button type="submit" class="btn btn-default">Kembali</button></a>
  </div>

  <form class="form-horizontal" action="{{route('pilihOngkir')}}" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @foreach($cekongkir as $cek)
    @if(count($cek['costs']) > 0)
    @foreach($cek['costs'] as $cost)
    <div class="panel panel-default">
        <div class="panel-body">
            {{$cek['name'].' - '.$cost['service'].' / '.$cost['description']}}
            <div class="radio">
                <label>
                    <input required="" type="radio" name="tarif"  class="tarif" value="{{$cost['cost'][0]['value']}}">
                    {{$cost['cost'][0]['value']}}
                </label>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="panel panel-default">
        <div class="panel-body">
            Tarif Pengiriman Tidak diketemukan.
        </div>
    </div>
    @endif
    @endforeach

      <div class="panel-body"">
        <button type="submit" class="btn btn-default">Simpan</button>
    </div>
  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
