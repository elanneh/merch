<div id="cust_order">
<h2>Order #<?= $order[0]['order_id']; ?></h2>
<table class="table table-striped">
	<tr>
		<th>Product ID</th>
		<th>Product</th>
		<th>Price</th>
		<th>Qty</th>
		<th>Total</th>
	</tr>

<?php for($i=0; $i<count($order); $i++) { 
	$image = $order[$i]['img'];
	?>
	<tr>
		<td><?= $order[$i]['product_id']; ?></td>
		<td><img src="<?php echo base_url($image); ?>" alt class="thumb"><p><?= $order[$i]['name']; ?></p></td>
		<td>$<?= $order[$i]['price']; ?></td>
		<td><?= $order[$i]['qty']; ?></td>
		<td>$<?= $order[$i]['price'] * $order[$i]['qty']; ?>.00</td>
	</tr>	
<?php } ?>	
	
	<tfoot>
	<tr>
		<td></td>	
		<td></td>
		<td></td>		
		<td><b>Grand Total</b></td>
		<td><b></b></td>
		<td></td>
	</tr>	
	</tfoot>	
</table>

<h3>Status:</h3>
<p><?= $order[0]['status']; ?></p>
	<form action="/Admins/edit_status_one/<?= $order[0]['order_id']; ?>" method="post">
		<select name="status">
			<option selected="selected" disabled="disabled">Change Status</option>
			<option value="In Process">In Process</option>
			<option value="Shipped">Shipped</option>
			<option value="On Hold">On Hold</option>					
			<option value="Cancelled">Cancelled</option>
		</select>	
		<p><button type="submit" class="btn btn-default">Edit Status</button></p>
	</form>		

</div>
<h4>Bill To</h4>
<p><?= $order[0]['billing_first'] . " " . $order[0]['billing_last']; ?></p>
<p><?= $order[0]['billing_address']; ?></p>
<p><?= $order[0]['billing_city'] . ", " . $order[0]['billing_state'] . "  " . $order[0]['billing_zip']; ?></p>
<p><?= $order[0]['email']; ?></p>

<h4>Ship To</h4>
<p><?= $order[0]['shipping_first'] . " " . $order[0]['shipping_last']; ?></p>
<p><?= $order[0]['shipping_address']; ?></p>
<p><?= $order[0]['shipping_city'] . ", " . $order[0]['shipping_state'] . "  " . $order[0]['shipping_zip']; ?></p>


<h4>Credit Card</h4>
<p><?= $order[0]['cc_number']; ?></p>
<p><?= $order[0]['exp'] . "  " . $order[0]['cvc']; ?></p> 


