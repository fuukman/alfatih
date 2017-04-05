<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
        <title>AdminLTE 2 | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="{{asset('theme/backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />    
        <!-- FontAwesome 4.3.0 -->
        <link href="{{asset('theme/backend/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="{{asset('theme/backend/plugins/ionicons/ionicons.min.css')}}" rel="stylesheet" type="text/css" />    
        <!-- Theme style -->
        <link href="{{asset('theme/backend/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="{{asset('theme/backend/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
        @section('css')
        @show
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="{{asset('backend/plugins/html5shiv.js')}}"></script>
            <script src="{{asset('backend/plugins/respond.min.js')}}"></script>
        <![endif]-->

    </head>
    <body class="skin-blue fixed">
        <div class="wrapper">
            @section('header')
            @include('backend.layouts.header')
            @show

            @section('sidebar')
            @include('backend.layouts.sidebar')
            @show
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div><!-- /.content-wrapper -->

            @section('footer')
            @include('backend.layouts.footer')
            @show
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.3 -->
        <script src="{{asset('theme/backend/plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
        <script src="{{asset('theme/backend/plugins/jQueryUI/jquery-ui.min.js')}}"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{asset('theme/backend/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>  
        <script src="{{asset('theme/backend/plugins/blockui/jquery.blockUI.js')}}" type="text/javascript"></script>  
        <!-- iCheck -->
        <script src="{{asset('theme/backend/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
        <!-- Slimscroll -->
        <script src="{{asset('theme/backend/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="{{asset('theme/backend/plugins/fastclick/fastclick.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('theme/backend/dist/js/app.min.js')}}" type="text/javascript"></script>
        <script>
$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
        </script>
        @section('js')

        @show
    </body>
</html>