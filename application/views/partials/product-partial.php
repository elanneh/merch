<head>
		<link rel="stylesheet" href="<?php echo base_url("./assets/bootstrap/css/bootstrap.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("./assets/bootstrap/css/bootstrap.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("./assets/bootstrap/css/style.css"); ?>" />
</head>
	
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="<?php echo base_url($product['img']); ?>" alt="product_img">
    </div>
 </div>  
</div>	

<div id="product_info">
	<h3><?= $product['name']; ?></h3>
	<p><?= $product['description']; ?></p>
	<p>$<?= $product['price']; ?></p>

		<form action="/Main/add_cart" method="post">
		  	    
		    <input type="text" class="form-control" name="qty" placeholder="Qty">
		    <input type="hidden" value="<?= $product['price']; ?>" name="price">
		    <input type="hidden" value="<?= $product['name']; ?>" name="name">
		    <input type="hidden" value="<?= $product['sku']; ?>" name="sku">
		    <input type="hidden" value="<?= $product['id']; ?>" name="id">
		    <input type="submit" value="Add to Cart">

		</form>
		

		<?= $this->session->flashdata('message'); ?>
		
</div>	
<div id="keepshopping">
<a class="btn btn-default" href="/" role="button">Keep Shopping</a>
</div>