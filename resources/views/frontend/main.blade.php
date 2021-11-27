<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Trang chủ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/fonts/fontawesome/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
	<link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/jqueryui.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/distribute/nouislider.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/font/font-awesome/css/all.min.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600&family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600&family=Dancing+Script&family=Source+Serif+Pro&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Halant:wght@300&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
	<!-- ------------sao đánh giá-------------- -->
	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
	<!-- CSS -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	<!-- Default theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
	<!-- Semantic UI theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
	
</head>
<body>
	<div class="wrap">
		@include('frontend.header')
		<!-- ===========end header======== -->
		<!-- ===========bander============ -->
		@yield('content')
		<!-- -- ----------------------------------------------------------------------->
		@include('frontend.footer')
		<div class="scrollTop text-center" title="Back To Top">
			<i class="fas fa-angle-up"></i>
		</div>
	</div>


	<script src="{{asset('public/frontend/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/slick.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/scrollup.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jqueryui.min.js')}}"></script> 
	<script src="{{asset('public/frontend/js/modernizr-3.6.0.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/app.js')}}"></script>
	<script src="{{asset('public/frontend/distribute/nouislider.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/wNumb.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="{{asset('public/frontend/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.zoom.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.dd.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.slicknav.js')}}"></script>
	<script src="{{asset('public/frontend/js/main.js')}}"></script>
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


	<script>
		$("#myDIV li a").click( function() {
			$(this).parent().parent().find("li").removeClass("active").removeClass("hover").addClass("hover");
			$(this).parent().removeClass("hover").addClass("active");
		});
	</script>
	
	<script type="text/javascript">
		
		$('.add-cart2').click(function(e){
			e.preventDefault();
			var href = $(this).data('url');
			$.ajax({
				url:href,
				type:'GET',
			}).done(function(response){

				location.reload();
				RenderCart(response);
				alertify.success('đặt hàng thành công');
			});

		})
		function AddCart(id){
			$.ajax({
				url:'add-cart/'+id,
				type:'GET',
			}).done(function(response){

				RenderCart(response);
				alertify.success('đặt hàng thành công');
			});
		}
		$("#chane-item-cart").on("click",".si-close i",function(e){
			e.preventDefault();
			var href = $(this).attr('href');
			$.ajax({
				url:href,
				type:'GET', 
			}).done(function(response){
				location.reload();
				RenderCart(response);

				alertify.success('đã xóa sản phẩm thành công');
			});
		});
		function RenderCart(response){
			$("#chane-item-cart").empty();
			$("#chane-item-cart").html(response);
			$("#total-quanty-show").text($("#total-quanty-cart").val());
		}
	</script>
	<script type="text/javascript">
		function addCartQuan(id){
			quantity=$('#quanty-item').val();
			var href='add-cart-quantity/'+id+'/'+quantity;
			$.ajax({
				url:href,
				type:'GET',
			}).done(function(response){

				location.reload();
				RenderCart(response);
				alertify.success('đặt hàng thành công');
			});

		}
			
	
	</script>
	<script type="text/javascript">
		function DeleteItemShopCart(id){
			$.ajax({
				url:'remove-shopping-cart/'+id,
				tyle:'GET',
			}).done(function(response){

				location.reload();
				RenderlistCart(response);
				alertify.success('đã xóa sản phẩm thành công');
			});
		}
		function SaveItemShopCart(id){
			$.ajax({
				url:'save-shopping-cart/'+id+'/'+$("#quanty-item-"+id).val(),
				tyle:'GET',
			}).done(function(response){

				location.reload();
				RenderlistCart(response);
				alertify.success('cập nhật thành công');
			});
		}
		function RenderlistCart(response){
			$("#list-cart").empty();
			$("#list-cart").html(response);
		}
		$(".edit-all").on("click",function() {
			var lists = [];
			$("table tbody tr td").each(function(){
				$(this).find("input").each(function(){
					var element = {key:$(this).data("id"),value:$(this).val()};
					lists.push(element);
				});

			});
			$.ajax({
				url:'Save-all',
				tyle:'POST',
				data:{
					"_token" : "{{csrf_token()}}",
					"data":lists,
				}
			}).done(function(response){
				location.reload();
				alertify.success('cập nhật thành công');

			});
		});
		$(".del-all").on("click",function() {
			var lists = [];
			$("table tbody tr td").each(function(){
				$(this).find("input").each(function(){
					var element = {key:$(this).data("id"),value:$(this).val()};
					lists.push(element);
				});

			});
			$.ajax({
				url:'Dell-all',
				tyle:'POST',
				data:{
					"_token" : "{{csrf_token()}}",
					"data":lists,
				}
			}).done(function(response){
				location.reload();
				alertify.success('đã xóa sản phẩm thành công');

			});
		});
	</script>
	<script>
		const nextIcon = '<img src="{{asset('public/frontend/imgs/arrow.png')}}" alt="right" class="img-n">';
		const prevIcon = '';

		$('.owl-sale').owlCarousel({
			loop:true,
			dots: false,
			margin:10,
			nav: true,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			navText: [
			prevIcon,
			nextIcon
			],
			responsive:{
				0: {
					items: 1,
				},
				500:{
					items:2,
				},

				768: {
					items: 3,
				},
				1200: {
					items:4,
				},
				1319.29:{
					items:4.5,
				}
			}
		});
	</script>

	@yield('script')

</body>
</html>