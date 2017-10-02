
@extends('layouts.master-login')
@section ('content')
<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<form class="form-signin">
			<h2 class="form-signin-heading">Please Sign In</h2>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			<div class="form-group">
				<label><input  type="checkbox" value="remember-me"> Remember me</label>
				<button type="submit" class="btn btn-primary pull-right">
					<i class="fa fa-btn fa-sign-in"></i> Login
				</button>
			</div>
			<div class="form-group">
				<a class="btn btn-link" href="/users/create"/>Create an account</a>
				<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
			</div>
			<div class="btn-group btn-block">
				<a class="btn btn-link" href="/account/provider/facebook" title="Facebook" class="btn btn-block btn-social btn-lg btn-facebook">
					<i class="fa fa-facebook"></i>
				</a>
				<a class="btn btn-link" href="/account/provider/google" title="Google" class="btn btn-block btn-social btn-lg btn-google-plus">
					<i class="fa fa-google-plus"></i>
				</a>
			</div>
		</form>
	</div>
</body>
</html>

@endsection