<?php session_start();

	if($_SESSION['ses_login_status'] or $_SESSION['ses_user_id'] != '')
	{
		header('Location: home.php');
		exit;
	}

	include_once('includes/path_settings.inc.php');
	include_once('includes/config.inc.php');
	include_once('includes/dbfunction.inc.php');
	
	/*
	if (!$db=dbConnect())
	{
		echo "<center><font color=red size=2><b>Error : Cannot Connect to the Database</b></font></center>";
		exit;
	}	
	*/
	
	$hid_action = $_REQUEST['hid_action'];
	$opt_plan	= $_REQUEST['opt_plan'];
	
	if($hid_action == 'choose_plan')
	{
		//echo "<pre>";
		//print_r($_REQUEST);
		
				
		
			session_start();
			$_SESSION['user_plan_id'] 		= $opt_plan;
			$_SESSION['user_session_id'] 	= session_id();
			
			if($_REQUEST['chk_plan_1'] > 0)
			{
				$_SESSION['extra_plan_1'] 	= $_REQUEST['chk_plan_1'];
			}
			
			if($_REQUEST['chk_plan_2'] > 0)
			{
				$_SESSION['extra_plan_2'] 	= $_REQUEST['chk_plan_2'];
			}
			
	?>
    
    		<script language="javascript">
				location.href = "register.php";
			</script>
    
    <?
			
		
	}
	
	
 
 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Procurement Registration</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style_menu.css" type="text/css" media="screen, projection"/>
<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
<![endif]-->
<script src="js/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>
<link href="<?php echo $CSS_PATH?>" rel="stylesheet" type="text/css" />

<style>

	.cls_plan_tbl_cell_header
	{
		border-style:solid;
		border-width:1px;
		border-color:#CCC;
		border-bottom:none;
		
		background-color:#5C5C5C;
		font-size:14px;
		font-weight:bold;
		color:#F3F3F3;
		font-family: sans-serif;
	}
	
	.cls_plan_tbl_cell_1
	{
		border-style:solid;
		border-width:1px;
		border-color:#CCC;
		border-bottom:none;
		border-left:none;
	}
	
	.cls_plan_tbl_cell_left
	{
		border-left-style:solid;
		border-left-width:1px;
		border-left-color:#CCC;
		
		font-size:12px;
		font-weight:bold;
		color:#333;
		font-family: sans-serif;
		line-height:30px;
	}
	
	.cls_plan_tbl_cell_bottom
	{
		border-bottom-style:solid;
		border-bottom-width:1px;
		border-bottom-color:#CCC;
	}
	
	
	.cls_plan_tbl_row_bg
	{
		background-color:#F0F0F0;
	}
	
	
	.cls_plan_tbl_bg_selected
	{
		background-color:#6C9;
	}
	
	.cls_plan_tbl_bg_normal
	{
		background-color:#FFF;
	}	
	
	
	.cls_border_left
	{
		border-left-style:solid;
		border-left-width:1px;
		border-left-color:#CCC;		
	}
	
	.cls_border_right
	{
		border-right-style:solid;
		border-right-width:1px;
		border-right-color:#CCC;		
	}
	
	.cls_border_top
	{
		border-top-style:solid;
		border-top-width:1px;
		border-top-color:#CCC;		
	}
	
	.cls_border_bottom
	{
		border-bottom-style:solid;
		border-bottom-width:1px;
		border-bottom-color:#CCC;		
	}
	
	.cls_plan_desc
	{
		font-size:11px;
		font-weight:normal;
		font-family:Arial, Helvetica, sans-serif;
		color:#000;
		text-align:left;
		line-height:15px;
		
	}
	
	.cls_button_buy_now
	{
		display: inline-block;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		width:110px;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;
		font-weight: normal;
		padding-top: 4px;
		padding-bottom: 4px;
		padding-left:1px;
		padding-right:1px;
		color:#FFF;
		background-color:#093;
	}
	
	.cls_button_buy_now:hover
	{
		font-size:12px;
		font-weight:bold;
		/*font-family:Arial, Helvetica, sans-serif;*/
		color:#FF0;
		/*background-color:#FFC;*/
	}

</style>



<style type="text/css">

