<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <i class='fas fa-user-circle' style='font-size:48px'></i> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="index4.html#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{auth::user()->name}} <span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="{{url('admin/canhan',['id'=>auth::user()->id])}}" class="dropdown-item"><i class="ti-user"></i> Cá Nhân</a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">Công Việc</li>
                        <li>
                            <a class="has-arrow" href="{{route('dashboard')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="index4.html#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Bài viết</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin/tatcabaiviet')}}">Tất cả bài viết</a></li>
                                <li><a href="{{route('admin/baiviet')}}">Viết bài mới</a></li>
                                <li><a href="{{route('admin/menu_baiviet')}}">menu danh mục</a></li>
                                <li><a href="{{route('admin/tag')}}">Tag</a></li>
                            </ul>
                        </li>    
                         <li>
                            <a class="has-arrow " href="index4.html#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Kho dử liệu</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin/kho_sanpham')}}">Tất cả sản phẩm</a></li>
                                <li><a href="{{route('admin/up_sanpham')}}">up sản phẩm </a></li>
                                <li><a href="{{route('admin/menu_con')}}">menu danh mục sản phẩm</a></li>
                                <li><a href="{{route('admin/menu_cha')}}">menu danh mục cha</a></li>
                            </ul>
                        </li>
                         <li>
                            <a class="has-arrow " href="index4.html#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Liên hệ</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin/nhan_email')}}">Nhận Email</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="index4.html#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Đối Tác</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin/insert_doitac')}}">Thêm đối tác</a></li>
                                <li><a href="{{route('admin/table_doitac')}}">Danh sách đối tác</a></li>
                                <li><a href="{{route('admin/danhgia_dt')}}">Đánh giá của đối tác</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="index4.html#" aria-expanded="false"><i class='far fa-clipboard' style='font-size:24px'></i><span class="hide-menu">Tuyển dụng</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin/tuyendung')}}">Nhận đơn tuyển dụng</a></li>
                            </ul>
                        </li>
                         <li>
                            <a class="has-arrow " href="index4.html#" aria-expanded="false"><i class='far fa-clipboard' style='font-size:24px'></i><span class="hide-menu">Information</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin/content')}}">content</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">Loại hình dịch vụ</li>
                        <li>
                            <a class="has-arrow" href="index4.html#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Dịch Vụ</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin/insert_baogia')}}">Báo giá</a></li>
                                <li><a href="{{route('admin/table_baogia')}}">Danh sách báo giá</a></li>
                                
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="index4.html#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Đánh Giá Người Dùng</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin/danhsachdanhgiakhachhang')}}">Danh sách đánh giá</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="index4.html#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Lợi Ích</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin/loiich')}}">Danh sách lợi ích</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="index4.html#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Nhật Ký</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin/nhatky')}}">Danh sách nhật ký</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">Phân Quyền</li>
                        <li>
                            <a class="has-arrow" href="index4.html#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">User</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin/user/listuser')}}">Danh sách user</a></li> 
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="index4.html#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Thêm vai trò</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin/user/addpremission')}}">Thêm vai trò</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="index4.html#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Quyền</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin/user/listrole')}}">Thêm Quyền</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="{{url('admin/canhan',['id'=>auth::user()->id])}}" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="{{route('admin/nhan_email')}}" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item-->
                <a class="link" data-toggle="tooltip" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="mdi mdi-power"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <!-- End Bottom points-->
        </aside>