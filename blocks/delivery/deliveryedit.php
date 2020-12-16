<div id="editrun">
	<div class="dash-title">
		<h1>Editing Delivery</h1>
	</div>
<div class="dash-box">
		<form class="validateform">
			<?php
			foreach ($delivery as $datakey => $datavalue) {
				if ($datavalue["uid"] == $_GET["data"]) {
				echo '<label class="inline-form">




	            	<input type="hidden" name="uid" placeholder="name" value="'.$datavalue["uid"].'" >
					<span class="validate"></span>
				</label>
    <label class="inline-form">

              <input type="hidden" name="imageprev" placeholder="name" value="'.$datavalue["image"].'" >
     <span class="validate"></span>
    </label>


    <label class="inline-form">
          		  Name<br>
              	<input type="text" name="name" placeholder="name" value="'.$datavalue["name"].'">
            		<span class="validate"></span>
 			</label>
				<br>

    <label class="inline-form">
     Contact number<br>
               <input type="text" name="contact" placeholder="" pattern="\d*" tabindex="-1" minlength="10" maxlength="10" value="'.$datavalue["contact"].'">
              <span class="validate"></span>
    </label>
				<br>
    <label class="inline-form">
             address<br>
              <input type="text" name="address" value="'.$datavalue["address"].'" required>
     <span class="validate"></span>
    </label>
				<br>



    <label class="inline-form">
             vehicle number<br>
              <input type="text" name="vehiclenum" value="'.$datavalue["vehiclenum"].'"  required>
     <span class="validate"></span>
    </label>
				<br>
    <label class="inline-form">
             License number<br>
              <input type="text" name="licenseno" value="'.$datavalue["licenseno"].'" required>
     <span class="validate"></span>
    </label>
				<br>


 			<label class="inline-form">
          		Your Photo<br>
              	<input type="file" class="dropify" name="image" data-height="300" required/>
 	           	<span class="validate"></span>
 			</label>


				<br>';
					}
				}
			?>
			<br>
			<div id="error"></div>
			<button type="button" value="Submit" id="updateews" onclick="updateDelivery(this.id, 'delivery-table');">Update run</button>
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
	$('#etagselect,#ehostselect,#eguestselect').multipleSelect()
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
