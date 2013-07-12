<?php
 //include_once('includes/includefilespath.php');
// 
// 
 if (!$db=dbConnect()) 
 {      
	echo "<center><font color=red size=2><b>Error : Cannot Connect to the Database</b></font></center>";
	exit;
 }
 
 $userFullname = isset($_REQUEST['txtFullName']) ? $_REQUEST['txtFullName'] : '';
 $userEmailAddress = isset($_REQUEST['txtEmail']) ? $_REQUEST['txtEmail'] : '';
 $username = isset($_REQUEST['txtUsername']) ? $_REQUEST['txtUsername'] : ''; 
 
 $userPassword = isset($_REQUEST['txtPassword']) ? $_REQUEST['txtPassword'] : ''; 
 $chkAgreement = isset($_REQUEST['chkTermsConditions']) ? $_REQUEST['chkTermsConditions'] : false; 
 
 $operation = isset($_REQUEST['hidOperation']) ? $_REQUEST['hidOperation'] : ''; 
 
 if($chkAgreement == 'on') $chkAgreement = 'Y';
 else $chkAgreement = 'N';
 /*
 echo "userFullName = $userFullname <br />";
 echo "userEmailAddress = $userEmailAddress <br />"; 
 
 echo "username = $username <br />"; 
 echo "userPassword = $userPassword <br />"; 
 echo "chkAgreement = $chkAgreement <br />"; 

 echo "operation = $operation <br />";
 */

 if ($operation == 'register')
 {
	$sql_email_chk = "select user_id from users where user_email = '$userEmailAddress'";
	
	$rs_email_chk = dbGetResult($db, $sql_email_chk);
	if(!$rs_email_chk)
	{
	
		$sql_max = "select nvl(max(user_id), 0)+1 user_id from users ";
		$rs_max = dbGetResult($db, $sql_max);
		
		if ($rs_max)
		{
			$rec_max = dbGetObject($rs_max);
			
			$user_id = $rec_max[0]->user_id;
		}
		
		$verificationCode = rand(11111, 99999);
		//echo "verification code  = $verificationCode <br />";
		$userPassword = md5($userPassword);
	
		$sql_ins = "insert into users (
																user_id,
																user_name,
																user_full_name,
																user_email,
																user_password,
																user_agreement,
																user_status,
																updt_time,
																user_verify_code,
																user_ip,
																user_product_choice
																)
														values (
																$user_id
																, '$username'
																, '$userFullname'
																, '$userEmailAddress'
																, '$userPassword'
																, '$chkAgreement'
																, 'D'
																, sysdate
																, '$verificationCode'
																, '".$_SERVER['REMOTE_ADDR']."'
																, '".$_REQUEST['opt_product']."'
																)";
		//echo $sql_ins;
		
		$rs_ins = dbExecuteSql($db, $sql_ins);
				
		
		if($rs_ins)
		{
				
				// Insert selected product list
				/*		
				for($i=1; $i<= $_REQUEST['b_tot_chk']; $i++)
				{
					if($_REQUEST['chk_bp_'.$i] > 0)
					{
						$product_id = $_REQUEST['chk_bp_'.$i];
						
						$sql = " INSERT INTO USER_PRODUCT_LIST(USER_ID, PRODUCT_ID, UPDATE_DATE)
									VALUES('$user_id', '$product_id',sysdate) ";						
						dbExecuteSQL($db,$sql);
					}
				}
				
				for($i=1; $i<= $_REQUEST['s_tot_chk']; $i++)
				{
					if($_REQUEST['chk_sp_'.$i] > 0)
					{
						$product_id = $_REQUEST['chk_sp_'.$i];
						
						$sql = " INSERT INTO USER_PRODUCT_LIST(USER_ID, PRODUCT_ID, UPDATE_DATE)
									VALUES('$user_id', '$product_id',sysdate) ";						
						dbExecuteSQL($db,$sql);
					}
				}
				*/
				
				
				// Check User Verification Required or Not
				
				/*
				$sql = " SELECT COUNT(*) req_verify_count
							FROM product_list WHERE NVL(req_verify,0) = 1
							AND product_id IN (SELECT product_id FROM user_product_list WHERE user_id = '$user_id') ";
				$rs  = dbGetResult($db,$sql);
				$req_verify_count = $rs->fields[0];
												
				if($req_verify_count > 0)
				{
					dbExecuteSQL($db," update users set user_verified = 1 where user_id = '$user_id' ");
				}
				*/
				
				// User Always Verified
				dbExecuteSQL($db," update users set user_verified = 1 where user_id = '$user_id' ");
				
				
				
				// Insert user selected plan in DB
				
				$sql = " INSERT INTO USER_PLANS(USER_ID, PLAN_ID, CHOOSE_DATE, ACTIVE_STATUS)
							  VALUES('$user_id', '".$_SESSION['user_plan_id']."', sysdate, '1') ";							  
				dbExecuteSQL($db,$sql);
				
				
				if($_SESSION['extra_plan_1'] > 0)
				{
					$sql = " INSERT INTO USER_PLANS(USER_ID, PLAN_ID, CHOOSE_DATE, ACTIVE_STATUS)
							  VALUES('$user_id', '".$_SESSION['extra_plan_1']."', sysdate, '1') ";							  
					dbExecuteSQL($db,$sql);	
				}
			
				if($_SESSION['extra_plan_2'] > 0)
				{
					$sql = " INSERT INTO USER_PLANS(USER_ID, PLAN_ID, CHOOSE_DATE, ACTIVE_STATUS)
							  VALUES('$user_id', '".$_SESSION['extra_plan_2']."', sysdate, '1') ";							  
					dbExecuteSQL($db,$sql); 	
				}
				
				
				
				if($_SESSION['user_plan_id'] == '')
				{
					$sql = " INSERT INTO USER_PLANS(USER_ID, PLAN_ID, CHOOSE_DATE, ACTIVE_STATUS)
							  VALUES('$user_id', '18', sysdate, '1') ";							  
					dbExecuteSQL($db,$sql); 
				}	
				
				
				
				
				
				
				
				
				$url		= "http://www.procurementregistration.com/beta";
				$salutation = $userFullname."<br /><br /><br />";
				$messageSubject = "Account Activation Email from ProcurementRegistration.com";
				$messageText	= "Dear $userFullname, <br><br>
								   
								   Kindly, click on the link below or copy and paste it to the browser location bar to activate your account i.e.
								   <br>
								   $url/successfull_registration_1.php?vc=$verificationCode&uid=$user_id&login_success=3&op=1
								   <br>
								   Note the verification code and then add activate the account manually to link provided below:
								   <br><br>
								   <b>Verification Code: </b> $verificationCode <br><br>
								   
								   Use or click the following URL i.e. <br> $url/successfull_registration_1.php?login_success=4
								   <br><br>
								   In case of any problem, contact the helpdesk.
								   <br><br>
								   Thank you, <br>
								   Procurement Registration
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
				
				/* 
				$mail->IsSMTP();  // telling the class to use SMTP
				$mail->Mailer = "smtp";
				$mail->Host = "ssl://smtp.gmail.com";
				$mail->Port = 465;
				$mail->SMTPAuth = true; // turn on SMTP authentication
				$mail->Username = "navid.development@gmail.com"; // SMTP username
				$mail->Password = "pearlharbour23"; // SMTP password 
				 
				$mail->FromName = "Procurement Registration";
				$mail->From     = "navid.development@gmail.com";
				*/
				
				
				$mail->AddReplyTo("contact@procurementregistration.com","Procurement Registration");
				$mail->SetFrom('contact@procurementregistration.com', 'Procurement Registration');
				
				$mail->AddAddress($userEmailAddress);   // This is the email address to whom email will be sent.				 
				$mail->Subject  = $messageSubject;
				
				$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test		
				$mail->MsgHTML($messageText);						
				 
				//if($result)
				if($mail->Send())
				{
					//echo 'msg sent successfully - '.$userEmailAddress;
					$errorMessage = 'Email Sent Successfully.';
					$messageClass = 'message_success';
				} 
				else
				{
					$errorMessage = 'Email Sent Failed.';
					$messageClass = 'message_error';
				}
			
			
			?>
				<script language="javascript">
					location.href = "successfull_registration_1.php?login_success=1";
				</script>
			<?	
		}
		
	}
	else
	{
		$message = "Email Address is already registered with the system. Goto forgot password page to recover the password.";
		$message_class = "message_error";	
	}
	 
 }
 
