<?php
	require './config.php';
	include './api/functions.php';
	include './blocks/editblock.php';
	$product = productsCall($connection);
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
		<h1> Products</h1>
		<input type="text" class="searchnext" placeholder="search..." />
		<div class="act-buts" onclick="scrollToDiv('addevws')">Add new</div>
	</div>

	<div class="dash-box" id="product-table">
		<?php
			include './blocks/products/productstable.php';
			reloadProducts($product,$cat);
		?>
	</div>
	<div class="dash-title">
		<h1>Add new Product</h1>
	</div>
	<div class="dash-box" id="addevws">
		<?php include './blocks/products/addnew.php';?>
	</div>
</div>
<div id="edithide">
	<?php
		include './blocks/products/productsedit.php';
	?>
</div>
<script type="module" src="./scripts/middleware.js"></script>
