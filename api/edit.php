<?php
require '../config.php';
function updateQ($tablename, $fields, $condition, $conn, $msg){
	$query = "update ".$tablename." set ";



    foreach($fields as $key => $value) {
        $fields[$key] = " `$key` = '".mysqli_escape_string($conn, $value)."' ";
    }
    $query .= implode(" , ",array_values($fields))." where ".$condition.";";
	$query_result = mysqli_query($conn, $query);

	if ($query_result) {
		echo "<span class='success'>".$msg."</span>";
	}else{
		echo "<span class='fail'>Command failed: " . mysqli_error($conn)."<br>Error ref. code: " . mysqli_errno($conn)."</span>";
	}
	mysqli_close($conn);
}





///Update Category
function updateCategory($dandt, $conn){
	$values = json_decode($_POST['data']);
	$fvals = array();
	foreach ($values as $key => $value) {
		$fvals[$key] = htmlspecialchars(stripslashes(trim($value)));
	}
	array_push($fvals, $dandt);
	extract($fvals);



	$fields = array('categoryname' => $fvals['categoryname'],'updatedon' => $dandt);

	$table = "category";
	$msg = "Category updated successfully";
	updateQ($table, $fields, "uid = '".$fvals['uid']."'", $conn, $msg);
}
if ($_POST["action"] == "updateCategory") {
	updateCategory($datetime, $connection);
}





/// Update products
function updateProducts($dandt, $conn){
	$values = json_decode($_POST['data']);

	$fvals = array();


	foreach ($values as $key => $value) {
		$fvals[$key] = htmlspecialchars(stripslashes(trim($value)));
	}
	array_push($fvals, $dandt);
	$image_parts = explode(";base64,", $fvals['productimage']);
	$image_type_aux = explode("/", $image_parts[0]);
	$image_type = $image_type_aux[1];
	$image_base64 = base64_decode($image_parts[1]);
 $fvals['productimage']=$image_base64;
	$prev=$fvals['imageprev'];

$fimage= basename($prev);
	file_put_contents('/opt/lampp/htdocs/projects/dukaan/assets/img/uploads/'.$fimage.'',$fvals['productimage']);
		// var_dump($fvals);
	$fields = array('productname' => $fvals['productname'], 'productcat' => $fvals['productcat'],'productcost' => $fvals['productcost'],'updatedon' => $dandt);

	$table = "products";
	$msg = "Product updated successfully";
	updateQ($table, $fields, "uid = '".$fvals['uid']."'", $conn, $msg);
}
if ($_POST["action"] == "updateProducts") {
	updateProducts($datetime, $connection);
}

// UPdate delivery
function updateDelivery($dandt, $conn){
	$values = json_decode($_POST['data']);

	$fvals = array();


	foreach ($values as $key => $value) {
		$fvals[$key] = htmlspecialchars(stripslashes(trim($value)));
	}

	array_push($fvals, $dandt);
	$image_parts = explode(";base64,", $fvals['image']);
	$image_type_aux = explode("/", $image_parts[0]);
	$image_type = $image_type_aux[1];
	$image_base64 = base64_decode($image_parts[1]);
 $fvals['image']=$image_base64;
	$prev=$fvals['imageprev'];

$fimage= basename($prev);
	file_put_contents('/opt/lampp/htdocs/projects/dukaan/assets/img/uploads/'.$fimage.'',$fvals['image']);
	$fields = array('name' => $fvals['name'], 'contact' => $fvals['contact'],'address' => $fvals['address'],'vehiclenum' => $fvals['vehiclenum'],'licenseno' => $fvals['licenseno'],
	'updatedon' => $dandt);

	$table = "delivery";
	$msg = " Delivery Agent updated successfully";
	updateQ($table, $fields, "uid = '".$fvals['uid']."'", $conn, $msg);
}
if ($_POST["action"] == "updateDelivery") {
	updateDelivery($datetime, $connection);
}

// update shops
function updateShops($dandt, $conn){
	$values = json_decode($_POST['data']);

	$fvals = array();


	foreach ($values as $key => $value) {
		$fvals[$key] = htmlspecialchars(stripslashes(trim($value)));
	}

	array_push($fvals, $dandt);

	$image_parts = explode(";base64,", $fvals['shopimage']);
	$image_type_aux = explode("/", $image_parts[0]);
	$image_type = $image_type_aux[1];
	$image_base64 = base64_decode($image_parts[1]);
 $fvals['shopimage']=$image_base64;
	$prev=$fvals['imageprev'];
$fimage= basename($prev);
	file_put_contents('/opt/lampp/htdocs/projects/dukaan/assets/img/uploads/'.$fimage.'',$fvals['shopimage']);
	// var_dump($fvals);

	$fields = array('shopname' => $fvals['shopname'], 'shopcat' => $fvals['shopcat'],'ownername' => $fvals['ownername'],'shopaddress' => $fvals['shopaddress'],'mobile' => $fvals['mobile'],
	'email' => $fvals['email'],'bankdetails' => $fvals['bankdetails'], 'updatedon' => $dandt);

	$table = "shops";
	$msg = "Shop updated successfully";
	updateQ($table, $fields, "uid = '".$fvals['uid']."'", $conn, $msg);
}
if ($_POST["action"] == "updateShops") {
	updateShops($datetime, $connection);
}


function addImgTo($imgvar, $planname){
		$planhypen = preg_replace('#[ -]+#', '-', $planname);
        define('UPLOAD_DIR', '/opt/lampp/htdocs/projects/katapult-be/assets/img/uploads/');
        $upload_loc = "./assets/img/uploads/";
        $image_parts = explode(";base64,", $imgvar);
        $image_type_aux = explode("/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $uniqid = uniqid();
        $imgvar_file = UPLOAD_DIR . $planhypen . "-" . $uniqid . '.'.$image_type;
        $imgvar_return = $upload_loc . $planhypen . "-" . $uniqid . '.'.$image_type;
        file_put_contents($imgvar_file, $image_base64);



        return $imgvar_return;
}
