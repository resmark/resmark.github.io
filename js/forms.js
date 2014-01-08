$(document).ready(function() {
/* Show Password*/
    $('#txthdnPassword').hide();
    $('#txthdnPassword').attr('readonly','readonly');
    $('#txtPassword').blur(function() {
        $('#txthdnPassword').val($(this).val());
    });

    $('#chkShow').change(function() {
        var isChecked = $(this).prop('checked');
        if (isChecked) {
            $('#txtPassword').hide();
            $('#txthdnPassword').show();
        }
        else {
            $('#txtPassword').show();
            $('#txthdnPassword').hide();
        }
    });


/* Help Hover on Input */
	var visible = 0;
	var firstNameText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Enter your first name as it will appear on emails and reservation history. Alternatively, you may login with an outside account and we'll fill in this information for you.</p>";
	var lastnameText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Enter your last name as it will appear on emails and reservation history.</p>";
	var emailText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Your email address that you use for business purposes.  This will be used for your login and to receive notifications from Resmark.</p>";
	var passwordText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Your password must be at least 8 digits long, contain at least one number, lowercase letter and uppercase letter.</p>";
	
	$('.help').on("focus", 'input', function(event){
	    var id = this.id;
	    if (visible == 0)
	    {
	        var fadeTime = 1;
	        visible = 1;
	    }
	    else
	        fadeTime = 100;
	    
	    $('#help').fadeOut(fadeTime).html(function() {
	        if (id == "firstName")
	            return firstNameText;
	        else if (id == "lastName")
	            return lastnameText;
	        else if (id == "email")
	            return emailText;
					else if (id == "txtPassword")
	            return passwordText;
	    }).fadeIn(500);
	
	});
      
    
/*End All */   
});