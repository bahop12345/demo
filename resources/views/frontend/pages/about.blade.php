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


<!-- 	---------------------------------------------------------- -->
<div class="container abot-11">
	<div class="row ">
		<div class="col-lg-6 about">
			<b>Our Story</b>
			<h3>We are Creative agency for you</h3>
			<p class="">Trang Trại chúng tôi sử dụng chế phẩm sinh học EM vào:

				- Sử dụng chế phẩm EM làm đệm lót vi sinh ( gồm chế phẩm EM, mùn cưa và một số thành phần khác): Đệm lót vi sinh tạo nên môi trường sống sạch tự nhiên nhất cho động vật, giúp chúng khỏe mạnh, có sức đề kháng tốt và ít bệnh. Đặc biệt, dùng nền chuồng bằng đệm lót vi sinh này không có chất thải ra môi trường, không có mùi hôi, hơn nữa sau thời gian phân hủy nó sẽ tạo thành phân vi sinh rất tốt đê làm phân bón vi sinh trong trồng trọt các sản phẩm hữu cơ khác.

			- Sử dụng chế phẩm EM để ủ thức ăn ( Nguyên liệu gồm cám gạo,ngô, bột đậu tương ...ủ với chế phẩm EM cho lên men ): Khi cho vật nuôi ăn thức ăn này kết hợp với rau xanh của trang trại, thịt hoàn toàn không có chất kích  thích tăng trưởng , chất tạo nạc, kháng sinh mà vật nuôi vẫn khỏe mạnh, tăng trưởng tốt và sạch bệnh3.</p>
			<div class="form-group mt-3">
				<a href="" title="" class="boxed-btn-1-about boxed-btn-1">Read more</a>
			</div>
		</div>
		<div class="col-lg-6 imgs">
			<img src="{{asset('public/frontend/imgs/about1.png')}}" alt="">
		</div>
	</div>
</div>
<!-- ----------------------------------------------------------------------------------- -->
<div class="about-2">
	<div class=" container">
		<div class=" row">
			<div class="col-lg-6 imgs">
				<img src="{{asset('public/frontend/imgs/about2.png')}}" alt="">
			</div>
			<div class="col-lg-6 about">
				<b>Our future Plan</b>
				<h3>We are Creative agency for you</h3>
				<p class="">Trang Trại chúng tôi sử dụng chế phẩm sinh học EM vào:

				- Sử dụng chế phẩm EM làm đệm lót vi sinh ( gồm chế phẩm EM, mùn cưa và một số thành phần khác): Đệm lót vi sinh tạo nên môi trường sống sạch tự nhiên nhất cho động vật, giúp chúng khỏe mạnh, có sức đề kháng tốt và ít bệnh. Đặc biệt, dùng nền chuồng bằng đệm lót vi sinh này không có chất thải ra môi trường, không có mùi hôi, hơn nữa sau thời gian phân hủy nó sẽ tạo thành phân vi sinh rất tốt đê làm phân bón vi sinh trong trồng trọt các sản phẩm hữu cơ khác.

			- Sử dụng chế phẩm EM để ủ thức ăn ( Nguyên liệu gồm cám gạo,ngô, bột đậu tương ...ủ với chế phẩm EM cho lên men ): Khi cho vật nuôi ăn thức ăn này kết hợp với rau xanh của trang trại, thịt hoàn toàn không có chất kích  thích tăng trưởng , chất tạo nạc, kháng sinh mà vật nuôi vẫn khỏe mạnh, tăng trưởng tốt và sạch bệnh3.</p>
				<div class="form-group mt-3">
					<a href="" title="" class="boxed-btn-1 boxed-btn-1">Read more</a>
				</div>
			</div>
		</div>
	</div>			
</div>
<!-- --------------------------------------------------------------------------- -->
<div class="container">
	<div class="row ">
		<div class="col-lg-6 about">
			<b>Resarch to help Different</b>
			<h3>Together we can make Difference</h3>
			<p class="">Trang Trại chúng tôi sử dụng chế phẩm sinh học EM vào:

				- Sử dụng chế phẩm EM làm đệm lót vi sinh ( gồm chế phẩm EM, mùn cưa và một số thành phần khác): Đệm lót vi sinh tạo nên môi trường sống sạch tự nhiên nhất cho động vật, giúp chúng khỏe mạnh, có sức đề kháng tốt và ít bệnh. Đặc biệt, dùng nền chuồng bằng đệm lót vi sinh này không có chất thải ra môi trường, không có mùi hôi, hơn nữa sau thời gian phân hủy nó sẽ tạo thành phân vi sinh rất tốt đê làm phân bón vi sinh trong trồng trọt các sản phẩm hữu cơ khác.

			- Sử dụng chế phẩm EM để ủ thức ăn ( Nguyên liệu gồm cám gạo,ngô, bột đậu tương ...ủ với chế phẩm EM cho lên men ): Khi cho vật nuôi ăn thức ăn này kết hợp với rau xanh của trang trại, thịt hoàn toàn không có chất kích  thích tăng trưởng , chất tạo nạc, kháng sinh mà vật nuôi vẫn khỏe mạnh, tăng trưởng tốt và sạch bệnh3.</p>
			<div class="form-group mt-3">
				<a href="" title="" class="boxed-btn-1 boxed-btn-1">Read more</a>
			</div>
		</div>
		<div class="col-lg-6 imgs">
			<img src="{{asset('public/frontend/imgs/about3.png')}}" alt="">
		</div>
	</div>
</div>
<!-- ------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------- -->
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