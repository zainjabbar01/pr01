<?php
 if (!$db=dbConnect()) 
 {      
	echo "<center><font color=red size=2><b>Error : Cannot Connect to the Database</b></font></center>";
	exit;
 }
 $operation = isset($_REQUEST['hidOperation']) ? $_REQUEST['hidOperation'] : '';

 $verificationCode = isset($_REQUEST['txtVerificationCode']) ? $_REQUEST['txtVerificationCode'] : '';
 $login_success = isset($_REQUEST['login_success']) ? $_REQUEST['login_success'] : 0;

 //echo "verification Code = $verificationCode <br />";
 //echo "login_success = $login_success <br />"; 
 
 if($verificationCode == '' && $login_success == 3)
 {
	$verificationCode = isset($_REQUEST['vc']) ? $_REQUEST['vc'] : '';
	$user_id		  = isset($_REQUEST['uid']) ? $_REQUEST['uid']: '';
	$op		  		  = isset($_REQUEST['op']) ? $_REQUEST['op']: '';
	
	if ($op == 1) $operation = 'activate';
 }
 //echo "login_success = $login_success <br />";
 
 if ($login_success == 1)
 {
	 $message 		= "Congratulations! You have successfully register with us. <br /> Now, check your email for verification code.";
	 $message_class = "msg_successful_registration";
	 $login_success = 0;
 }
 else if($login_success == 2)
 {
	 $message 		= "Your Account is disabled. Check your email for verification code to activate it.";	
	 $message_class = "message_error";
	 $login_success = 0;
 }
 else if($login_success == 4)
 {
	 $message 		= "Kindly provide verification code sent to your email for account activation.";	
	 $message_class = "message_error";
	 $login_success = 0;
 }

 if ($operation == 'activate')
 {
	 $sql_verify = "select user_id, user_full_name, user_email
	 				from users where user_verify_code = '$verificationCode'";
	 //echo "$sql_verify <br />";
	 $rs_1 = dbGetResult($db, $sql_verify);
	 
	 if ($rs_1)
	 {
		 $rec_1 = dbGetObject($rs_1);
		 
		 $user_id 			= $rec_1[0]->user_id;
		 $user_full_name 	= $rec_1[0]->user_full_name;
		 $user_email 		= $rec_1[0]->user_email;
		 
		 $sql_up = "update users 
		 					set user_status = 'E'
							    , verify_code_time = sysdate
					where user_id = '$user_id'
					";
		//echo "$sql_up <br />";			
		$rs_up = dbExecuteSql($db, $sql_up);
		if ($rs_up)
		{
			session_start();				
			session_regenerate_id(true);
			//echo "session started <br />";
			$my_session_id = session_id();
			$_SESSION['ses_user_id'] 		= $user_id;
			$_SESSION['ses_user_full_name'] = $user_full_name;
			$_SESSION['ses_user_email'] 	= $user_email;
			$_SESSION['ses_my_ses_id']		= $my_session_id;
			$_SESSION['ses_login_status'] 	= true;
			
			
			if($_SESSION['user_plan_id'] == '')
			{
				$sql = " select plan_id from user_plans where user_id = '$user_id' and nvl(active_status,0) = 1 order by choose_date desc ";
				$rs  = dbGetResult($db,$sql);
				if($rs)
				{
					$_SESSION['user_plan_id'] = $rs->fields[0];
				}
				else
				{
					$_SESSION['user_plan_id'] = 0;
				}
			}
			
			
			?>
            	<script language="javascript">
					location.href = "reg_user_payment.php";
				</script>
            <?php	
		}
		 
	 }
	 else
	 {
	 	$message 		= "Invalid Verification Code!"; 
		$message_class 	= "message_error";
	 }
 }
 else if($operation == 'resend')
 {
	 $userEmailAddress = isset($_REQUEST['txtEmailAddress']) ? $_REQUEST['txtEmailAddress'] : '';
	 
	 $sql_resend = "select user_id, user_verify_code from users where user_email = '$userEmailAddress'";
	 $rs_resend = dbGetResult($db, $sql_resend);
	 
	 if ($rs_resend)
	 {
		 $rec = dbGetObject($rs_resend);
		 
		 $userID		 = $rec[0]->user_id;
		 $userVerifyCode = $rec[0]->user_verify_code;
		 
		 
			$url		= "http://www.procurementregistration.com/beta";
			$salutation = $userFullname."<br /><br /><br />";
			$messageSubject = "Account Activation Email from ProcurementRegistration.com";
			$messageText	= "Dear $userFullname,
							   
							   Kindly, click on the link below or copy and paste it to the browser location bar to activate your account i.e.
							   
							   $url/successfull_registration.php?vc=$userVerifyCode&uid=$user_id&login_success=3&op=1
							  
							   Note the verification code and then add activate the account manually to link provided below:
							   
							   Verification Code: $userVerifyCode
							   
							   Use or click the following URL i.e. $url/successfull_registration.php?login_success=4
							   
							   In case of any problem, contact the helpdesk.
							   
							   Cheers,
							   Procurement Registration Team.
							   ";
		
			$mailbody = "<table width='100%' border='0' cellspacing='0' cellpadding='5'>
						  <tr>
							<td align='right' width='12%' class='mail_head'>Date: </td>
							<td  align='left' class='mail_body'>".$systemDateTime."</td>
						  </tr>
						  <tr>
							<td align='right' class='mail_head'>From: </td>
							<td  align='left' class='mail_body'>$emailAddress</td>
						  </tr>
						  <tr>
							<td align='right' class='mail_head'>Subject:</td>
							<td  align='left' class='mail_body'>$messageSubject</td>
						  </tr>
						  <tr>
							<td align='right' class='mail_head'>&nbsp;</td>
							<td  align='left' class='mail_body'>$salutation</td>
						  </tr>
						  <tr>
							<td align='right' class='mail_head'>&nbsp;</td>
							<td  align='left' class='mail_body'><p> $messageText </p></td>
						  </tr>
						</table>
		
						";
			require("includes/PHPMailer/class.phpmailer.php"); // path to the PHPMailer class
	 
			$mail = new PHPMailer();  
			 
			$mail->IsSMTP();  // telling the class to use SMTP
			$mail->Mailer = "smtp";
			$mail->Host = "ssl://smtp.gmail.com";
			$mail->Port = 465;
			$mail->SMTPAuth = true; // turn on SMTP authentication
			$mail->Username = "navid.development@gmail.com"; // SMTP username
			$mail->Password = "pearlharbour23"; // SMTP password 
			 
			$mail->FromName = "Procurement Registration";
			$mail->From     = "navid.development@gmail.com";
			
			$mail->AddAddress($userEmailAddress);   // This is the email address to whom email will be sent.
			 
			$mail->Subject  = $messageSubject;
			$mail->Body     = $messageText;
			$mail->WordWrap = 50;  
			 
			//if($result)
			if($mail->Send())
			{
				 $message 		= "Verification Code is resend to your Email Address ($userEmailAddress) Successfully.";	
				 $message_class = "msg_successful_registration";
			} 
			else
			{
				$message = 'Verification Code resend failed.';
				$message_class = 'message_error';
			}
	 }
	 else
	 {
		$message = "The provided email is not found in the database.";
		$message_class = "message_error"; 
	 }
	 
 }
 
 
