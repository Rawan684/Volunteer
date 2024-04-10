	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>
	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="index.html" class="logo m-0 float-start text-white">Volunteer</a>
						</div>
						<div class="col-8 text-center">
							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="active"><a href="{{ route('home.index') }}">Home</a></li>
								
								
								<li><a href="{{ route('home.About') }}">About</a></li>
								<li><a href="{{ route('home.showReq') }}">Recipient</a></li>
								<li><a href="{{ route('home.show') }}">Donations</a></li>
		@auth

        {{auth()->user()->name}}
       
        <li><a href="{{ route('logout.perform') }}" >Logout</a></li>
        <li><a href="{{ route('home.type') }}">Add Post</a></li>
		<li><a href="{{ route('home.contact') }}">Contact</a></li>
       
        @endauth

                @guest  
								<li><a href="{{ route('register.perform') }}">Register</a></li>
								<li><a href="{{ route('login.perform') }}">Login</a></li>


                @endguest
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>

							<a href="#" class="call-us d-flex align-items-center">
								<span class="icon-phone"></span>
								<span>123-456789</span>
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</nav>

	

	