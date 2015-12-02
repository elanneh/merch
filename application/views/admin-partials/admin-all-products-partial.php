<div id="heading">
  <h2 class>Products</h2>
  <a class="btn btn-default" href="/Admins/go_add_product" role="button">Add Product</a>
</div>
<div class="row">
  <div class="col-sm-6 col-md-4">
  <?php foreach($products as $product) { 
  	$all_img = $product["img"];
  	?>
    <div class="thumbnail">
      <img src="<?php echo base_url($all_img) ?>" alt="thumbnail">
      <div class="caption">
        <h3><?= $product['name'] ?></h3>
        <p>$<?= $product['price'] ?></p>
        <p><a href="/Admins/view_one_product/<?= $product['id']; ?>" class="btn btn-primary" role="button">View Product</a> </p>
      </div>
    </div>
    <?php } ?>
</div>	