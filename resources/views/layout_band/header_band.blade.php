	<!-- top-bar -->
	<div class="top-bar">
		<div class="container-top-bar">
			<div class="currency">
				<span>Currency :</span>
				<div class="select">
					<select>
						<option value="gbp">GBP</option>
						<option value="euro">Euro</option>s
						<option value="dollar">Dollar</option>
					</select>
				</div>
			</div>
			<div class="sign">
				<a href="{{url('/login_band')}}">Register</a>
				<a href="{{url('/login_band')}}">Sign In</a>
				<a class="empty" href="">Empty</a>
			</div>
		</div>
	</div>
	<!-- header -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="home.html"><img src="img/logo.png"></a>
			</div>
			<div class="menu-header">
				<ul class="navi1">
					<li class="main">
						<a href="">MENS</a>
						<ul class="sub-navi">
							<li><span>CASUALS</span>
								<ul class="sub-navi2">
									<li><a href="{{url('/productview')}}">Jackets</a></li>
									<li><a href="{{url('/productview')}}">Hoodies & Sweatshirts</a></li>
									<li><a href="{{url('/productview')}}">Polo Shirts</a></li>
									<li><a href="{{url('/productview')}}">Sportwear</a></li>
									<li><a href="{{url('/productview')}}">Trousers & Chinos</a></li>
									<li><a href="{{url('/productview')}}">T-Shirts</a></li>
								</ul>
							</li>
							<li><span>FORMAL</span>
							<ul class="sub-navi2">
									<li><a href="{{url('/productview')}}">Jackets</a></li>
									<li><a href="{{url('/productview')}}">Shirts</a></li>
									<li><a href="{{url('/productview')}}">Suits</a></li>
									<li><a href="{{url('/productview')}}">Trousers</a></li>
								</ul>
							</li>
							<div class="sale">
								<p href="">AUTUMN SALE!</p>
								<p href="">UP TO 50% OFF</p>
							</div>
						</ul>
					</li>
					<li class="main"><a href="">WOMENS</a></li>
					<li class="main nosub"><a href="{{url('/brand')}}">THE BRAND</a></li>
					<li class="main nosub"><a href="{{url('/localStore')}}">LOCAL STORES</a></li>
					<li class="main">
						<a href="">LOOK BOOK</a>
						<ul class="sub-navi">
							<li><span>OUR LOOKBOOKS</span>
								<ul class="sub-navi2">
									<li><a href="{{url('/productview')}}">Latest Posts (mixed)</a></li>
									<li><a href="{{url('/productview')}}">Men's Lookbook</a></li>
									<li><a href="{{url('/productview')}}">Women's Lookbook</a></li>
									
								</ul>
							</li>
							<li><span>YOUR LOOKBOOKS</span>
							<ul class="sub-navi2">
									<li><a href="{{url('/productview')}}">View and Edit</a></li>
									<li><a href="{{url('/productview')}}">Share</a></li>
									<li><a href="{{url('/productview')}}">Delete</a></li>
									
								</ul>
							</li>
							<div class="sale">
								<p href="">AUTUMN SALE!</p>
								<p href="">UP TO 50% OFF</p>
							</div>
						</ul>
					</li>
				</ul>
				<input class="search" type="text" name="" placeholder="Search...">				
			</div>
			
			<button class="shop-men">SHOP MEN'S COLLECTION</button>
		</div>
	</div>
	<!-- content -->