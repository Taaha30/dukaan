<?php
	require './config.php';
	include './api/functions.php';
	include './blocks/editblock.php';
	$shop = shopsCall($connection);
	$cat = categoryCall($connection);
?>
<script type="text/javascript" src="./assets/script/addnew.js"></script>

<div class="page-in" id="runs">
	<script type="text/javascript">
		$(document).on("keyup", ".searchnext", function() {
		    var value = $(this).val().toLowerCase();
		    $(this).parent().next().find(".runnames .searchasset").filter(function() {
		    	console.log($(this));
		      $(this).parent().parent().toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
	</script>
	<div class="dash-title">
		<h1> Shops</h1>
		<input type="text" class="searchnext" placeholder="search..." />
		<div class="act-buts" onclick="scrollToDiv('addevws')">Add new</div>
	</div>

	<div class="dash-box" id="shop-table">
		<?php
			include './blocks/shops/shopstable.php';
			reloadShop($shop,$cat);
		?>
	</div>
	<div class="dash-title">
		<h1>Add new Shop</h1>
	</div>
	<div class="dash-box" id="addevws">
		<?php include './blocks/shops/addnew.php';?>
	</div>
</div>
<div id="edithide">
	<?php
		include './blocks/shops/shopsedit.php';
	?>
</div>
<script type="module" src="./scripts/middleware.js"></script>
