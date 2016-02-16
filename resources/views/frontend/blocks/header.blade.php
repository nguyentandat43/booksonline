 <!-- header -->
 <div class="notifyjs-corner" style="top: 0px; right: 0px;">
  <div class="notifyjs-wrapper notifyjs-hidable">
    <div class="notifyjs-arrow" style=""></div>
    <div class="notifyjs-container">
      <div class="notifyjs-bootstrap-base notifyjs-bootstrap-success"> <span data-notify-text="">Sản phẩm đã được thêm vào giỏ hàng</span> </div>
    </div>
  </div>
</div>

    <header id="header" class="">
    <!-- header top -->
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="pull-right">
                <nav class="header-top-nav">
                  <ul>
                    <li><a href="{!! url('dang-ky') !!}"><i class="fa fa-user"></i> Đăng ký</a></li>
                    <li><a href="{!! url('dang-nhap') !!}"><i class="fa fa-sign-out"></i>Đăng nhập</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end header top -->
      <!-- herder bottom -->
      <div class="header-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12 header-logo"> <a href="{!! url('/') !!}" title="Bookstore"> <img src="{!! asset('public/upload/logoweb/logo-white.png') !!}" width="275" height="39" /> </a> </div>
            <div class="col-xs-4 nav-mobile-button"> <a href="#nav-mobile"><i class="fa fa-bars fa-2x"></i></a> </div>
            <div class="col-md-5 col-sm-8 hidden-xs header-services ">
              <ul class="row">
                <li class="col-md-4 col-sm-4"> <a href="#" class="title"><i class="fa fa-cube"></i>Giao hàng free</a> </li>
                <li class="col-md-4 col-sm-4"> <a href="#" class="title"><i class="fa fa-exchange"></i>Đổi trả free</a> </li>
                <li class="col-md-4 col-sm-4"> <a href="#" class="title"><i class="fa fa-life-ring"></i>Hỗ trợ 24/7</a> </li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-8 header-cart">
              <div class="cart-mini pull-right">
                <div class="cart-mini-button">
                <a href="{!! url('gio-hang') !!}" style="color:#FFF"><span class="item_cart">{!! Cart::count() !!} Sản phẩm</span></a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end  header bottom -->
      <!-- header search menu -->
      <div class="header-nav-search">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-sm-9 hidden-xs">
              <nav class="header-nav">
                <ul>
                  <li class="@yield('trangchu')"> <a href="{!! url('/') !!}">Trang chủ </a> </li>
                  <li> <a href="#">Giới thiệu </a> </li>
                  <li class="@yield('sanpham')"> <a href="{!! url('san-pham') !!}">Sản phẩm <i class="fa fa-caret-down"></i></a>
                    <ul>
                    <?php $menus = DB::table('categories')->select('id','name','alias','prarent_id')->where('prarent_id',0)->orderBy('id','DESC')->get(); ?>
                      @foreach ($menus as $menu)
                        <li><a href="{!! url('danh-muc',[$menu->alias]) !!}">{!! $menu->name !!}</a> 
                          <?php $parent = DB::table('categories')->select('id','name','alias','prarent_id')->where('prarent_id',$menu->id)->orderBy('id','DESC')->get(); ?>
                            <ul>
                              @foreach($parent as $parents)
                                <li><a href="{!! url('category',[$parents->alias]) !!}"><?php echo $parents->name ?></a></li>
                              @endforeach
                            </ul>
                        </li>
                      @endforeach
                    </ul>
                  </li>
                  <li class="@yield('tintuc')"> <a href="{!! url('tin-tuc') !!}">Tin tức </a> </li>
                  <li class="@yield('lienhe')"> <a href="{!! url('lien-he') !!}">Liên hệ </a> </li>
                </ul>
              </nav>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="header-search">
                <form action="#" method="get">
                  <input type="text" name="query" class="hs-text" placeholder="Tìm kiếm" value="">
                  <button type="submit" class="hs-submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end header search menu -->
      
    </header>

    <!-- end header --> 
    