#dhtmltooltip{
position: absolute;
left: -300px;
width: 150px;
border: 1px solid black;
padding: 2px;
background-color: lightyellow;
visibility: hidden;
z-index: 100;
/*Remove below line to remove shadow. Below line should always appear last within this CSS*/
filter: progid:DXImageTransform.Microsoft.Shadow(color=gray,direction=135);
}

#dhtmlpointer{
position:absolute;
left: -300px;
z-index: 101;
visibility: hidden;
}


</style>



</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <? include("header.php"); ?>
  <tr>
    <td><table width="991" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
         <td><? include("menu.php"); ?></td>
      </tr>
      <tr>
        <td class="body_back">
        <form name="myform" action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<table width="991" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left">
            	<table width="100%" border="0" cellspacing="0" cellpadding="10">
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><table width="95%" border="0" align="center" cellpadding="6" cellspacing="0">
                      <tr>
                        <td class="cls_plan_tbl_cell_header">
                        PLAN COMPARISON <br />
                        <span style="font-size:12px; color:#CCC; line-height:20px">
                        (Monthly Registration)
                        </span>
                        </td>
                        <td width="100" align="center" class="cls_plan_tbl_cell_header">STANDARD<br />
                        Monthly $29.00</td>
                        <td width="100" align="center" class="cls_plan_tbl_cell_header">PRO <br>                          
                           Monthly $79.00</td>
                        <td width="110" align="center" class="cls_plan_tbl_cell_header">ENTERPRISE <br>                          
                           Monthly $149.00</td>
                        <td width="170" align="center" class="cls_plan_tbl_cell_header">A'LA CARTE <br> Corporate Registrations <br />                          
                           Per Corporation $49.99 </td>
                        <td width="130" align="center" class="cls_plan_tbl_cell_header">A'LA CARTE <br /> Industry Research<br />                          
                           Per Corporation $74.99</td>
                      </tr>
                      <tr>
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">
                        <a href="#" onMouseover="ddrivetip('<b>Corporate Registrations:</b><br> In order to do business with corporations you first have to register with them. We automatically register you with corporate portals of your choice saving you hours and hours of work. Just enter your details into our system one time and we will take it from there. ',350)"; onMouseout="hideddrivetip()">
                        Corporate Registrations</a></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">Up to 5 Monthly</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">Up to 9 Monthly</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">Up to 12 Monthly</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                      </tr>
                      <tr class="cls_plan_tbl_row_bg">
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">
                        <a href="#" onMouseover="ddrivetip('<b>Corporate Connection:</b><br> You get access to tens of thousands of buyers including local, state and federal buyers in the United States and Canada, and also global buyers from around the world.  You have to ability to search for international, local, state and federal government bids by keyword, to locate unique words of interest.',350)"; onMouseout="hideddrivetip()">
                        Corporate Connection</a></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">
                        <a href="#" onMouseover="ddrivetip('<b>Educational Webinar:</b><br> Educational training is offered as a monthly webinar where you will learn directly from top procurement specialists, supplier diversity professionals, corporate heads and more. Gain insider industry knowledge you would not find anywhere else.',350)"; onMouseout="hideddrivetip()">
                        Educational Webinar</a></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                      </tr>
                      <tr class="cls_plan_tbl_row_bg">
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">
                        <a href="#" onMouseover="ddrivetip('<b>Basic Industry Research:</b><br> This feature is like having your own research expert by your side. Our team of research specialists will conduct deep niche research on the corporations you`d like to do business on areas like size, spending, strengths, weaknesses and more. Armed with this critical information you can approach the firm with how you can provide solutions to their problems, rather than just pitching your services. ',350)"; onMouseout="hideddrivetip()">
                        Industry Research</a></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">
                        <a href="#" onMouseover="ddrivetip('<b>Email Alerts:</b><br> As soon as a new opportunity is posted by buyers and it falls within your market niche, we`ll send you email alerts to notify you of the business opportunity. This will get you ahead of the pack and enable you to bid on opportunities faster; before they`re fulfilled by your competitors.',350)"; onMouseout="hideddrivetip()">
                        Email Alerts</a></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                      </tr>
                      <tr class="cls_plan_tbl_row_bg">
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">
                        <a href="#" onMouseover="ddrivetip('<b>Capability Statement Guide:</b><br> The capability statement guide is the ultimate resource to help you create the perfect capability statement to make your business stand out in a competitive marketplace. We`ll give you the tools to create a Capabilities Statement that can effectively sell your company to potential clients.',350)"; onMouseout="hideddrivetip()">
                        Capability Statement Guide</a></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">
                        <a href="#" onMouseover="ddrivetip('<b>Personal Account Executive:</b><br> Imagine having your very own personal assistant providing you with reviews of your account and support as and when you need it. The Personal Account Executive will save you hours of time, helping you to focus on what you do best - running your business and sourcing new opportunities.',350)"; onMouseout="hideddrivetip()">
                        Personal Account Executive</a></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                      </tr>
                      <tr class="cls_plan_tbl_row_bg">
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">
                        <a href="#" onMouseover="ddrivetip('<b>Customized Industry Research:</b><br> Customized industry research gives you the opportunity to let our research experts know if there are specifics you`d like to learn about the corporations you choose. This could include information about your competitors and more.',350)"; onMouseout="hideddrivetip()">
                        Customized Industry Research</a></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">
                        <a href="#" onMouseover="ddrivetip('<b>Advanced Search Options:</b><br> The Advanced Search Options tool gives you greater flexibility in searching for local, nationwide and global bid opportunities. You have the ability to search by name, location, products and services, categories, diversity classification, category NAICS & SIC codes and more.',350)"; onMouseout="hideddrivetip()">
                        Advanced Search Options</a></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                      </tr>
                      <tr class="cls_plan_tbl_row_bg">
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">
                        <a href="#" onMouseover="ddrivetip('<b>Advertising Spot:</b><br> As a member of the Enterprise package we reward you with your unique Advertising Spot. Your company logo stands out making you one of the featured suppliers on the site, quick to catch the eyes of corporate buyers.',350)"; onMouseout="hideddrivetip()">
                        Advertising Spot</a></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">
                        <a href="#" onMouseover="ddrivetip('<b>Industry Event Alerts:</b><br> Looking for buyer opportunities is just the start. Industry event alerts are a great way to stay on top of all the industry events happening right now. You get advanced alerts giving you the time to decide if you`d like to attend a business matchmaker where you can meet with corporate buyers face to face. Missing out on events means missing out on business - Don`t miss another event again.',350)"; onMouseout="hideddrivetip()">
                        Industry Event Alerts</a></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                      </tr>
                      <tr class="cls_plan_tbl_row_bg">
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">
                        <a href="#" onMouseover="ddrivetip('<b>Extra Corporate Registration</b><br> ...',350)"; onMouseout="hideddrivetip()">
                        Extra Corporate Registration</a></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                      </tr>
                      
                      <tr>
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">
                        <a href="#" onMouseover="ddrivetip('<b>Advance Industry Research</b><br> ...',350)"; onMouseout="hideddrivetip()">
                        Advance Industry Research</a></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1"><img src="images/icons/icon_tick.png" width="28" height="28" /></td>
                      </tr>
                     
                     <? /* ?>
                       <tr>
                         <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left ">&nbsp;</td>
                         <td colspan="3" align="center" valign="middle" class="cls_plan_tbl_cell_1 "><strong>
                         You can choose one from above 3 plans.
                          </strong>
                         </td>
                         <td colspan="2" align="center" valign="middle" class="cls_plan_tbl_cell_1 ">
                         <strong>You can choose one or both from above 2 plans.</strong>
                         </td>
                       </tr>
					   
					   <? */ ?>
					   
					   
                      <tr>
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left">&nbsp;</td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">
                          <input type="radio" name="opt_plan" id="opt_plan" value="13" onClick="func_opt_select(0)" />
                          <br />
                        <input type="button" name="cmd_buy_now" value="Select Plan" class="cls_button_buy_now" onClick="func_opt_select(0)" />
                        </span></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">
                          <input type="radio" name="opt_plan" id="opt_plan" value="14" onClick="func_opt_select(1)" />
                          <input type="button" name="cmd_buy_now2" value="Select Plan" class="cls_button_buy_now" onClick="func_opt_select(1)" />
                          <br /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">
                          <input type="radio" name="opt_plan" id="opt_plan" value="15" onClick="func_opt_select(2)" />
                        
                        <input type="button" name="cmd_buy_now3" value="Select Plan" class="cls_button_buy_now" onClick="func_opt_select(2)" />
                        <br /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">
                          <input name="chk_plan_1" type="checkbox" id="chk_plan_1" value="17" onClick="func_chk_select(1)" />
                          <br />
