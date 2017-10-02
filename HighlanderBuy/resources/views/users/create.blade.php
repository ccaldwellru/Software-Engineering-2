@extends('layouts.master-create-account')
@section ('content')
<!DOCTYPE html>
<html>
<head><link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"></head>
<body>
	<form class="form-signin" method="POST" action="/users">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<h2 class="form-signin-heading">Account Information</h2>
		<input  type="text" name="fName" id="fName" class="form-control" placeholder="First Name" required autofocus>
		<input  type="text" name="lName" id="lName" class="form-control" placeholder="Last Name" required>
		<input  type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
		<input  type="password" name="password" id="password" class="form-control" placeholder="Password" required>	
		<input  type="password" id="rePassword" class="form-control" placeholder="Re-type Password" required>
		<button type="submit" class="btn btn-primary pull-left">Create Account</button>
	</form>
</body>
</html>
@endsection