?>

<form name="frmUserRegistration" id="frmUserRegistration" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="form_step_heading">User Registration</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td width="130" height="28" align="right" class="n_label"><font class="asterik">*</font> Name</td>
        <td rowspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="245" height="28"><input type="text" class="n_textbox" style="width:200px" size="40" id="txtFullName" name="txtFullName" value="<?php echo $userFullname?>" tabindex="1" />
              <label class="lblHelp" id="lblName" title = "Enter Your Full Name."> ? </label></td>
            <td width="756" rowspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center">
				<?=$reg_mnu_detail?>
				<!--<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#F00; font-weight:bold"> LIMITED TIME ONLY: VALUE $97 </span><br />
                  <span style="font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#F00; font-weight:bold"> FREE INSTANT REGISTRATION ON </span><br />
                  <span style="font-family:Arial, Helvetica, sans-serif; font-size:22px; color:#F00; font-weight:bold"> 03 Matched Buyers </span><br />
                  <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; color:#F00; font-weight:bold"> YOUR SELECTION OF THESE CORPORATE PORTALS! </span>--></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><input type="text" class="n_textbox" style="width:200px" size="40" id="txtEmail" name="txtEmail" value="<?php echo $userEmailAddress?>" tabindex="2" />
              <label class="lblHelp" id="lblEmail" title = "Enter Valid Email Address."> ? </label></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="right" class="n_label"><font class="asterik">*</font> Email</td>
        </tr>      
      <tr>
        <td align="right" class="n_label"> <font class="asterik">*</font> Username</td>
        <td valign="top">
          <div style="display:inline;">
            <div style="display:block; width:270px;float:left;">
              <input type="text" class="n_textbox" style="width:200px" size="40" id="txtUsername" name="txtUsername" value="<?php echo $username?>" tabindex="3" onchange="check_username(this.value);" />
              <label class="lblHelp" id="lblUsername" title = "Enter Username."> ? </label>
              </div>
            <div style="width:280; float:left; vertical-align:central;">
              <iframe name="checkUsername" src="check_username.php" width="150" height="20px" scrolling="no" frameborder="0"> <font size="2" face="Arial, Helvetica, sans-serif" color="#FFFFFF"> Your browser does not support inline frames, <br />
                Please check your browser current version and <a href="upgrade_browser.htm">upgrade.</a></font></iframe>
              </div>
            </div>
          </td>
      </tr>
      <tr>
        <td align="right" class="n_label"> <font class="asterik">*</font> Password</td>
        <td>
          <input type="password" class="n_textbox" style="width:200px" size="40" id="txtPassword" name="txtPassword" value="<?php echo $userPassword?>" tabindex="4" maxlength="12" />
          <label class="lblHelp" id="lblPassword" title = "Choose Password minimum 6 characters long."> ? </label>
          </td>
      </tr>
      <tr>
        <td align="right" class="n_label"> <font class="asterik">*</font> Confirm Password</td>
        <td>
        	<input type="password" class="n_textbox" style="width:200px" size="40" id="txtConfirmPassword" name="txtConfirmPassword"  value="<?php echo $userPassword?>" tabindex="5" maxlength="12" />
            <label class="lblHelp" id="lblPassword" title = "Enter the same password written in Password Field."> ? </label>
        </td>
      </tr>
      
      
      
      <? /* ?>
      
      
      <tr>
        <td align="right" valign="top"  class="n_label" style="padding-top:10px;"><font class="asterik">*</font> Product Choice</td>
        <td align="left" valign="top"  class="n_label"><table width="450" border="1" cellspacing="0" cellpadding="3">
          <tr>
            <td width="50%" bgcolor="#EFEFEF"><input type="radio" name="opt_product" id="opt_product" value="buyer" onclick="func_product_choice(this.value)" />
Buyer Products</td>
            <td bgcolor="#EFEFEF"><input name="opt_product" type="radio" id="opt_product" value="supplier" onclick="func_product_choice(this.value)" />
Supplier Products</td>
          </tr>
          <tr>
            <td align="left" valign="top">
            <?
				$sr = 0;
            	$sql = " select product_id, product_name, product_desc from product_list where nvl(for_buyer,0) = 1 and nvl(parent_id,0) = 0 AND nvl(active,0) = 1 ";
				$rs  = dbGetResult($db,$sql);
				if($rs)
				{
					while($rs && $rec = dbGetObject($rs))
					{
						$sr++;
			?>
            			<input type="checkbox" name="chk_bp_<?=$sr?>" value="<?=$rec[0]->product_id?>" />
                        <?=$rec[0]->product_name?>
                        <br />
            <?			
					}
				}
			
			?>
            
            <input type="hidden" name="b_tot_chk" value="<?=$sr?>" />
            </td>
            <td align="left" valign="top">
             <?
				$sr = 0;
            	$sql = " select product_id, product_name, product_desc from product_list where nvl(for_supplier,0) = 1 and nvl(parent_id,0) = 0 AND nvl(active,0) = 1 ";
				$rs  = dbGetResult($db,$sql);
				if($rs)
				{
					while($rs && $rec = dbGetObject($rs))
					{
						$sr++;
			?>
            			<input type="checkbox" name="chk_sp_<?=$sr?>" value="<?=$rec[0]->product_id?>" />
                        <?=$rec[0]->product_name?>
                        <br />
            <?			
					}
				}
			
			?>
            
            <input type="hidden" name="s_tot_chk" value="<?=$sr?>" />
            </td>
          </tr>
        </table></td>
      </tr>
      
      
      <? */ ?>
      
      
      
      
      
      <tr>
        <td align="center" valign="top"  class="n_label">&nbsp;</td>
        <td align="left" valign="top"  class="n_label"><iframe name="frame_tc" id="frame_tc" src="reg_terms_and_conditions.html" frameborder="0" width="450px" height="200px" scrolling="Auto" style="border-width:1px; border-style:solid; border-color:#999;"> Your browser does not support iframes. Please upgrade your browser. </iframe></td>
      </tr>
      
      <tr>
        <td align="right">&nbsp;</td>
        <td><font class="asterik">*</font>
            <input type="checkbox" name="chkTermsConditions" id="chkTermsConditions" tabindex="6"/>
			I agree  terms and conditions</td>
      </tr>
      <!--<tr>
        <td align="right">&nbsp;</td>
        <td><img src="images/captcha-1.jpg" width="273" height="58" alt="Captcha" /></td>
      </tr>
      <tr>
        <td align="right"><font class="asterik">*</font> Captcha</td>
        <td><input type="text" class="n_textbox" style="width:200px" size="40" id="txtCaptcha" name="txtCaptcha" value="<?php echo $captcha?>" tabindex="3" /></td>
      </tr>-->
      <tr>
        <td align="right">&nbsp;</td>
        <td>All fields marked with (<font class="asterik">*</font>) are required.</td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td>
          <input type="button" name="btnRegister" id="btnRegister" value="Continue" onclick="registerUser();" tabindex="8"  />
          &nbsp;
          <!--
          <input class="buttons" type="button" name="btnReset" id="btnReset" value="Reset" onclick="resetFields();" tabindex="9" />
          -->
		</td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td><label id="lblMessage"></label></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<input type="hidden" name="hidOperation" id="hidOperation" value="<?php echo $operation?>" tabindex="-1" />
