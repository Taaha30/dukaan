<form class="validateform bigform">
			<label class="inline-form">
         		 Product Name<br>
             	<input type="text" name="productname" placeholder="name" required>
           		<span class="validate"></span>
			</label>
   <label class="inline-form">
				Product Category<br>
             	<select name="productcat" id="productselect" multiple="multiple" required>
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
         		Productimage<br>
             	<input type="file" class="dropify" name="productimage" data-height="300" required/>
	           	<span class="validate"></span>
			</label>
   <label class="inline-form">
            Product Cost<br>
              <input type="text" name="productcost" placeholder="name" required>
             <span class="validate"></span>
   </label>



			<br>
			<div id="error"></div><br>
			<button type="button" value="Submit" id="addews" onclick="addProducts(this.id, 'product-table');">Add</button>
		</form>


<!-- <script type="module" src="./api/controller/klive1.js"></script> -->

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
		$('#catselect,#productselect,#guestselect').multipleSelect();
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
