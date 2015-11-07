/*
 * Title:   Travelo | Responsive HTML5 Travel Template - Custom Javascript file
 * Author:  http://themeforest.net/user/soaptheme
 */

tjq(document).ready(function() {
    // UI Form Element
	
	// CHECK USERNAME AVAILABILITY WHEN SIGN UP
	tjq("#register_username").on("keyup",function(){
		if(tjq(this).val().length >= 2){
			tjq("#loader").show();
			tjq("#user-availability-status").hide();
			
			if(tjq(this).val().length < 8){
				tjq("#user-availability-status").show();
				tjq("#loader").hide();
				tjq("#user-availability-status").html("<span style='color:#ff0000; font-size:8pt;'> Username minimum 8 characters.</span>");
			}
			else{
				tjq.ajax({
					url: "ajax/ajax.php",
					type: "POST",
					data: {
						mod: "username_availability",
						username: tjq("#register_username").val(),
					},
					success: function(data){
						if(data.status == "not_available"){
							tjq("#submit").prop("disabled", true);
							tjq("#user-availability-status").show();
							tjq("#user-availability-status").html(data.data);
							tjq("#loader").hide();
						}
						else{
							tjq("#user-availability-status").hide();
							tjq("#loader").hide();
							tjq("#submit").prop("disabled", false);
						}
					},
				});
			}
		}
		else{
			tjq("#loader").hide();
			tjq("#user-availability-status").hide();
		}
	});
	
	// CHECK EMAIL AVAILABILITY WHEN SIGN UP
	tjq("#register_email").on("keyup",function(){
		if(tjq(this).val().length >= 2){
			tjq("#register-email-availability-status").hide();

			tjq.ajax({
				url: "ajax/ajax.php",
				type: "POST",
				data: {
					mod: "email_availability",
					email: tjq("#register_email").val(),
				},
				success: function(data){
					if(data.status == "not_available"){
						tjq("#submit").prop("disabled", true);
						tjq("#register-email-availability-status").show();
						tjq("#register-email-availability-status").html(data.data);
					}
					else{
						tjq("#register-email-availability-status").hide();
						tjq("#submit").prop("disabled", false);
					}
				},
			});
		}
		else{
			tjq("#register-email-availability-status").hide();
		}
	});
	
	tjq("#register_password").on("keyup",function(){
		if(tjq(this).val().length < 8){
			tjq("#submit").prop("disabled", true);
			tjq("#register-password-availability").show();
			tjq("#register-password-availability").html("<span style='color:#ff0000; font-size:8pt;'> Password minimum 8 characters.</span>");
		}
		else{
			tjq("#register-password-availability").hide();
			tjq("#submit").prop("disabled", false);
		}
	});
	
	tjq("#register_confirm_password").on("keyup",function(){
		var password = tjq("#register_password").val();
		if(tjq(this).val().length >= 2){
			if(tjq(this).val() != tjq("#register_password").val()){
				tjq("#submit").prop("disabled", true);
				tjq("#register-confirm-password").show();
				tjq("#register-confirm-password").html("<span style='color:#ff0000; font-size:8pt;'> Confirm password doesn't match.</span>");
			}
			else{
				tjq("#register-confirm-password").hide();
				tjq("#submit").prop("disabled", false);
			}
		}
	});
});