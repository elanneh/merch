<div id="add_product">
	<h3>Add Product</h3>
	<form action="/Admins/add_product" method="post">
		<label for="productSKU">Product SKU</label>
	    <input type="text" class="form-control" id="productSKU" name="sku">   
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
			<label for="productImg">Image (link)</label>
	    <input type="text" class="form-control" id="productImg" name="img">   
	  	<p><input type="submit" value="Add Product"></p>
	</form>

<?= $this->session->flashdata('message'); ?>

		
