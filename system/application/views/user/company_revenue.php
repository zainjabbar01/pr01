<div id="content" style="height:150px">
        <div id="content-right">
        	<?php $this->load->view('user/right_bar_user'); ?>
	</div>

        <div id="content-left">
                
                <form enctype="multipart/form-data" name="myform">

                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                        
                          <tr>
                        
                            <td class="page-heading">Company Revenue</td>
                        
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

        <td width="200" align="left" valign="bottom" class="form_label"><strong><u>Last Year Revenues</u></strong></td>

        <td>&nbsp;</td>

      </tr>

     

      <tr>

        <td align="left" class="form_label">Last Year's Annual Sales</td>

        <td>

            <select name="comp_annual_sale" class="input-xxlarge" id="comp_annual_sale" >

            <option value="" selected="selected">Select from list</option>

        	<option  value="0 - 499,000">0 - 499,000</option>

            <option  value="500,000 - 1,000,000">500,000 - 1,000,000</option>

            <option  value="1,000,001 - 5,000,000">1,000,001 - 5,000,000</option>

            <option  value="5,000,001 - 10,000,000">5,000,001 - 10,000,000</option>

            <option  value="&gt; 10,000,000">&gt; 10,000,000</option>

          </select>            

        </td>

      </tr>

       <tr>

        <td align="left" class="form_label">2  Year Previous Annual Sales</td>

        <td>

        	<select name="comp_annual_sale_2" class="input-xxlarge" id="comp_annual_sale_2">

            <option value="" selected="selected">Select from list</option>

        	<option  value="0 - 499,000">0 - 499,000</option>

            <option  value="500,000 - 1,000,000">500,000 - 1,000,000</option>

            <option  value="1,000,001 - 5,000,000">1,000,001 - 5,000,000</option>

            <option  value="5,000,001 - 10,000,000">5,000,001 - 10,000,000</option>

            <option  value="&gt; 10,000,000">&gt; 10,000,000</option>

          </select>

         </td>

      </tr>

       <tr>

        <td align="left" class="form_label">3 Year Pervious Annual Sales</td>

        <td>

        	<select name="comp_annual_sale_3" class="input-xxlarge" id="comp_annual_sale_3" >

            <option value="" selected="selected">Select from list</option>

        	<option  value="0 - 499,000">0 - 499,000</option>

            <option  value="500,000 - 1,000,000">500,000 - 1,000,000</option>

            <option  value="1,000,001 - 5,000,000">1,000,001 - 5,000,000</option>

            <option  value="5,000,001 - 10,000,000">5,000,001 - 10,000,000</option>

            <option  value="&gt; 10,000,000">&gt; 10,000,000</option>

          </select>

        </td>

      </tr>

      <tr>

        <td align="left" class="form_label">&nbsp;</td>

        <td class="form_label">&nbsp;</td>

      </tr>

      <tr>

        <td align="left" class="form_label">Is your company diverse?</td>

        <td class="form_label"><input name="comp_is_diverse" type="radio" id="comp_is_diverse" value="Y"  />

          Yes &nbsp;&nbsp; 

            <input type="radio" name="comp_is_diverse" id="comp_is_diverse" value="N"  />

            No </td>

      </tr>

      <tr>

        <td align="left" class="form_label">Is your company publicly traded?</td>

        <td class="form_label"><input type="radio" name="comp_is_traded" id="comp_is_traded" value="Y"  />

          Yes &nbsp;&nbsp;

            <input type="radio" name="comp_is_traded" id="comp_is_traded" value="N"  />

            No </td>

      </tr>

      <tr>

        <td align="left" class="form_label">Are you a small bussiness based on SBA standards?</td>

        <td class="form_label"><input type="radio" name="comp_large_business" id="comp_large_business" value="Y" />

          Yes &nbsp;&nbsp;

            <input type="radio" name="comp_large_business" id="comp_large_business" value="N" />

            No </td>

      </tr>

      <tr>

        <td height="30" align="left" valign="bottom" class="form_label"><strong><u>Ownership</u></strong></td>

        <td class="form_label">&nbsp;</td>

      </tr>

      <tr>

        <td align="left" class="form_label">Minority Owned</td>

        <td class="form_label"><input type="radio" name="owned_minority" id="owned_minority" value="Y"  />

          Yes &nbsp;&nbsp;

            <input type="radio" name="owned_minority" id="owned_minority" value="N"  />

            No </td>

      </tr>

      <tr>

        <td align="left" class="form_label">Veteran  Owned</td>

        <td class="form_label"><input type="radio" name="owned_veteran" id="owned_veteran" value="Y"  />

          Yes &nbsp;&nbsp;

            <input type="radio" name="owned_veteran" id="owned_veteran" value="N"  />

            No </td>

      </tr>

      <tr>

        <td align="left" class="form_label">US  Citizen Owned</td>

        <td class="form_label"><input type="radio" name="owned_us_citizen" id="owned_us_citizen" value="Y"  />

          Yes &nbsp;&nbsp;

            <input type="radio" name="owned_us_citizen" id="owned_us_citizen" value="N"  />

            No </td>

      </tr>

      <tr>

        <td align="left" class="form_label">Women  Owned</td>

        <td class="form_label"><input type="radio" name="owned_women" id="owned_women" value="Y"  />

          Yes &nbsp;&nbsp;

            <input type="radio" name="owned_women" id="owned_women" value="N"  />

            No </td>

      </tr>

      <tr>

        <td align="left" class="form_label">Service  Disabled Vet</td>

        <td class="form_label"><input type="radio" name="service_disabled_vet" id="service_disabled_vet" value="Y"  />

          Yes &nbsp;&nbsp;

            <input type="radio" name="service_disabled_vet" id="service_disabled_vet" value="N"  />

            No </td>

      </tr>

      <tr>

        <td align="left" class="form_label">&nbsp;</td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td align="left" valign="top" class="form_label">Owners Ethnicities</td>

        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">

          <tr>

            <td width="180" align="left" valign="top" class="form_label">

            		<input name="owner_ethnicity" type="radio" id="owner_ethnicity" value="African American"  />

                    African American<br />

                    <input name="owner_ethnicity" type="radio" id="owner_ethnicity" value="Asian Pacific American"  />

                    Asian Pacific American<br />

                    <input name="owner_ethnicity" type="radio" id="owner_ethnicity" value="Canadian Aboriginal"  />

                    Canadian Aboriginal<br />

                    <input name="owner_ethnicity" type="radio" id="owner_ethnicity" value="Hispanic American"  />

                    Hispanic American </td>

                                <td align="left" valign="top" class="form_label">

                                <input name="owner_ethnicity" type="radio" id="owner_ethnicity" value="Native American"  />

                    Native American<br />

                    <input name="owner_ethnicity" type="radio" id="owner_ethnicity" value="Subcontinent Asian American"  />

                    Subcontinent Asian American<br />

                    <input name="owner_ethnicity" type="radio" id="owner_ethnicity" value="White (not Hispanic)"  />

                    White (not Hispanic)<br /></td>

          </tr>

        </table></td>

      </tr>

      <tr>

        <td height="30" align="left" valign="bottom" class="form_label"><strong>Payment/Remit To</strong></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td align="left" class="form_label">Address</td>

        <td><textarea name="remit_to_address" cols="45" rows="3" class="input-xxlarge" id="remit_to_address" style="height:50px;"></textarea></td>

      </tr>

      <tr>

        <td align="left" class="form_label">City</td>

        <td><input name="remit_to_city" type="text" class="input-xxlarge" id="remit_to_city"  value="" size="40" /></td>

      </tr>

      <tr>

        <td align="left" class="form_label">State</td>

        <td>

        <select name='remit_to_state_id'  id='remit_to_state_id' class='input-xxlarge'  >

		<option value=''> Select from the list.... </option>

		</select>

        </td>

      </tr>

      <tr>

        <td align="left" class="form_label">Zip/Postal Code</td>

        <td><input name="remit_to_zip" type="text" class="input-xxlarge" onkeyup="this.value = func_numbers_only(this.value);" id="remit_to_zip" value="" maxlength="6" /></td>

      </tr>

      <tr>

        <td align="left" class="form_label">Remit To Email</td>

        <td><input name="remit_to_email" type="text" class="input-xxlarge" id="remit_to_email" value="" size="40" /></td>

      </tr>

      <tr>

        <td align="left" class="form_label">Confirm Email</td>

        <td><input name="remit_to_email_2" type="text" class="input-xxlarge" id="remit_to_email_2"  value="" size="40" /></td>

      </tr>

     

      <tr>

      	<td align="left">&nbsp;</td>

        <td class="form_label">&nbsp;</td>

      </tr>
                        
                                </table>
                        
                                
                        
                            </td>
                        
                          </tr>
                        
                        </table>
		</form>
                
        </div>
</div>
<div id="content" align="center" style="clear:both"></div>