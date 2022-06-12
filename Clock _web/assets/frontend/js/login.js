function validateForm(){
	var username = document.getElementById('input_email');
	var password = document.getElementById('input_password');
	var str_username = input_email.value;
	var str_password = input_password.value;
	var obj_error_username = document.getElementById('error_username');
	var obj_error_password = document.getElementById('error_password');
	if(str_username == '' || str_username == null){
		obj_error_username.innerHTML = 'Thông tin bắt buộc';
	}
	if(str_password == '' || str_password == null){
		obj_error_password.innerHTML = 'Thông tin bắt buộc';
	}
}
function hideErrorUsername(){
	var username = document.getElementById('input_email');
	var str_username = input_email.value;
	var obj_error_username = document.getElementById('error_username');
	if(str_username == '' || str_username == null){
		obj_error_username.innerHTML = 'Thông tin băt buộc';
	}else{
		obj_error_username.innerHTML = '';
	}
}
function hideErrorPassword(){
	var username = document.getElementById('input_password');
	var str_password = input_password.value;
	var obj_error_password = document.getElementById('error_password');
	if(str_password == '' || str_password == null){
		obj_error_password.innerHTML = 'Thông tin băt buộc';
	}else{
		obj_error_password.innerHTML = '';
	}
}