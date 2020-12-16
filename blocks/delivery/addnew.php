<form class="validateform bigform">
			<label class="inline-form">
         		  Name<br>
             	<input type="text" name="name" placeholder="name" required>
           		<span class="validate"></span>
			</label>

   <label class="inline-form">
    Contact number<br>
              <input type="text" name="contact" placeholder="" pattern="\d*" tabindex="-1" minlength="10" maxlength="10">
             <span class="validate"></span>
   </label>
   <label class="inline-form">
            address<br>
             <input type="text"  name="address"  required>
    <span class="validate"></span>
   </label>



   <label class="inline-form">
            vehicle number<br>
             <input type="text" name="vehiclenum"  required>
    <span class="validate"></span>
   </label>
   <label class="inline-form">
            License number<br>
             <input type="text" name="licenseno"  required>
    <span class="validate"></span>
   </label>


			<label class="inline-form">
         		Your Photo<br>
             	<input type="file" class="dropify" name="image" data-height="300" required/>
	           	<span class="validate"></span>
			</label>




			<br>
			<div id="error"></div><br>
			<button type="button" value="Submit" id="addews" onclick="addDelivery(this.id, 'delivery-table');">Add</button>
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
