@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>  
       
        <small></small>
    </h1>
 
</section>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Masuk</div>
                <div class="panel-body">

                        @if (Session::has('message'))
                            <div class="alert {{ Session::get('alert-class', 'alert-success') }}">
                            {{ Session::get('message') }}</div>
                            @endif

                    {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}
                        {{-- csrf_field() --}}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {!! Form::label('email', 'Alamat E-Mail', ['class'=>'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::email('email', null, ['class'=>'form-control']) !!}
                                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {!! Form::label('password', 'Password', ['class'=>'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password', ['class'=>'form-control']) !!}
                                {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('remember') !!} Ingatkan Saya
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Masuk
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Lupa Password?</a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
