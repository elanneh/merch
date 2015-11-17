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
        <p><a href="/Main/get_product/<?= $product['id']; ?>" class="btn btn-primary" role="button">Buy Now</a> </p>
      </div>
    </div>
    <?php } ?>
</div>