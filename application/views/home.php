<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MERCH - Home</title>
	<link href="<?php echo base_url('./assets/bootstrap/css/bootstrap.min.css' ); ?>" rel="stylesheet">
	<link href="<?php echo base_url('./assets/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('./assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
	<script src="<?php echo base_url('./assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</head>

<body>

	<div id="header">
		<h1>MERCH</h1>
			<p id="cart"><a href="/Admins/index">Admin</a><a href="/Admins/logout">Log Out</a><a href="/Main/view_cart">Shopping Cart</a></p>
			<form class="form-inline">
			  <div class="form-group">		    
			    <input type="text" class="form-control" id="search" placeholder="Search">
			    <button type="submit" class="btn btn-default">Search</button>
			  </div>
			</form>
	</div>

	<div id="nav">	
		<ul class="nav nav-pills">
		  <li role="presentation"><a href="/Main/index">Home</a></li>
		  <li role="presentation"><a href="/Main/new_products">New Arrivals</a></li>
		  <li role="presentation"><a href="/Main/get_books">Books & Stationary</a></li>
		  <li role="presentation"><a href="/Main/get_decor">Decor</a></li>
		  <li role="presentation"><a href="/Main/get_all_products">All</a></li>
		</ul>
	</div>

</body>
</html>