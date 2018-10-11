$(document).ready(function(){

});
function load(){
	debugger;
	var obj = {};
	obj.submit = 'select';
	$.ajax({
		url:"admin/controllers/web_setting_controller.php",
		method:"POST",
		data:obj,
		success:function(result){
			debugger;
			var path = "admin/media/company-logo/"; 
			var data = JSON.parse(result);
			$("#company_logo").attr('src', path + data[0].logo);
			// $("#company_logo").attr('src', path + data[0].logo);
			// $("#company_logo").attr('src', path + data[0].logo);
			// $("#company_logo").attr('src', path + data[0].logo);
			// $("#company_logo").attr('src', path + data[0].logo);
			$("#company_address").html(data[0].address);
			$("#companyinfo").html(data[0].description);
			$("#company_email").html('<i class="fa fa-envelope"></i>'+' '+ data[0].email);
			$("#contactinfo").html('<i class="fa fa-phone"></i>'+' '+ data[0].telephone);
		}
	})

}