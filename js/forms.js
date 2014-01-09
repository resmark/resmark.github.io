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


/* Fixed Help Scroll */
var elementPosition = $('#help').offset();

$(window).scroll(function(){
        if($(window).scrollTop() > elementPosition.top){
              $('#help').css('position','fixed').css('right','0');
        } else {
            $('#help').css('position','inherit');
        }    
});

/* Help Hover on Input */
	var visible = 0;
	var firstNameText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Enter your first name as it will appear on emails and reservation history. Alternatively, you may login with an outside account and we'll fill in this information for you.</p>";
	var lastnameText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Enter your last name as it will appear on emails and reservation history.</p>";
	var emailText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Your email address that you use for business purposes.  This will be used for your login and to receive notifications from Resmark.</p>";
	var passwordText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Your password must be at least 8 digits long, contain at least one number, lowercase letter and uppercase letter.</p>";
	var companyNameText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Enter your company name as it will appear on confirmations, emails and within the Resmark community. If you have multiple companies or brands, you will have the option later to associate other company accounts to this user.</p>";
	var locationText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Enter the location of your primary place of business where you'll be taking reservations. Your timezone for operating hours will be based on this location. Note that each of your products can have a different location and timezone.</p>";
	var phoneText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Enter your phone number as it will be displayed on confirmations and emails and within the Resmark community. Choose the type of phone (local, toll free or mobile). Select 'add phone' to create additional phone numbers if needed.</p>";
	var businessText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Select your primary business focus. A supplier manages product inventory of activities, events, lessons, appointments, etc and can sell products from other suppliers or operators.  An agent or reseller will have access to sell the inventory of suppliers, but will not create any inventory themselves.</p>";
	var websiteText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Enter the URL of your primary website as it will be displayed on confirmations, emails and the Resmark community. If you do not currently have a website, select 'I don't have a website.'</p>";
	var resmarkUrlText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>This url will be used at the time of checkout and as a way for agents and resellers to review and book your products.</p>";
	var socialAccountText = "<div class='help-title'><i class='fa fa-question-circle'> Help</i></div><p>Complete the url for your business pages within any of these social networks.  This will allow your customers to engage socially with your products and company.</p>";
	
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
	        else if (id == "companyName")
	            return companyNameText;
	        else if (id == "phone")
	            return phoneText;
	       else if (id == "location")
	            return locationText;
	       else if (id == "business")
	            return businessText;
	       else if (id == "website")
	            return websiteText;
	       else if (id == "resmarkUrl")
	            return resmarkUrlText;
	       else if (id == "emailText")
	            return emailTextText;
	       else if (id == "socialAccount")
	            return socialAccountText;
	    }).fadeIn(500);
	
	});
      
    
/*End All */   
});