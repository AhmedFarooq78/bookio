<div class="container mainContainer">

	<div class="row">
	
	  <div class="col-lg-8 order-lg-1 order-sm-2 order-xs-2">
	  	
	  	<h2>Books For You</h2>

	  	<!-- <?php //displayBooks('isFollowing'); ?> -->
	  	<?php displayBooks('public'); ?>

	  </div>
	
	  <div class="col-lg-4 order-lg-2 order-sm-1 order-xs-1">
	  	
	  	<?php displaySearch(); ?>

	  	<hr>

	  	<?php displayPostBook(); ?>

	  </div>
	
	</div>

</div>

