<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-envelope"></i> admin@belisob.com</a></li>
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
                    <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('theme/front/eshopper/images/home/logo.png')); ?>" alt="" /></a>                    
                </div>
                <div class="btn-group pull-right">
                 <form action="<?php echo e(url('pencarian')); ?>" method="GET">
                     <div class="search_box">
                        <input type="text" class="validate" name="cari" placeholder="Pencarian" >
                    </div>               
                    </form>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="shop-menu pull-right">
                <ul class="nav navbar-nav">
                    <?php if(Auth::check()): ?>
                    <li><a href="<?php echo e(url('/akun')); ?>"><i class="fa fa-user"></i> Account</a></li>
                    <li><a href="<?php echo e(url('/product/cart')); ?>"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                    <li><a href="<?php echo e(url('logout')); ?>" id="logout"><i class="fa fa-lock"></i> Logout</a></li>
                    <?php if (\Entrust::hasRole('admin')) : ?>
                    <li><a href="<?php echo e(route('admin.products.index')); ?>"><i class="fa fa-pie-chart"></i> Product</a></li>
                    <li><a href="<?php echo e(url('/admin/report')); ?>"><i class="fa fa-file"></i> Laporan Transaksi</a></li>
                    <?php endif; // Entrust::hasRole ?>
                    <?php else: ?>
                    <li><a href="<?php echo e(url('/login')); ?>"><i class="fa fa-sign-in"></i> Masuk</a></li>
                    <li><a href="<?php echo e(url('/register')); ?>"><i class="fa fa-lock"></i> Daftar</a></li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>
</div>
</div><!--/header-middle-->

<!--     <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="<?php echo e(url('')); ?>" class="active">Home</a></li>
                            <li><a href="<?php echo e(url('')); ?>" class="dropdown">Blog</a></li>
                            <li><a href="<?php echo e(url('')); ?>" class="dropdown">About Us</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
</header><!--/header-->

