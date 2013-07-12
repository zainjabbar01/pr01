<div id="content" style="height:150px">
        <div id="content-right">
        	<?php $this->load->view('user/right_bar_user'); ?>
	</div>

        <div id="content-left">
                
                <form enctype="multipart/form-data" name="myform">

                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                        
                          <tr>
                        
                            <td class="page-heading">Product and Services Codess</td>
                        
                          </tr>
                          
                          <tr>
                                <td>&nbsp;</td>
                        </tr>
                        <tr>
                                <td colspan="2"><div class="message"><?php echo $this->session->flashdata('alert_message');?></div></td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                        </tr>
                        
                        </table>
                        
                        <br />
                        
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                        
                          <td class="cls_main_table_cell">    	

                              <table width="100%" border="0" align="left" cellpadding="3" cellspacing="0">
                        
                                         <tr>
                        
                                <td width="93" align="left" valign="bottom" class="form_label">
                        
                                  <b> NAICS Code</b></td>
                        
                                <td width="553" align="right" valign="bottom" class="form_label">
                        
                                  You can manually input the codes in the space below or 
                        
                                  <a href="#" onclick="func_open_code_list()">
                        
                                    click here to search </a></td>
                        
                                </tr>
                        
                              <tr>
                        
                                <td colspan="2" align="left" valign="top" class="form_label"><textarea name="naics_code" cols="45" rows="5" class="span7" id="naics_code" style="height:100px;"></textarea></td>
                        
                                </tr>
                        
                              <tr>
                        
                                <td colspan="2" align="left" valign="bottom" class="form_label">NOTE: codes are separted by comma only</td>
                        
                                </tr>
                        
                              <tr>
                        
                                <td height="40" align="left" valign="bottom" class="form_label">&nbsp;</td>
                        
                                <td align="right" valign="bottom" class="form_label">&nbsp;</td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" valign="bottom" class="form_label">
                        
                                  <b>SIC Code </b></td>
                        
                                <td align="right" valign="bottom" class="form_label">
                        
                                  You can manually input the codes in the space below or 
                        
                                  <a href="#" onclick="func_open_code_list()">
                        
                                    click here to search </a></td>
                        
                                </tr>
                        
                              <tr>
                        
                                <td colspan="2" align="left" valign="top" class="form_label"><textarea name="sic_code" cols="45" rows="5" class="span7" id="sic_code" style=" height:100px;"></textarea></td>
                        
                                </tr>
                        
                              <tr>
                        
                                <td colspan="2" align="left" valign="bottom" class="form_label">NOTE: codes are separted by comma only</td>
                        
                                </tr>
                        
                              <tr>
                        
                                <td height="40" align="left" valign="bottom" class="form_label">&nbsp;</td>
                        
                                <td align="right" valign="bottom" class="form_label">&nbsp;</td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" valign="bottom" class="form_label">
                        
                                  <b>UNSPSC Code </b></td>
                        
                                <td align="right" valign="bottom" class="form_label">
                        
                                  You can manually input the codes in the space below or 
                        
                                  <a href="#" onclick="func_open_code_list()">
                        
                                    click here to search </a></td>
                        
                                </tr>
                        
                              <tr>
                        
                                <td colspan="2" align="left" valign="top" class="form_label"><textarea name="unspsc_code" cols="45" rows="5" class="span7" id="unspsc_code" style="height:100px;"></textarea></td>
                        
                                </tr>
                        
                                <tr>
                        
                                <td colspan="2" align="left" valign="bottom" class="form_label">NOTE: codes are separted by comma only</td>
                        
                                </tr>
                        
                              <tr>
                        
                                <td width="210" align="left">&nbsp;</td>
                        
                                <td width="441" class="form_label">&nbsp;</td>
                        
                              </tr>
                        
                                </table>
                        
                                
                        
                            </td>
                        
                          </tr>
                        
                        </table>
		</form>
                
        </div>
</div>
<div id="content" align="center" style="clear:both"></div>