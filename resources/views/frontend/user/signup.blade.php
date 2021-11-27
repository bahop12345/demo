	@extends('frontend.main')
	@section('content')
	<div class="mother-nav-bar ">
		<div class="container nav-bar">
			<nav class="navbar row">
				<div class="col-lg-6 col-sm-6   sup-navbar ">
					<ul class="sup-navbar-1">
						<li><a class="sup-navbar-blog-1" class="" href="{{route('signup')}}">signup</a></li>
					</ul>
				</div>
				<div class="col-lg-6 col-sm-6  sup-navbar text-right">
					<ul class="sup-navbar-blog-2">
						<li class=""><a class="" href="{{route('home')}}">Home <i class="fas fa-angle-right "></i></a></li>
						<li ><a class="" href="{{route('signup')}}">signup</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="wap-in">
		<div class="container">
			<h1 class="sign-up">Sign Up</h1>
			<p class="sup-sign-up">To track your ofder please enter your Order ID in the box blew the "Track" buttion. This was given to your on your receipt and in confirmation email your should have recevied</p>
			<form  action="{{route('signup')}}" method="post" class="form-sign-up">
				@csrf
				
				<div class="form-group sup-form-sign-up">
					<input type="text" name="name" class="form-control " required placeholder="Name" >
					@error('name')
					<div class="" style="color: #FE2E2E;">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group sup-form-sign-up">
					<input type="email" name="email" required class="form-control " placeholder="Email" >
					@error('email')
					<div class="" style="color: #FE2E2E;">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group sup-form-sign-up">
					<input type="namber" name="phone" required class="form-control " placeholder="Phone no" >
					@error('phone')
					<div class="" style="color: #FE2E2E;">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group sup-form-sign-up">
					<input type="password" name="password" required class="form-control " placeholder="Password" >
					@error('password')
					<div class="" style="color: #FE2E2E;">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group sup-form-sign-up">
					<input type="password" name="re_password" required class="form-control " placeholder="Confirm Password " >
					@error('re_password')
					<div class="" style="color: #FE2E2E;">{{ $message }}</div>
					@enderror
				</div>
				
				<div class="sign-up-button">
					<button class="button-sign-up-1 btn-success btn" type="submit">Sing Up</button>
				</div>
			</form>
		</div>
	</div>
	

	@stop()