<div id="editrun">
	<div class="dash-title">
		<h1>Editing Products</h1>
	</div>
<div class="dash-box">
		<form class="validateform">
			<?php
			foreach ($product as $datakey => $datavalue) {
				if ($datavalue["uid"] == $_GET["data"]) {
				echo '<label class="inline-form">

	            	<input type="hidden" name="uid" placeholder="name" value="'.$datavalue["uid"].'" >
					<span class="validate"></span>
				</label>
				<br>

				<label class="inline-form">

														<input type="hidden" name="imageprev" placeholder="name" value="'.$datavalue["productimage"].'" >
					<span class="validate"></span>
				</label>
				<br>

				<label class="inline-form">
	         		Shop Name<br>
	            	<input type="text" name="productname" placeholder="name" value="'.$datavalue["productname"].'" required>
					<span class="validate"></span>
				</label>
				<br>

	   <label class="inline-form">
					Shop Category<br>
					<select name="productcat" id="catselect" multiple="multiple" >';

	$tagarray = explode(",",$datavalue["categoryname"]);

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
          		Productimage<br>
              	<input type="file" class="dropify" name="productimage" data-height="300" >
 	           	<span class="validate"></span>
 			</label>
				<br>
    <label class="inline-form">
             Product Cost<br>
               <input type="text" name="productcost" placeholder="name" value="'.$datavalue["productcost"].'"required>
              <span class="validate"></span>
    </label>


				<br>';
					}
				}
			?>
			<br>
			<div id="error"></div>
			<button type="button" value="Submit" id="updateews" onclick="updateProducts(this.id, 'product-table');">Update run</button>
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
	$('#catselect,#ehostselect,#eguestselect').multipleSelect()
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
