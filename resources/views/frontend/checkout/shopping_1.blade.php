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
<section class="checkout-section spad">
    <div class="container">
        @if(Session::has("cart") != null)

        <form action="{{route('shopping_1')}}" method="post" class="checkout-form">

            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class=" col-md-6 contact">
                            <p>Conact Information</p>
                        </div>
                        <div class=" col-md-6 arleady" >
                            <p>Arleady an account ?<a href="" class="Log_in_shipping">Log in</a></p>
                        </div>

                    </div>

                    <h4>Thanh toán đơn hàng</h4>
                    <div class="row">
                        @if(Auth::guard('userlogin')->check() &&session('id'))
                        <div class="col-lg-12">
                            <label for="last">Tên<span>*</span></label>
                            <input type="text" id="last" name="name"  value="{{session('name')}}" required >
                        </div>
                        <div class="col-lg-12">
                            <label for="street">Thành phố<span>*</span></label>
                            <input type="text" name="city" id="street" class="street-first" required>
                        </div>
                        <div class="col-lg-12">
                            <label for="town">Quận/huyện<span>*</span></label>
                            <input type="text" id="town" name="district">
                        </div>
                        <div class="col-lg-12">
                            <label for="town">Địa chỉ cụ thể<span>*</span></label>
                            <input type="text" id="town" name="commune" placeholder="Số nhà,ngõ/ngách,phường/xã">
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Email<span>*</span></label>
                            <input type="text" id="email" name="email">
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">Số điện thoại<span>*</span></label>
                            <input type="text" id="phone" name="phone" required>
                        </div>
                        @endif


                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="place-order">
                        <h4>Your Order</h4>
                        <div class="order-total">
                            <ul class="order-table">

                                <li><span style="width: 33%; float: left;">img</span><span style="width: 33%;text-align: center;float: left;">product</span> <span style="width: 33%;float: right;text-align: right;">Total</span></li>

                                @foreach(Session::get('cart')->products as $item)
                                <li class="fw-normal">
                                    <img src="public/frontend/imgs/{{$item['productInfo']->image}}" style="width: 100px; height: 100px; border: 1px solid #ccc;">
                                    <span style="width: 33%;padding-left: 25px">{{$item['productInfo']->pro_name}} x {{$item['quanty']}}</span>
                                    <span style="width: 33%;padding-left: 30px;text-align: right;padding-top: 30px;">{{number_format($item['price'])}}đ</span>
                                </li>
                                @endforeach
                                <li class="total-price">Total <span>{{number_format(Session::get('cart')->totalPrice)}}đ</span></li>
                               
                                <!-- Session(['cart']) -->
                            </ul>

                            <div class="payment-check">
                                @foreach($pay as $value)
                                <div class="pc-item">
                                    <label>
                                        {{$value->payment_method}}
                                        <input type="radio" id="pc-check"  name="payment_method" value="{{$value->id}}">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                @endforeach
                            </div>
                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @else
        <div>không có sản phẩm</div>
        @endif
    </div>
</section>

@stop()
