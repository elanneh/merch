<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="<?php echo base_url("assets/img/coasterthumb.jpeg"); ?>" alt="coaster">
    </div>
 </div>  
</div>	

<div id="product_info">
	<h3>Coaster</h3>
	<p>This is a great item.</p>
	<ul>
		<li>Made of ceramic.</li>
		<li>Easy to clean</li>
		<li>Pretty</li>

	</ul>
		
</div>	
<div id="edit_product">
	<h3>Edit Product</h3>
	<form>
	    <label for="productName">Product Name</label>
	    <input type="text" class="form-control" id="productName">    	
	    <label for="productDesc">Description</label>
	    <input type="text" class="form-control" id="productDesc">   
	    <label for="productPrice">Price</label>
	    <input type="text" class="form-control" id="productPrice">   
		<label for="productCategory">Category</label>
			<select name="category">
				<option value="books">Books & Stationary</option>
				<option value="decor">Decor</option>
			</select>

	  	<p><button type="submit" class="btn btn-default">Edit Product</button></p>
	</form>
</div><a class="btn btn-default" href="#" role="button">Remove Product</a>


		
