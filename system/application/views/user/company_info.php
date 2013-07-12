<div id="content" style="height:150px">
        <div id="content-right">
        	<?php $this->load->view('user/right_bar_user'); ?>
	</div>

        <div id="content-left">
                
                <form enctype="multipart/form-data" name="myform">

                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                        
                          <tr>
                        
                            <td class="page-heading">Company Information</td>
                        
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

                                <td width="200" align="left" class="form_label">Legal Company Name</td>
                        
                                <td><input name="comp_name" type="text" class="input-xxlarge" id="comp_name" value="" maxlength="100" /></td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Organization Type</td>
                        
                                <td>
                        
                                <select name="comp_type" class="input-xxlarge" id="comp_type" >
                        
                                  <option value="" selected="selected">Select from list</option>
                        
                                  <option value="Corporate">Corporate</option>
                        
                                  <option value="Partnership">Partnership</option>
                        
                                  <option value="Sole">Sole</option>
                        
                                  <option value="LLC/LC Proprietorship">LLC/LC Proprietorship</option>          
                        
                                </select>
                        
                                </td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Doing Business As</td>
                        
                                <td>
                        
                                        <input name="comp_business" type="text" class="input-xxlarge" id="comp_business"  value="" size="40" maxlength="100" />         
                        
                                </td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Federal Tax ID Number</td>
                        
                                <td><input name="comp_fed_tax" type="text" class="input-xxlarge" id="comp_fed_tax" value="" maxlength="10" />
                        
                                  xx-xxxxxxx</td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Social Security Number</td>
                        
                                <td><input name="comp_social_sec" type="text" class="input-xxlarge" id="comp_social_sec" value="" maxlength="11" />
                        
                                  xx-xxxxxxx</td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Dunn &amp; Brad Street Number</td>
                        
                                <td><input name="comp_dunn_street" type="text" class="input-xxlarge" id="comp_dunn_street" value="" maxlength="11" />
                        
                                  xx-xxxxxxx</td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" valign="middle" class="form_label">Company Phone Number</td>
                        
                                <td valign="top"><label for="textarea14"></label>
                        
                                  <input name="comp_phone" type="text" class="input-xxlarge" id="comp_phone" value="" size="40" maxlength="12" />
                        
                                  xxx-xxx-xxxx</td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Company Fax Number</td>
                        
                                <td><label for="select14"></label>
                        
                                  <input name="comp_fax" type="text" class="input-xxlarge" id="comp_fax" value="" size="40" maxlength="12" />
                        
                                  xxx-xxx-xxxx</td>
                        
                              </tr>
                        
                                <tr>
                        
                                <td align="left" class="form_label">Corporate Email</td>
                        
                                <td><input name="comp_email" type="text" class="input-xxlarge" id="comp_email" value="" size="40" maxlength="100" /></td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Confirm Corporate Email</td>
                        
                                <td><input name="comp_email_2" type="text" class="input-xxlarge" id="comp_email_2" value="" size="40" maxlength="100" /></td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Website</td>
                        
                                <td><input name="comp_website" type="text" class="input-xxlarge" id="comp_website" value="" size="40" maxlength="100" /></td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Year Started</td>
                        
                                <td>
                        
                                <select name="comp_start_year" class="input-xxlarge" id="comp_start_year" >
                        
                                <option  value="" selected="selected">Select Year</option>
                        
                                </select>
                        
                                </td>
                        
                              </tr>                      
                        
                              <tr>
                        
                                <td align="left" class="form_label">Number of Employees</td>
                        
                                <td><input name="comp_employees" type="text" class="input-xxlarge" id="comp_employees" value="" size="40" /></td>
                        
                              </tr>
                        
                               <tr>
                        
                                 <td align="left" class="form_label">Capability Statement</td>
                        
                                 <td>
                        
                                    <textarea name="comp_capability" cols="45" rows="2" class="input-xxlarge" id="comp_capability" style="height:80px"></textarea>
                        
                                 </td>
                        
                               </tr>
                        
                               <tr>
                        
                                 <td align="left" class="form_label">&nbsp;</td>
                        
                                 <td class="form_label">&nbsp;</td>
                        
                               </tr>
                        
                               <tr>
                        
                                 <td align="left" class="form_label"><strong>Capability Statement</strong></td>
                        
                                 <td class="form_label"><span style="font-size:11px; color:#000; font-family:Arial, Helvetica, sans-serif;">(Note:  You can upload  document and video as your capability statement</span>)</td>
                        
                               </tr>
                        
                               <tr>
                        
                                 <td align="left" class="form_label">Upload Document</td>
                        
                                 <td class="form_label"><input name="file_capability" type="file" id="file_capability" size="15" /> (Max Size: 5MB)
                        
                                    </td>
                        
                              </tr> 
                        
                              
                        
                              <tr>
                        
                                <td align="left"><span class="form_label">Upload Video</span></td>
                        
                                <td class="form_label"><input name="file_capability_video" type="file" id="file_capability_video" size="15" /> (Max Size: 30MB)
                        
                                  </td>
                        
                              </tr>
                        
                              
                        
                             
                        
                              <tr>
                        
                                <td align="left">&nbsp;</td>
                        
                                <td class="form_label">
                        
                                    </td>
                        
                              </tr>
                        
                        </table>
		</form>
                
        </div>
</div>
<div id="content" align="center" style="clear:both"></div>