@extends('layouts.master-profile')
@section ('content')
<head>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="body">
		<div class="column first">
			<form class="form-signin pull-right">
				<h4 class="form-signin-heading">Update Account Information</h4>
				<label for="inputFName" class="sr-only">First Name</label>
				<input type="text" id="inputFName" class="form-control" placeholder="First Name" required setfocus>

				<label for="inputLName" class="sr-only">Last Name</label>
				<input type="text" id="inputLName" class="form-control" placeholder="Last Name" required>

				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="Email Address" required>

				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

				<label for="reInputPassword" class="sr-only">Re-type Password</label>
				<input type="password" id="reInputPassword" class="form-control" placeholder="Re-type Password" required>

				<button type="submit" class="btn btn-primary pull-left">
					<i class="fa fa-btn fa-sign-in"></i> Update Information
				</button>
			</form>
		</div>
		<div class="column first">
			<h2 class="form-signin-heading">Current Listings</h2>
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
				<div>
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
				<div>
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
				<div>
					<p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
				<div>
					<p>This is a wider card w</p>
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
				<div>
					<ul>
						<p class="card-text">Category: Books</p>
						<p class="card-text">Price: $40.00</p>
					</ul>
					<div class="form-group">
						<form>
							<button class="btn btn-outline-success my-2 my-sm-0 pull-left" type="submit">Contact Seller</button>
							<button class="btn btn-outline-success my-2 my-sm-0 pull-right" type="submit">Favorite</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="column first">
			<h2 class="form-signin-heading">Sold Listings</h2>
			<div class="item pull-left">
				<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22356%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15ecef9b8d7%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15ecef9b8d7%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22131.2890625%22%20y%3D%22148.1%22%3E356x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="img-responsive" alt="Item Picture">
				<div>
					<ul>
						<p class="card-text">Category: Books</p>
						<p class="card-text">Price: $40.00</p>
					</ul>
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
				<div>
					<ul>
						<p class="card-text">Category: Books</p>
						<p class="card-text">Price: $40.00</p>
					</ul>
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
				<div>
					<ul>
						<p class="card-text">Category: Books</p>
						<p class="card-text">Price: $40.00</p>
					</ul>
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
@endsection