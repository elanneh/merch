<head>
		<link rel="stylesheet" href="<?php echo base_url("./assets/bootstrap/css/bootstrap.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("./assets/bootstrap/css/bootstrap.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("./assets/bootstrap/css/style.css"); ?>" />
</head>


<div id="checkout_form">
	<h3>Billing Address</h3>
	<form action="/Main/add_order" method="post">
		<p><input type="text" name="billing_first" placeholder="First Name"> <input type="text" name="billing_last" placeholder="Last Name"></p>
		<p><input type="text" name="email" placeholder="Email Address"></p>
		<p><input type="text" name="billing_address" placeholder="Street Address"></p>
		<p><input type="text" name="billing_city" placeholder="City"> <input type="text" name="billing_state" placeholder="state"> <input type="text" name="billing_zip" placeholder="Zip Code"></p>
	

	<h3>Shipping Address</h3>
	
		<p><input type="text" name="shipping_first" placeholder="First Name"> <input type="text" name="shipping_last" placeholder="Last Name"></p>
		<p><input type="text" name="shipping_address" placeholder="Street Address"></p>
		<p><input type="text" name="shipping_city" placeholder="City"> <input type="text" name="shipping_state" placeholder="state"> <input type="text" name="shipping_zip" placeholder="Zip Code"></p>
	

	<h3>Credit Card</h3>
	
		<p><input type="text" name="cc_number" placeholder="Credit Card Number"></p>
		<p><input type="text" placeholder="Cardholder Name"></p>
		<p><input type="text" name="exp" placeholder="Exp MMYYYY"> <input type="text" name="cvc" placeholder="CVC"> </p>

	<input type="submit" value="Pay now">
	</form>
</div>	


<div id="summary">
	<table>
	<tr>
		<th>ID</th>
		<th>Product</th>
		<th>Qty</th>
		<th>Total</th>
	</tr>

	<?php foreach($this->cart->contents() as $product) { ?>
	<tr>
		<td><?= $product['id'] ?></td>
		<td><?= $product['name'] ?></td>
		<td><?= $product['qty'] ?></td>
		<td>$<?= $product['subtotal'] ?>.00</td>
	</tr>
	<?php } ?>
	<tfoot>
	<tr>
		<td></td>	
		<td></td>	
		<td><b>Total</b></td>
		<td><b>$<?= $this->cart->total(); ?>.00</b></td>
	</tr>	
	</tfoot>
	</table>	
</div>	


<div id="checkout">
	<a class="btn btn-default" href="/" role="button">Go Back</a>
</div>	