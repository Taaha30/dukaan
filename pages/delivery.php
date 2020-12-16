<?php
	require './config.php';
	include './api/functions.php';
	include './blocks/editblock.php';
	$delivery = deliveryCall($connection);

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
		<h1> Delivery Agents</h1>
		<input type="text" class="searchnext" placeholder="search..." />
		<div class="act-buts" onclick="scrollToDiv('addevws')">Add new</div>
	</div>

	<div class="dash-box" id="delivery-table">
		<?php
			include './blocks/delivery/deliverytable.php';
			reloadDelivery($delivery);
		?>
	</div>
	<div class="dash-title">
		<h1>Add new Agent</h1>
	</div>
	<div class="dash-box" id="addevws">
		<?php include './blocks/delivery/addnew.php';?>
	</div>
</div>
<div id="edithide">
	<?php
		include './blocks/delivery/deliveryedit.php';
	?>
</div>
<script type="module" src="./scripts/middleware.js"></script>
