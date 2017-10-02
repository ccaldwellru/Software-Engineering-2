<!DOCTYPE html>
<html lang="en">
<body>
	<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
		<a href="/items/showall" class="navbar-brand">Highlander Buy</a>
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="/items/showall">Items</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/users/profile">Profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/items/create">Post Item</a>
			</li>
		</ul>
		<div>
			<ul class="navbar-nav mr-auto pull-left">
				<li class="nav-item">
					@if (Auth::guest())
					<a class="nav-link" href="/users/login">Login</a>
					@else
					<a class="nav-link" href="/users/login">Logout</a>
					@endif
				</li>
			</ul>
		</div>		
	</nav>
</div>
</body>
</html>