<input type="button" name="cmd_buy_now4" value="Select Plan" class="cls_button_buy_now" onClick="document.myform.chk_plan_1.checked=true; func_chk_select(1)" />
                        <br /></td>
                        <td align="center" valign="middle" class="cls_plan_tbl_cell_1">
                          <input name="chk_plan_2" type="checkbox" id="chk_plan_2" value="16" onClick="func_chk_select(2)" />
                          <br />
<input type="button" name="cmd_buy_now5" value="Select Plan" class="cls_button_buy_now" onClick="document.myform.chk_plan_2.checked=true; func_chk_select(2)" />
                        </td>
                      </tr>
                      
                       <tr>
                        <td class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left ">&nbsp;</td>
                        <td colspan="3" align="center" valign="middle" class="cls_plan_tbl_cell_1 ">
                            <strong>Each Package selected requires a 3 months first payment</strong>
                        </td>
                        <td colspan="2" align="center" valign="middle" class="cls_plan_tbl_cell_1 "></td>
                        </tr>
                       <tr>
                         <td height="35" colspan="6" class="cls_plan_tbl_cell_1 cls_plan_tbl_cell_left cls_plan_tbl_cell_bottom ">
                         <span style="line-height:18px;">
                         	- &nbsp; $99.00 Setup Fee Waived for all first time members <br />
							- &nbsp; $99.00 setup fee will be applied for reinstating members <br />
							- &nbsp; $99.00 Setup fee is applied to A'LA Carte services
                          </span>
                         </td>
                       </tr>
                       <tr>
                        <td height="35" colspan="6">                        
                          <span style="font-size:12px; font-weight:normal">
                            <strong>NOTE:</strong>  Upgrade to the Enterprise Plan for advertising on the site. Contact us if you wish to purchase additional Ad spots.                        
                            </span>
                          </td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                 <? /* ?>
                 
                  <tr>
                    <td><table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
                      <tr>
                        <td width="20%" align="center" valign="top">
                        <table width="90%" border="0" align="center" cellpadding="10" cellspacing="0" class="cls_plan_tbl_bg_normal" id="tbl_plan_spe_0">
                          <tr>
                            <td align="center" class="cls_plan_tbl_cell_header">Standard</td>
                          </tr>
                          <tr>
                            <td align="center" class="cls_border_left cls_border_right cls_border_bottom">&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="cls_border_left cls_border_right cls_plan_desc">The Standard plan lets you register to 5 corporations of your choosing, 
                            		gives you access to insider facts about corporations you're targeting, enables you to search for what buyers in 
                                    your market are looking for, and features educational training empowering you to gain more business.</td>
                          </tr>
                          <tr>
                            <td align="center" class="cls_border_left cls_border_right cls_border_bottom">&nbsp;</td>
                          </tr>
                        </table></td>
                        <td width="20%" align="center" valign="top">
                        <table width="90%" border="0" align="center" cellpadding="10" cellspacing="0" class="cls_plan_tbl_bg_normal" id="tbl_plan_spe_1">
                          <tr>
                            <td align="center" class="cls_plan_tbl_cell_header">Pro</td>
                          </tr>
                          <tr>
                            <td align="center" class="cls_border_left cls_border_right cls_border_bottom">&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="cls_border_left cls_border_right cls_plan_desc">The Pro plan gives you everything in the  Standard plan including 5 more registrations, email notification alerts of  business opportunities that match your niche and the ability to upload and  refine your capability statement.</td>
                          </tr>
                          <tr>
                            <td align="center" class="cls_border_left cls_border_right cls_border_bottom">&nbsp;</td>
                          </tr>
                        </table></td>
                        <td width="20%" align="center" valign="top">
                        <table width="90%" border="0" align="center" cellpadding="10" cellspacing="0" class="cls_plan_tbl_bg_normal" id="tbl_plan_spe_2">
                          <tr>
                            <td align="center" class="cls_plan_tbl_cell_header">Enterprise</td>
                          </tr>
                          <tr>
                            <td align="center" class="cls_border_left cls_border_right cls_border_bottom">&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="cls_border_left cls_border_right cls_plan_desc">The Enterprise plan gives you the robust  functionalities of both the Standard and Pro plan and propels you to the top  with more corporate registrations along with increased visibility by ranking  you higher in search results and giving you advertising space to feature your  company on the site.&nbsp; It also allows you  to include more company details, add links to your profile, gain access to a  personal account executive and much more.</td>
                          </tr>
                          <tr>
                            <td align="center" class="cls_border_left cls_border_right cls_border_bottom">&nbsp;</td>
                          </tr>
                        </table></td>
                        <td width="20%" align="center" valign="top">
                        <table width="90%" border="0" align="center" cellpadding="10" cellspacing="0" class="cls_plan_tbl_bg_normal" id="tbl_chk_plan_1">
                          <tr>
                            <td align="center" class="cls_plan_tbl_cell_header">A'LA CARTE<br />
                              Corporate Registrations</td>
                          </tr>
                          <tr>
                            <td align="center" class="cls_border_left cls_border_right cls_border_bottom">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="center" class="cls_border_left cls_border_right cls_border_bottom">&nbsp;</td>
                          </tr>
                        </table></td>
                        <td width="20%" align="center" valign="top">
                        <table width="90%" border="0" align="center" cellpadding="10" cellspacing="0" class="cls_plan_tbl_bg_normal" id="tbl_chk_plan_2">
                          <tr>
                            <td align="center" class="cls_plan_tbl_cell_header">A'LA CARTE<br />
                              Industry Research</td>
                          </tr>
                          <tr>
                            <td align="center" class="cls_border_left cls_border_right cls_border_bottom">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="center" class="cls_border_left cls_border_right cls_border_bottom">&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                    </table></td>
                  </tr>
                  
                  <? */ ?>
                  <tr>
                    <td height="100" align="center" valign="top">
						<?=$$message?>&nbsp;
                        <input type="hidden" name="hid_action" />
                        <input type="button" value="Continue >>>" class="cls_button_buy_now" style="font-size:18px; width:200px; height:40px;" onClick="func_submit_form()" />
                    </td>
                  </tr>
                </table>

            </td>
          </tr>		 
		  <? include("footer.php"); ?> 		  
        </table>
        </form>		
		</td>
      </tr>      
    </table></td>
  </tr>
