<div id="cust_order">
<h2>Order #</h2>
<table class="table table-striped">
	<tr>
		<th>Product ID</th>
		<th>Product</th>
		<th>Price</th>
		<th>Qty</th>
		<th>Total</th>
		<th>Status</th>
	</tr>
	
	<tr>
		<td>1</td>
		<td><img src="<?php echo base_url("assets/img/coasterthumb.jpeg"); ?>" alt class="thumb"><p>Coaster</p></td>
		<td>$10.00</td>
		<td>1</td>
		<td>$10.00</td>
		<td>
			<form>
				<select name="rating">
					<option value="in_process">In Process</option>
					<option value="shipped">Shipped</option>
					<option value="cancelled">Cancelled</option>
				</select>	
			<br><button type="submit" class="btn btn-default">Change</button>
			</form>
		</td>
	</tr>	
	<tr>
		<td>2</td>
		<td><img src="<?php echo base_url("assets/img/coasterthumb.jpeg"); ?>" alt class="thumb"><p>Coaster</p></td>
		<td>$10.00</td>
		<td>1</td>
		<td>$10.00</td>
		<td>
			<form>
				<select name="rating">
					<option value="in_process">In Process</option>
					<option value="shipped">Shipped</option>
					<option value="cancelled">Cancelled</option>
				</select>	
			<br><button type="submit" class="btn btn-default">Change</button>
			</form>
		</td>
	</tr>
	<tfoot>
	<tr>
		<td></td>	
		<td></td>
		<td></td>		
		<td><b>Grand Total</b></td>
		<td><b>$20.00</b></td>
		<td></td>
	</tr>	
	</tfoot>	

</table>
</div>
<h4>Bill To</h4>
<p>Customer Name</p>
<p>Address</p>
<p>Email Address</p>

<h4>Ship To</h4>
<p>Customer Name</p>
<p>Address</p>


<h4>Credit Card</h4>
<p>Card Info</p>
<p>Address</p>