<input type="hidden" name="hidIsUserFound" id="hidIsUserFound" tabindex="-1" />
</form>
<script language="javascript">
	function validateFields()
	{
		frm = document.frmUserRegistration;
		if (frm.txtFullName.value == "")
		{
			alert("Enter User Full Name.");
			frm.txtFullName.focus();
			return false;	
		}
		else if (frm.txtEmail.value == "")
		{
			alert("Enter Valid Email Address.");
			frm.txtEmail.focus();
			return false;	
		}
		else if (!(validateEmail(frm.txtEmail.value)))
		{
			//alert("Enter Valid Email Address.");
			frm.txtEmail.value = '';
			frm.txtEmail.focus();
			return false;	
		}
			
		else if (frm.txtUsername.value == "")
		{
			alert("Enter Username.");
			frm.txtUsername.focus();
			return false;	
		}
		else if (document.frmUserRegistration.hidIsUserFound.value == 1)
		{
			alert("Username already registered. Try Another!");
			frm.txtUsername.focus();
			return false;
		}
		else if (frm.txtPassword.value == "")
		{
			alert("Enter Password min. 6 characters long.");
			frm.txtPassword.focus();
			return false;	
		}
		else if (frm.txtConfirmPassword.value == "")
		{
			alert("Enter Confirm Password.");
			frm.txtConfirmPassword.focus();
			return false;	
		}
		else if (frm.txtPassword.value != frm.txtConfirmPassword.value)
		{
			alert("Password and Confirm Password Fields do not match.");
			frm.txtPassword.value = '';
			frm.txtConfirmPassword.value = '';
			frm.txtPassword.focus();
			return false;
		}
		else if (frm.chkTermsConditions.checked == false)
		{
			alert("Check the checkbox to accept our terms and serivces.");
			return false;
		}
		
		
		
		
		/*
		if(document.frmUserRegistration.opt_product[0].checked == false && document.frmUserRegistration.opt_product[1].checked == false)
		{
			alert("Please select at least one product from Buyer/Supplier Products");
			return false;
		}
		
		if(document.frmUserRegistration.opt_product[0].checked)
		{
			b_tot_chk = document.frmUserRegistration.b_tot_chk.value;
			select_count = 0;
			for(i=1; i<= b_tot_chk; i++)
			{
				chk = eval("document.frmUserRegistration.chk_bp_"+i);
				if(chk.checked)
					select_count = 1;										
			}
			
			if(select_count == 0)
			{
				alert("Please select at least one product from Buyer/Supplier Products");
				return false;
			}
		}
		
		
		if(document.frmUserRegistration.opt_product[1].checked)
		{			
			s_tot_chk = document.frmUserRegistration.s_tot_chk.value;		
			select_count = 0;
			for(i=1; i<= s_tot_chk; i++)
			{
				chk = eval("document.frmUserRegistration.chk_sp_"+i);
				if(chk.checked)
					select_count = 1;	
			}
			
			if(select_count == 0)
			{
				alert("Please select at least one product from Buyer/Supplier Products");
				return false;
			}
		}
		*/
		
		return true;
	}
	
	function validateEmail(val)
	{
		if (val.indexOf("@") < 0) 
		{
			alert("Enter Valid Email Address.");
			frm.txtEmail.focus();
			return false;
		} 
		else if (val.indexOf(".") < 0) 
		{
			alert("Enter Valid Email Address.");
			frm.txtEmail.focus();
			return false;
		}
		else if (val.indexOf(" ") >= 0) 
		{
			alert("Enter Valid Email Address.");
			frm.txtEmail.focus();
			return false;
		}
		return true;
	}

	function resetFields()
	{
		frm = document.frmUserRegistration;
		frm.txtFullName.value = '';
		frm.txtEmail.value = '';
		frm.txtUsername.value = '';
		frm.txtPassword.value = '';
		frm.txtConfirmPassword.value = '';
		frm.chkTermsConditions.checked = false;
		frm.hidIsUserFound.value = '';
		frames['checkUsername'].document.getElementById('lblMessage').innerHTML = '';
		document.frmUserRegistration.opt_product[0].checked = false;
		document.frmUserRegistration.opt_product[0].checked = false;
		func_product_choice();
		
		frm.txtFullName.focus();
		
	}
	
	function registerUser()
	{
		if (validateFields())	
		{
			document.frmUserRegistration.hidOperation.value = 'register';
			document.frmUserRegistration.submit();
			//location.href = "successfull_registration_1.php";
		}
	}
	
	if('<?php echo $message != '' ?>')
	{
		document.getElementById('lblMessage').innerHTML = '<?php echo $message?>';
		document.getElementById('lblMessage').className = '<?php echo $message_class?>';	
	}
	
	function check_username(usrname)
	{
		frames['checkUsername'].document.frmCheckUsername.hidUsername.value = usrname;
		frames['checkUsername'].document.frmCheckUsername.submit();	
	}
	
	
	
	function func_product_choice(val)
	{	
		
		b_tot_chk = document.frmUserRegistration.b_tot_chk.value;		
		for(i=1; i<= b_tot_chk; i++)
		{
			chk = eval("document.frmUserRegistration.chk_bp_"+i);
			chk.checked = false;
			chk.disabled= true;
		}
		
		s_tot_chk = document.frmUserRegistration.s_tot_chk.value;
		for(i=1; i<= s_tot_chk; i++)
		{
			chk = eval("document.frmUserRegistration.chk_sp_"+i);
			chk.checked = false;
			chk.disabled= true;
		}
		
		if(document.frmUserRegistration.opt_product[0].checked)
		{	
			b_tot_chk = document.frmUserRegistration.b_tot_chk.value;
			for(i=1; i<= b_tot_chk; i++)
			{
				chk = eval("document.frmUserRegistration.chk_bp_"+i);
				chk.disabled= false;
			}
			
			s_tot_chk = document.frmUserRegistration.s_tot_chk.value;
			for(i=1; i<= s_tot_chk; i++)
			{
				chk = eval("document.frmUserRegistration.chk_sp_"+i);
				chk.checked = false;
				chk.disabled= true;
			}
		}
		
		if(document.frmUserRegistration.opt_product[1].checked)
		{
			b_tot_chk = document.frmUserRegistration.b_tot_chk.value;
			for(i=1; i<= b_tot_chk; i++)
			{
				chk = eval("document.frmUserRegistration.chk_bp_"+i);
				chk.checked = false;
				chk.disabled= true;
			}
			
			s_tot_chk = document.frmUserRegistration.s_tot_chk.value;
			for(i=1; i<= s_tot_chk; i++)
			{
				chk = eval("document.frmUserRegistration.chk_sp_"+i);
				chk.disabled= false;
			}
		}
		
	}
	
	
	func_product_choice();
	
</script>