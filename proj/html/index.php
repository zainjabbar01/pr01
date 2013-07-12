<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<link href="css/camera.css" rel="stylesheet" type="text/css" />
<link href="js/bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap/js/jquery-1.8.2.min.js"></script>
<script src="js/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src='js/jquery.easing.1.3.js'></script>
<script src='js/camera.min.js'></script>
<script type="text/javascript" language="javascript" src="js/jquery.carouFredSel-6.2.0-packed.js"></script>
<script type="text/javascript" language="javascript" src="js/helper-plugins/jquery.mousewheel.min.js"></script>
<script type="text/javascript" language="javascript" src="js/helper-plugins/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" language="javascript" src="js/helper-plugins/jquery.transit.min.js"></script>
<script type="text/javascript" language="javascript" src="js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>


<script type="text/javascript" charset="utf-8">
  jQuery(document).ready(function(){
	
	jQuery('#camera_wrap_2').camera({
		height: '398px',
		loader: 'none',
		pagination: false,
		thumbnails: false
	});
	
	jQuery('#foo2').carouFredSel({
		items: 5,
		auto: {
			pauseOnHover: 'resume',
			progress: '#timer1'
		}
	}, {
		transition: true
	});
	
  });
</script>
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
        <div id="banner">
        <table width="940" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="padding-left:20px;">
            <span class="banner-heading">Procurement Registration Solution</span>
            <div class="banner-text" style="padding-top:20px; padding-bottom:20px">
            Register on hundreds of corporate portals in the time it takes you to finish a cupp of coffee. Get infront of thousands of businesses, local or global - with the click of a button.
            </div>
            <input type="button" class="btn-large btn-danger" value="Take a Free Testdrive" />
            </td>
            <td style="width:657px">
            <div style="width:657px; height:398px;">
                <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2" style="width:657px; height:398px">
                    <div data-thumb="images/slider/1.jpg" data-src="images/slider/1.jpg"></div>
                    <div data-thumb="images/slider/2.jpg" data-src="images/slider/2.jpg"></div>
                 </div>
                 <div style="width:657px; height:398px; background-image:url(images/sliderback.png); position:absolute"></div>
              </div>
            </a>
            </td>
          </tr>
        </table>
        </div>
    </div>
    <div id="content" align="center"><img src="images/separator_body.png" /></div>
	<div id="content" style="height:150px">
   	  <div id="content-left">
        <span class="heading">Welcome to our Website</span><br /><br />
        In today's cut throat business environment you've got to be early and jump on a good opportunity. If you don't your competition certainly will. The first step is to register to find the opportunity in the first place. We make that first step EASY. 
        </div>
      <div id="content-right"></div>
    </div>
    <div id="content" align="center"><img src="images/separator_body.png" /></div>
  <div id="content">
    <div class="list_carousel1">
        <ul id="foo2">            
            <li><img src="images/logos/logo1.jpg" /></li>
            <li><img src="images/logos/logo2.jpg" /></li>
            <li><img src="images/logos/logo3.jpg" /></li>
            <li><img src="images/logos/logo4.jpg" /></li>
            <li><img src="images/logos/logo5.jpg" /></li>
            <li><img src="images/logos/logo6.jpg" /></li>
            <li><img src="images/logos/logo7.jpg" /></li>
            <li><img src="images/logos/usbank.png" alt="" /></li>            
        </ul>
        <div class="clearfix"></div>
        <div id="timer1" class="timer"></div>
    </div>
  </div>
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