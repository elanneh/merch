<div id="cust_order">
	<h2>Orders</h2>
	<table class="table table-striped">
		<tr>
			<th>Order ID</th>
			<th>Customer</th>
			<th>Date Created</th>
			<th>Status</th>
		</tr>

		<?php for($i=0; $i<count($orders); $i++) { ?>
		<tr>
			<td><a href="/Admins/view_one_order/<?= $orders[$i]['order_id']; ?>"><?= $orders[$i]['order_id']; ?></a></td>
			<td><?= $orders[$i]['billing_first'] . " " . $orders[$i]['billing_last'];  ?> </td>
			<td><?= $orders[$i]['created_at']; ?></td>
			<td><?= $orders[$i]['status']; ?>
				<form action="/Admins/edit_status/<?= $orders[$i]['order_id']; ?>" method="post">
					<select name="status">
						<option selected="selected" disabled="disabled">Change Status</option>
						<option value="In Process">In Process</option>
						<option value="Shipped">Shipped</option>
						<option value="On Hold">On Hold</option>					
						<option value="Cancelled">Cancelled</option>
					</select>	
					<p><button type="submit" class="btn btn-default">Edit Status</button></p>
				</form>		
			</td>
		</tr>	
	<?php } ?>
	</table>
</div>