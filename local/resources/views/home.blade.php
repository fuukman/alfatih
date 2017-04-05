@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
    @foreach($cekongkir as $cek)
    @if(count($cek['costs']) > 0)
    @foreach($cek['costs'] as $cost)
    <div class="panel panel-default">
        <div class="panel-body">
            {{$cek['name'].' - '.$cost['service'].' / '.$cost['description']}}
            <div class="radio">
                <label>
                    <input type="radio" name="tarif"  class="tarif" value="{{$cek['code'].'-'.$cost['service'].'-'.$cost['cost'][0]['value']}}">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
