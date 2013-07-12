<? 	session_start();

	if($_SESSION['ses_login_status'] or $_SESSION['ses_user_id'] != '')
	{
		header('Location: home.php');
		exit;
	}
	
	include_once('includes/path_settings.inc.php');
	include_once('includes/config.inc.php');
	include_once('includes/dbfunction.inc.php');
	
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
		<table width="991" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
		  <tr>
			<td style="padding-right:10px">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td valign="top" style="padding-left:30px; padding-right:30px">
                  <?php
	                    $register_page = 'reg_choose_plan_1.php';
						include_once($register_page);
					?>
                  </td>
				  <td class="video_box" valign="top"><? include("right_section.php"); ?></td>
				  </tr>
			  </table>
			  </td>
		  </tr>
		  <tr>
            <td align="center" style="padding-top:10px">&nbsp;</td>
          </tr>
		  <tr>
        	<td>&nbsp;</td>
      	  </tr>
		  <? include("footer.php"); ?> 		  
        </table>		
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
</body>
</html>
