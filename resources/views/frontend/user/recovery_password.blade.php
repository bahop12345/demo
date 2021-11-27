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
	@if(Session('danger'))
	<div class="alert alert-danger">{{Session('danger')}}</div>
	@endif
	
	@if(Session('success'))
	<div class="alert alert-success">{{Session('success')}}</div>
	@endif
	<div class="container Recovery-Password">
		<h1 class="">Recovery Password</h1>
		<p class="Login-track-your">Please email here to retrieve your password</p>
		<form  method="post" action="" class="Recovery-Password">
			@csrf
			<div class="form-group input-Recovery-Password">
				<input type="text" class="form-control sup-input-login" placeholder="Email" name="email" required id="email" >

			</div>
			<div class="button-login">
				<div class="sup-button-Recovery-Password">
					<button type="submit" class=" button-Login-1">Recovery Password</button>
				</div>
			</div>
		</form>
	</div>


	@stop()