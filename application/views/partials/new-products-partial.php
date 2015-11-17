<div class="row">
  <div class="col-sm-6 col-md-4">
  <?php foreach($new as $new) { 
  	$all_img = $new["img"];
  	?>
    <div class="thumbnail">
      <img src="<?php echo base_url($all_img) ?>" alt="thumbnail">
      <div class="caption">
        <h3><?= $new['name'] ?></h3>
        <p>$<?= $new['price'] ?></p>
        <p><a href="/Main/get_product/<?= $new['id']; ?>" class="btn btn-primary" role="button">Buy Now</a> </p>
      </div>
    </div>
    <?php } ?>
</div>