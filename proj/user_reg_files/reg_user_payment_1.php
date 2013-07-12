<?php session_start();  
	
	
	//$db->debug = true;
	
	//echo "<pre>";
	//print_r($_SESSION);
	//$action			= 'start_payment';
	//$supplier_id	= $_REQUEST['supplier_id'];	
	$opt_plan		= $_SESSION['user_plan_id'];
	
	
	/*
	$sql = " SELECT PLAN_PRICE, PLAN_NAME FROM PAYMENT_PLANS WHERE PLAN_ID = '$opt_plan' ";
	$rs  = dbGetResult($db,$sql);
	if($rs)
	{
		$rec = dbGetObject($rs);
		$payment_amount = $rec[0]->plan_price;
		$plan_name		= $rec[0]->plan_name;
	}
	else
		$payment_amount = 0;
	*/
	
	$extra_service_charges = 0;
	

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Supplier Registration</title>
<link href="payment/css/style_sami.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="payment/includes/datePicker/calendar.js"></script>
<script type="text/javascript" src="payment/includes/datePicker/calendar-setup.js"></script>
<script type="text/javascript" src="payment/includes/datePicker/calendar-en.js"></script>
<link href="payment/includes/datePicker/calendar-blue.css" rel="stylesheet" type="text/css" />

<style>

body
{
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
	color:#333;
}

.table_border
{
	border-style:solid;
	border-color:#CCC;
	border-width:1px;
}

.td_border
{
	border-style:solid;
	border-color:#CCC;
	border-width:1px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size:16px;
	color:#666;
}

.td_bg
{
	background-color:#E8E8E8;
	border-style:solid;
	border-color:#CCC;
	border-width:1px;	
	color:#039;
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;	
}



</style>

</head>

<body>

<table width="100%" border="0" cellpadding="5" cellspacing="0" class="table_border">
            
            
            
            <tr>
              <td colspan="2" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="20">
                <tr>
                  <td align="center"><table width="650" border="1" cellspacing="0" cellpadding="5">
                    
                    <tr>
                      <td width="50" align="center" bgcolor="#F2F2F2"><strong>Sr. #</strong></td>
                      <td bgcolor="#F2F2F2"><strong>Service / Plan Description</strong></td>
                      <td width="100" align="center" bgcolor="#F2F2F2"><strong>Amount</strong></td>
                      </tr>
                    <?
						$spe_status = 0;
                    
						$sql = " SELECT PLAN_ID, PLAN_PRICE, PLAN_NAME FROM PAYMENT_PLANS WHERE PLAN_ID in 
									(select plan_id from USER_PLANS where user_id = '".$_SESSION['ses_user_id']."' 
									  and active_status = 1 and nvl(payment_amount,0) = 0) order by display_order ";
						$rs  = dbGetResult($db,$sql);
						if($rs)
						{
							$total_amount = 0;
							$sr = 0;
							$str_2co 	= "";
							$str_pp		= "";
							$paypal_value = "";
							while($rs && $rec = dbGetObject($rs))
							{
								$sr++;
								
								$payment_amount = $rec[0]->plan_price;
								$plan_name		= $rec[0]->plan_name;
								$plan_id		= $rec[0]->plan_id;
								
								
								if($plan_id == 13 or $plan_id == 14 or $plan_id == 15)
								{
									$spe_status = 1;
									
									if($plan_id == 13)
										$paypal_value = "Standard Registration";
									
									if($plan_id == 14)
										$paypal_value = "Pro Registration";
									
									if($plan_id == 15)
										$paypal_value = "ENTERPRISE Registration";
									
								}
								
								
								$str_2co		= $str_2co . " <input type='hidden' name='quantity".$sr."' value='1'> ";
								$str_2co		= $str_2co . " <input type='hidden' name='product_id".$sr."' value='".$plan_id."'> ";
								
								
								$total_amount	= $total_amount + $payment_amount;
								
	    
								
								
								
					?>
                    
                    				<tr>
                                      <td width="50" align="center"><?=$sr?></td>
                                      <td width="573"><?=$plan_name?></td>
                                      <td width="100" align="center">$<?=$payment_amount?></td>
                                    </tr>
                    
                    
                    <?
								
								
							}
						}
					
					
					?>
                    
                    
                    
                    
                      
                     
                     
                    
                    <tr>
                      <td colspan="2" align="right" bgcolor="#F2F2F2"><strong>Total Payment Amount --&gt;</strong></td>
                      <td align="center" bgcolor="#F2F2F2"><strong>$ <? echo $total_amount?> </strong></td>
                      </tr>
                    
                    </table></td>
                  </tr>
                </table></td>
            </tr>
            
            <tr>
              <td height="250" colspan="2" align="center"><table width="650" border="1" cellspacing="0" cellpadding="7">
                <tr>
                  <td width="50%" align="center" bgcolor="#CCCCCC"><strong>Pay Through 2Checkout</strong></td>
                  <td align="center" bgcolor="#CCCCCC"><strong>Pay Through Paypal</strong></td>
                  </tr>
                <tr>
                  <td align="center" valign="top">
                    
                    <img src="images/2checkout_logo.gif" width="200" height="60" />
                    <br /><br />                  
                    <img src="images/2checkout_pay.jpg" width="180" height="60" border="0" style="cursor:pointer" onclick="submit_checkout_form()" />
                    
                    <br />
                    
                  </td>
                  <td align="center" valign="top"><img src="images/paypal_logo.gif" width="253" height="80" /> <br />
                  <img src="images/paypal_pay.jpg" width="180" height="60" border="0" style="cursor:pointer" onclick="submit_paypal_form()" /></td>
                  </tr>
              </table></td>
            </tr>
            
            
            </table>
            

