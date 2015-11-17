	<div class="row">
	  <div class="col-sm-6 col-md-4">
	  <?php foreach($decor as $decor) { 
	  	$all_img = $decor["img"];
	  	?>
	    <div class="thumbnail">
	      <img src="<?php echo base_url($all_img) ?>" alt="thumbnail">
	      <div class="caption">
	        <h3><?= $decor['name'] ?></h3>
	        <p>$<?= $decor['price'] ?></p>
	        <p><a href="/Main/get_product/<?= $decor['id']; ?>" class="btn btn-primary" role="button">Buy Now</a> </p>
	      </div>
	    </div>
	    <?php } ?>
	</div>