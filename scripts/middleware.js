import { formValidate } from '../assets/script/validate.js';
import { fileValidate } from '../assets/script/validate.js';
import { ajaxInsertFunction } from '../api/ajaxfunction.js';
import { ajaxAddImgFunction } from '../api/ajaxfunction.js';
import { ajaxBlockFunction } from '../api/ajaxfunction.js';
import { ajaxDeleteFunction } from '../api/ajaxfunction.js';
import { ajaxDeleteImgFunction } from '../api/ajaxfunction.js';
import { ajaxUpdateFunction } from '../api/ajaxfunction.js';
import { ajaxLoginFunction } from '../api/ajaxfunction.js';
import { ajaxCsvFunction } from '../api/ajaxfunction.js';




// INSERT
window.addCategory = function addCategory(clickid){
	var targetId = $("#"+clickid).parents("form");
	var validate = formValidate(targetId);
	var finput = {};
	var pushval;
	var pushname;
	targetId.find("label :input:not(li :input)").each(function(){
		pushval = $(this).val();
		pushname = $(this).attr("name");
		finput[pushname] = pushval;
	});
	var values = JSON.stringify(finput);
	console.log(values);
	if(validate == 0){
		ajaxInsertFunction("addCategory", values);
	}
}

window.addDelivery = function addDelivery(clickid){
	var targetId = $("#"+clickid).parents("form");
	var validate = formValidate(targetId);
	var finput = {};
	var pushval;
	var pushname;
	targetId.find("label :input:not(li :input, :input[type=button])").each(function(){
		console.log($(this));
		if ($(this).attr("type") == "file") {
			var inputnamehere = $(this).attr("name");
			finput[inputnamehere] = (localStorage.getItem(inputnamehere));
		}else if($(this).prop("multiple") == true) {
			pushval = $(this).val();
			if (pushval !== null) {
				pushval = pushval.join(",");
			}
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}else{
			pushval = $(this).val();
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}
	});
	var values = JSON.stringify(finput);
	console.log(values);
	if(validate == 0){
		ajaxInsertFunction("addDelivery", values);
	}
}




window.addShop = function addShop(clickid){
	var targetId = $("#"+clickid).parents("form");
	var validate = formValidate(targetId);
	var finput = {};
	var pushval;
	var pushname;
	targetId.find("label :input:not(li :input, :input[type=button])").each(function(){
		console.log($(this));
		if ($(this).attr("type") == "file") {
			var inputnamehere = $(this).attr("name");
			finput[inputnamehere] = (localStorage.getItem(inputnamehere));
		}else if($(this).prop("multiple") == true) {
			pushval = $(this).val();
			if (pushval !== null) {
				pushval = pushval.join(",");
			}
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}else{
			pushval = $(this).val();
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}
	});
	var values = JSON.stringify(finput);
	console.log(values);
	if(validate == 0){
		ajaxInsertFunction("addShop", values);
	}
}


window.addProducts = function addProducts(clickid){
	var targetId = $("#"+clickid).parents("form");
	var validate = formValidate(targetId);
	var finput = {};
	var pushval;
	var pushname;
	targetId.find("label :input:not(li :input, :input[type=button])").each(function(){
		console.log($(this));
		if ($(this).attr("type") == "file") {
			var inputnamehere = $(this).attr("name");
			finput[inputnamehere] = (localStorage.getItem(inputnamehere));
		}else if($(this).prop("multiple") == true) {
			pushval = $(this).val();
			if (pushval !== null) {
				pushval = pushval.join(",");
			}
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}else{
			pushval = $(this).val();
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}
	});
	var values = JSON.stringify(finput);
	console.log(values);
	if(validate == 0){
		ajaxInsertFunction("addProducts", values);
	}
}







/// UPDATE

window.updateDelivery = function updateDelivery(clickid, reload){
	var targetId = $("#"+clickid).parent();
	var validate = formValidate(targetId);
	var finput = {};
	var pushval;
	var pushname;
	targetId.find("label :input:not(li :input, :input[type=button])").each(function(){
		console.log($(this));
		if ($(this).attr("type") == "file") {
			var inputnamehere = $(this).attr("name");
			if(localStorage.getItem(inputnamehere) !== ""){
				finput[inputnamehere] = (localStorage.getItem(inputnamehere));
			}else{
				pushval = $(this).val();
				finput[inputnamehere] = pushval;
			}
		}else if($(this).prop("multiple") == true) {
			pushval = $(this).val();
			if (pushval !== null) {
				pushval = pushval.join(",");
			}
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}else{
			pushval = $(this).val();
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}
	});
	var values = JSON.stringify(finput);
	if(validate == 0){
	    ajaxUpdateFunction("updateDelivery", values, "delivery", reload);
	}
}

window.updateProducts = function updateProducts(clickid, reload){
	var targetId = $("#"+clickid).parent();
	var validate = formValidate(targetId);
	var finput = {};
	var pushval;
	var pushname;
	targetId.find("label :input:not(li :input, :input[type=button])").each(function(){
		console.log($(this));
		if ($(this).attr("type") == "file") {
			var inputnamehere = $(this).attr("name");
			if(localStorage.getItem(inputnamehere) !== ""){
				finput[inputnamehere] = (localStorage.getItem(inputnamehere));
			}else{
				pushval = $(this).val();
				finput[inputnamehere] = pushval;
			}
		}else if($(this).prop("multiple") == true) {
			pushval = $(this).val();
			if (pushval !== null) {
				pushval = pushval.join(",");
			}
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}else{
			pushval = $(this).val();
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}
	});
	var values = JSON.stringify(finput);
	if(validate == 0){
	    ajaxUpdateFunction("updateProducts", values, "products", reload);
	}
}






