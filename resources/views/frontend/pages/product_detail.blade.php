@extends('frontend.main')
@section('content')
<div class="mother-nav-bar ">
  <div class="container nav-bar">
    <nav class="navbar row">
      <div class="col-lg-6 col-sm-6   sup-navbar ">
        <ul class="sup-navbar-1">
          <li><a class="sup-navbar-blog-1" class="" href="{{route('home')}}">home</a></li>
        </ul>
      </div>
      <div class="col-lg-6 col-sm-6  sup-navbar text-right">
        <ul class="sup-navbar-blog-2">
          <li class=""><a class="" href="{{route('home')}}">Home <i class="fas fa-angle-right "></i></a></li>
          <li><a class="" href="{{route('contact_us')}}">contact</a></li>
        </ul>
      </div>
    </nav>
  </div>
</div>
<div class="wap">


  <div class="detail">
    <div class="container">
      @foreach($sanpham as $sp)
      <div class="product-essential">
        <form action="#" method="post" id="product_addtocart_form">
          <div class="row">
            <div class="col-lg-6">
              <div class="product-detail">
                <div class="img-contailner">
                  <img src="{{asset('public/frontend/imgs/'.$sp->image)}}">
                </div>
              </div>
            </div>


            <div class="product-shop col-lg-6  col-12">

              <div class="product-name">
                <h1>{{$sp->pro_name}} </h1>
              </div>

              <div class="proc">
                <span>Gía:</span><strong>{{number_format($sp->price)}}đ</strong>
              </div>
              <div class="proc">
              </div>
              <div class="quantity">
                <div class="pro-qty">
                  <input type="text" data-id="{{$sp->id}}" id="quanty-item"  value="1">
                </div>
              </div>
              <!-- data-url="{{route('add-cart',['id'=>$sp->id])}}" -->
              <a class="btn add-cart1" onclick="addCartQuan('{{$sp->id}}')"><span>ADD TO CART</span><i
                class="fas fa-plus text-center"></i></a>
                <div class="tage">
                  <span>Tags</span>

                  <button>Template</button>
                  <button>Fresh</button>
                  <button>Capsicum</button>

                </div>
              </div>
            </div>
          </form>

        </div>

        <div id="ative" class="w3-container">

          <div class="w3-bar">
            @if($sp->description==0)
            <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'London')">Mô tả</button>
            @else

            @endif
            <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Paris')">bình luận</button>
          </div>
          @if($sp->description==0)
          <div id="London" class="w3-container w3-border city">
            <h4>Mô tả sản phẩm</h4>
            <p>{!!$sp->description!!}</p>
          </div>
          @else

          @endif
          <div id="Paris" class="w3-container w3-border city" style="display:none">
            <div class="woocommerce-Reviews">

              <h2 class="woocommerce-Reviews-title">{{$comment->count()}} reviews for sản phẩm</h2>
              <ol class="commentlist">
                @foreach($comment as $comment)
                <li class="comment">
                  <div>

                    <div class="row">
                      <div class="col-1">
                        @if($comment->user->img!=null)
                        <img src="{{asset('public/frontend/imgs/'.$comment->user->img)}}" style="width: 70px;padding-right: 10px; height: 59px;">
                        @else
                        <div style="border: 1px solid #ccc;background: #D7D7D7;padding: 20px 7px;color: #ACACAC;">67x67</div>
                        @endif
                      </div>
                      <div class="comment-text col-11">
                        <p class="meta">
                         <strong>{{$comment->user->name}}</strong>
                         <span>–</span> {{date('d/m/Y H:i',strtotime($comment->created_at))}}
                         <div class="description">
                          <p>{{$comment->content}}</p>

                        </div>
                      </p>

                    </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ol>

          </div>

          <div class="comment-respond">
            <span class="comment-reply-title">Add a review </span>
            @if(Auth::guard('userlogin')->check())
            <form method="post" class="comment-form" novalidate="" action="">
              <p class="comment-form-comment">
                <label for="exampleInputEmail1">Mô tả</label>
                <textarea class="textarea" cols="40" rows="5" id="description" name="content"></textarea>
              </p>
              <p class="form-submit">
                <input type="submit" style="background:#4FC308;color: white;" value="Submit">
              </p>
              {{csrf_field()}}
            </form>
            @else
            <div>vui lòng đăng nhập để bình luận</div>
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<div class="fruit">

  <div class="container fruit-1">
    <div class="row slide">
      <div class="col-lg-2 col-md-12 slide-inner">
        <div class="inner rotate"> Organic Fruit</div>
      </div>
      <div class="col-lg-10 col-md-12 slide-area">
        <div class="sale-product container">
          <div class="owl-carousel owl-theme owl-sale">
            @foreach($lienquan as $lq)
            <div class="item-product">
              <div class="img-product">

                <a href="{{route('product_detail',['id'=>$lq->id])}}">
                  <img src="{{asset('public/frontend/imgs/'.$lq->image)}}" class="img-fluid" alt="">
                </a>
              </div>
              <div class="des-product">
                <h3><a href="{{route('product_detail',['id'=>$lq->id])}}">{{$lq->pro_name}}</a></h3>
                <p>{{$lq->cat->name}}</p>
                <span class="sale-price">${{$lq->price}}</span>
              </div>
              <div class="cart">
                <a data-url="{{route('add-cart',['id'=>$lq->id])}}" class="add-cart2"> <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button></button></a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
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
<script>
 function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
};
function myFunction(smallImg){
  var fullImg = document.getElementById("imagebox");
  fullImg.src = smallImg.src;
}
</script>
@stop