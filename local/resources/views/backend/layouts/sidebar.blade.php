<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        @if (Auth::user())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('images/user.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> online</a>
            </div>
        </div>
        @else
        @endif
        <!--         search form 
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                        <span class="input-group-btn">
                            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
                 /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
           <!--    @if(\Entrust::hasRole('admin'))
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
              @else
            @endif -->
            @if(\Entrust::hasRole('admin'))
            <li class="treeview">
                <a href="{{url('/admin/dashboard')}}">
                    <i class="fa fa-files-o"></i>
                    <span>Dashboard</span></i>
                </a>
            </li>
            @else
            @endif

           @if(\Entrust::hasRole('admin'))
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Produk</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/products')}}"><i class="fa fa-circle-o"></i>Produk List</a></li>
                    <li><a href="{{url('admin/products/create')}}"><i class="fa fa-plus"></i>Tambah Produk</a></li>
                </ul>
            </li>
            @else
            @endif
           
           @if(\Entrust::hasRole('admin'))
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Kategori</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/categori')}}"><i class="fa fa-circle-o"></i>Kategori List</a></li>
                    <li><a href="{{url('admin/categori/create')}}"><i class="fa fa-plus"></i>Tambah Kategori</a></li>
                </ul>
            </li>
            @else
            @endif

            @if(\Entrust::hasRole('admin'))
            <li class="treeview">
                <a href="{{url('/admin/report')}}">
                    <i class="fa fa-files-o"></i>
                    <span>Laporan Transaksi</span></i>
                </a>
            </li>
            @else
            @endif

            @if(\Entrust::hasRole('admin'))
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Users</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/listuser')}}"><i class="fa fa-circle-o"></i>Users List</a></li>
                </ul>
            </li>
            @else
            @endif
            
            @if(\Entrust::hasRole('member'))
            <li class="treeview">
                <a href="{{url('akun')}}">
                    <i class="fa fa-files-o"></i>
                    <span>Daftar Belanja</span></i>
                </a>
            </li>
            @else
            @endif

            @if(\Entrust::hasRole('member'))
            <li class="treeview">
                <a href="{{url('product/cart')}}">
                    <i class="fa fa-files-o"></i>
                    <span>Keranjang</span></i>
                </a>
            </li>
            @else
            @endif

            <li>
                <a href="{{url('')}}" target="_blank">
                    <i class="fa fa-th"></i> <span>Halaman Depan</span>
                </a>
            </li>

             @if (Auth::guest())
               <li>
                <a href="{{url('login')}}">
                    <i class="fa fa-th"></i> <span>Masuk</span>
                </a>

                <a href="{{url('register')}}">
                    <i class="fa fa-th"></i> <span>Daftar</span>
                </a>
            </li>
             @else
           <!--  <li>
                <a href="{{-- url('logout') --}}">
                    <i class="fa fa-th"></i> <span>Keluar</span>
                </a>
            </li> -->
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>