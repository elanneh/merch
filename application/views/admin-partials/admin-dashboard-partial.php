
<div id="cust_order">
<h2>Orders</h2>
<table class="table table-striped">
	<tr>
		<th>Order ID</th>
		<th>Customer</th>
		<th>Date Created</th>
		<th>Status</th>
	</tr>
	
	<tr>
		<td>1</td>
		<td>Some Lady</td>
		<td>11/8/2015</td>
		<td>In Process</td>
	</tr>	
	<tr>
		<td>1</td>
		<td>Some Lady</td>
		<td>11/8/2015</td>
		<td>In Process</td>
	</tr>
</table>
</div>
<p><a href="/Admins/all_orders">View all Orders</a></p>


<div id="all_prods">
<h2>Products</h2>
<a class="btn btn-default" href="/Admins/go_add_product" role="button">Add Product</a>
	<div class="row">
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="<?php echo base_url("assets/img/coasterthumb.jpeg"); ?>" alt="coaster">
	      <div class="caption">
	        <h3>Coaster</h3>
	        <p><a href="/Admins/product" class="btn btn-primary" role="button">View</a> </p>
	      </div>
	    </div>
	    <div class="thumbnail">
	      <img src="<?php echo base_url("assets/img/coasterthumb.jpeg"); ?>" alt="coaster">
	      <div class="caption">
	        <h3>Coaster</h3>
	    	<p><a href="#" class="btn btn-primary" role="button">View</a> </p>
	      </div>
	    </div>
	    <div class="thumbnail">
	      <img src="<?php echo base_url("assets/img/coasterthumb.jpeg"); ?>" alt="coaster">
	      <div class="caption">
	        <h3>Coaster</h3>
	  		<p><a href="#" class="btn btn-primary" role="button">View</a> </p>
	    </div>
	  </div>
	</div>  
</div>	

<p><a href="/Admin/all_products">View all Products</a></p>
