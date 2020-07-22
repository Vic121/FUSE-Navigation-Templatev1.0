<div class="row top">
	<div class="col-sm-3"><!-- RECENT POST-->
		<div class="list-wrapper mobile">
			<ul class="list">
			  <div class="recent-title">Recent Post</div>
				  <?php include 'widgets/blog-list.php';?>
			</ul>
		</div>
	</div>
	<div class="col-sm-6"><!-- middle POST-->
		<div class="list-wrapper height-widget">
			<div class="list">
			  <div class="recent-title">Recent Movies</div>
				<div class="card-container-middle-slide">

				  <?php include 'widgets/middle-slide-item.php';?>
				 <button class="button"><span>Watch More</span></button>	
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-3"><!-- Products POST-->
		<div class="list-wrapper">
			<div class="list">
			  <div class="recent-title">Recent Products</div>
				<div class="card-container-middle-slide">

				<?php include 'widgets/product-items.php';?>
				</div>
			</div>
		</div>
	</div>

</div>