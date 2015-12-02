<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MERCH - Admin</title>

	<link href="<?php echo base_url('./assets/bootstrap/css/bootstrap.min.css' ); ?>" rel="stylesheet">
	<link href="<?php echo base_url('./assets/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('./assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
	<script src="<?php echo base_url('./assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

</head>
</head>
<body>

	<div id="header">
		<h1>MERCH</h1>
			<p id="cart"><a href="/Admins/index">Sign In</a><a href="/Main/view_cart">Shopping Cart</a></p>
			<form class="form-inline">
			  <div class="form-group">		    
			    <input type="text" class="form-control" id="search" placeholder="Search">
			    <button type="submit" class="btn btn-default">Search</button>
			  </div>
			</form>
	</div>

	<div id="nav">	
		<ul class="nav nav-pills">
		  <li role="presentation"><a href="/">Home</a></li>
		  <li role="presentation"><a href="/Admins/dashboard">Admin Dashboard</a></li>
		  <li role="presentation"><a href="/Admins/all_orders">View Orders</a></li>
		  <li role="presentation"><a href="/Admins/all_products">View Products</a></li>
		</ul>
	</div>
	
	<a class="btn btn-default" href="/Admins/logout" role="button">Log Out</a>


</body>
</html>