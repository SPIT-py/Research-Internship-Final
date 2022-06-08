<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login Page </title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="{{ URL::asset('css/in.css') }}" rel="stylesheet" type="text/css">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>Welcome to sentiment Analysis.</h1>
				<p>Find your emotion.</p>
				<span>
					<p style="font-weight:bolder">
                        Start the Journey of Emotions!!
                    </p>

				</span>
			</div>
		</div>


		<div class="right">
			<h5>Login</h5>

			<div class="inputs">
				<input type="text" placeholder="user name">
				<br>
				<input type="password" placeholder="password">
			</div>

			<br><br>
			<p>Don't have an account? <a href="#" onclick="location.href='{{ url('reg') }}'">Creat Your Account</a> it takes less than a minute</p>
			<div class="remember-me--forget-password">
				<!-- Angular -->

				<label>
					<input type="checkbox" name="item" checked="">
					<span class="text-checkbox">Remember me</span>
				</label>

			</div>

			<br>
			<button class="btn" type="submit" onclick="location.href='{{ url('land') }}'" >Login</button>
		</div>

	</div>
	<!-- partial -->



</body>

</html>