window.updateCategory = function updateCategory(clickid, reload){
	var targetId = $("#"+clickid).parent();
	var validate = formValidate(targetId);
	var finput = {};
	var pushval;
	var pushname;
	targetId.find("label :input:not(li :input, :input[type=button])").each(function(){
		console.log($(this));
		if ($(this).attr("type") == "file") {
			var inputnamehere = $(this).attr("name");
			if(localStorage.getItem(inputnamehere) !== ""){
				finput[inputnamehere] = (localStorage.getItem(inputnamehere));
			}else{
				pushval = $(this).val();
				finput[inputnamehere] = pushval;
			}
		}else if($(this).prop("multiple") == true) {
			pushval = $(this).val();
			if (pushval !== null) {
				pushval = pushval.join(",");
			}
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}else{
			pushval = $(this).val();
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}
	});
	var values = JSON.stringify(finput);
	if(validate == 0){
	    ajaxUpdateFunction("updateCategory", values, "category", reload);
	}
}


window.updateShops = function updateShops(clickid, reload){
	var targetId = $("#"+clickid).parent();
	var validate = formValidate(targetId);
	var finput = {};
	var pushval;
	var pushname;
	targetId.find("label :input:not(li :input, :input[type=button])").each(function(){
		console.log($(this));
		if ($(this).attr("type") == "file") {
			var inputnamehere = $(this).attr("name");
			if(localStorage.getItem(inputnamehere) !== ""){
				finput[inputnamehere] = (localStorage.getItem(inputnamehere));
			}else{
				pushval = $(this).val();
				finput[inputnamehere] = pushval;
			}
		}else if($(this).prop("multiple") == true) {
			pushval = $(this).val();
			if (pushval !== null) {
				pushval = pushval.join(",");
			}
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}else{
			pushval = $(this).val();
			pushname = $(this).attr("name");
			finput[pushname] = pushval;
		}
	});
	var values = JSON.stringify(finput);
	if(validate == 0){
	    ajaxUpdateFunction("updateShops", values, "shops", reload);
	}
}




// BLOCK
//shops
window.blockShops = function blockShops(clickid, reload){
	var targetId = $("#"+clickid).parent();
	var finput = [];
	targetId.find("input").each(function(){
		finput.push($(this).val());
	});
	var values = JSON.stringify(finput);
	ajaxBlockFunction("blockShops", values, "shops", reload);
};


window.unblockShops = function unblockShops(clickid, reload){
	var targetId = $("#"+clickid).parent();
	var finput = [];
	targetId.find("input").each(function(){
		finput.push($(this).val());
	});
	var values = JSON.stringify(finput);
	ajaxBlockFunction("unblockShops", values, "shops", reload);
};

window.blockProducts = function blockProducts(clickid, reload){
	var targetId = $("#"+clickid).parent();
	var finput = [];
	targetId.find("input").each(function(){
		finput.push($(this).val());
	});
	var values = JSON.stringify(finput);
	ajaxBlockFunction("blockProducts", values, "products", reload);
};


window.unblockProducts = function unblockProducts(clickid, reload){
	var targetId = $("#"+clickid).parent();
	var finput = [];
	targetId.find("input").each(function(){
		finput.push($(this).val());
	});
	var values = JSON.stringify(finput);
	ajaxBlockFunction("unblockProducts", values, "products", reload);
};



window.blockCategory = function blockCategory(clickid, reload){
	var targetId = $("#"+clickid).parent();
	var finput = [];
	targetId.find("input").each(function(){
		finput.push($(this).val());
	});
	var values = JSON.stringify(finput);
	ajaxBlockFunction("blockCategory", values, "category", reload);
};


window.unblockCategory = function unblockCategory(clickid, reload){
	var targetId = $("#"+clickid).parent();
	var finput = [];
	targetId.find("input").each(function(){
		finput.push($(this).val());
	});
	var values = JSON.stringify(finput);
	ajaxBlockFunction("unblockCategory", values, "category", reload);
};

window.blockDelivery = function blockDelivery(clickid, reload){
	var targetId = $("#"+clickid).parent();
	var finput = [];
	targetId.find("input").each(function(){
		finput.push($(this).val());
	});
	var values = JSON.stringify(finput);
	ajaxBlockFunction("blockDelivery", values, "delivery", reload);
};


window.unblockDelivery = function unblockDelivery(clickid, reload){
	var targetId = $("#"+clickid).parent();
	var finput = [];
	targetId.find("input").each(function(){
		finput.push($(this).val());
	});
	var values = JSON.stringify(finput);
	ajaxBlockFunction("unblockDelivery", values, "delivery", reload);
};

////////////////////////////////////////////////////////

window.deleteImg = function deleteImg(clickid, reload){
	var targetId = $("#"+clickid).parent();
	var finput = [];
	targetId.find("input").each(function(){
		finput.push($(this).val());
	});
	var values = JSON.stringify(finput);
	ajaxDeleteImgFunction("deleteImg", values, "media-library", reload);
}

//logintry
window.loginTry = function loginTry(clickid){
	var targetId = $("#"+clickid).parent();
	var validate = formValidate(targetId);
	var finput = [];
	targetId.find("label :input:not(li :input)").each(function(){
		finput.push($(this).val());
	});
	var values = JSON.stringify(finput);
	if(validate == 0){
	    ajaxLoginFunction("loginTry", values);
	}
}

//Report download
window.csvDownload = function csvDownload(runid){
	ajaxCsvFunction("csvDownload", runid);
}

window.iniDownload = function iniDownload(runid){
	ajaxCsvFunction("iniDownload", runid);
}
