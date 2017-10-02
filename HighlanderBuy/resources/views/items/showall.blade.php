@extends('layouts.master-listings')
<!DOCTYPE html>
<html lang="en">
<head>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<title>For Sale</title>
</head>
<body>
	@section('form')
	<div class="form-group">
		<form class="form-inline pull-right">
			<select class="form-control">
				<option value="" disabled="disabled" selected="selected">Select a Category</option>
				<option value="1">Books</option>
				<option value="2">Tickets</option>
				<option value="3">Notes</option>
				<option value="4">Clothes</option>
				<option value="5">Furniture</option>
				<option value="6">Electronics</option>
				<option value="7">Other</option>
			</select>
			<input class="form-control" type="text" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success mr-lg-5" type="submit">Search</button>
			<a class="btn btn-outline-success" href="/items/create">+ Sell Item</a>
		</form>
	</div>
	@endsection
	@section('content')
	<div class="body">
		<div class="column third">
			<div class="item pull-left">
				<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22356%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15ecef9b8d7%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15ecef9b8d7%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22131.2890625%22%20y%3D%22148.1%22%3E356x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="img-responsive" alt="Item Picture">
				<div class="item-info">
					<p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p>Category: Books</p>
					<p>Price: $40.00</p>
					<div class="form-group">
						<form>
							<button class="btn btn-outline-success my-2 my-sm-0 pull-left" type="submit">Contact Seller</button>
							<button class="btn btn-outline-success my-2 my-sm-0 pull-right" type="submit">Favorite</button>
						</form>
					</div>
				</div>
			</div>
			<div class="item pull-left">
				<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22356%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15ecef9b8d7%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15ecef9b8d7%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22131.2890625%22%20y%3D%22148.1%22%3E356x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="img-responsive" alt="Item Picture">
				<div class="item-info">
					<p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p>Category: Books</p>
					<p>Price: $40.00</p>
					<div class="form-group">
						<form>
							<button class="btn btn-outline-success my-2 my-sm-0 pull-left" type="submit">Contact Seller</button>
							<button class="btn btn-outline-success my-2 my-sm-0 pull-right" type="submit">Favorite</button>
						</form>
					</div>
				</div>
			</div>
			<div class="item pull-left">
				<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22356%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15ecef9b8d7%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15ecef9b8d7%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22131.2890625%22%20y%3D%22148.1%22%3E356x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="img-responsive" alt="Item Picture">
				<div class="item-info">
					<p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p>Category: Books</p>
					<p>Price: $40.00</p>
					<div class="form-group">
						<form>
							<button class="btn btn-outline-success my-2 my-sm-0 pull-left" type="submit">Contact Seller</button>
							<button class="btn btn-outline-success my-2 my-sm-0 pull-right" type="submit">Favorite</button>
						</form>
					</div>
				</div>
			</div>
			<div class="item pull-left">
				<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22356%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15ecef9b8d7%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15ecef9b8d7%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22131.2890625%22%20y%3D%22148.1%22%3E356x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="img-responsive" alt="Item Picture">
				<div class="item-info">
					<p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p>Category: Books</p>
					<p>Price: $40.00</p>
					<div class="form-group">
						<form>
							<button class="btn btn-outline-success my-2 my-sm-0 pull-left" type="submit">Contact Seller</button>
							<button class="btn btn-outline-success my-2 my-sm-0 pull-right" type="submit">Favorite</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
@endsection