<br />

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_self" id="paypal_form" name="paypal_form">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="A3FTE9QMUW2MQ">
<input type="hidden" name="on0" value="Plan options">
<input type="hidden" name="os0" value="<?=$paypal_value?>" />
<input type="hidden" name="currency_code" value="USD">
</form>

<br /><br />



<form action='https://www.2checkout.com/checkout/purchase' method='post' name='checkout_form' id='checkout_form' target="_self">	
	    <input type='hidden' name='sid' value='1606788'>
	    <?=$str_2co?>
        <input type="hidden" name="x_receipt_link_url" value="http://www.procurementregistration.com/beta/sup_reg_form.php" />
        <input type="hidden" name="return_url" value="http://www.procurementregistration.com/beta/sup_reg_form.php" />        
</form>






<? /*


<select name="os0">
	<option value="Standard Registration">Standard Registration : $29.00 USD - monthly</option>
	<option value="Pro Registration">Pro Registration : $79.00 USD - monthly</option>
	<option value="ENTERPRISE Registration">ENTERPRISE Registration : $149.00 USD - monthly</option>
</select> 
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">



<select name="os0">
        <option value="Standard Registration">Standard Registration : $29.00 USD - monthly</option>
        <option value="Pro Registration">Pro Registration : $79.00 USD - monthly</option>
        <option value="ENTERPRISE Registration">ENTERPRISE Registration : $149.00 USD - monthly</option>
</select> 



<form class="paypal" action="payments.php" method="post" id="paypal_form" name="paypal_form">    
	<input type="hidden" name="cmd" value="_xclick" /> 
    <input type="hidden" name="no_note" value="1" />
    <input type="hidden" name="lc" value="UK" />
    <input type="hidden" name="currency_code" value="USD" />
    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
    
    <input type="hidden" name="item_number" value="<?=$opt_plan?>" / >
    <input type="hidden" name="item_amount" value="<?=$payment_amount?>" />        
    <input type="hidden" name="item_name"	value="<?=$plan_name?> Plan" />
    <input type="hidden"  value="Submit Payment"/>
</form>

*/ ?>


<script language="javascript">

	function submit_checkout_form()
	{		
		document.checkout_form.submit();
	}
	
	
	function submit_paypal_form()
	{
		document.paypal_form.submit();
	}

</script>

</body>
</html>


<script language="javascript">

	
</script>