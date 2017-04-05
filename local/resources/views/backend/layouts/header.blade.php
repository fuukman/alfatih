<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">Backend Page</a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                @if(\Entrust::hasRole('admin'))
              <!--   <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">100</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li> -->
                             <!-- inner menu: contains the actual data  -->
<!--                             <ul class="menu">
                                <li> start message 
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{url('images/user.png')}}" class="img-circle" alt="User Image"/>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li> end message 
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{url('images/user.png')}}" class="img-circle" alt="user image"/>
                                        </div>
                                        <h4>
                                            AdminLTE Design Team
                                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{url('images/user.png')}}" class="img-circle" alt="user image"/>
                                        </div>
                                        <h4>
                                            Developers
                                            <small><i class="fa fa-clock-o"></i> Today</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{url('images/user.png')}}" class="img-circle" alt="user image"/>
                                        </div>
                                        <h4>
                                            Sales Department
                                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{url('images/user.png')}}" class="img-circle" alt="user image"/>
                                        </div>
                                        <h4>
                                            Reviewers
                                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li> -->
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">{{$countTrans}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">{{$countTrans}} Transaksi Baru</li>
                        <li>
                             <!-- inner menu: contains the actual data  -->
                            <ul class="menu">
                            
                            @foreach($transaction as $trans)
                                <li>
                                    <a href="{{url('/invoice/'.$trans->formid)}}">

                                        <i class="fa fa-shopping-cart text-green"></i> {{$trans->name}}
                                    
                                    
                                    </a>
                                </li>

                            @endforeach


                            </ul>
                        </li>
                        <li class="footer"><a href="{{url('admin/dashboard/markall')}}">Sudah dibaca semua</a></li>
                    </ul>
                </li>

                 <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">{{$countBukti}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">{{$countBukti}} Bukti Transaksi </li>
                        <li>
                             <!-- inner menu: contains the actual data  -->
                            <ul class="menu">
                            
                            @foreach($transBuk as $bukti)
                                <li>
                                    <a href="{{url('/admin/report')}}">

                                        <i class="fa fa-calendar text-green"></i> {{$bukti->tanggal}} <br>
                                        <i class="fa fa-user text-green"></i> {{base64_decode($bukti->formid)}}
                                    
                                    
                                    </a>
                                </li>

                            @endforeach


                            </ul>
                        </li>
                        <li class="footer"></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
            @else
            @endif
                <!-- User Account: style can be found in dropdown.less -->
                @if (Auth::user())
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{url('images/user.png')}}" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">{{Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{url('images/user.png')}}" class="img-circle" alt="User Image" />
                            <p>
                                Hi, {{ Auth::user()->name }}
                              
                            </p>
                        </li>
                       
                        <li class="user-footer">
                           <!--  <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div> -->
                            <div class="pull-right">
                                <a href="{{ url('logout') }}" class="btn btn-default btn-flat">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </li>
                  @else
                  @endif
            </ul>
        </div>
    </nav>
</header>