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
	
	<div class="container">
		<h1 class="" style="text-align: center;">cập nhật tk</h1>
		
		@if(Session('success'))
		<div class="alert alert-success">{{Session('success')}}</div>
		@endif

		@if(Auth::guard('userlogin')->check() && session('id'))
		<form action="{{route('postUser',['id'=>session('id')])}}" method="post" enctype="multipart/form-data">
			
			@csrf
			
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label for="exampleInputEmail1">Ảnh</label>
						@if($user->img!='')
						<img id="avatar" class="thumbnail" width="300px" src="{{asset('public/frontend/imgs/'.$user->img)}}">
						@else
						<span><img id="avatar" class="thumbnail" width="300px" src="{{asset('public/frontend/imgs/08_Product Review.jpg')}}" style="width: 70px; height: 70px;background: #ccc;"></span>
						@endif
						
						<input id="img" type="file" name="img" class="form-control img" onchange="changeImg(this)">
						
					
					</div>
				</div>
				
				
				
				<div class="col-8">
					<label for="" class="control-label ">Họ và tên</label>
					<div class="">
						<input type="text" id="hoTen" name="name" value="{{$user->name}}" class="form-control">
					</div>
					
					
					<label for="" class="control-label">Email</label>
					<div class="">
						<input type="text" id="email" value="{{$user->email}}" name="email" class="form-control" readonly>
					</div>
					
					
					<label for="" class="control-label ">Điện thoại</label>
					<div class="">
						<input type="text" id="sdt" name="phone" class="form-control" value="{{$user->phone}}">
					</div>
					
					
					
					<label for="" class="control-label ">Địa chỉ</label>
					<div class="">
						<input type="text" id="diaChi" name="address" class="form-control" value="{{$user->address}}">
					</div>
					
					
					
					<label for="" class="control-label ">Giới tính</label>
					<div class="">
						@if($user->gender==0)
						<input type="radio" value="0" id="nam" name="gender" checked> Nam
						<input type="radio" value="1" id="nu" name="gender"> Nữ
						@else
						<input type="radio" value="0" id="nam" name="gender" > Nam
						<input type="radio" value="1" id="nu" name="gender" checked> Nữ
						@endif
					</div>
					
					
					
					
					<div class="form-group">
						<button type="submit" style="background:#4FC308;border: 1px solid #4FC308;color: white;margin-top: 20px;padding: 9px 0;">cập nhật thông tin</button>
					</div>
				</div>
			</div>
		</form>
		@else
		<div></div>
		@endif
	</div>
	<script>
  $.widget.bridge('uibutton', $.ui.button);
  function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function(){
            	$('#img').click();
            });
        });
</script>
	@stop()