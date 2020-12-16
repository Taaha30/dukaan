<form class="validateform bigform">
			<label class="inline-form">
         		Shop Name<br>
            	<input type="text" name="shopname" placeholder="name" required>
				<span class="validate"></span>
			</label>

   <label class="inline-form">
				Shop Category<br>
             	<select name="shopcat" id="catselect" multiple="multiple" required>
             		<?php
		                foreach ($cat as $key => $value) {
		                	if ($value["block"] == 0) {
		                    	echo "<option value='". $value['uid'] ."'>" .$value['categoryname'] ."</option>";
		                	}
		                }
	                ?>
             	</select>
           		<span class="validate"></span>
			</label>
   <label class="inline-form">
           Owner Name<br>
             <input type="text" name="ownername"  required>
    <span class="validate"></span>
   </label>
   <label class="inline-form">
           Shop address<br>
             <input type="textarea" name="shopaddress"  required>
    <span class="validate"></span>
   </label>


   <label class="inline-form">
				Contact number<br>
             	<input type="text" name="mobile" placeholder="" pattern="\d*" tabindex="-1" minlength="10" maxlength="10">
           		<span class="validate"></span>
			</label>
   <label class="inline-form">
           Email<br>
             <input type="text" name="email"  required>
    <span class="validate"></span>
   </label>
   <label class="inline-form">
           bank Details<br>
             <input type="text" name="bankdetails"  required>
    <span class="validate"></span>
   </label>
   <label class="inline-form">
				Shop Image<br>
	            <input type="file" class="dropify" name="shopimage" data-height="300" required/>
	           	<span class="validate"></span>
			</label>

			<br>
			<div id="error"></div><br>
			<button type="button" value="Submit" id="addews" onclick="addShop(this.id, 'shop-table');">Add</button>
		</form>


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
	$('#catselect').multipleSelect();
});

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
