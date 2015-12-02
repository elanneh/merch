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
    <script type="text/javascript">

  		$(document).ready(function(){
  			$('#SearchForm').submit(function(){
  				$.post('/Main/search', $(this).serialize(), function(res){
  					$(#search_container).html(res);
  				},
  				'json');
  				return false;
  			});
  		});

    </script>
<body>

	<div id="header">
		<h1>MERCH</h1>
			<p id="cart"><a href="/Admins/index">Admin</a><a href="/Admins/logout">Log Out</a><a href="/Main/view_cart">Shopping Cart</a></p>
			<form class="form-inline" action="/Main/search" method="post" id="SearchForm">
			  <div class="form-group">		    
			    <input type="text" class="form-control" name="search_term" placeholder="Search">
			    
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
	<div id="search_container">
	<?php 
		if(isset($results)) {
			for($i=0; $i<count($results); $i++) {  ?>

	<h2>Search Results</h2>

	<p><a href="/Main/get_product/<?= $results[$i]['id']; ?>"><?= $results[$i]['sku'] . " " . $results[$i]['name']; ?></a> $<?= $results[$i]['price'] . " - " . $results[$i]['prod_status']; ?></p>

	<?php } } else { ?>

	<p><?= $this->session->flashdata('message'); ?></p>

	<?php } ?>
	</div>
</body>
</html>