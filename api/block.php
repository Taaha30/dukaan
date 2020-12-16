<?php
require '../config.php';
function blockQ($tablename, $valueid, $conn, $msg){
	$query = "UPDATE ".$tablename." SET block = 1, blockedon = '".$valueid[1]."' WHERE uid = '".$valueid[0]."';";
	$query_result = mysqli_query($conn, $query);
	if ($query_result) {
		echo "<span class='success'>".$msg."</span>";
	}else{
		echo "<span class='fail'>Command failed: " . mysqli_error($conn)."<br>Error ref. code: " . mysqli_errno($conn)."</span>";
	}
	mysqli_close($conn);
}
function unblockQ($tablename, $valueid, $conn, $msg){
	$query = "UPDATE ".$tablename." SET block = 0, blockedon = '".$valueid[1]."' WHERE uid = ".$valueid[0].";";
	$query_result = mysqli_query($conn, $query);
	if ($query_result) {
		echo "<span class='success'>".$msg."</span>";
	}else{
		echo "<span class='fail'>Command failed: " . mysqli_error($conn)."<br>Error ref. code: " . mysqli_errno($conn)."</span>";
	}
	mysqli_close($conn);
}



//Runs
function blockEws($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "events";
	$msg = "Blocked successfully";
	blockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "blockEws") {
	blockEws($datetime, $connection);
}
function unblockEws($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "events";
	$msg = "Unblocked successfully";
	unblockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "unblockEws") {
	unblockEws($datetime, $connection);
}


function blockCategory($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "category";
	$msg = "Blocked successfully";
	blockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "blockCategory") {
	blockCategory($datetime, $connection);
}

function unblockCategory($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "category";
	$msg = "Unblocked successfully";
	unblockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "unblockCategory") {
	unblockCategory($datetime, $connection);
}

function blockDelivery($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "delivery";
	$msg = "Blocked successfully";
	blockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "blockDelivery") {
	blockDelivery($datetime, $connection);
}

function unblockDelivery($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "delivery";
	$msg = "Unblocked successfully";
	unblockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "unblockDelivery") {
	unblockDelivery($datetime, $connection);
}

function blockShops($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "shops";
	$msg = "Blocked successfully";
	blockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "blockShops") {
	blockShops($datetime, $connection);
}

function unblockShops($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "shops";
	$msg = "Unblocked successfully";
	unblockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "unblockShops") {
	unblockShops($datetime, $connection);
}

// products
function blockProducts($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "products";
	$msg = "Blocked successfully";
	blockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "blockProducts") {
	blockProducts($datetime, $connection);
}

function unblockProducts($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "products";
	$msg = "Unblocked successfully";
	unblockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "unblockProducts") {
	unblockProducts($datetime, $connection);
}





function blockTags($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "tags";
	$msg = "Blocked successfully";
	blockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "blockTags") {
	blockTags($datetime, $connection);
}

function unblockTags($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "tags";
	$msg = "Unblocked successfully";
	unblockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "unblockTags") {
	unblockTags($datetime, $connection);
}
function blockGuests($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "kliveguest";
	$msg = "Blocked successfully";
	blockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "blockGuests") {
	blockGuests($datetime, $connection);
}
function unblockGuests($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "kliveguest";
	$msg = "Unblocked successfully";
	unblockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "unblockGuests") {
	unblockGuests($datetime, $connection);
}

// series block & unblock

function blockSeries($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "series";
	$msg = "Blocked successfully";
	blockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "blockSeries") {
	blockSeries($datetime, $connection);
}
function unblockSeries($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "series";
	$msg = "Unblocked successfully";
	unblockQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "unblockSeries") {
	unblockSeries($datetime, $connection);
}
















//Notifs
function blockNotif($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "trinityapp.notifs";
	$msg = "Blocked successfully";
	blocknotifQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "blockNotif") {
	blockNotif($datetime, $connection3);
}
function unblockNotif($dandt, $conn){
	$values = json_decode(stripslashes($_POST['data']));
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, $value);
	}
	array_push($fvals, $dandt);
	$table = "trinityapp.notifs";
	$msg = "Unblocked successfully";
	unblocknotifQ($table, $fvals, $conn, $msg);
}
if ($_POST["action"] == "unblockNotif") {
	unblockNotif($datetime, $connection3);
}

function blocknotifQ($tablename, $valueid, $conn, $msg){
	$query = "UPDATE ".$tablename." SET showhide = 1, showhideon = '".$valueid[1]."' WHERE uid = '".$valueid[0]."';";
	$query_result = mysqli_query($conn, $query);
	if ($query_result) {
		echo "<span class='success'>".$msg."</span>";
	}else{
		echo "<span class='fail'>Command failed: " . mysqli_error($conn)."<br>Error ref. code: " . mysqli_errno($conn)."</span>";
	}
	mysqli_close($conn);
}
function unblocknotifQ($tablename, $valueid, $conn, $msg){
	$query = "UPDATE ".$tablename." SET showhide = 0, showhideon = '".$valueid[1]."' WHERE uid = ".$valueid[0].";";
	$query_result = mysqli_query($conn, $query);
	if ($query_result) {
		echo "<span class='success'>".$msg."</span>";
	}else{
		echo "<span class='fail'>Command failed: " . mysqli_error($conn)."<br>Error ref. code: " . mysqli_errno($conn)."</span>";
	}
	mysqli_close($conn);
}
