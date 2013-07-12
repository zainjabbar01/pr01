<div id="content" style="height:150px">
        <!--<div id="content-right">
        	<?php //$this->load->view('user/right-bar-user'); ?>
	</div>-->

        <div class="offset1 span7">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <form method="post" action="<?php echo base_url();?>main/home/user_dologin" id="user_login_form" name="user_login_form"  autocomplete="on">
                
                        <tr>
                                <td colspan="2" class="page-heading">User Login</td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                        </tr>
                        <tr>
                                <td colspan="2"><div class="message"><?php echo $this->session->flashdata('alert_message');?></div></td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                        </tr>
                        <tr>
                                <td>Username <font class="asterik">*</font></td>
                                <td><input type="text" name="username_login" id="uname" class="input-xxlarge" required /></td>
                        </tr>
                        <tr>
                                <td>Password <font class="asterik">*</font></td>
                                <td><input type="password" name="password_login" id="password" class="input-xxlarge" required /></td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>All fields marked with (<font class="asterik">*</font>) are required.</td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>
                                	<input type="submit" class="btn btn-success" name="login" id="login" value="Login" >
                                </td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                        </tr>
                
        </form>
        </table>
        </div>
</div>
<div id="content" align="center" style="clear:both"></div>