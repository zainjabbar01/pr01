<div id="content" style="height:150px">
        <div id="content-right">
        	<?php $this->load->view('user/right_bar_user'); ?>
	</div>

        <div id="content-left">
                
                <form enctype="multipart/form-data" name="myform">

                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                        
                          <tr>
                        
                            <td class="page-heading">License and Certificates</td>
                        
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
                        
                          <tr>

                                    <td class="cls_main_table_cell">    	
                                
                                        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="0">
                                
                                     
                                
                                      <tr>
                                
                                        <td width="250" align="left" valign="middle" class="form_label">Insurance Limit</td>
                                
                                        <td><input name="ins_limit" type="text" class="input-xxlarge" onkeyup="this.value = parent.func_numbers_only(this.value);" id="ins_limit" value="" maxlength="10" /></td>
                                
                                      </tr>
                                
                                      <tr>
                                
                                        <td align="left" valign="middle" class="form_label">Expiration Date</td>
                                
                                        <td>
                                
                                        <input name="ins_expire_date" type="text" class="input-xxlarge" id="ins_expire_date"  value="" maxlength="10" readonly="readonly" />
                                
                                        <script language="javascript">
                                
                                                Calendar.setup( { inputField : 'ins_expire_date', button : 'img_ins_expire_date', align:'Tr' });
                                
                                                                Calendar.setup( { inputField : 'ins_expire_date', button : 'ins_expire_date', align:'Tr' });
                                
                                        </script>&nbsp;<span class="form_label">( dd/mm/yyyy )</span></td>
                                
                                      </tr>
                                
                                      <tr>
                                
                                        <td align="left" valign="middle" class="form_label">Insurance Provider</td>
                                
                                        <td><input name="ins_provider" type="text" class="input-xxlarge" id="ins_provider"  value="" maxlength="100" /></td>
                                
                                      </tr>
                                
                                      <tr>
                                
                                        <td align="left" valign="middle" class="form_label">Upload Business License</td>
                                
                                        <td valign="middle" class="form_label">
                                
                                          <input type="file" name="file_ins_certificate" id="file_ins_certificate" />
                                
                                            </td>
                                
                                      </tr> 
                                
                                          
                                
                                      <tr>
                                
                                        <td align="left" valign="middle" class="form_label">Geographical Service Areas</td>
                                
                                        <td class="form_label">
                                
                                            <input type="checkbox" name="geo_svr_local" id="geo_svr_local" value="1"  /> Local &nbsp;&nbsp;
                                
                                            <input type="checkbox" name="geo_svr_regional" id="geo_svr_regional" value="1"  /> Regional &nbsp;&nbsp;
                                
                                            <input type="checkbox" name="geo_svr_national" id="geo_svr_national" value="1"  /> National &nbsp;&nbsp;
                                
                                            <input type="checkbox" name="geo_svr_international" id="geo_svr_international" value="1"  /> International &nbsp;&nbsp;                  
                                
                                          </td>
                                
                                      </tr>
                                
                                      <tr>
                                
                                        <td align="left" valign="middle" class="form_label">Do you have an online catalog?</td>
                                
                                        <td><span class="form_label">
                                
                                          <input type="radio" name="online_catalog" id="radio17" value="Y"  />
                                
                                          Yes
                                
                                            <input type="radio" name="online_catalog" id="radio18" value="N"  />
                                
                                        No 
                                
                                        </span></td>
                                
                                      </tr>
                                
                                      <tr>
                                
                                        <td align="left" valign="middle" class="form_label">Can you sell your products &amp; services online?</td>
                                
                                        <td><span class="form_label">
                                
                                          <input type="radio" name="online_selling" id="radio19" value="Y"  />
                                
                                          Yes
                                
                                            <input type="radio" name="online_selling" id="radio20" value="N"  />
                                
                                        No 
                                
                                        </span></td>
                                
                                      </tr>
                                
                                      <tr>
                                
                                        <td align="left" valign="middle" class="form_label">How did you hear about this site?</td>
                                
                                        <td>
                                
                                          <input name="hear_about_site" type="text" class="input-xxlarge" id="hear_about_site"  value="" maxlength="50" />
                                
                                        </td>
                                
                                      </tr>
                                
                                      <tr>
                                
                                        <td colspan="2" align="left" class="form_label"><hr /></td>
                                
                                        </tr>
                                
                                      <tr>
                                
                                        <td colspan="2" align="center" class="form_label">
                                
                                        For example i.e. Local Busiuness Licenses and Construction Business Licenses etc.
                                
                                        </td>
                                
                                        </tr>
                                
                                      <tr>
                                
                                        <td align="left" class="form_label">Upload Business Certificate - 1</td>
                                
                                        <td>
                                
                                          <input type="file" name="business_cert_1" id="business_cert_1" />
                                
                                                    </span></td>
                                
                                      </tr>
                                
                                      <tr>
                                
                                        <td align="left" class="form_label">Upload Business Certificate - 2</td>
                                
                                        <td>
                                
                                          <input type="file" name="business_cert_2" id="business_cert_2" />
                                
                                                  </span></td>
                                
                                      </tr>
                                
                                      <tr>
                                
                                        <td align="left" class="form_label">Upload Business Certificate - 3</td>
                                
                                        <td>
                                
                                          <input type="file" name="business_cert_3" id="business_cert_3" />
                                
                                                  </span></td>
                                
                                      </tr>
                                
                                      <tr>
                                
                                        <td align="left" class="form_label">Upload Business Certificate - 4</td>
                                
                                        <td>
                                
                                          <input type="file" name="business_cert_4" id="business_cert_4" />
                                
                                                  </span></td>
                                
                                      </tr>
                                
                                      <tr>
                                
                                        <td align="left" class="form_label">Upload Business Certificate - 5</td>
                                
                                        <td>
                                
                                          <input type="file" name="business_cert_5" id="business_cert_5" />
                                
                                                  </span></td>
                                
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