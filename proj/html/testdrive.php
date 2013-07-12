<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="js/bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap/js/jquery-1.8.2.min.js"></script>
<script src="js/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
<div id="page">
	<div id="header">
    	<div style="padding:15px">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/logo.png" width="130" height="96" /></td>
            <td>
          <table border="0" align="right">
                <tr>
                  <td colspan="3" style="padding-top:10px"><strong>Login to Procurement Registration</strong></td>
                </tr>
                <tr>
                  <td colspan="3">
                  <div style="position:relative">
                  <div style="float:left; padding-right:5px">
                  <input class="textbox1" name="txt_login_name" type="text" style="width:140px"  onKeyDown="if(event.keyCode == 13) document.frmUserLogin.txt_password.focus();"  placeholder="Username…" />
                  </div>
                  <div style="float:left; padding-right:5px">
                  <input class="textbox1" name="txt_password" type="password" style="width:140px" onkeydown="if(event.keyCode == 13) submit_form();" placeholder="Password…" />
                  </div>
                  <div style="float:left">
                  <input class="btn" style="height:30px" name="btnLogin" id="btnLogin" type="button" value="Login" onClick="btnLogin_form()" />
                  </div>
                  <div style="clear:both"></div>
                  <div style="margin:0px; padding:0px; position:absolute; top:30px">
                  <a href="work/forgot_password.php" class="mylink1" style="text-decoration:underline">Forgot Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--<a href="work/register.php" class="mylink1">New User?</a>&nbsp;&nbsp;--><label id="lblMessage"></label>
                  </div>
                  </div>
                  </td>
                </tr>
            </table>
            </td>
          </tr>
        </table>
        </div>
      <div id="menu">
        	<ul>
            	<li><a href="#">Home</a></li>
                <li><a href="#">How we do it</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </div>
        <div style="clear:both"></div>
    </div>
    <div id="content" align="center"><img src="images/separator_body.png" /></div>
	<div id="content" style="height:150px">
   	  <div id="content-left">
        <span class="heading">Welcome to our Website</span><br /><br />
        In today's cut throat business environment you've got to be early and jump on a good opportunity. If you don't your competition certainly will. The first step is to register to find the opportunity in the first place. We make that first step EASY. 
        </div>
      <div id="content-right"></div>
    </div>
   <div id="content" align="center" style="clear:both"></div>
    <div id="content">
    <table align="center" width="980">
    <tr>
    	<td style="padding-top:15px; padding-bottom:15px;" align="center" class="footer">Copyright &copy; 2013 Cloud Custom Solutions. All Rights Reserved.. <br />Developed & Designed By: <a href="http://cloudcustomsolutions.com/" target="_blank">Cloud Custom Solutions</a></td>
    </tr>
    </table>
    </div>
</div>
</body>
</html>