<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{asset('css')}}/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<script src="{{asset('js')}}/jquery.min.js"></script>
	<script src="{{asset('js')}}/popper.min.js"></script>
	<script src="{{asset('js')}}/bootstrap.min.js"></script>
	<script src="{{asset('js')}}/owl.carousel.min.js"></script>
	<script src="{{asset('js')}}/owl.carousel.js"></script>
	<script src="{{asset('js')}}/script.js"></script>
	<script src="{{asset('js')}}/ajax.js"></script>
	@yield('css')
	@yield('script')
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="myCollapse">
				<ul class="m-auto navbar-nav">
					<li class="nav-item"> 
						<a href="{{route('user.category','Travelling')}}" class="nav-link" id="nvlk">Travelling</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.duffel','Duffel')}}" class="nav-link" id="nvlk" >Duffel</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.category','Office')}}" class="nav-link" id="nvlk">Office</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.category','Regular')}}" class="nav-link" id="nvlk">Regular</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.category','Other')}}" class="nav-link" id="nvlk">Other Bags</a>
					</li>
			 	</ul>
				<a href="{{route('user.index')}}" class="navbar-brand">Stay Classy</a>
				<ul class="ml-auto navbar-nav">
					<li class="nav-item">
						<a href="{{route('user.newarrival')}}" class="nav-link" id="nvlk">New Arrivals</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.type','Gents')}}" class="nav-link" id="nvlk">Gents</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.type','Ladies')}}" class="nav-link" id="nvlk">Ladies</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.offers')}}" class="nav-link" id="nvlk">Offers</a>
					</li>
					@if(Session::has('loggedUser'))
					<li class="nav-item ">
						<a href="{{route('user.account')}}" class="nav-link" id="nvlk">Profile</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.logout')}}" class="nav-link" id="nvlk">Logout</a>
					</li>
					@else
					<li class="nav-item ">
						<a href="{{route('user.sign')}}" class="nav-link" id="nvlk">Sign-Up</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.userlogin')}}" class="nav-link" id="nvlk">Log-in</a>
					</li>
					@endif
					<!-- <i class="fa fa-search m-auto" id="icon"> -->
						<li class="nav-item col-md-4 m-auto" id="list">
							<input type="search" placeholder="search" name="searchbox">
						<!-- <input type="submit" class="btn btn-primary" name="" value="Search"> -->
						</li>
					<!-- </i> -->
					
				</ul>
			</div>
		</nav>
		
	</div>
	@yield('container')
	<div class="container-fluid" id="footer">
		<footer>
			<div class="row">
				<div class="col-md-12">
					<div class="row">	
						<div class="col-md-8 m-auto">
							<div class="row">
								<div class="col-md-4 content">
									<a href="{{route('user.quality')}}"><p id="p">Qualitys</p></a>
								</div>
								<div class="col-md-4 content">
									<a href="{{route('user.policy')}}"><p id="p">Policys</p></a>
								</div>
								<div class="col-md-4 content">
									<a href="{{route('user.shipping')}}"><p id="p">Shipping</p></a>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-7 m-auto content">
							<div class="row">
								<div class="col-md-3 content">
									<a href="{{route('user.customerservice')}}"><p id="p">Customer Service</p></a>
								</div>
								<div class="col-md-3 content">
									<a href="{{route('user.contact')}}"><p id="p">Contact</p></a>
								</div>
								<div class="col-md-3 content">
									<a href="{{route('user.about')}}"><p id="p">About Us</p></a>
								</div>
								<div class="col-md-3 content">
									<p>Follow Us</p>
								</div>
								<div class="col-md-3 content">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>
