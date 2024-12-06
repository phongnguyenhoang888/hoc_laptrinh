@extends("layout_band.main_band")
@section("content_band")

	<!-- product -->
	<div class="product">
		<div class="container container-footer">
			<div class="slide">
				<ul class="bxslider">
				  <li>
				  	<img class="slide-main" src="img/slide1.png">
				  </li>
				</ul>
				<div class="choose">
					<div class="description">
				  		<h2>AVE CLASSIC SWEATSHIRT</h2>
				  		<div class="rating">
				  			<div class="star one">
				  				<input type="hidden" value="1">
				  			</div>
				  			<div class="star two">
				  				<input type="hidden" value="2">
				  			</div>
				  			<div class="star three">
				  				<input type="hidden" value="3">
				  			</div>
				  			<div class="star four">
				  				<input type="hidden" value="4">
				  			</div>
				  			<div class="star five">
				  				<input type="hidden" value="5">
				  			</div>
				  		</div>
				  		<span class="value"></span>
				  		<span>3 Review(s) |<a class="review" href="">Add a review</a> | Share : <img class="share" src="img/share.png"></span>
				  		<p class="sale"><span style="text-decoration: line-through;">£107</span><span>   £89.99</span></p>
				  		<p><span>AVAILABILITY :</span><span>In stock</span></p>
				  		<p><span>PRODUCT CODE :</span><span>#499577</span></p>
				  		<p><span>TAGS :</span> <a class="tags" href="">Classic, Casual, V-neck, Loose</a></p>
				  		<dl>
					  		<dt>Donec sem lorem laoreet tempor un risus vitae, rutrum sodales nibh suspendisse est congue metus nunc, id viverra elit loreti rhoncus quis consecteur es. Donec pulvinar tempor lorem a pretium justo interdum.</dt>
					  			<dd>Elasticated cuffs</dd>
					  			<dd>Casual fit</dd>
					  			<dd>100% Cotton</dd>
					  			<dd style="margin-bottom: 40px;">Free shipping with 4 days delivery</dd>
					  	</dl>
				  	</div>
				  	<label>COLOUR</label>
				  	<label>SIZE</label>
				  	<label style="margin-left: 40px;">QTY</label>
				  	<br>
			  	 	<select class="color">
				  		<option value="">Select color</option>
				  		<option value="red">Red</option>
				  		<option value="black">Black</option>
				  		<option value="blue">Blue</option>
			  		</select>
			  		<select class="size">
				  		<option value="">Select Size</option>
				  		<option value="m">M</option>
				  		<option value="s">S</option>
				  		<option value="l">L</option>
			  		</select>
			  		<select class="amount">
				  		<option class="amount" value="1">1</option>
				  		<option class="amount" value="2">2</option>
				  		<option class="amount" value="3">3</option>
				  		<option class="amount" value="4">4</option>
			  		</select>
			  		<button class="buy" id="add">ADD TO CART</button>
			  		<button class="buy" id="remove">REMOVE TO CART</button>
			  		<p class="compare"><img class="compare" src="img/arrow.png"> <span class="compare">ADD TO COMPARE</span></p>
			  	</div>
			</div>
			<!--  -->
			<div class="detail">
				<ul class="detail">
					<li class="main-detail1 css"><a>DESCRIPTION</a></li>
					<li class="main-detail2"><a>VIDEOS</a> </li>
					<li class="main-detail"><a>SIZE & SPECS</a> </li>
					<li class="main-detail"><a>DELIVERY & RETURNS</a></li>
					<li class="main-detail"><a>REVIEWS</a></li>
				</ul>
			</div>
			<div class="content-detail">
				<div class="sub-detail">
					<h3>NUNC EGESTAS POSUERE ENIM, EU MAXIMUS ERAT POSUERE EGET</h3>
					<p>Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis. Curabitur dictum sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.
						<br>
						<br>
					Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi. Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget neque.</p>
				</div>
				<div class="video-detail">
					<iframe src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>"></iframe>
				</div>
			</div>
			<!--  -->
		</div>
	</div>
@endsection