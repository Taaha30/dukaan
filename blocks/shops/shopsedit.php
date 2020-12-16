<div id="editrun">
	<div class="dash-title">
		<h1>Editing Shops</h1>
	</div>
<div class="dash-box">
		<form class="validateform">
			<?php
			foreach ($shop as $datakey => $datavalue) {
				if ($datavalue["uid"] == $_GET["data"]) {
				echo '<label class="inline-form">

	            	<input type="hidden" name="uid" placeholder="name" value="'.$datavalue["uid"].'" >
					<span class="validate"></span>
				</label>

				<label class="inline-form">

														<input type="hidden" name="imageprev" placeholder="name" value="'.$datavalue["shopimage"].'" >
					<span class="validate"></span>
				</label>

				<label class="inline-form">
	         		Shop Name<br>
	            	<input type="text" name="shopname" placeholder="name" value="'.$datavalue["shopname"].'" required>
					<span class="validate"></span>
				</label>
				<br>

	   <label class="inline-form">
					Shop Category<br>
					<select name="shopcat" id="shopselect" multiple="multiple" >';

	$tagarray = explode(",",$datavalue["categoryname"]);
	var_dump($tagarray);
									foreach ($cat as $key => $value) {
										if ($value["block"] == 0) {
				if(in_array($value['uid'],$tagarray)){
					echo "<option value='". $value['uid'] ."' selected='selected'>" .$value['categoryname'] ."</option>";
				}else{
															echo "<option value='". $value['uid'] ."'>" .$value['categoryname'] ."</option>";
				}
		}
									}



					echo '</select>
	           		<span class="validate"></span>
				</label>
				<br>
	   <label class="inline-form">
	           Owner Name<br>
	             <input type="text" name="ownername"  value="'.$datavalue["ownername"].'"required>
	    <span class="validate"></span>
	   </label>
				<br>
	   <label class="inline-form">
	           Shop address<br>
	             <input type="textarea" name="shopaddress" value="'.$datavalue["shopaddress"].'" required>
	    <span class="validate"></span>
	   </label>
				<br>


	   <label class="inline-form">
					Contact number<br>
	             	<input type="text" name="mobile" placeholder="" pattern="\d*" tabindex="-1" minlength="10" maxlength="10" value="'.$datavalue["mobile"].'">
	           		<span class="validate"></span>
				</label>
				<br>
	   <label class="inline-form">
	           Email<br>
	             <input type="text" name="email" value="'.$datavalue["email"].'"  required>
	    <span class="validate"></span>
	   </label>
				<br>
	   <label class="inline-form">
	           bank Details<br>
	             <input type="text" name="bankdetails"  value="'.$datavalue["bankdetails"].'" required>
	    <span class="validate"></span>
	   </label>
				<br>
	   <label class="inline-form">
					Shop Image<br>
		            <input type="file" class="dropify" name="shopimage" data-height="300" required/>
		           	<span class="validate"></span>
				</label>


				<br>';
					}
				}
			?>
			<br>
			<div id="error"></div>
			<button type="button" value="Submit" id="updateews" onclick="updateShops(this.id, 'shop-table');">Update run</button>
		</form>
	</div>
</div>

<script src="./plugins/jqueryupload/dist/js/dropify.min.js"></script>
 <script type="text/javascript">
 $('.dropify').dropify({
 	 messages: {
        'default': 'Drag and drop a file here or click',
        'replace': 'Drag and drop or click to replace',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happend.'
    }
 });

$(function () {
	$('#shopselect,#ehostselect,#eguestselect').multipleSelect()
})

 $(document).ready(function(){
				$(document).on("change",".dropify",function(){
					var inputnamehere = $(this).attr("name");
					if (this.files && this.files[0]) {

					    var FR= new FileReader();

					    FR.addEventListener("load", function(e) {
					    	localStorage.removeItem(inputnamehere);
					    	localStorage.setItem(inputnamehere, e.target.result);
					console.log(localStorage.getItem(inputnamehere));

					    });
					    FR.readAsDataURL( this.files[0] );
					}
				});
			});

 </script>
  <style type="text/css">
 	.file-icon:before{
	font-family: FontAwesome!important;
	content:"\f0ee"!important;
}
.dropify-infos-inner{padding:0px!important;}
 </style>
