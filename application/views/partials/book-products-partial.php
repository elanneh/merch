<div class="row">
  <div class="col-sm-6 col-md-4">
  <?php foreach($books as $book) { 
  	$all_img = $book["img"];
  	?>
    <div class="thumbnail">
      <img src="<?php echo base_url($all_img) ?>" alt="thumbnail">
      <div class="caption">
        <h3><?= $book['name'] ?></h3>
        <p>$<?= $book['price'] ?></p>
        <p><a href="/Main/get_product/<?= $book['id']; ?>" class="btn btn-primary" role="button">Buy Now</a> </p>
      </div>
    </div>
    <?php } ?>
</div>