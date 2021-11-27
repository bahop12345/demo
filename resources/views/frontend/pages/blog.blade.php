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
								
							</div>
						</div>
					</div>      
				</div>
			</div>
			@endforeach
		</div>

	</div>
	
	<div class="container">
		<div class="title-page">
			<p>News</p>
			<h2>Latest Blog Post</h2>	
		</div>
		<div class="row">
			@foreach($blogs as $bl)
			<div class="col-lg-4 col-sm-6">
				<div class="img-total-bolg">
					<img class="img-blog img-fluid" src="{{asset('public/frontend/imgs/'.$bl->image)}}" alt="">
					<div class="txt">
						<p class="Blog-1">{{date('d/m/Y',strtotime($bl->created_at))}}</p>
						<a href="{{route('blogDetails',['id'=>$bl->id])}}" title=""><h4 class="Blog">{{$bl->title}}</h4></a>
						<p class="Blog-1 Post">
							<a href="{{route('blogDetails',['id'=>$bl->id])}}" title="">Read more <i class="fas fa-arrow-right"></i></a>
						</p>
					</div>
				</div>
			</div>
			@endforeach
			
			<div class="col-12 paginationpro"><div class="row">{{ $blogs->links() }}</div></div>
		</div>
	</div>
	
	@stop()