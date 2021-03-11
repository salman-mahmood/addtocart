<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignIp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files
href="{{url('/frontend_asset')}}/css/bootstrap.min.css"
 -->
<link href="{{url('/home_assets')}}/css/signup.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Creative SignIn Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				@if(isset(Auth::user()->email))
					    <script>window.location="/home";</script>
					   @endif

					   @if ($message = Session::get('error'))
					   <div class="alert alert-danger alert-block">
					    <button type="button" class="close" data-dismiss="alert">×</button>
					    <strong>{{ $message }}</strong>
					   </div>
					   @endif

					   @if (count($errors) > 0)
					    <div class="alert alert-danger">
					     <ul>
					     @foreach($errors->all() as $error)
					      <li>{{ $error }}</li>
					     @endforeach
					     </ul>
					    </div>
					   @endif
				<form class="form-horizontal form-material"  method="POST" id="loginform" action="{{url('/user_authenticate')}}">

					{!! csrf_field() !!}
					
					<input class="text email" type="email" name="email" placeholder="Email" value="{{old('email')}}" required="">
					<input class="text" type="password" name="password" placeholder="Password" value="{{old('password')}}" required="">

					@if(Session::has('login_feedback'))
                        <div class="alert alert-danger">
                        	<button class="close" data-dismiss="alert"></button>
                        	<strong>Error! </strong>{{Session::get('login_feedback')}}.</div>
                    @endif

					<input type="submit" value="SIGNIN">
				</form>
				<p>Don't have an Account? <a href="{{('/signup')}}"> Signup Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signin Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->

</body>
</html>