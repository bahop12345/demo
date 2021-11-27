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
	
	<div class="container Recovery-Password">
		<h1 class="">lấy lại mật khẩu</h1>
		
		<form  method="post" action="" class="Recovery-Password">
			@csrf
			
			<div class="form-group input-Recovery-Password" style="position: relative;">
				<label for="">mật khẩu mới:</label>
				<input type="password" id="pwd" class="form-control" placeholder="*************"  name="password" value="" required >
				<a style="position: absolute;top: 55%;right: 10px;color: #333;cursor: pointer;"><i class="fas fa-eye" id="eye"></i></a>
			</div>
			<div class="form-group input-Recovery-Password" style="position: relative;">
				<label for="">nhập lại mật khẩu mới:</label>
				<input type="password" id="pwd" class="form-control" placeholder="*************"  name="password_comfirm" value="" required >
				<a style="position: absolute;top: 55%;right: 10px;color: #333;cursor: pointer;"><i class="fas fa-eye" id="eye"></i></a>
			</div>
			<div class="button-login">
				<div class="sup-button-Recovery-Password">
					<button type="submit" class=" button-Login-1">Reset Password</button>
				</div>
			</div>
		</form>
	</div>


	@stop()
	@section('script')
	<script>
		document.getElementById("eye").addEventListener("click", function(e){
        var pwd = document.getElementById("pwd");
        if(pwd.getAttribute("type")=="password"){
            pwd.setAttribute("type","text");
        } else {
            pwd.setAttribute("type","password");
        }
    });
	</script>
	@stop()