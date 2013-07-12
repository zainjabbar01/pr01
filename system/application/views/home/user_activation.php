<div id="content" style="height:150px">
        <!--<div id="content-right">
        	<?php //$this->load->view('user/right-bar-user'); ?>
	</div>-->

        <div class="offset1 span7">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <form method="post" action="<?php echo base_url();?>main/home/user_activated" id="user_activation_form" name="user_activation_form"  autocomplete="on">
                
                        <tr>
                                <td colspan="2" class="page-heading">Account Activation</td>
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
                                <td>Activation Code <font class="asterik">*</font></td>
                                <td><input type="text" name="key" id="key" class="input-xxlarge" required /></td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>All fields marked with (<font class="asterik">*</font>) are required.</td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>
                                	<input type="submit" class="btn btn-success" name="activate" id="activate" value="Activate and Continue" >
                                </td>
                        </tr>
                
        </form>
        
        <form method="post" action="<?php echo base_url();?>main/home/resend_code" id="resend_code_form" name="resend_code_form"  autocomplete="on">
                
                        <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>If you are unable to receive the verification code in your email box then resend it again.</td>
                        </tr>
                        <tr>
                                <td>Email Address <font class="asterik">*</font></td>
                                <td><input type="text" name="email" id="email" class="input-xxlarge" required /></td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>
                                	<input type="submit" class="btn btn-success" name="resend" id="resend" value="Resend Code" >
                                </td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
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