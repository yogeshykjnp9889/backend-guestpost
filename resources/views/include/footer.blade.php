{{-- Add Social media icon --}}

<div class="cm-pos-fixed social-media-icons">
	<div class="slider-icon">
	<i class="fa fa-angle-left show" aria-hidden="true"></i>
	</div>
	<div class="social-media-icons">
		<a href="https://www.facebook.com/flyingrule" class="icons-facebook"><i class="fa-brands fa-facebook-f"></i></a>
		<a href="https://www.pinterest.com/flyingrules/" target="_blank" class="icons-pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
		<a href="https://twitter.com/flyingrule" target="_blank" class="icons-twitter"><i class="fa-brands fa-twitter"></i></a>
		<a href="https://www.linkedin.com/company/89322303/admin/" target="_blank" class="icons-linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
		<a href="https://www.youtube.com/channel/UCPcC0L2rKCCQ1VihKSG-kGg" target="_blank" class="icons-youtube"><i class="fa-brands fa-youtube"></i></a>
	</div>
</div>

{{-- Add phone number in footer  --}}
<div class="cm-pos-absolute fixed-callnow">
	<div class="cm-page-center">
		<div class="cm-txt-center text-deco-none">
			<a href="tel:{{env('PHONE_NUMBER')}}"><img src="<?=asset('assets/image/call-image.gif');?>" alt="Phone calling icon"> {{env('PHONE_NUMBER')}}</a>
		</div>
	</div>
</div>
{{-- Start Footer Section --}}
<footer class="cm-footer">
		<div class="cm-page-center">
			<div class="cm-flex-type-1 cm-mob-wrap cm-ptb-50">
				<div class="cm-footer-list cm-mob-full-width">
					<div class="footer-logo">
						<img src="{{asset('assets/image/footer-logo.png')}}">
					</div> 	
					<p>Flying Rules is an independent website that shares numerous airline policies to help you take the correct action when needed. We solely focused on educating the traveler about their travel with different airlines. In case of any delay, cancellation, or rescheduling, we will not be responsible. Flying Rules take no accountability for the acts of airlines. </p>
				</div>
				<div class="cm-footer-list cm-mob-full-width">
					<h5>Cancellation Policy</h5>
					<ul>
						@if(!empty($cancellationPolicy))
							@foreach($cancellationPolicy as $cate)
								<li><a href="/cancellation-policy/{{$cate['slug']}}">{{$cate['name']}}</a></li>
							@endforeach
						@endif
					</ul>
				</div>
				<div class="cm-footer-list cm-mob-full-width">
					<h5>Name Change</h5>
					<ul>
						@if(!empty($nameChange))
							@foreach($nameChange as $cate)
								<li><a href="/name-change/{{$cate['slug']}}">{{$cate['name']}}</a></li>
							@endforeach
						@endif
					</ul>
				</div>
				<div class="cm-footer-list cm-mob-full-width">
					<h5>Reach Our to Us</h5>
					<div class="cm-finfo-list">
						<i class="fa-solid fa-phone"></i>&nbsp;&nbsp;
						<a href="tel:{{env('PHONE_NUMBER')}}">{{env('PHONE_NUMBER')}}</a>
				
					</div>
					<div class="cm-finfo-list">
						<i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;
						<a href="mailto:{{env('EMAIL_ADDRESS')}}">{{env('EMAIL_ADDRESS')}}</a>
						<!-- <p>{{env('EMAIL_ADDRESS')}}</p> -->
					</div>
					<div class="cm-finfo-list">
						<i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;
						<!-- <a href="javascript:void(0)">{{env('ADDRESS_INFO')}}</a> -->
						<p>{{env('ADDRESS_INFO')}}</p>
					</div>

					<div class="social-media-foo-icons cm-mt-30">
						<div class="cm-flex">
							<a href="https://www.facebook.com/flyingrule" class="icons-facebook"><i class="fa-brands fa-facebook-f"></i></a>
							<a href="https://www.pinterest.com/flyingrules/" target="_blank" class="icons-pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
							<a href="https://twitter.com/flyingrule" target="_blank" class="icons-twitter"><i class="fa-brands fa-twitter"></i></a>
							<a href="https://www.linkedin.com/company/89322303/admin/" target="_blank" class="icons-linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
							<a href="https://www.youtube.com/channel/UCPcC0L2rKCCQ1VihKSG-kGg" target="_blank" class="icons-youtube"><i class="fa-brands fa-youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="cm-txt-center copywrite">
			<p>	© {{date('Y')}} Flyingrules | All Rights Reserved.</p>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<script>
		$('.cm-pos-fixed.social-media-icons .show').click(function(){
		$('.cm-pos-fixed.social-media-icons').toggleClass('active')
	})

		$('.search-icon').click(function(){

		$('.nav-search').toggle()
	})

	$('.submit').click(function(){
		$('.suggestion-list').toggle()
	})

	</script>