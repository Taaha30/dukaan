<div id="editrun">
	<div class="dash-title">
		<h1>Editing <?php echo "Category"; ?></h1>
	</div>
<div class="dash-box">
		<form class="validateform">
			<?php
			foreach ($cat as $datakey => $datavalue) {
				if ($datavalue["uid"] == $_GET["data"]) {
				echo '<label class="inline-form">

	            	<input type="hidden" name="uid" placeholder="name" value="'.$datavalue["uid"].'" >
					<span class="validate"></span>
				</label>
				<br>
        <label class="inline-form">
              Category<br>
                <input type="text" name="categoryname" placeholder="categoryname" value="'.$datavalue["categoryname"].'" required>
                <span class="validate"></span>
        </label>
								<br>
				';
					}
				}
			?>
			<br>
			<div id="error"></div>
			<button type="button" value="Submit" id="updateews" onclick="updateCategory(this.id,'cat-table');">Update run</button>
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
	$('#tagselect,#hostselect,#guestselect').multipleSelect()
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
