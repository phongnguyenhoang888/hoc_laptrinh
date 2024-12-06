
  @extends("layout_band.main_band")
  @section("content_band")
	<!-- content-login -->
	<div class="content-login">
		<div class="welcome">
			<div class="text">
				<span style="font-weight: bold;">LOCAL  </span><span>STORES</span>
				<p>FIND A STORE NEAR YOU</p>
			</div>
		</div>
	</div>
	<!-- local -->
	<div class="local">
		<ul class="place">
			<li>
				<h3>LONDON</h3>
				<h5>180-182 REGENT STREET, LONDON, W1B 5BT</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing esi elit. Vivamus at arcu sem. Vestibulum ornare eleifendit massa, nec tempor odio. Fusce posuere nunc iaculis ligula viverra iaculis. Aliquam erat volutpat.</p>
				<button class="london">VIEW DETAIL</button>
			</li>
			<li>
				<h3>NEW YORK</h3>
				<h5>109 COLUMBUS CIRCLE, NEW YORK, NY 10023</h5>
				<p>Nunc non posuere nisl. Etiam finibus vel dui nec lobor-tis. Aliquam egestas, sem quis condimentum venena-tis, erat leo fermentum dolor, non sollicitundin massa mi eu nibh. Nullam vitae aliquam dui, non sodales nisl.</p>
				<button class="newyork">VIEW DETAIL</button></li>
			<li>
				<h3>PARIS</h3>
				<h5>2133 RUE SAINT-HONORÉ, 75001 PARIS</h5>
				<p>Ut interdum fermentum blandit. Donec nec lacus egetit mi rhoncus eleifend. Curabitur laoreet nisl eget rutruml auctor. Vestibulum ante ipsum primis in faucibus orcip luctus et ultrices posuere cubilia curae cras ligula.</p>
				<button class="paris">VIEW DETAIL</button></li>
			</li>
		</ul>
	</div>
	<!-- detail -->
	<div class="detail">
		<div class="map london">
			<img src="img/map.png">
			<div class="map-detail">
				<h3>LONDON</h3>
				<h5>180-182 REGENT STREET, LONDON, W1B 5BT</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing esi elit. Vivamus at arcu sem. Vestibulum ornare eleifendit massa, nec tempor odio. Fusce posuere nunc iaculis ligula viverra iaculis. Aliquam erat volutpat.</p>
				<a class="address">180-182 REGENT STREET, LONDON, W1B 5BT</a>
				<a class="phone">0126-456-789</a>
				<a class="web">www.yourwebsite.com</a>
				<a class="mail">support@yourwebsite.com</a>
				<a class="calender">Monday-Friday. 9am to 6pm Saturday.10am to 6pm Sunday.10am to 2pm</a>
				<img class="social" src="img/socials.png">
			</div>
		</div>
		<!-- <div class="map newyork">
			<img class="newyork" src="img/map.png">
			<div class="map-detail">
				<h3>NEW YORK</h3>
				<h5>109 COLUMBUS CIRCLE, NEW YORK, NY 10023</h5>
				<p>Nunc non posuere nisl. Etiam finibus vel dui nec lobor-tis. Aliquam egestas, sem quis condimentum venena-tis, erat leo fermentum dolor, non sollicitundin massa mi eu nibh. Nullam vitae aliquam dui, non sodales nisl.</p>
				<a class="address">109 COLUMBUS CIRCLE, NEW YORK, NY 10023</a>
				<a class="phone">0126-456-789</a>
				<a class="web">www.yourwebsite.com</a>
				<a class="mail">support@yourwebsite.com</a>
				<a class="calender">Monday-Friday. 9am to 6pm Saturday.10am to 6pm Sunday.10am to 2pm</a>
				<img class="social" src="img/socials.png">
			</div>
		</div>
		<div class="map paris">
			<img src="img/map.png">
			<div class="map-detail">
				<h3>PARIS</h3>
				<h5>2133 RUE SAINT-HONORÉ, 75001 PARIS</h5>
				<p>Ut interdum fermentum blandit. Donec nec lacus egetit mi rhoncus eleifend. Curabitur laoreet nisl eget rutruml auctor. Vestibulum ante ipsum primis in faucibus orcip luctus et ultrices posuere cubilia curae cras ligula.</p>
				<a class="address">2133 RUE SAINT-HONORÉ, 75001 PARIS</a>
				<a class="phone">0126-456-789</a>
				<a class="web">www.yourwebsite.com</a>
				<a class="mail">support@yourwebsite.com</a>
				<a class="calender">Monday-Friday. 9am to 6pm Saturday.10am to 6pm Sunday.10am to 2pm</a>
				<img class="social" src="img/socials.png">
			</div>
		</div> -->
	</div>
@endsection