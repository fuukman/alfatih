<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-envelope"></i> admin@alfatih.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                           <li><a href="https://www.facebook.com/belisob"><i class="fa fa-facebook-official"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                           <li><a href="https://www.instagram.com/belisob_/"><i class="fa fa-instagram"></i></a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </div><!--/header_top-->

   <div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="{{url('/')}}"><img src="{{asset('theme/front/eshopper/images/home/logo.png')}}" alt="" /></a>                    
                </div>
                <div class="btn-group pull-right">
                 @if (Session::has('message'))
                            <div class="alert {{ Session::get('alert-class', 'alert-success') }}">
                            {{ Session::get('message') }}</div>
                            @endif     
                 <form action="{{ url('pencarian') }}" method="GET">
                     <div class="search_box">
                        <input type="text" class="validate" name="cari" placeholder="Pencarian" >
                    </div>           
                    </form>  
            </div>

             
                       
        </div>
        <div class="col-sm-8">
            <div class="shop-menu pull-right">
                <ul class="nav navbar-nav">
                    @role('admin')
                    <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="{{ route('admin.products.index') }}"><i class="fa fa-pie-chart"></i> Product</a></li>
                    <li><a href="{{ url('/admin/report') }}"><i class="fa fa-file"></i> Laporan Transaksi</a></li>
                    @endrole
                    @if (Auth::check())
                    <li><a href="{{url('/akun')}}"><i class="fa fa-user"></i> Daftar Belanja</a></li>
                    <li><a href="{{ url('/product/cart') }}"><i class="fa fa-shopping-cart"></i> Keranjang</a></li>
                    <li><a href="{{url('logout')}}" id="logout"><i class="fa fa-lock"></i> Keluar</a></li>
                    @else
                    <li><a href="{{url('/login')}}"><i class="fa fa-sign-in"></i> Masuk</a></li>
                    <li><a href="{{url('/register')}}"><i class="fa fa-lock"></i> Daftar</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</header>

