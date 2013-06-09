isuser = function() {
	var userVal = $("#username").val();
	if (userVal == '') {
		$("#username").after('<span class="error" id="errorisuser">Please enter a username.</span>');
	}
	submitCheck();
}; 
( jQuery );

ispwd = function() {
	var passwordVal = $("#password").val();
	if (passwordVal == '') {
		$("#password").after('<span class="error" id="errorispwd">Please enter a password.</span>');
	}
	submitCheck();
}; 
( jQuery );


matchpwd = function() {
	var passwordVal = $("#password").val();
	var checkVal = $("#password-check").val();
	if (passwordVal != checkVal ) {
		$("#password-check").after('<span class="error" id="errormatchpwd">Passwords do not match.</span>');
	}
	submitCheck();
}; 
( jQuery );

submitCheck = function(){
	var submitBtn = $("#submitBtn");
	var passwordVal = $("#password").val();
	var checkVal = $("#password-check").val();
	if (passwordVal != '' && checkVal == passwordVal){
			$('#submitBtn').prop('disabled', false);
		}
	else{$('#submitBtn').prop('disabled', true);}
	if (passwordVal != ''){
		$("#errorispwd").hide();
	}
	if (passwordVal == checkVal){
		$("#errormatchpwd").hide();
	}
}
