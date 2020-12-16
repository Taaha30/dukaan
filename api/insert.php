<?php
session_start();
include './config.php';
function inserQ($tablename, $cols, $values, $msg, $action){
    $data = new Connection();
	$time = $data->timezone();
	if ($action == "addUsers") {
		$query = "INSERT INTO ".$tablename."(".implode(',', $cols).", createdon, lastlogin) VALUES (\"".implode('","', $values)."\", \"$time\", \"$time\")";
	}else{
		$query = "INSERT INTO ".$tablename."(".implode(',', $cols).", createdon) VALUES (\"".implode('","', $values)."\", \"$time\")";
	}
    $insert = $data->sqlQuery($query);
    $result = $data->run();

    // $response_string = stripslashes(htmlspecialchars(filter_var($result, FILTER_SANITIZE_STRING)));
    // $final = $data->response($response_string, $action);
    if($result === true){
    	echo "<span class='success'>".$msg."</span>";
    }else{
    	echo "<span class='fail'>Something wrong happened! Please try again.</span>";
    }
}



// shop insert
function addShop(){

	$values = json_decode(stripslashes($_POST['data']), true);
	// var_dump($values);

	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, stripslashes(trim($value)));
	}
	// array_pop($fvals);
	 // var_dump($fvals);
	$planimg = addImgTo($fvals[7],$fvals[0]);
    unset($fvals[7]);
 	array_push($fvals, $planimg);


	$table = "shops";
	$cols = array('shopname','shopcat','ownername','shopaddress','mobile','email','bankdetails','shopimage'	);
	$msg = "Shop added!";
	inserQ($table, $cols, $fvals, $msg, $_POST["action"]);
}

if (isset($_POST["action"]) && $_POST["action"] == "addShop") {
	addShop();
}


// delivery
function addDelivery(){
	$values = json_decode(stripslashes($_POST['data']), true);
	$fvals = array();
 var_dump($fvals);
	foreach ($values as $key => $value) {
		array_push($fvals, stripslashes(trim($value)));

	}
	// var_dump($fvals);

   $planimg = addImgTo($fvals[5],$fvals[0]);
     unset($fvals[5]);
 	array_push($fvals, $planimg);


	$table = "delivery";
	$cols = array('name','contact','address','vehiclenum','licenseno','image');
	$msg = "Agent  added!";
	inserQ($table, $cols, $fvals, $msg, $_POST["action"]);
}
if (isset($_POST["action"]) && $_POST["action"] == "addDelivery") {
	addDelivery();
}



// products insert
function addProducts(){
	$values = json_decode(stripslashes($_POST['data']), true);
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, stripslashes(trim($value)));
  ;
	}
	// array_pop($fvals);
	// var_dump($fvals);

   $planimg = addImgTo($fvals[2],$fvals[0]);
     unset($fvals[2]);
 	array_push($fvals, $planimg);


	$table = "products";
	$cols = array('productname','productcat','productcost','productimage');
	$msg = "product added!";
	inserQ($table, $cols, $fvals, $msg, $_POST["action"]);
}
if (isset($_POST["action"]) && $_POST["action"] == "addProducts") {
	addProducts();
}


// category
function addCategory(){
	$values = json_decode(stripslashes($_POST['data']), true);
	$fvals = array();
	foreach ($values as $key => $value) {
		array_push($fvals, stripslashes(trim($value)));
	}

	$table = "category";
	$cols = array('categoryname');
	$msg = "inserted successfully";
	inserQ($table, $cols, $fvals, $msg, $_POST["action"]);
}
if (isset($_POST["action"]) && $_POST["action"] == "addCategory") {
	addCategory();
}





/// Insert image function
function addImgTo($imgvar, $planname){
		$planhypen = preg_replace('#[ -]+#', '-', $planname);
        define('UPLOAD_DIR', '/opt/lampp/htdocs/projects/dukaan/assets/img/uploads/');
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

?>
