<head>
	<meta charset="utf-8">
	<title>MERCH - View Cart</title>
		<link rel="stylesheet" href="<?php echo base_url("./assets/bootstrap/css/bootstrap.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("./assets/bootstrap/css/bootstrap.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("./assets/bootstrap/css/style.css"); ?>" />
</head>

<div id="cust_order">
<table class="table table-striped">
	<tr>
		<th>Product ID</th>
		<th>Product</th>
		<th>Price</th>
		<th>Qty</th>
		<th>Total</th>
		<th>Action</th>
	</tr>
	<?php foreach($this->cart->contents() as $product) { ?>
	<tr>
		<td><?= $product['id'] ?></td>

		<td><?= $product['name'] ?></td>
		<td><?= $product['qty'] ?>
			<form action="/Main/update_product" method="post">
				<input type="text" name="qty"></input><br>
				<input type="hidden" name="rowid" value="<?= $product['rowid']; ?>">
				<input type="submit" value="Edit Qty">			
			</form>
		</td>
		<td>$<?= $product['price'] ?></td>
		<td>$<?= $product['subtotal'] ?>.00</td>
		<td>
			<form action="/Main/remove_product" method="post">
				<input type="hidden" name="rowid" value="<?= $product['rowid']; ?>">
				<input type="submit" value="Remove from Cart">	
			</form>
		</td>
	</tr>	
<?php } ?>
	<tfoot>
	<tr>
		<td></td>	
		<td><b>Grand Total</b></td>
		<td><?= $this->cart->total_items(); ?></td>		
		<td></td>
		<td><b>$<?= $this->cart->total(); ?>.00</b></td>
		<td></td>
	</tr>	
	</tfoot>	

</table>
</div>
<?= $this->session->flashdata('message'); ?>
<div id="checkout">
	<a class="btn btn-default" href="/" role="button">Go Back</a>
	<a class="btn btn-default" href="/Main/checkout" role="button">Checkout</a>	
</div>	