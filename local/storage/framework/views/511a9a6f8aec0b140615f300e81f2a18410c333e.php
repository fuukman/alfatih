<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <?php if(Auth::user()): ?>
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(url('images/user.png')); ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo e(Auth::user()->name); ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> online</a>
            </div>
        </div>
        <?php else: ?>
        <?php endif; ?>
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
           <!--    <?php if(\Entrust::hasRole('admin')): ?>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
              <?php else: ?>
            <?php endif; ?> -->
            <?php if(\Entrust::hasRole('admin')): ?>
            <li class="treeview">
                <a href="<?php echo e(url('/admin/dashboard')); ?>">
                    <i class="fa fa-files-o"></i>
                    <span>Dashboard</span></i>
                </a>
            </li>
            <?php else: ?>
            <?php endif; ?>

           <?php if(\Entrust::hasRole('admin')): ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Produk</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('admin/products')); ?>"><i class="fa fa-circle-o"></i>Produk List</a></li>
                    <li><a href="<?php echo e(url('admin/products/create')); ?>"><i class="fa fa-plus"></i>Tambah Produk</a></li>
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>
           
           <?php if(\Entrust::hasRole('admin')): ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Kategori</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('admin/categori')); ?>"><i class="fa fa-circle-o"></i>Kategori List</a></li>
                    <li><a href="<?php echo e(url('admin/categori/create')); ?>"><i class="fa fa-plus"></i>Tambah Kategori</a></li>
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>

            <?php if(\Entrust::hasRole('admin')): ?>
            <li class="treeview">
                <a href="<?php echo e(url('/admin/report')); ?>">
                    <i class="fa fa-files-o"></i>
                    <span>Laporan Transaksi</span></i>
                </a>
            </li>
            <?php else: ?>
            <?php endif; ?>

            <?php if(\Entrust::hasRole('admin')): ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Users</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('admin/listuser')); ?>"><i class="fa fa-circle-o"></i>Users List</a></li>
                </ul>
            </li>
            <?php else: ?>
            <?php endif; ?>
            
            <?php if(\Entrust::hasRole('member')): ?>
            <li class="treeview">
                <a href="<?php echo e(url('akun')); ?>">
                    <i class="fa fa-files-o"></i>
                    <span>Daftar Belanja</span></i>
                </a>
            </li>
            <?php else: ?>
            <?php endif; ?>

            <?php if(\Entrust::hasRole('member')): ?>
            <li class="treeview">
                <a href="<?php echo e(url('product/cart')); ?>">
                    <i class="fa fa-files-o"></i>
                    <span>Keranjang</span></i>
                </a>
            </li>
            <?php else: ?>
            <?php endif; ?>

            <li>
                <a href="<?php echo e(url('')); ?>" target="_blank">
                    <i class="fa fa-th"></i> <span>Halaman Depan</span>
                </a>
            </li>

             <?php if(Auth::guest()): ?>
               <li>
                <a href="<?php echo e(url('login')); ?>">
                    <i class="fa fa-th"></i> <span>Masuk</span>
                </a>

                <a href="<?php echo e(url('register')); ?>">
                    <i class="fa fa-th"></i> <span>Daftar</span>
                </a>
            </li>
             <?php else: ?>
           <!--  <li>
                <a href="<?php /* url('logout') */ ?>">
                    <i class="fa fa-th"></i> <span>Keluar</span>
                </a>
            </li> -->
            <?php endif; ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>