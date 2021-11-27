	@extends('frontend.main')
	@section('content')
	<div class="mother-nav-bar ">
		<div class="container nav-bar">
			<nav class="navbar row">
				<div class="col-lg-6 col-sm-6   sup-navbar ">
					<ul class="sup-navbar-1">
						<li><a class="sup-navbar-blog-1" class="" href="{{route('faq')}}">FAQ</a></li>
					</ul>
				</div>
				<div class="col-lg-6 col-sm-6  sup-navbar text-right">
					<ul class="sup-navbar-blog-2">
						<li class=""><a class="" href="{{route('home')}}">Home <i class="fas fa-angle-right "></i></a></li>
						<li ><a class="" href="{{route('faq')}}">FAQ</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="Get-in-touch col-md-6">
				@foreach($contact as $cotac)
				<p class="sup-get">Get in touch</p>
				<h4>Try not to dither to contact with as for any sort of information</h4>
				<p class="sup-get">Call us for immediate bolster this number</p>
				<p class="sup-get">{{$cotac->phone}}</p>
				<p class="sup-get">Drop a message fell free now</p>
				<p class="sup-get">I{{$cotac->email}}</p>
				@endforeach
			</div>
			<div class="col-md-6">
				<form action="" method="post" role="from">
					<div class=" textarea-contact button-contact">
						@if(Session('thongbao'))
						<div class="alert alert-success">{{Session('thongbao')}}</div>
						@endif
						@csrf
						<label >Email Address*</label>
						<input class="input-contact" type="text" name="email">   
						<label >Name*</label>
						<input class="input-contact" type="text" name="name"> 
						<label >Message*</label>
						<input class="input-contact" type="text" name="content"> 
						<div class="sup-button-contact">
							<button type="submit">Send Message</button>
						</div>
					</div>
				</form>                
			</div>
		</div>	
	</div>
	<div>
		{!!$cotac->map!!}
	</div>
	<form>
		<div class="form-group">
			<input type="range" class="form-control-range" id="formControlRange">
		</div>
	</form>
	@stop()