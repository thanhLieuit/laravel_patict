<header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="https://patict.vn/index/img/logogo.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="https://patict.vn/index/img/logogo.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <!-- <img src="{!! asset('admin/assets/images/logo-text.png')!!}" alt="homepage" class="dark-logo" /> -->
                         <!-- Light Logo text -->    
                      <!-- s --> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <?php 
                            $tuyendungtt = DB::table('tuyendungs')->where('note','chưa nhận')->get();
                            $demtuyendung = DB::table('tuyendungs')->where('note','chưa nhận')->count('id');
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                @if($demtuyendung > 0)
                                <div class="notify"> 
                                    <span class="heartbit"></span> <span class="point"></span> 
                                </div>
                                @endif
                            </a>
                            
                            <div class="dropdown-menu mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Thông báo</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            @foreach($tuyendungtt as $tuyendungtt)
                                            <a href="{{url('admin/view_chitiet',['id'=>$tuyendungtt->id])}}">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>{{$tuyendungtt->hoten}}</h5> <span class="mail-desc">{{$tuyendungtt->vitri}}</span> <span class="time">{{$tuyendungtt->created_at}}</span> </div>
                                            </a>
                                            @endforeach
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="{{route('admin/tuyendung')}}"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <?php 
                            $lienhett = DB::table('lienhes')->where('note','chưa nhận')->get();
                            $demlienhe = DB::table('lienhes')->where('note','chưa nhận')->count('id');
                            
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="index4.html" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                @if($demlienhe >0)
                                <div class="notify"> 
                                    <span class="heartbit"></span> <span class="point"></span> 
                                </div>
                                @endif
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have {{$demlienhe}} new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            @foreach($lienhett as $lienhett)
                                            <a href="{{url('admin/chitiet_emial',['id'=>$lienhett->id])}}">
                                                <div class="user-img"> <img src="{!! asset('admin/assets/images/users/1.jpg')!!}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>{{$lienhett->name_khachhang}}</h5> <span class="mail-desc">{{$lienhett->tieude}}</span> <span class="time">{{$lienhett->created_at}}</span> </div>
                                            </a>
                                            @endforeach
                                           
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="{{route('admin/nhan_email')}}"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
             
               
         
                    </ul>
                    
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a> </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="index4.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fas fa-user-circle' style='font-size:24px'></i></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><i class='fas fa-user-circle' style='font-size:48px'></i></div>
                                            <div class="u-text">
                                                <h4 style="color:#fff">{{auth::user()->name}}</h4>
                                                <p class="text-muted">{{auth::user()->email}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{url('admin/canhan',['id'=>auth::user()->id])}}"><i class="ti-user"></i> Cá Nhân</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>  {{ __('Logout') }}</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </li>
 <!--                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="index4.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu  dropdown-menu-right animated bounceInDown"> <a class="dropdown-item" href="index4.html#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item" href="index4.html#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="index4.html#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item" href="index4.html#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>