// echo "verificationCode = $verificationCode <br />";
// echo "operation = $operation <br />";
?>

<form name="frmUserVerification" id="frmUserVerification" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="20px">&nbsp; </td>
  </tr>
  <tr>
    <td class="msg_successful" align="center" height="60px"><label id="lblMessage"></label></td>
  </tr>
   <tr>
    <td height="20px"></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="30%" align="right"> <font class="asterik">*</font> Verification Code</td>
        <td>
        	<input type="text" class="n_textbox" style="width:250px" size="40" id="txtVerificationCode" name="txtVerificationCode" value="<?php echo $verificationCode?>" tabindex="1" />
            <label class="lblHelp" id="lblName" title = "Enter Verification Code that you have received in your email box."> ? </label>
        </td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td>All fields marked with (<font class="asterik">*</font>) are required.</td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td>
          <input type="button" name="btnActivate" id="btnActivate" value="Activate and Continue" onclick="activateUser();" tabindex="2" /></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td>If you are unable to receive the verification code in your email box then resend it again.</td>
      </tr>
      <tr>
        <td align="right"> <font class="asterik">* </font>Email Address</td>
        <td>
        	<input type="text" class="n_textbox" style="width:250px" size="40" id="txtEmailAddress" name="txtEmailAddress" value="<?php echo $emailAddress?>" tabindex="4" />
        	<input type="button"  value="Resend Code" name="btnResendCode" id="btnResendCode" onclick="resendCode();" />
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<input type="hidden" name="hidOperation" id="hidOperation" value="<?php echo $operation?>" tabindex="-1" />
<input type="hidden" name="hidResendCode" id="hidResendCode" value="<?php echo $resendCode?>" tabindex="-1" />
</form>

<script language="javascript">
	
	document.frmUserVerification.txtVerificationCode.focus();
	
	if ('<?php echo $message != '' ?>')
	{
		document.getElementById('lblMessage').innerHTML = '<?php echo $message?>';
		document.getElementById('lblMessage').className = '<?php echo $message_class?>';
	}
	
	function resetFields()
	{
		document.frmUserVerification.txtVerificationCode.value = '';
		document.frmUserVerification.txtVerificationCode.focus();
		
		document.getElementById('lblMessage').innerHTML = '';
	}
	
	function activateUser()
	{
		if(document.frmUserVerification.txtVerificationCode.value == '')	
		{
			alert("Enter Verification Code that has been sent to your email.");
			document.frmUserVerification.txtVerificationCode.focus();
			return false;	
		}
		else
		{
			document.frmUserVerification.hidOperation.value = 'activate';
			document.frmUserVerification.submit();	
		}
	}
	
	function resendCode()
	{
		if (document.frmUserVerification.txtEmailAddress.value == '')
		{
			alert('Enter Email Address to Send the Verification Code');
			document.frmUserVerification.txtEmailAddress.focus();
			return false;	
		}
		else
		{
			document.frmUserVerification.hidResendCode.value = 'Y';
			document.frmUserVerification.hidOperation.value = 'resend';
			document.frmUserVerification.submit();	
		}
	}
	
</script>