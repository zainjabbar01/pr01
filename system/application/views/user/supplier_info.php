<div id="content" style="height:150px">
        <div id="content-right">
        	<?php $this->load->view('user/right_bar_user'); ?>
	</div>

        <div id="content-left">
                
                <form enctype="multipart/form-data" name="myform">

                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                        
                          <tr>
                        
                            <td class="page-heading">Supplier Information</td>
                        
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
                        
                                     <td width="150" align="left" class="form_label"> Salutation</td>
                        
                                     <td>
                        
                                       <select name="sup_title" class="input-xxlarge" id="sup_title" >
                        
                                         <option value="Dr.">Dr.</option>
                        
                                         <option value="Er.">Er.</option>
                        
                                         <option value="Mr." selected="selected">Mr.</option>
                        
                                         <option value="Mrs.">Mrs.</option>
                        
                                         <option value="Ms.">Ms.</option>
                        
                                       </select>
                        
                                     </td>
                        
                                  </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">First Name</td>
                        
                                <td><input name="sup_fname" type="text" class="input-xxlarge" id="sup_fname" value="" size="40" maxlength="20" /></td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Last Name</td>
                        
                                <td><input name="sup_lname" type="text" class="input-xxlarge" id="sup_lname" value="" size="40" maxlength="20" /></td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" valign="middle" class="form_label">Position</td>
                        
                                <td valign="top">
                        
                                  <input name="sup_position" type="text" class="input-xxlarge" id="sup_position" value="" size="40" maxlength="50" /></td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Phone Number</td>
                        
                                <td>
                        
                                  <input name="sup_phone" type="text" class="input-xxlarge" id="sup_phone" value="" size="40" maxlength="12" />
                        
                                  xxx-xxx-xxxx</td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label"> Fax Number</td>
                        
                                <td><input name="sup_fax" type="text" class="input-xxlarge" id="sup_fax" value="" size="40" maxlength="12" />
                        
                        xxx-xxx-xxxx</td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Cell Number</td>
                        
                                <td><input name="sup_mob" type="text" class="input-xxlarge" id="sup_mob" value="" size="40" maxlength="12" />
                        
                        xxx-xxx-xxxx</td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Contact Email</td>
                        
                                <td><input name="sup_email" type="text" class="input-xxlarge" id="sup_email" value="" size="40" maxlength="50" /></td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Verify Contact Email</td>
                        
                                <td><input name="sup_email_2" type="text" class="input-xxlarge" id="sup_email_2" value="" size="40" maxlength="50" /></td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" valign="top" class="form_label">Contact Address</td>
                        
                                <td valign="top">
                        
                                  <textarea name="sup_address" cols="45" rows="2" class="input-xxlarge" id="sup_address" style="height:50px"></textarea></td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">City</td>
                        
                                <td>
                        
                                  <input name="sup_city" type="text" class="input-xxlarge" id="sup_city"  value="" size="40" maxlength="30" /></td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">State</td>
                        
                                <td>
                        
                                <select name='sup_state'  id='sup_state' class='input-xxlarge' >
                        
                                        <option value=''> Select from the list.... </option>
                        
                                        </select>
                        
                                </td>
                        
                              </tr>
                        
                              <tr>
                        
                                <td align="left" class="form_label">Zip Code</td>
                        
                                <td><input name="sup_zip" type="text" class="input-xxlarge" id="sup_zip"  value="" size="10" maxlength="6" /></td>
                        
                              </tr>
                        
                                  
                        
                                  
                        
                                  <tr>
                        
                                    <td colspan="2"><strong>Preferred usernames</strong></td>
                        
                                    </tr>
                        
                                  <tr>
                        
                                    <td>Username 1</td>
                        
                                    <td><input type="text" name="textfield12" id="textfield12" class="input-xxlarge" /></td>
                        
                                  </tr>
                        
                                  <tr>
                        
                                    <td>Username 2</td>
                        
                                    <td><input type="text" name="textfield13" id="textfield13" class="input-xxlarge" /></td>
                        
                                  </tr>
                        
                                  <tr>
                        
                                    <td>Username 3</td>
                        
                                    <td><input type="text" name="textfield14" id="textfield14" class="input-xxlarge" /></td>
                        
                                  </tr>
                        
                                  <tr>
                        
                                    <td colspan="2"><strong>User system generated usernames</strong></td>
                        
                                    </tr>          
                        
                                  <tr>
                        
                                    <td>&nbsp;</td>
                        
                                    <td><input name="" type="checkbox" value="" /> Username Option 1</td>
                        
                                  </tr>
                        
                                  <tr>
                        
                                    <td>&nbsp;</td>
                        
                                    <td><input name="" type="checkbox" value="" /> Username Option 2</td>
                        
                                  </tr>
                        
                                  <tr>
                        
                                    <td>&nbsp;</td>
                        
                                    <td><input name="" type="checkbox" value="" /> Username Option 3</td>
                        
                                  </tr>
                        
                                  <tr>
                        
                                    <td>Password</td>
                        
                                    <td><input type="text" name="textfield15" id="textfield15" class="input-xxlarge" /></td>
                        
                                  </tr>
                        
                                </table>
                        
                                
                        
                            </td>
                        
                          </tr>
                        
                        </table>
		</form>
                
        </div>
</div>
<div id="content" align="center" style="clear:both"></div>