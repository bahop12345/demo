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
	<!-- -------------------------------------- -->
	<div class="container">
		<div class="faq">
			<h5>FAQ</h5>
			<h3>Frequently asked questions</h3>
		</div>
		<div id="accordion">
			<div class="card">
				<div class="card-header">
					<a class="card-link " data-toggle="collapse" href="#collapseOne" aria-expanded="true">
						Can I use your identities in my book, on my website, in my movie, in my video game, etc?
						<div class="icon">
							<i class="fas fa-chevron-down"></i>
						</div>
					</a>
				</div>
				<div id="collapseOne" class="collapse" data-parent="#accordion">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non qui officia deserunt mollit anim id est laborum.

					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<a class=" card-link" data-toggle="collapse" href="#collapseTwo" aria-expanded="true">
						Why does Proof assume that a majority of voters will provide the best answer?
						<div class="icon">
							<i class="fas fa-chevron-down"></i>
						</div>
					</a>
				</div>
				<div id="collapseTwo" class="collapse" data-parent="#accordion">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non qui officia deserunt mollit anim id est laborum.

					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<a class=" card-link" data-toggle="collapse" href="#collapseThree" aria-expanded="true">
						How do you know if/when you've purchased a counterfeit medicine?
						<div class="icon">
							<i class="fas fa-chevron-down"></i>
						</div>
					</a>
				</div>
				<div id="collapseThree" class="collapse" data-parent="#accordion">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non qui officia deserunt mollit anim id est laborum.

					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<a class=" card-link" data-toggle="collapse" href="#collapseFour" aria-expanded="true">
						How serious of a problem is the counterfeiting of prescription medicine?
						<div class="icon">
							<i class="fas fa-chevron-down"></i>
						</div>
					</a>
				</div>
				<div id="collapseFour" class="collapse" data-parent="#accordion">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non qui officia deserunt mollit anim id est laborum.

					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<a class=" card-link" data-toggle="collapse" href="#collapseFive" aria-expanded="true">
						If I purchase or obtain medications over the Internet, should I be concerned about counterfeit drugs?
						<div class="icon">
							<i class="fas fa-chevron-down"></i>
						</div>
					</a>
				</div>
				<div id="collapseFive" class="collapse" data-parent="#accordion">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non qui officia deserunt mollit anim id est laborum.

					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<a class=" card-link" data-toggle="collapse" href="#collapseSix">
						The Web site says the drugs are from Canada, doesn't that mean that they are safe?
						<div class="icon">
							<i class="fas fa-chevron-down"></i>
						</div>
					</a>
				</div>
				<div id="collapseSix" class="collapse" data-parent="#accordion">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non qui officia deserunt mollit anim id est laborum.

					</div>
				</div>
			</div>

		</div>
	</div>
		@stop()