</table>


<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>

<script language="javascript">

	function func_submit_form(opt_plan_id)
	{
		//alert(opt_plan_id);
		document.myform.hid_action.value = 'choose_plan';
		if(document.myform.opt_plan[0].checked == false && document.myform.opt_plan[1].checked == false && document.myform.opt_plan[2].checked == false && document.myform.chk_plan_1.checked == false && document.myform.chk_plan_2.checked == false)
		{
			alert('Please choose at leat one plan to continue');
			return false;
		}
		
		
		
		if(document.myform.opt_plan[0].checked == false && document.myform.opt_plan[1].checked == false && document.myform.opt_plan[2].checked == false)
		{
			if(!confirm('$99.00 Setup fee is applied to A`LA Carte services \n \n Press Ok to continue'))
			{
				//alert('Please choose at leat one plan from Standard, Pro and Enterprise');
				return false;
			}
		}
		
		//alert('all ok');
		//document.myform.opt_plan.value = opt_plan_id;
		document.myform.submit();
	}
	
	
	
	function func_opt_select(opt_id)
	{
		
		document.myform.opt_plan[0].checked = false;
		document.myform.opt_plan[1].checked = false;
		document.myform.opt_plan[2].checked = false;
		
		document.myform.opt_plan[opt_id].checked = true;
		
		
		/*
		document.getElementById('tbl_plan_spe_0').className = 'cls_plan_tbl_bg_normal';
		document.getElementById('tbl_plan_spe_1').className = 'cls_plan_tbl_bg_normal';
		document.getElementById('tbl_plan_spe_2').className = 'cls_plan_tbl_bg_normal';
		
		
		
		
		if(opt_id == 0)
			document.getElementById('tbl_plan_spe_0').className = 'cls_plan_tbl_bg_selected';
		if(opt_id == 1)
			document.getElementById('tbl_plan_spe_1').className = 'cls_plan_tbl_bg_selected';
		if(opt_id == 2)
			document.getElementById('tbl_plan_spe_2').className = 'cls_plan_tbl_bg_selected';
		*/
	}
	
	
	
	
	function func_chk_select(chk_id)
	{
		//alert(chk_id);
		if(chk_id == 1)
		{
			if(document.myform.chk_plan_1.checked)
			{
				//document.getElementById('tbl_chk_plan_1').className = 'cls_plan_tbl_bg_selected';				
			}
			else
			{
				//document.getElementById('tbl_chk_plan_1').className = 'cls_plan_tbl_bg_normal';				
			}
		}
		
		
		if(chk_id == 2)
		{
			if(document.myform.chk_plan_2.checked)
			{
				//document.getElementById('tbl_chk_plan_2').className = 'cls_plan_tbl_bg_selected';				
			}
			else
			{
				//document.getElementById('tbl_chk_plan_2').className = 'cls_plan_tbl_bg_normal';				
			}
		}
	}
	
