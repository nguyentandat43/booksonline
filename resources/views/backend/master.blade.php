<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Quản lý website</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/css/_all-skins.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
   <!-- js ckediter -->
   <script src="{{ url('public/backend/js/jQuery-2.1.4.min.js') }}"></script>
   <script src="{{ url('public/backend/js/myscript.js') }}"></script>
   <!-- ckediter và ckfinder -->
    <script type="text/javascript" src="{{ url('public/backend/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/backend/ckfinder/ckfinder.js') }}"></script>
    <script type="text/javascript">
        var baseURL ="{!! url('/') !!}";
    </script>
    <script type="text/javascript" src="{{ url('public/backend/func_ckfinder.js') }}"></script>
    <!-- end ckediter và ckfinder -->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="{!! url('admin') !!}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li>
                <a href="{!! url('/')!!}" target="new">Xem Website</a>
              </li>                 
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image" />
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
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image" />
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
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image" />
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
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image" />
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
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Xin chào: {!! Auth::user()->firstname !!}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
         
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..." />
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="@yield('trangchu') treeview">
              <a href="{!! url('admin') !!}">
                <i class="fa fa-dashboard"></i> <span>Trang chủ Admin</span>
              </a>
            </li>

            
            <li class="treeview @yield('danhmuc')">
              <a href="javascript:void(0)">
                <i class="fa fa-pencil-square-o"></i> <span>Quản lý danh mục</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="@yield('them_dm')"><a href="{!! url('admin/category/add') !!}"><i class="fa fa-circle-o"></i> Thêm danh mục</a></li>
                <li class="@yield('list_dm')"><a href="{!! url('admin/category/list') !!}"><i class="fa fa-circle-o"></i> Danh sách danh mục</a></li>
              </ul>
            </li>

            <li class="treeview @yield('sanpham')">
              <a href="javascript:void(0)">
                <i class="fa fa-paper-plane-o"></i> <span>Quản lý sản phẩm</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="@yield('them_sp')"><a href="{!! url('admin/product/add') !!}"><i class="fa fa-circle-o"></i> Thêm sản phẩm</a></li>
                <li class="@yield('list_sp')"><a href="{!! url('admin/product/list') !!}"><i class="fa fa-circle-o"></i> Danh sách sản phẩm</a></li>
                <li class="@yield('list_danhgia')"><a href="{!! url('admin/product/listdanhgia') !!}"><i class="fa fa-circle-o"></i> Đánh giá</a></li>
              </ul>
            </li>
            <li class="treeview @yield('hoadon')">
              <a href="javascript:void(0)">
                <i class="fa fa-shopping-cart"></i> <span>Quản lý đơn hàng</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="@yield('list_hd')"><a href="{!! url('admin/cart/list') !!}"><i class="fa fa-circle-o"></i> Danh sách đơn hàng</a></li>
                <li><a href="{!! url('admin/cart/khuyenmai') !!}"><i class="fa fa-circle-o"></i> Nhập mã khuyến mại</a></li>
                <li><a href="{!! url('admin/cart/khuyenmai') !!}"><i class="fa fa-circle-o"></i> Danh sách ID khuyến mại</a></li>

              </ul>
            </li>
            <li class="treeview @yield('tintuc')">
              <a href="javascript:void(0)">
                <i class="fa fa-navicon"></i> <span>Quản lý bài viết</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="@yield('them_tt')"><a href="{!! url('admin/tintuc/add') !!}"><i class="fa fa-circle-o"></i> Thêm bài viết</a></li>
                <li class="@yield('list_tt')"><a href="{!! url('admin/tintuc/list') !!}"><i class="fa fa-circle-o"></i> Danh sách bài viết</a></li>
                <li><a href="{!! url('admin/catenew/add') !!}"><i class="fa fa-circle-o"></i> Thêm danh mục</a></li>
              	<li><a href="{!! url('admin/catenew/list') !!}"><i class="fa fa-circle-o"></i> Danh mục bài biết</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="javascript:void(0)">
                <i class="fa fa-gears"></i> <span>Cài đặt website</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{!! url('admin/product/add') !!}"><i class="fa fa-circle-o"></i> Banner website</a></li>
                <li><a href="{!! url('admin/product/add') !!}"><i class="fa fa-circle-o"></i> Cấu hình website</a></li>
              </ul>
            </li>
            <!-- end menu -->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @yield('controller')
            <small>@yield('action')</small>
          </h1>
        </section>
                <div class="col-lg-12" style="margin-top:12px;"> 
                        @if(Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                {!! Session::get('flash_message') !!}
                            </div>
                        @endif
                    </div>
        <!-- Main content -->
          @yield('content')
        <!-- /.content -->

      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 3.0
        </div>
        <strong>Copyright &copy; 2016</strong>
      </footer>
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    

<script src="{{ url('public/backend/js/app.min.js') }}"></script>
<script src="{{ url('public/backend/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ url('public/backend/js/bootstrap.min.js') }}"></script>


  </body>
</html>
