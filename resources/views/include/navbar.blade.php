<header>
	<div class="cm-header-navbar">
		<div class="cm-page-center">
			<div class="cm-flex-type-2 text-deco-none">
				<div class="logo"><a href="{{url('/')}}"><img src="{{asset('assets/image/logo.png')}}" alt="Flying rules Logo"></a></div>
				<div class="topnav" id="myTopnav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<div class="dropdown">
						<button class="dropbtn">Cancellation Policy
							<i class="fa-solid fa-angle-down"></i>
						</button>
						<div class="dropdown-content" style="display: none">
							@if(!empty($cancellationPolicy))
								@foreach($cancellationPolicy as $cate)
									<a href="/cancellation-policy/{{$cate['slug']}}">{{$cate['name']}}</a>
								@endforeach
							@endif
						</div>
					</div>

					<div class="dropdown">
						<button class="dropbtn">Flight Change 
							<i class="fa-solid fa-angle-down"></i>
						</button>
						<div class="dropdown-content" style="display: none">
							<a href="#">Flydubai Flight Change Policy</a>
							<a href="#">Saudi Airlines Flight Change Policy</a>
							<a href="#">Bahamasair Flight Change Policy</a>
						</div>
					</div> 

					<div class="dropdown">
						<button class="dropbtn">Name Change 
							<i class="fa-solid fa-angle-down"></i>
						</button>
						<div class="dropdown-content" style="display: none">
							@if(!empty($nameChange))
								@foreach($nameChange as $cate)
									<a href="/name-change/{{$cate['slug']}}">{{$cate['name']}}</a>
								@endforeach
							@endif
						</div>
					</div>

					<div class="dropdown">
						<button class="dropbtn">Baggage Policy
							<i class="fa-solid fa-angle-down"></i>
						</button>
						<div class="dropdown-content" style="display: none">
							
						</div>
					</div>

					<div class="dropdown">
						<button class="dropbtn">Lost & Found
							<i class="fa-solid fa-angle-down"></i>
						</button>
						<div class="dropdown-content" style="display: none">
							
						</div>
					</div>
					<!-- <a href="/baggage-policy">Baggage Policy</a> -->
					<!-- <a href="/lost-and-found">Lost & Found</a> -->
				</div>

				<div class="search-icon">
					<i class="fa fa-search" style=font-size:20px;color:#009361; aria-hidden="true"></i>
				</div>

				<div class="">
					<a href="tel:{{env('PHONE_NUMBER')}}" class="cm-prime-btn btn-rounded">{{env('PHONE_NUMBER')}}</a>
				</div>

				<div class="nav-menu-icon" onclick="openNav()">
					<a href="javascript:void(0);" class="icon nav-menu">
						<i class="fa fa-bars"></i>
					</a>
				</div>
			</div>
		</div>
		
		<div class="nav-search">
			<form action="#">
				<input class="search" type="text" placeholder="Search..">
				<button class="submit"><i class="fa fa-search" style=font-size:20px;color:white; aria-hidden="true"></i></button>
			</form>
			<div class="suggestion-list">
				<ul>
					<li><img class="search-img" src="https://horizonmarketing.co/wp-content/uploads/2020/06/Services-bg.jpg"><a class="search-txt" href="#">Lorem Ipsum Dolor</a></img></li>
					<li><img class="search-img" src="https://horizonmarketing.co/wp-content/uploads/2020/06/Services-bg.jpg"><a class="search-txt" href="#">Lorem Ipsum Dolor</a></img></li>
					<li><img class="search-img" src="https://horizonmarketing.co/wp-content/uploads/2020/06/Services-bg.jpg"><a class="search-txt" href="#">Lorem Ipsum Dolor</a></img></li>
					<li><img class="search-img" src="https://horizonmarketing.co/wp-content/uploads/2020/06/Services-bg.jpg"><a class="search-txt" href="#">Lorem Ipsum Dolor</a></img></li>
					<li><img class="search-img" src="https://horizonmarketing.co/wp-content/uploads/2020/06/Services-bg.jpg"><a class="search-txt" href="#">Lorem Ipsum Dolor</a></img></li>
				</ul>
			</div>
		</div>

	</div>
</header>

<script>

	function openNav() {
	document.getElementById("myTopnav").style.width = "80%";
	}

	
	function closeNav() {
  	document.getElementById("myTopnav").style.width = "0";
	}

</script>