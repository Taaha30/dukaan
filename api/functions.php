<?php
//dashboard
//Website views
include './api/config.php';

function categoryCall(){
    $fetch = new Connection();

	$query = "SELECT uid,categoryname,	block,updatedon,	blockedon from category ORDER BY createdon DESC";

	$fetch->sqlQuery($query);
    $fetch_types = $fetch->fetch();

	$rows = array();
	foreach ($fetch_types as $key => $value) {
		$rows[$key] = $value;
	}
	return $rows;
}

function shopsCall(){
    $fetch = new Connection();

	$query = "SELECT uid, shopname,	ownername,	shopcat,	mobile,	email,	shopimage,	bankdetails,	shopaddress,	block,	blockedon,updatedon	 from shops ORDER BY createdon DESC";

	$fetch->sqlQuery($query);
    $fetch_types = $fetch->fetch();

	$rows = array();
	foreach ($fetch_types as $key => $value) {
		$rows[$key] = $value;
	}
	return $rows;
}


function productsCall(){
    $fetch = new Connection();

	$query = "SELECT uid,	productname,	productcat,	productimage,	productcost,	updatedcost,	block,	blockedon,	updatedon from products ORDER BY createdon DESC";

	$fetch->sqlQuery($query);
    $fetch_types = $fetch->fetch();

	$rows = array();
	foreach ($fetch_types as $key => $value) {
		$rows[$key] = $value;
	}
	return $rows;
}

// function selectCall(){
//     $fetch = new Connection();
//
// 	$query = "SELECT choose.uid,choose.eventname, choose.ip, choose.url, events.name, choose.block, choose.blockedon, choose.updatedon from choose INNER JOIN events on choose.eventname = events.uid";
//
// 	$fetch->sqlQuery($query);
//     $fetch_types = $fetch->fetch();
//
// 	$rows = array();
// 	foreach ($fetch_types as $key => $value) {
// 		$rows[$key] = $value;
// 	}
// 	return $rows;
// }


function deliveryCall(){
    $fetch = new Connection();

	$query = "SELECT uid,	name,	contact,	address,	vehiclenum,	licenseno,	image,	block,	blockedon,	updatedon from delivery ORDER BY createdon DESC";

	$fetch->sqlQuery($query);
    $fetch_types = $fetch->fetch();

	$rows = array();
	foreach ($fetch_types as $key => $value) {
		$rows[$key] = $value;
	}
	return $rows;
}

?>
