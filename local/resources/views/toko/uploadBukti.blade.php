@extends('layouts.app')
@section('css')
<link href="{{asset('theme/backend/plugins/iCheck/all.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('theme/backend/plugins/fileinput/fileinput.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('scripts')
<script src="{{asset('theme/backend/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/backend/plugins/fileinput/fileinput.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/backend/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/backend/plugins/input-mask/jquery.inputmask.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/backend/plugins/input-mask/jquery.inputmask.extensions.js')}}" type="text/javascript"></script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>

<script src="{{asset('theme/backend/plugins/input-mask/jquery.inputmask.numeric.extensions.js')}}" type="text/javascript"></script>
<script>
  $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
  });
//Red color scheme for iCheck
$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
  checkboxClass: 'icheckbox_minimal-red',
  radioClass: 'iradio_minimal-red'
});
//Flat red color scheme for iCheck
$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
  checkboxClass: 'icheckbox_flat-green',
  radioClass: 'iradio_flat-green'
});
$("#price").inputmask();
$("#input-2").fileinput({
  uploadUrl: "",
  uploadAsync: true,
  minFileCount: 1,
  maxFileCount: 1,
  allowedFileExtensions: ["jpg", "jpeg","png"],
    uploadExtraData: function() {  // callback example
      var out = {_token: "{{ csrf_token() }}"};
      return out;
    }
  });
var max_fields = 10; //maximum input boxes allowed
var wrapper = $(".input_fields_wrap"); //Fields wrapper
var add_button = $(".add_field_button"); //Add button 
var button = '<div class="form-group"><div class="row"><div class="col-xs-2"><input type="text" class="form-control" placeholder="Name" name="name[]"></div><div class="col-xs-2"><input type="text" class="form-control" placeholder="Value" name="value[]"></div><div class="col-xs-3"><button type="button" class="btn btn-default remove_field">Remove field</button></div></div></div>'

var x = 1; //initlal text box count
$(add_button).click(function(e) { //on add input button click
  e.preventDefault();
    if (x < max_fields) { //max input box allowed
        x++; //text box increment
        $(wrapper).append(button); //add input box
      }
    });

$(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
  e.preventDefault();
  $(this).closest('.form-group').remove();
  x--;
})
</script>
@endsection
@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
     @if(Session::has('message'))
     <div class="alert alert-success">
      {{ Session::get('message') }}
    </div>
    @endif

    <div class="box">
      <div class="box-header">
        <h3 class="box-title"></h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            @if(count($errors))
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#add_pro" data-toggle="tab">Bukti</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="add_pro">
                  <form action="{{route('postUploadBukti')}}" method="post"  enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="invoice" value="{{$bukti}}">
                    pilih bukti pembayaran
                    <div class="form-group">
                      <label for="exampleInputFile">Images</label>
                      <input id="input-2"  type="file" name='img' multiple=true class="file-loading" data-show-upload="false">
                    </div>
                    <p>Format gambar jpg,Jpeg</p>
                    <p>Maximal file gambar 1.5MB</p>
                    <input type="submit" value="Upload Bukti" name="submit">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
</div>  
@endsection