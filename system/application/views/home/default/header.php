<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $title; ?></title>
        <link rel="icon" href="<?php echo base_url();?>system/assets/images/xx.png" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo base_url();?>system/assets/images/xx.png" type="image/x-icon">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        
        <link href="<?php echo base_url();?>system/assets/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>system/assets/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
        <link href="<?php echo base_url();?>system/assets/css/camera.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>system/assets/js/bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="<?php echo base_url();?>system/assets/js/bootstrap/js/jquery-1.8.2.min.js"></script>
        <script src="<?php echo base_url();?>system/assets/js/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>system/assets/js/jquery.prettyPhoto.js"></script>
        <script src='<?php echo base_url();?>system/assets/js/jquery.easing.1.3.js'></script>
        <script src='<?php echo base_url();?>system/assets/js/camera.min.js'></script>
        <script type="text/javascript" language="javascript" src="<?php echo base_url();?>system/assets/js/jquery.carouFredSel-6.2.0-packed.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo base_url();?>system/assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo base_url();?>system/assets/js/helper-plugins/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo base_url();?>system/assets/js/helper-plugins/jquery.transit.min.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo base_url();?>system/assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
        
        
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
			transition: true,
                        auto: {
                                pauseOnHover: 'resume',
                                progress: '#timer1'
                        } 
                });
                
          });
        </script>
        
        <script type="text/javascript">
        //<![CDATA[
                base_url = '<?php echo base_url(); ?>';
        //]]>
        </script> 
</head>

<body>

<div id="page">

        <!--header start-->
        <div id="header">
        <div style="padding:15px">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?php echo base_url();?>system/assets/images/logo.png" width="130" height="96" /></td>
            
            <?php if(!user_login()){ ?>
            <td>
            <form method="post" action="<?php echo base_url();?>main/home/user_dologin" id="user_login_form" name="user_login_form"  autocomplete="on">
                        <table border="0" align="right">
                        <tr>
                          <td colspan="3" style="padding-top:10px"><strong>Login to Procurement Registration</strong></td>
                        </tr>
                        <tr>
                          <td colspan="3">
                          <div style="position:relative">
                          <div style="float:left; padding-right:5px">
                          <input class="textbox1" name="username_login" type="text" style="width:140px" placeholder="Username" required />
                          </div>
                          <div style="float:left; padding-right:5px">
                          <input class="textbox1" name="password_login" type="password" style="width:140px" placeholder="Password" required />
                          </div>
                          <div style="float:left">
                          <input class="btn" style="height:30px" name="btnLogin" id="btnLogin" type="submit" value="Login" />
                          <a href="<?php echo base_url();?>main/home/user_register" class="btn btn-info">Register</a>
                          </div>
                          <div style="clear:both"></div>
                          <div style="margin:0px; padding:0px; position:absolute; top:30px">
                          <a href="work/forgot_password.php" class="mylink1" style="text-decoration:underline">Forgot Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--<a href="work/register.php" class="mylink1">New User?</a>&nbsp;&nbsp;--><label id="lblMessage"></label>
                          </div>
                          </div>
                          </td>
                        </tr>
                    </table>
            </form>
            </td>
            <?php }else{ ?>
            <td>
            	<table border="0" align="right">
                    <tr>
                      <td style="padding-right:10px">
                            <div class="btn-group">
                            <a class="btn btn-custom dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="badge badge-important">6</span> Notifications
                            <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                            	<li><a tabindex="-1" href="#">Urgent meeting required?</a></li>
                                <li><a tabindex="-1" href="#">Certifications tab needs ...</a></li>
                                <li><a tabindex="-1" href="#">Your are invited to ...</a></li>
                                <li><a tabindex="-1" href="#">Urgent meeting required?</a></li>
                                <li><a tabindex="-1" href="#">Please reposnd ASAP?</a></li>
                            </ul>
                            </div>
                      </td>  
                      <td style="padding-right:10px">
                            <div class="btn-group">
                            <a class="btn btn-custom dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user"></i> <?php echo ucwords($this->session->userdata('user_full_name')); ?>
                            <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="<?php echo base_url();?>main/user/supplier_info">Profile</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="<?php echo base_url();?>main/user/user_dologout">Logout</a></li>
                            </ul>
                            </div>
                      </td>                      
                      <td style="padding-right:10px"><img src="<?php echo base_url();?>system/assets/images/photo.jpg" class="img-circle" width="50" /></td>
                    </tr>
                </table>
            </td>
            <?php } ?>
          </tr>
        </table>
        </div>
        <div id="menu">
                <ul>
                <li><a href="<?php echo base_url();?>main/home">Home</a></li>
                <li><a href="#">How we do it</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="<?php echo base_url();?>main/user/dashboard">User Home</a></li>
            </ul>
        </div>
        <div style="clear:both"></div>
        <?php if($page == 'index-landing'){ ?>
        <div id="banner">
        <table width="940" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="padding-left:20px;">
            <span class="banner-heading">Procurement Registration Solution</span>
            <div class="banner-text" style="padding-top:20px; padding-bottom:20px">
            Register on hundreds of corporate portals in the time it takes you to finish a cupp of coffee. Get infront of thousands of businesses, local or global - with the click of a button.
            </div>
            <a href="<?php echo base_url();?>main/home/testdrive" class="btn btn-large btn-danger">Take a Free Testdrive</a>
            </td>
            <td style="width:657px">
            <div style="width:657px; height:398px;">
                <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2" style="width:657px; height:398px">
                    <div data-thumb="<?php echo base_url();?>system/assets/images/slider/1.jpg" data-src="<?php echo base_url();?>system/assets/images/slider/1.jpg"></div>
                    <div data-thumb="<?php echo base_url();?>system/assets/images/slider/2.jpg" data-src="<?php echo base_url();?>system/assets/images/slider/2.jpg"></div>
                 </div>
                 <div style="width:657px; height:398px; background-image:url(<?php echo base_url();?>system/assets/images/sliderback.png); position:absolute"></div>
              </div>
            </a>
            </td>
          </tr>
        </table>
        </div>
        <?php } ?>
        </div>
        <!--header end-->
        
        <div id="content" align="center"><img src="<?php echo base_url();?>system/assets/images/separator_body.png" /></div>