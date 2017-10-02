@extends('layouts.master-create-listing')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Item</title>
</head>
<body>
	<form class="form-signin" method="POST" action="/items">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<h4 class="form-signin-heading">Please Provide Some Information About the Item</h4>
		<textarea id="inputDesc" name="desc" class="form-control" placeholder="Description..." required setfocus></textarea>
		<input type="number" id="inputPrice" name="price" step="0.01" min="0" max="1000000" class="form-control" placeholder="Item Price" required>
		<select name="category" class="form-control">
			<option value="" disabled="disabled" selected="selected">Select a Category</option>
			<option value="1">Books</option>
			<option value="2">Tickets</option>
			<option value="3">Notes</option>
			<option value="4">Clothes</option>
			<option value="5">Furniture</option>
			<option value="6">Electronics</option>
			<option value="7">Other</option>
		</select>
		<span class="btn btn-default btn-file"><span class="fileinput-new">Select an Image</span>
		<input id="image" name="image" type="file" class="file">
		<button type="submit" class="btn btn-primary pull-right">
			<i class="fa fa-btn fa-sign-in"></i> Post Item
		</button>
	</form>
</body>
</html>
@endsection