<!DOCTYPE html>
<html lang="en-US">
<head>
	@include("include/header")
</head>
<body>
	<!-- Navbar Start -->
	@include("include/navbar")
	<!-- Navbar End -->
	{{-- <div class="cm-pos-absolute fixed-callnow">
		<div class="cm-page-center">
			<div class="cm-txt-center text-deco-none">
				<a href="tel:{{env('PHONE_NUMBER')}}"><img src="<?=asset('assets/image/call-image.gif');?>"> {{env('PHONE_NUMBER')}}</a>
			</div>
		</div>
	</div> --}}

	{{-- <section>
		<div class="cm-pos-relative post-detial-banner">
			<img src="<?=asset('assets/image/flights.jpg');?>">
			<div class="cm-pos-absolute cm-hero-post-banner cm-txt-center cm-mob-full-width">
				<a href="tel:{{env('PHONE_NUMBER')}}" class="cm-prime-btn">{{env('PHONE_NUMBER')}}</a>
			</div>
		</div>
	</section> --}}
	<section class="cm-section cm-postdetail-content">
		<div class="cm-page-center">
			<div class="cm-wd-100 cm-txt-center cm-mob-full-width">
				<div class="cm-mt-30">
					<h1 class="">Oops!</h1>
					<p>Your are lost</p>
				</div>
				<img src="{{asset('assets/image/Group 1 (1).png')}}" style="width:40%;margin:0 auto;" />
				<div class="cm-mt-30">
				<a href="{{url('/')}}" class="cm-prime-btn btn-rounded"> Go Home</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer Start -->
	@include("include/footer")
	<!-- Footer End -->
	@include("include/footerscript")
</body>
</html>