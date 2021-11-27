<footer class="footer-faq footer-shipping-2">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h4 class="padding-top-shipping-2">CONTACTS</h4>
						<div  class=" footer-center-shipping-2">
							<p>8-100-9000-300</p>
							<p>24 Oak,Abohar punjab</p>
							<p>Usa,152122</p>
							<p>Company@gmail.com</p>
						</div>
						<div>
							<i class="fab fa-facebook-f icons-footer"></i>
							<i class="fab fa-twitter icons-footer"></i>
							<i class="fab fa-youtube icons-footer"></i>
						</div>
					</div>
					<div class="col-md-2">
						<h4 class="padding-top-shipping-2">OUR COMPANTY</h4>
						<div class=" footer-center-shipping-2">
							<p>Our Blog</p>
							<p>Search Page</p>
							<p>About Us</p>
							<p>Contact Us</p>
							<p>Collection</p>
							<p>Catelog page</p>
						</div>
					</div>
					<div class="col-md-2">
						<h4 class="padding-top-shipping-2">INFORMATION</h4>
						<div  class=" footer-center-shipping-2">
							<p>Privancy</p>
							<p>FAQs</p>
							<p>Login page</p>
							<p>Tcrm of use</p>
						</div>

					</div>
					<div class="col-md-2">
						<h4 class="padding-top-shipping-2">CATEGORIES</h4>
						<div  class=" footer-center-shipping-2">
							@foreach($category as $cat)
							<p><a href="{{route('cat-product',['id'=>$cat->id])}}">{{$cat->name}}</a></p>
							@endforeach
							
						</div>
					</div>
					<div class="col-md-3">
						<h4 class="padding-top-shipping-2">@OOMATO MARKET</h4>
						<div class="row footer-img ">
							<div class=" sup-footer-img"><div class="img-footer"><img src="{{asset('public/frontend/imgs/footer-1.jpg')}}" alt=""></div></div>
							<div class=" sup-footer-img"><div class="img-footer"><img src="{{asset('public/frontend/imgs/footer-2.jpg')}}" alt=""></div></div>
							<div class=" sup-footer-img"><div class="img-footer"><img src="{{asset('public/frontend/imgs/footer-1.jpg')}}" alt=""></div></div>
							<div class=" sup-footer-img"><div class="img-footer"><img src="{{asset('public/frontend/imgs/footer-2.jpg')}}" alt=""></div></div>
							<div class=" sup-footer-img"><div class="img-footer"><img src="{{asset('public/frontend/imgs/footer-1.jpg')}}" alt=""></div></div>
							<div class=" sup-footer-img"><div class="img-footer"><img src="{{asset('public/frontend/imgs/footer-2.jpg')}}" alt=""></div></div>
						</div>
					</div>
				</div>
			</div>
			<div class="hr">
				<hr>
			</div>
			<div class="end-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="text-footer footer-center-shipping-2">
								<p>2020 All right reserved.Power by Madbrain</p>
							</div>
						</div>
                    <!-- <div class="col-md-6">
                        <div class="icon-footer">
                            <img src="{{('public/frontend/imgs/unnamed3.jpg')}}" alt="">
                            <img src="{{('public/frontend/imgs/master.jpg')}}" alt="">
                            <img src="{{('public/frontend/imgs/paypal.master.jpg')}}" alt="">
                            <img src="{{('public/frontend/imgs/visa.jpg')}}" alt="">

                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>