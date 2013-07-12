<?php
	include_once('includes/includefilespath.php');
	include_once("includes/dbfunction.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $PAGE_TITLE?></title>
<link href="<?php echo $CSS_PATH?>" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <? include("header.php"); ?>
  <tr>
    <td><table width="991" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><table width="991" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="7" height="50"><img src="images/menu1.png" width="7" height="50" /></td>
            <td style="background-image:url(images/menu3.png); background-repeat:repeat-x" width="977">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td class="menu_padding"><a href="#" class="menu_links">Home</a></td>
				<td class="menu_separator"></td>
				<td class="menu_padding"><a href="#" class="menu_links">About Us</a></td>
				<td class="menu_separator"></td>
				<td class="menu_padding"><a href="#" class="menu_links">How It Works</a></td>
				<td class="menu_separator"></td>
				<td class="menu_padding"><a href="#" class="menu_links">Products</a></td>
				<td class="menu_separator"></td>
				<td class="menu_padding"><a href="#" class="menu_links">Blog</a></td>
				<td class="menu_separator"></td>
				<td class="menu_padding"><a href="#" class="menu_links">Resource Center</a></td>
				<td class="menu_separator"></td>
				<td class="menu_padding"><a href="#" class="menu_links">Contact Us</a></td>
			  </tr>
			</table>			</td>
            <td width="7" height="50"><img src="images/menu2.png" width="7" height="50" /></td>
          </tr>
        </table></td>
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
				  <td valign="top">
                  	<?php 
						include_once('successfull_registration.php');
					?>
                  </td>
				  <td class="video_box" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="video_box">
					  <table width="238" border="0" cellspacing="0" cellpadding="0" align="center">
					  <tr>
						<td class="heading1">WATCH &amp; LISTEN </td>
					  </tr>
					  <tr>
						<td style="padding-top:3px"><img src="images/video1.png" width="232" height="124" class="video_box1" /></td>
					  </tr>
					  <tr>
						<td style="padding-top:2px; padding-bottom:5px"><a href="#" class="my_links1">Must Watch Solution</a></td>
					  </tr>
					  <tr>
						 <td><img src="images/video1.png" width="232" height="124" class="video_box1" /></td>
					  </tr>
					  <tr>
						<td style="padding-top:2px; padding-bottom:5px"><a href="#" class="my_links1">Watch more Testimonials?</a></td>
					  </tr>
					</table>					  </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="video_box">
					  <table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td class="heading1" style="padding-top:10px">What&rsquo;s Happenning?</td>
                    </tr>
                    <tr>
                      <td class="line"></td>
                    </tr>
                    <tr>
                      <td style="padding-top:5px; padding-bottom:15px" align="right">Follow us on | <img src="images/twitter.png" width="16" height="16" align="absmiddle" /><img src="images/facebook.png" width="16" height="16" hspace="3" align="absmiddle" /><img src="images/youtube.png" width="16" height="16" align="absmiddle" /><img src="images/email.png" width="16" height="16" hspace="3" align="absmiddle" /></td>
                    </tr>
                    <tr>
                      <td>
					  <a href="#" class="my_links3">Alumini Reunion</a> <span class="date">July 13, 2011</span><br />
					  &ndash;In today’s cut throat business environment you’ve got to be early and jump on a good opportunity.					  </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
					<tr>
                      <td>
					  <a href="#" class="my_links3">Alumini Reunion</a> <span class="date">July 13, 2011</span><br />
					  &ndash;In today’s cut throat business environment you’ve got to be early and jump on a good opportunity.					  </td>
                    </tr>
					<tr>
                      <td>&nbsp;</td>
                    </tr>
					<tr>
                      <td>
					  <a href="#" class="my_links3">Alumini Reunion</a> <span class="date">July 13, 2011</span><br />
					  &ndash;In today’s cut throat business environment you’ve got to be early and jump on a good opportunity.					  </td>
                    </tr>
                  </table>					  </td>
                    </tr>
                  </table></td>
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
</body>
</html>
