@extends('frontend.main')
@section('content')
<div class="slider_area">
    <div class="slider_active owl-carousel">
       @foreach($banner as $bn)
       <div class="single_slider  d-flex align-items-center slider_bg_1 overlay" style="background-image: url({{asset('public/frontend/imgs/'.$bn->image)}}); height: 599px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-9">
                    <div class="slider_text">

                        <div>{!!$bn->title!!}</div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
    @endforeach
</div>

</div>
<!-- ==========end bander======== -->
<main>
    <div class="fruit">

        <div class="container fruit-1">
            <div class="row slide">
                <div class="col-lg-2 col-md-12 slide-inner">
                    <div class="inner rotate"> Sản Phẩm Mới</div>
                </div>
                <div class="col-lg-10 col-md-12 slide-area">
                    <div class="sale-product container">
                        <div class="owl-carousel owl-theme owl-sale">
                            @foreach($product_new as $pro)
                            <div class="item-product">
                                <div class="img-product">

                                    <a href="{{route('product_detail',['id'=>$pro->id])}}">
                                        <img src="{{asset('public/frontend/imgs/'.$pro->image)}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="des-product">
                                    <a href="{{route('product_detail',['id'=>$pro->id])}}"><p>{{$pro->pro_name}}</p></a>
                                    <p>{{$pro->cat->name}}</p>
                                    <span class="sale-price">{{number_format($pro->price)}}đ</span>
                                </div>
                                <div class="cart">
                                    <a onclick="AddCart({{$pro->id}})" href="javascript:"> <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button></button></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="get-offer">
        <div class="container get-off-2">
            <div class="row get">
                <div class="col-lg-2 col-md-12  col-sm-12 col-xs-12 get-offer-rotate">
                    <div class="get-offer-inner rotate"> Nhận cung cấp thực phẩm hữu cơ
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 get-offer-1">
                    <div class="get-offer-contain container">
                        <div class="row">

                            <div class="col-lg-6 col-md-12 col-sm-12 get-img ">
                                <?php $i=0; ?>
                                @foreach($banner_2 as $banner)
                                @if($i==0)
                                <div class="get-img-1" style="background-image: url({{asset('public/frontend/imgs/'.$banner->image)}});">


                                    <div class="container get-1">
                                        <h3>fresh</h3>
                                        <p>Summer sale</p>
                                    </div>
                                    <div class="container get-2">
                                        <h2>40%</h2>
                                        <img src="{{('public/frontend/imgs/02_Home.png')}}" alt="">
                                        <span>OFF</span>
                                    </div>
                                </div>
                                @endif
                                <?php $i++ ?>
                                @endforeach
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 get-offer-item">
                                <div class="row">
                                    @foreach($product as $all)
                                    <div class="col-lg-6 col-sm-6 col-xs-12  get-item">
                                        <div class="pro1">
                                            <div class="img-pro">
                                                <a href="{{route('product_detail',['id'=>$all->id])}}"><img src="public/frontend/imgs/{{$all->image}}" alt=""></a>
                                            </div>
                                            
                                            <div class="text-pro">
                                                <a href="{{route('product_detail',['id'=>$all->id])}}"><h4>{{$all->pro_name}}</h4></a>
                                                <p>{{$all->cat->name}}</p>
                                                <strong>{{number_format($all->price)}}đ</strong>
                                            </div>
                                            <div class="cart">
                                    <a onclick="AddCart({{$all->id}})" href="javascript:"> <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button></button></a>
                                </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                     <?php $i=0; ?>
                                     @foreach($banner_2 as $banner)
                                     @if($i==1)
                                     <div class="pre-order" style="background-image: url({{asset('public/frontend/imgs/'.$banner->image)}});height: 250px;">

                                        <div class="container adc">
                                            <h2>PRE-ORDER</h2>
                                            <p>
                                                <span class="agb">50%</span>&nbsp;<span class="acg">OFF</span>
                                            </p>
                                            <P class="asd">FIRST ORDER</P>
                                        </div>
                                    </div>
                                    @endif
                                    <?php $i++ ?>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fruit">

    <div class="container fruit-1">
        <div class="row slide">
            <div class="col-lg-2 col-md-12 slide-inner">
                <div class="inner rotate"> Sản phẩm Nổi bật</div>
            </div>
            <div class="col-lg-10 col-md-12 slide-area">
                <div class="sale-product container">
                    <div class="list-products">
                        <div class="owl-carousel owl-theme owl-sale">
                          @foreach($product_nb as $nb)
                          <div class="item-product">
                                <div class="img-product">

                                    <a href="{{route('product_detail',['id'=>$nb->id])}}">
                                        <img src="{{asset('public/frontend/imgs/'.$nb->image)}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="des-product">
                                    <a href="{{route('product_detail',['id'=>$nb->id])}}"><p>{{$nb->pro_name}}</p></a>
                                    <p>{{$nb->cat->name}}</p>
                                    <span class="sale-price">{{number_format($nb->price)}}đ</span>
                                </div>
                                <div class="cart">
                                    <a onclick="AddCart({{$nb->id}})" href="javascript:"> <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button></button></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="only">
    <div class="only-contain container">
        <div class="row">
            <div class="col-lg-12 only-1">
                @foreach($banner_3 as $banner)
                <div class="only-sale" style="background-image: url({{asset('public/frontend/imgs/'.$banner->image)}});">

                    <div class="container only-2">
                        <h2>Chỉ mùa xuân này! Giảm giá 50% </h2>
                        <h4>Tổng giảm giá tuyệt vời 50%</h4>
                        <p>Chỉ tắt cho tất cả các chất kết dính kaline</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<div class="blog-home">
    <div class="container blog-12"> 
        <div class="row blog-12345">
            <div class="col-lg-2 blog-123">
                <div class="blog-123-inner rotate">

                    <h2>Tin tức mới nhất</h2>   
                </div>
            </div>
            <div class="col-lg-10 blog-124">
                <div class="container blog-1234">
                    <div class="row a12">
                        @foreach($blog as $ba)
                        <div class="col-lg-4 col-sm-6">
                            <div class="img-total-bolg">
                                <img class="img-blog img-fluid" src="{{asset('public/frontend/imgs/'.$ba->image)}}" alt="">
                                <div class="txt">
                                    <p class="Blog-1">{{date('d/m/Y',strtotime($ba->created_at))}}</p>
                                    <a href="{{route('blogDetails',['id'=>$ba->id])}}" title=""><h4 class="Blog">{{$ba->title}}</h4></a>
                                    <p class="Blog-1 Post">
                                        <a href="{{route('blogDetails',['id'=>$ba->id])}}" title="">Read more <i class="fas fa-arrow-right"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

@stop()