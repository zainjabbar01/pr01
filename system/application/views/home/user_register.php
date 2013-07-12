<script type="text/javascript">


$(document).ready(function(){
	
	$("#user_signup_form").live("submit",function(e){ 
		
		var valid = true;
		var echeck = '';
		var pcheck = '';
		
		if(check_valid_email($('#email').attr("value"))){
			if(!verify_email($('#email').attr("value"))){ 
				valid = false; 
			}
			valid = true;
			echeck = true;
		}else{
			alert("Inavlid Email");
			valid = false;
			echeck = false;
		}
		
		if(check_valid_uname($('#uname').attr("value"))){
			if(!verify_uname($('#uname').attr("value"))){ 
				valid = false; 
			}
			valid = true;
			echeck = true;
		}else{
			alert("Inavlid Username");
			valid = false;
			echeck = false;
		}
		
		if($('#password').attr("value") == "" && $('#cpassword').attr("value") == ""){ 
			alert("Please enter password");
			valid = false;
			pcheck = false;
		}
		
		if($('#password').attr("value") != $('#cpassword').attr("value")){ 
			alert("Passwords do not match!");
			valid = false;
			pcheck = false;
		}
			
		if(echeck===false){ valid = false; }
		if(pcheck===false){ valid = false; }
		
		//alert(valid); return false;
		return valid;
	});
	
	//Function to display messages
	function show_message(type, heading, message) {
		alert(heading+" "+message);
	}
	
	//verify email address validity & existence
	var verify_email = function(email){

		var success 	= true;
		var emailtext	= $('.email-text');
		
		$.ajax({
			type: "POST",
			data: "email="+email,
			url: base_url+"index.php/main/home/verify_email",
			beforeSend: function(){
				$('.email-text').html("Checking Email...");
			},
			success: function(data){
				if(data == "invalid")
				{	
					alert('Inavlid Email');
					$('.email-text').html("Inavlid Email");
					success = false;
					return false;
				}
				else if(data > 0)
				{
					alert('Email Already Exists');
					$('.email-text').html("Email Already Exists");
					success = false;
					return false;
				}
				else if(data == 0)
				{
					//alert('Email Available');
					$('.email-text').html("Email Available");
					success = true;
				}
				//alert(data);
			},
			async: false
		});
		
		return success;
	}
	
	//verify username validity & existence
	var verify_uname = function(uname){

		var success 	= true;
		var unametext	= $('.uname-text');
		
		$.ajax({
			type: "POST",
			data: "uname="+uname,
			url: base_url+"main/home/verify_uname",
			beforeSend: function(){
				$('.uname-text').html("Checking Username...");
			},
			success: function(data){
				if(data > 0)
				{
					alert('Username Already Exists');
					$('.uname-text').html("Username Already Exists");
					success = false;
					return false;
				}
				else if(data == 0)
				{
					$('.uname-text').html("Username Available");
					success = true;
				}
				//alert(data);
			},
			async: false
		});
		
		return success;
	}	
	
	// Email Validation Check
	function check_valid_email(str)
	{
		var regex = /^(([\-\w]+)\.?)+@(([\-\w]+)\.?)+\.[a-zA-Z]{2,4}$/;
		if(regex.test(str))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	// Username Validation Check
	function check_valid_uname(str)
	{
		var regex = /^[a-z0-9]*$/; //no spaces or special chars
		if(regex.test(str))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	
});



</script>

<div id="content" style="height:150px">
        <!--<div id="content-right">
        	<?php //$this->load->view('user/right-bar-user'); ?>
	</div>-->

        <div class="offset1 span7">
        <form method="post" action="<?php echo base_url();?>main/home/user_create_account" id="user_signup_form" name="user_signup_form"  autocomplete="on">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                                <td colspan="2" class="page-heading">User Registration</td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                        </tr>
                        <tr>
                                <td>Name <font class="asterik">*</font></td>
                                <td><input type="text" name="name" id="name" class="input-xxlarge" required /></td>
                        </tr>
                        <tr>
                                <td>Email <font class="asterik">*</font></td>
                                <td><input type="text" name="email" id="email" class="input-xxlarge" required />&nbsp;<span class="email-text"></span></td>
                        </tr>
                        <tr>
                                <td>Username <font class="asterik">*</font></td>
                                <td><input type="text" name="uname" id="uname" class="input-xxlarge" required />&nbsp;<span class="uname-text"></span></td>
                        </tr>
                        <tr>
                                <td>Password <font class="asterik">*</font></td>
                                <td><input type="password" name="password" id="password" class="input-xxlarge" required /></td>
                        </tr>
                        <tr>
                                <td>Confirm Password <font class="asterik">*</font></td>
                                <td><input type="password" name="cpassword" id="cpassword" class="input-xxlarge" required /></td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>
                                	<iframe name="frame_tc" id="frame_tc" src="http://www.procurementregistration.com/beta/reg_terms_and_conditions.html" frameborder="0" width="540px" height="200px" scrolling="Auto" style="border-width:1px; border-style:solid; border-color:#999;"> Your browser does not support iframes. Please upgrade your browser. </iframe>
                                </td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>
                                	<font class="asterik">*</font>
            				<input type="checkbox" name="agree" id="agree" value="Y" required >&nbsp;I agree  terms and conditions
                                </td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>All fields marked with (<font class="asterik">*</font>) are required.</td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>
                                	<input type="submit" class="btn btn-success" name="register" id="register" value="Continue" >
                                </td>
                        </tr>
                </table>
        </form>
        </div>
</div>
<div id="content" align="center" style="clear:both"></div>