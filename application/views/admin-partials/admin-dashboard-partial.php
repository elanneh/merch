
<div id="cust_order">
<h2>Orders</h2>
<table class="table table-striped">
	<tr>
		<th>Order ID</th>
		<th>Customer</th>
		<th>Date Created</th>
		<th>Status</th>
	</tr>
	
	<?php for($i=0; $i<4; $i++) { ?>
	<tr>
		<td><a href="/Admins/view_one_order/<?= $orders[$i]['order_id']; ?>"><?= $orders[$i]['order_id']; ?></a></td>
		<td><?= $orders[$i]['billing_first'] . " " . $orders[$i]['billing_last'];  ?> </td>
		<td><?= $orders[$i]['created_at']; ?></td>
		<td><?= $orders[$i]['status']; ?></td>
	</tr>	
<?php } ?>
</table>
</div>
<p><a href="/Admins/all_orders">View all Orders</a></p>


<div id="all_prods">
<h2>Products</h2>
<a class="btn btn-default" href="/Admins/go_add_product" role="button">Add Product</a>
	<div class="row">
	  <div class="col-sm-6 col-md-4">
	  <?php for($i=0; $i<3; $i++) {
	  	$image = $products[$i]['img'];
	   ?>
	    <div class="thumbnail">

	      <img src="<?php echo base_url($image); ?>" alt="thumbnail">
	      <div class="caption">
	        <h3><?= $products[$i]['name'] ?></h3>
	        <p>$<?= $products[$i]['price'] ?></p>
	        <p><a href="/Admins/view_one_product/<?= $products[$i]['id']; ?>" class="btn btn-primary" role="button">View Product</a> </p>
	      </div>
	    </div>
	    <?php } ?>
	</div>
</div>	
</div>	

<p><a href="/Admins/all_products">View all Products</a></p>
