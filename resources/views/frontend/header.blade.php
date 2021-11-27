<header class="header">

  <!-- Header Top Start -->
  <div class="header-top-area d-none d-lg-block text-color-white bg-gren border-bm-1">

    <div class="container">
      <div class="row">

        <div class="col-lg-6">
          <div class="top-info-wrap text-right">
            <p>Welcome to Oomato market online shopping store</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="header-top-settings">
            <ul class="nav align-items-center">
              <li class="language">Store locations</i>
              </li>
              <li class="language">Track Your Order</i>
              </li>
              <li class="curreny-wrap">Us Dollar <i class="fa fa-angle-down"></i>
                <ul class="dropdown-list curreny-list">
                  <li><a href="#">$ USD</a></li>
                  <li><a href="#"> € EURO</a></li>
                  <li><a href="#"> VND</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Header Top End -->

  <!-- haeader Mid Start -->
  <div class="haeader-mid-area bg-gren border-bm-1 d-none d-lg-block ">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-5">
          <div class="logo-area">
            @foreach($contact as $lgo)
            <a href=""><img src="{{asset('public/frontend/imgs/'.$lgo->logo)}}" alt=""></a>
            @endforeach
          </div>
        </div>
        <div class="col-lg-6">
          <div class="search-box-wrapper">
            <div class="search-box-inner-wrap">
              <form class="search-box-inner" action="{{ route('head_search') }}" method="get">
                @csrf
                <div class="search-select-box">
                  <select class="nice-select">
                    <optgroup label="organic food">
                      <option value="volvo">All</option>
                      @foreach($category as $cat)
                      <option value="saab"><a href="{{route('cat-product',['id'=>$cat->id])}}">{{$cat->name}}</a>
                      </option>
                      @endforeach
                    </optgroup>
                  </select>
                </div>
                <div class="search-field-wrap">
                  <input type="text" name="search" class="search-field" placeholder="Search product...">

                  <div class="search-btn">
                    <button><i class="fas fa-search"></i> search</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3 dk-nd">
          <div class="single-costomer1">
            @if(Auth::guard('userlogin')->check() &&session('id'))
            <button><i class="fas fa-user"></i><a href="">{{Auth::guard('userlogin')->user()->name}}</a>
              <ul class="dropdown-list curreny-list">
               
                <li><a href="{{route('update_user',['id'=>session('id')])}}">cập nhật tài khoản</a></li>

                <li><a href="{{route('update_password',['id'=>session('id')])}}">cập nhật mật khẩu</a></li>
                <li><a href="{{route('logout')}}">đăng xuất</a></li>
              </ul>
            </button>
            @else
            <a href="{{route('signin')}}"><button class="btn dn-dk">Login/Sign Up</button></a>
            @endif

          </div>
        </div>

      </div>
    </div>
  </div>

  <hr>
  <!-- haeader Mid End -->

  <!-- haeader bottom Start -->
  <menu class="haeader-bottom-area bg-gren header-sticky">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-10 d-none d-lg-block wrap-menu">
          <div class="main-menu-area1 white_text">
            <!--  Start Mainmenu Nav-->
            <nav id="myDIV" class="main-navigation1">
              <ul>
                <li class="{{Request::is('home') ? 'active' : null}}"><a class="main-navigation-a1" href="{{route('home')}}">Home</a>
                </li>
                <li  class="{{Request::is('product') ? 'active' : null}}"><a class="hover" href="{{route('product')}}">shop</a>
                  <div class="sub-menu">
                    <ul>
                      @foreach($category as $cat)
                      <li><a href="{{route('cat-product',['id'=>$cat->id])}}">{{$cat->name}}</a></li>
                      @endforeach
                    </ul>
                  </div>
                </li>

                <li class="{{Request::is('about') ? 'active' : null}}">
                  <a class="hover" href="{{route('about')}}">pages</a>
                </li>
                <li class="{{Request::is('blog') ? 'active' : null}}">
                  <a class="hover" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="{{Request::is('contact_us') ? 'active' : null}}">
                  <a class="hover" href="{{route('contact_us')}}">Contact Us</a>
                </li>
              </ul>
            </nav>

          </div>
        </div>
        <div class="col-lg-2">

          <div class="single-costomer-box2">
            <div class="single-costomer">
              <div class="cart-12">
                <a class="hi-icon hi-icon-screen" href="{{route('shopping_cart')}}"><i class="fas fa-shopping-bag"></i>
                  <p class="box-cart">
                    @if(Session::has("cart") != null)
                    <span id="total-quanty-show" class="cart-2">{{Session::get('cart')->totalQuanty}}</span>
                    @else
                    <span id="total-quanty-show" class="cart-2">0</span>
                    @endif
                  </p>
                </a>
                <div class="cart-hover">
                  <div id="chane-item-cart">
                    @if(Session::has("cart") != null)
                    <div class="select-items">
                      <table>
                        <tbody>
                          @foreach(Session::get('cart')->products as $item)
                          <tr>
                            <td class="si-pic" style="width: 30%;"><img
                                src="{{asset('public/frontend/imgs/'.$item['productInfo']->image)}}" alt=""></td>
                            <td class="si-text" style="width: 500%;">
                              <div class="product-selected">
                                <p>{{number_format($item['productInfo']->price)}}đ x
                                  {{$item['quanty']}}</p>
                                <h6>{{$item['productInfo']->pro_name}}</h6>
                              </div>
                            </td>
                            <td class="si-close" style="width: 20%;text-align: right;">
                              <i href="{{route('remove',['id'=>$item['productInfo']->id])}}" class="fas fa-times"></i>
                            </td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="select-total">
                      <span>total:</span>
                      <h5>{{number_format(Session::get('cart')->totalPrice)}}đ</h5>
                      <input hidden id="total-quanty-cart" type="number" value="{{Session::get('cart')->totalQuanty}}">
                    </div>
                    @endif
                  </div>
                  <div class="select-button">
                    <a href="{{route('shopping_cart')}}" class="primary-btn view-card">VIEW CARD</a>
                    <a href="{{route('shopping_1')}}" class="primary-btn checkout-btn">CHECK OUT</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>


        <div class="col-6 col-md-5 d-block d-lg-none">
          <div class="logo">@foreach($contact as $lgo)
            <a href=""><img src="{{asset('public/frontend/imgs/'.$lgo->logo)}}" alt=""></a>
            @endforeach
          </div>
        </div>


        <div class=" col-md-7 col-6 d-block d-lg-none">
          <div class="customer-wrap green-bg">

            <div class="single-costomer-box3">
              <div class="single-costomer">
                <div class="cart-12">
                  <a class="hi-icon hi-icon-screen" href="{{route('shopping_cart')}}"><i
                      class="fas fa-shopping-bag"></i>
                    @if(Session::has("cart") != null)
                    <span id="total-quanty-show" class="cart-2">{{Session::get('cart')->totalQuanty}}</span>
                    @else
                    <span id="total-quanty-show" class="cart-3">0</span>
                    @endif
                  </a>
                  <div class="cart-hover">
                    <div id="chane-item-cart">
                      @if(Session::has("cart") != null)
                      <div class="select-items">
                        <table>
                          <tbody>
                            @foreach(Session::get('cart')->products as $item)
                            <tr>
                              <td class="si-pic" style="width: 30%;"><img
                                  src="{{asset('public/frontend/imgs/'.$item['productInfo']->image)}}" alt=""></td>
                              <td class="si-text" style="width: 500%;">
                                <div class="product-selected">
                                  <p>{{number_format($item['productInfo']->price)}}đ x
                                    {{$item['quanty']}}</p>
                                  <h6>{{$item['productInfo']->pro_names}}</h6>
                                </div>
                              </td>
                              <td class="si-close" style="width: 20%;text-align: right;">
                                <i href="{{route('remove',['id'=>$item['productInfo']->id])}}" class="fas fa-times"></i>
                              </td>
                            </tr>

                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="select-total">
                        <span>total:</span>
                        <h5>{{number_format(Session::get('cart')->totalPrice)}}đ</h5>
                        <input hidden id="total-quanty-cart" type="number"
                          value="{{Session::get('cart')->totalQuanty}}">
                      </div>
                      @endif
                    </div>
                    <div class="select-button">
                      <a href="{{route('shopping_cart')}}" class="primary-btn view-card">VIEW CARD</a>
                      <a href="{{route('shopping_1')}}" class="primary-btn checkout-btn">CHECK OUT</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mobile-menu-btn d-block d-lg-none show-menu">
              <div class="off-canvas-btn">
                <a href="#"><img src="{{asset('public/frontend/imgs/bg-menu.png')}}" alt=""></a>
              </div>
            </div>
          </div>


        </div>

      </div>
  </menu>
  <!-- haeader bottom End -->


  <!-- off-canvas menu start -->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner-content">
      <div class="btn-close-off-canvas">
        <i class="fas fa-times"></i>
      </div>

      <div class="off-canvas-inner">

        <div class="search-box-offcanvas">
          <form class="search-box-inner" action="{{ route('head_search') }}" method="get">
            @csrf
            <input type="text" name="search" placeholder="Search product...">
            <button class="search-btn"><i class="fas fa-search"></i></button>
          </form>
        </div>

        <!-- mobile menu start -->
        <div class="mobile-navigation">

          <!-- mobile menu navigation start -->
          <nav>
            <ul class="mobile-menu">
              <li><a href="{{route('home')}}">Home</a>
              </li>
              <li class="menu-item-has-children "><a href="{{route('product')}}">shop</a>
                <ul class="megamenu dropdown">
                  @foreach($category as $cat)
                  <li class="mega-title has-children"><a
                      href="{{route('cat-product',['id'=>$cat->id])}}">{{$cat->name}}</a></li>
                  @endforeach
                </ul>
              </li>

              <li>
                <a href="{{route('about')}}">pages</a>
              </li>
              <li>
                <a href="{{route('blog')}}">Blog</a>
              </li>
              <li>
                <a href="{{route('contact_us')}}">Contact Us</a>
              </li>
            </ul>
          </nav>
          <!-- mobile menu navigation end -->
        </div>
        <div class="mobile-navigation">

          <!-- mobile menu navigation start -->
          <nav>
            <ul class="mobile-menu">
                 @if(Auth::guard('userlogin')->check() &&session('id'))
              <li class="menu-item-has-children "><button style="    padding: 10px;background: #4FC308;"><i class="fas fa-user" style="color:white;"></i><a href="" style="color:white;">{{Auth::guard('userlogin')->user()->name}}</a></button>
                <ul class="megamenu dropdown">
                  <li class="mega-title has-children"><a href="{{route('update_user',['id'=>session('id')])}}">cập nhật tài khoản</a></li>
                    <li class="mega-title has-children"><a href="{{route('update_password',['id'=>session('id')])}}">cập nhật mật khẩu</a></li>
                   <li class="mega-title has-children"><a href="{{route('logout')}}">đăng xuất</a></li>
                </ul>
              </li>
              @else
              <a href="{{route('signin')}}"><button class="btn dn-dk">Login/Sign Up</button></a>
                @endif
            </ul>
          </nav>
          <!-- mobile menu navigation end -->
        </div>
        <!-- mobile menu end -->
        <!-- offcanvas widget area start -->
        
      </div>
    </div>
  </aside>
</header>