</script>





<script type="text/javascript">

/***********************************************
* Cool DHTML tooltip script II- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

var offsetfromcursorX=12 //Customize x offset of tooltip
var offsetfromcursorY=10 //Customize y offset of tooltip

var offsetdivfrompointerX=10 //Customize x offset of tooltip DIV relative to pointer image
var offsetdivfrompointerY=14 //Customize y offset of tooltip DIV relative to pointer image. Tip: Set it to (height_of_pointer_image-1).

document.write('<div id="dhtmltooltip"></div>') //write out tooltip DIV
document.write('<img id="dhtmlpointer" src="images/arrow2.gif">') //write out pointer image

var ie=document.all
var ns6=document.getElementById && !document.all
var enabletip=false
if (ie||ns6)
var tipobj=document.all? document.all["dhtmltooltip"] : document.getElementById? document.getElementById("dhtmltooltip") : ""

var pointerobj=document.all? document.all["dhtmlpointer"] : document.getElementById? document.getElementById("dhtmlpointer") : ""

function ietruebody(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function ddrivetip(thetext, thewidth, thecolor){
if (ns6||ie){
if (typeof thewidth!="undefined") tipobj.style.width=thewidth+"px"
if (typeof thecolor!="undefined" && thecolor!="") tipobj.style.backgroundColor=thecolor
tipobj.innerHTML=thetext
enabletip=true
return false
}
}

function positiontip(e){
if (enabletip){
var nondefaultpos=false
var curX=(ns6)?e.pageX : event.clientX+ietruebody().scrollLeft;
var curY=(ns6)?e.pageY : event.clientY+ietruebody().scrollTop;
//Find out how close the mouse is to the corner of the window
var winwidth=ie&&!window.opera? ietruebody().clientWidth : window.innerWidth-20
var winheight=ie&&!window.opera? ietruebody().clientHeight : window.innerHeight-20

var rightedge=ie&&!window.opera? winwidth-event.clientX-offsetfromcursorX : winwidth-e.clientX-offsetfromcursorX
var bottomedge=ie&&!window.opera? winheight-event.clientY-offsetfromcursorY : winheight-e.clientY-offsetfromcursorY

var leftedge=(offsetfromcursorX<0)? offsetfromcursorX*(-1) : -1000

//if the horizontal distance isn't enough to accomodate the width of the context menu
if (rightedge<tipobj.offsetWidth){
//move the horizontal position of the menu to the left by it's width
tipobj.style.left=curX-tipobj.offsetWidth+"px"
nondefaultpos=true
}
else if (curX<leftedge)
tipobj.style.left="5px"
else{
//position the horizontal position of the menu where the mouse is positioned
tipobj.style.left=curX+offsetfromcursorX-offsetdivfrompointerX+"px"
pointerobj.style.left=curX+offsetfromcursorX+"px"
}

//same concept with the vertical position
if (bottomedge<tipobj.offsetHeight){
tipobj.style.top=curY-tipobj.offsetHeight-offsetfromcursorY+"px"
nondefaultpos=true
}
else{
tipobj.style.top=curY+offsetfromcursorY+offsetdivfrompointerY+"px"
pointerobj.style.top=curY+offsetfromcursorY+"px"
}
tipobj.style.visibility="visible"
if (!nondefaultpos)
pointerobj.style.visibility="visible"
else
pointerobj.style.visibility="hidden"
}
}

function hideddrivetip(){
if (ns6||ie){
enabletip=false
tipobj.style.visibility="hidden"
pointerobj.style.visibility="hidden"
tipobj.style.left="-1000px"
tipobj.style.backgroundColor=''
tipobj.style.width=''
}
}

document.onmousemove=positiontip

</script>





</body>
</html>
