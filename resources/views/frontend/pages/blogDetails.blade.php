	@extends('frontend.main')
	@section('content')
	<div class="mother-nav-bar ">
		<div class="container nav-bar">
			<nav class="navbar row">
				<div class="col-lg-6 col-sm-6   sup-navbar ">
					<ul class="sup-navbar-1">
						<li><a class="sup-navbar-blog-1" class="" href="{{route('blog')}}">blog</a></li>
					</ul>
				</div>
				<div class="col-lg-6 col-sm-6  sup-navbar text-right">
					<ul class="sup-navbar-blog-2">
						<li class=""><a class="" href="{{route('home')}}">Home <i class="fas fa-angle-right "></i></a></li>
						<li ><a class="" href="{{route('blog')}}">blog</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="slider_area">
    <div class="slider_active owl-carousel">
     @foreach($banner as $bn)
     <div class="single_slider  d-flex align-items-center slider_bg_1 overlay" style="background-image: url({{asset('public/frontend/imgs/'.$bn->image)}}); height: 599px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-9">
                    <div class="slider_text">
                        
                        <div>{!!$bn->title!!}</div>
                        <a href="#" class="boxed-btn3"><button>Show now</button></a>
                    </div>
                </div>
            </div>      
        </div>
    </div>
    @endforeach
</div>

</div>
	<div class="container">
		<div class="blogDetails">
			@foreach($blogs as $bl)
			<h2>{{$bl->title}}
			</h2>
			<div>{!!$bl->content!!}</div>

			@endforeach
		</div>
		
	</div>
	<div class="blog-home">
		<div class="container blog-12"> 
			<div class="row blog-12345">
				<div class="col-lg-2 blog-123">
					<div class="blog-123-inner rotate">

						<h2>Latest Blog Post</h2>   
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