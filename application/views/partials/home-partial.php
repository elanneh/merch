<div class="jumbotron">
	<div class="container">
		  <h1>Hello, world!</h1>
		  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
		</div>
	</div>

	<div class="row">
	  <div class="col-sm-6 col-md-4">
	  <?php for($i=0; $i<count($products); $i++) {
	  	$image = $products[$i]["img"];
	   ?>
	    <div class="thumbnail">

	      <img src="<?php echo base_url($image); ?>" alt="thumbnail">
	      <div class="caption">
	        <h3><?= $products[$i]['name'] ?></h3>
	        <p>$<?= $products[$i]['price'] ?></p>
	        <p><a href="/Main/get_product/<?= $products[$i]['id']; ?>" class="btn btn-primary" role="button">Buy Now</a> </p>
	      </div>
	    </div>
	    <?php } ?>
	</div>
</div>	