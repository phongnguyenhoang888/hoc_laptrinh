
@extends("layout_band.main_band")
@section("content_band")
	<!-- content-login -->
	<div class="content-login">
		<div class="welcome">
			<div class="text">
				<span style="font-weight: bold;">WELCOME  </span><span>TO AVE</span>
				<p>SIGN IN OR REGISTER</p>
			</div>
		</div>
	</div>
	<div class="login">
		<div class="container container-footer">
			<div class="sign-in">
				<span>SIGN IN</span>
				<form id="in" action="home.html">
					<input type="text" id="in_mail" name="" placeholder="Your Email..."><p class="enter_mail"></p>
					<input type="password" id="in_pass" name="" placeholder="Your Password...">
					<p class="enter_pass"></p>
					<button type="submit">SIGN IN</button>
				</form>
			</div>
			<div class="register">
				<span>REGISTER</span>
				<p id="success"></p>
				<form id="up">
					<input id="up_mail" type="text" name="" placeholder="Your Email...">
					<p class="mail_error"></p>
					<input id="up_pass" type="password" name="" placeholder="Your Password...">
					<p class="pass_error"></p>
					<input id="up_pass_confirm" type="password" name="" placeholder="Confirm Password...">
					<p class="confirm_error"></p>
					<input class="check" type="checkbox" name="">Sign up for exclusive updates, discounts, new arrivals, contents and more!
					<p id="agree"></p>
					<button class="register" type="submit">CREATE ACCOUNT</button>
					<div class="policy">
						<span class="policy">By clicking 'Create Account', you agree to our </span><a href="">Privecy policy</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection