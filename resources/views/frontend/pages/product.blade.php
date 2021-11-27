@extends('frontend.main')
@section('content')
<div class="mother-nav-bar ">
  <div class="container nav-bar">
    <nav class="navbar row">
      <div class="col-lg-6 col-sm-6   sup-navbar ">
        <ul class="sup-navbar-1">
          <li><a class="sup-navbar-blog-1" class="" href="{{route('product')}}">shop</a></li>
        </ul>
      </div>
      <div class="col-lg-6 col-sm-6  sup-navbar text-right">
        <ul class="sup-navbar-blog-2">
          <li class=""><a class="" href="{{route('home')}}">Home <i class="fas fa-angle-right "></i></a></li>
          <li ><a class="" href="{{route('product')}}">shop</a></li>
        </ul>
      </div>
    </nav>
  </div>
</div>
<div class="wrap-1">
  <div class="container">
    <div class="row">

      <div class="col-lg-9 col-md-6 col-sm-12 product-de-1">
        <div class="Simplesearch">
          <input type="text" id="input" placeholder="Search your products">
          <button id="button">Search</button>
        </div>
        <div class="row product">
          @foreach($product as $pr)
          <div class="col-lg-4 col-md-12 col-sm-6 col-xs-12  get-item">
            <div class="pro1">
              <div class="img-pro">
                <a href="{{route('product_detail',['id'=>$pr->id])}}"><img src="{{asset('public/frontend/imgs/'.$pr->image)}}" alt=""></a>
              </div>
              
              <div class="text-pro">
                <a href="{{route('product_detail',['id'=>$pr->id])}}"><h4>{{$pr->pro_name}}</h4></a>
                <p>{{$pr->cat->name}}</p>
                <strong>{{number_format($pr->price)}}đ</strong>
              </div>
              <div class="cart">
                <a onclick="AddCart({{$pr->id}})" href="javascript:"> <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button></a>
              </div>
            </div>
          </div>
          @endforeach
          <div class="col-12 paginationpro"><div class="row">{{ $product->links() }}</div></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 sirbar-1 ">

        <div class="sirbar" >
          <div class="category">
            <h4>Danh Mục</h4>


            <ul class="menu-cate">
              @foreach($category as $cat)
              <li><a href="{{route('cat-product',['id'=>$cat->id])}}" >{{$cat->name}} <span>{{$cat->product->count()}}</span></a>
              </li>
              @endforeach
            </ul>   

          </div>
        </div>

        <div class="shop-sidebar shop-sidebar-12 mb-30">
          <h4 class="title">Price</h4>
          <!-- filter-price-content start -->
          <div class="filter-price-content">
            <form action="{{route('search')}}" method="get">
              <div id="slider-tooltips" class="price-slider"></div>
              <span id="slider-min" hidden></span>
              <span id="slider-max" hidden></span>
              <input id="minValue" name="minValue" hidden>
              <input id="maxValue" name="maxValue" hidden>
              <button type="submit" style="margin: auto;" class="btn btn-success1">tìm kiếm</button>
              
            </form>

          </div>
          <!-- filter-price-content end -->
        </div>
        

      </div>
    </div>
    <br>
  </div>
  <div class="background">
    @foreach($banner_4 as $baner)
    <div class="background-img" style="background-image: url({{asset('public/frontend/imgs/'.$baner->image)}});">
      <div class="container background-1 button-about">
        <h3 class="color-img aaa">Join our Fvent & make help us to Farmer</h3>
        <p class="color-img ">over 25,0000 User and Farmer trust the MartPlace</p>
        <div class="sup-button-about">
          <button type="" class="sup-button-about-1">Join Now</button>
        </div>
      </div>
    </div>

    @endforeach
  </div>
  @stop()

  @section('script')
  <script type="text/javascript">

    var tooltipSlider = document.getElementById('slider-tooltips');

    noUiSlider.create(tooltipSlider, {
      start: [0, 500000],
      tooltips: [true, true],
      connect:[false, true, false],
      range: {
        'min': 0,
        'max': 500000
      }
    });

    var toolValues = [
    document.getElementById('slider-min'),
    document.getElementById('slider-max')
    ];

    tooltipSlider.noUiSlider.on('update', function (values, handle) {
      toolValues[handle].innerHTML = values[handle];
      var from = Math.floor(values[0]);
      var to = Math.floor(values[1]);
      $('#minValue').val(from);
      $('#maxValue').val(to);
    });

  </script>
  @stop
