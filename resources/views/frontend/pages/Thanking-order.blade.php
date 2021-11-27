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

	<div class="container Thanking">
		<h1 class="Login">Thanking for your order</h1>
		<p class="thanking-order ">You successfull posted a payment to your account</p>
		<p class="thanking-order">Payment Amount <b>$531.00</b> Your order</p>
		<p class="thanking-order thanking-order-1">number is <b>.012345678ft</b></p>
		<form class="" action="" method="get" accept-charset="utf-8">
			<div class="thanking-order">
				<div class="sup-thanking-order">
					<button class="sup-thanking-order-1">Conitue Shopping</button>
				</div>
			</div>
		</form>
	</div>

	

@stop()