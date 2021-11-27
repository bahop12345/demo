  @extends('frontend.main')
  @section('content')
  <div class="mother-nav-bar ">
    <div class="container nav-bar">
      <nav class="navbar row">
        <div class="col-lg-6 col-sm-6   sup-navbar ">
          <ul class="sup-navbar-1">
            <li><a class="sup-navbar-blog-1" class="" href="">FAQ</a></li>
          </ul>
        </div>
        <div class="col-lg-6 col-sm-6  sup-navbar text-right">
          <ul class="sup-navbar-blog-2">
            <li class=""><a class="" href="">Home <i class="fas fa-angle-right "></i></a></li>
            <li ><a class="" href="" style="">FAQ</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <section class="shopping-cart spad">
     @if(Session::has("cart") != null)

    <div class="container">
      <div class="row">
        <div class="col-lg-12" id="list-cart">

         <div class="cart-table">

          <table>
            <thead>
              <tr>
                <th style="with:20%;">Ảnh sản phẩm</th>
                <th class="p-name" style="with:20%;">Tên sản phẩm</th>
                <th style="with:10%;">Giá</th>
                <th style="with:20%;">Số lượng</th>
                <th style="with:10%;">Thành tiền</th>
                <th style="with:20%;">Xóa</th>
                <th style="with:20%;">Cập nhật</th>
              </tr>

            </thead>
            <tbody>
              
              @foreach(Session::get('cart')->products as $item)
              <tr>
                <td class="cart-pic first-row"><img src="public/frontend/imgs/{{$item['productInfo']->image}}" alt=""></td>
                <td class="cart-title first-row">
                  <h5>{{$item['productInfo']->pro_name}}</h5>
                </td>
                <td class="p-price first-row">{{number_format($item['productInfo']->price)}}đ</td>
                <td class="qua-col first-row">
                  <div class="quantity">
                    <div class="pro-qty">
                      <input type="text" data-id="{{$item['productInfo']->id}}" id="quanty-item-{{$item['productInfo']->id}}" value="{{$item['quanty']}}">

                    </div>
                  </div>
                </td>
                  <td class="total-price first-row">{{number_format($item['price'])}}đ</td>
                <td class="close-td"><i class="fas fa-times" onclick="DeleteItemShopCart({{$item['productInfo']->id}});"></i></td>
                <td class="close-td"><i class="far fa-save"   onclick="SaveItemShopCart({{$item['productInfo']->id}});"></i></td>
              </tr>

              @endforeach
              
              <tr class="sua-xoa">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="close-td del-all"><button class="btn btn-danger">xóa</button></td>
                <td class="close-td edit-all"><button class="btn btn-success">cập nhập</button></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row">
          <div class="col-lg-4 offset-lg-8">
            <div class="proceed-checkout">
             @if(Session::has("cart") != null)
             <ul>
              <li class="subtotal">Subtotal <span>{{Session::get('cart')->totalQuanty}}</span></li>
              <li class="cart-total">Total <span>{{number_format(Session::get('cart')->totalPrice)}}đ</span></li>


            </ul>
            @endif
            <a href="{{route('shopping_1')}}" class="proceed-btn">PROCEED TO CHECK OUT</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@else
<div class="container">
  <div class="CzsW3c _1wkChM"><div class="_38f5r7"></div><div class="UM4yVY">Giỏ hàng của bạn còn trống</div><a class="_1Fz64J" href="{{route('home')}}"><button class="shopee-button-solid shopee-button-solid--primary "><span class="_3KnH_F">Tiếp Tục Mua Sắn</span></button></a></div>
</div>
@endif
</section>


<div class="background">
  <div class="background-img" style="background-image: url({{('public/frontend/imgs/qqqqqqqqqqqqqqqqqqq.jpg')}});">
  </div>
  <div class="container background-1 button-about">
    <h3 class="color-img aaa">Join our Fvent & make help us to Farmer</h3>
    <p class="color-img ">over 25,0000 User and Farmer trust the MartPlace</p>
    <div class="sup-button-about">
      <button type="" class="sup-button-about-1">Join Now</button>
    </div>
  </div>
</div>
@stop()
