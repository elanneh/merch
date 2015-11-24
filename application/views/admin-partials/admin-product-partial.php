<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    <?php $image = $product['img']; ?>
      <img src="<?php echo base_url($image); ?>" alt="image">
    </div>
 </div>  
</div>	

<div id="product_info">
	<h3><?= $product['name']; ?></h3>
	<p><?= $product['description']; ?></p>
	<p><?= $product['prod_status']; ?></p>	
	<p>$<?= $product['price']; ?></p>	
</div>	
<div id="edit_product">
	<h3>Edit Product</h3>
	<form action="/Admins/edit_product/<?= $product['id']; ?>" method="post">
	    <label for="productName">Product Name</label>
	    <input type="text" class="form-control" id="productName" name="name">    	
	    <label for="productDesc">Description</label>
	    <input type="text" class="form-control" id="productDesc" name="description">   
	    <label for="productPrice">Price</label>
	    <input type="text" class="form-control" id="productPrice" name="price">   
		<label for="productCategory">Category</label>
			<select name="category">
				<option value="books">Books & Stationary</option>
				<option value="decor">Decor</option>
			</select>
		<label for="productStatus">Item Status</label>
			<select name="prod_status">
				<option value="In Stock">In Stock</option>
				<option value="Out of Stock">Out of Stock</option>
				<option value="Discontinued">Discontinued</option>
			</select>		
		<label for="productImg">Image (link)</label>
	    <input type="text" class="form-control" id="productImg" name="img">	
	    <input type="hidden" value="<?= $product['id']; ?>" name="id">
	  	<p><button type="submit" class="btn btn-default">Edit Product</button></p>
	</form>
<?= $this->session->flashdata('message'); ?>	
</div><a class="btn btn-default" href="/Admins/all_products" role="button">View all Products</a>



		
