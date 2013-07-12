<div id="content" style="height:150px">
        <div id="content-right">
        	<?php $this->load->view('user/right_bar_user'); ?>
	</div>

        <div id="content-left">
                
                <form enctype="multipart/form-data" name="myform">

                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                        
                          <tr>
                        
                            <td class="page-heading">Company Contact Information</td>
                        
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

        <td width="150" align="left" valign="middle" class="form_label">Address</td>

        <td width="475"><textarea name="comp_contact_address" cols="45" rows="2" class="input-xxlarge" id="comp_contact_address" style="height:50px"></textarea></td>

      </tr>

      <tr>

        <td align="left" valign="middle" class="form_label">City</td>

        <td><input name="comp_contact_city" type="text" class="input-xxlarge" id="comp_contact_city" value="" maxlength="100" /></td>

      </tr>

      <tr>

        <td align="left" valign="middle" class="form_label">State</td>

        <td><select name='comp_contact_state_id'  id='comp_contact_state_id' class='input-xxlarge' >

        <option value=''> Select from the list.... </option>
        
        </select>
        
        </td>

      </tr>

      <tr>

        <td align="left" valign="middle" class="form_label">Zip Code</td>

        <td valign="top">

          <input name="comp_contact_zip" type="text" class="input-xxlarge" id="comp_contact_zip" value="" maxlength="6" /></td>

      </tr>

      <tr>

        <td align="left" valign="middle" class="form_label">Mailing Address</td>

        <td>

          <textarea name="comp_mail_address" cols="45" rows="2" class="input-xxlarge" id="comp_mail_address" style="height:50px"></textarea>

        </td>

      </tr>

      <tr>

        <td align="left" valign="middle" class="form_label">City</td>

        <td><input name="comp_mail_city" type="text" class="input-xxlarge" id="comp_mail_city"  value="" maxlength="100" /></td>

      </tr>

      <tr>

        <td align="left" valign="middle" class="form_label">State</td>

        <td><select name='comp_mail_state_id'  id='comp_mail_state_id' class='input-xxlarge'  >

<option value=''> Select from the list.... </option>



</select>

</td>

      </tr>

      <tr>

        <td align="left" valign="middle" class="form_label">Zip Code</td>

        <td><input name="comp_mail_zip" type="text" class="input-xxlarge" id="comp_mail_zip" value="" maxlength="6" /></td>

      </tr>

      <tr>

        <td align="left" valign="middle" class="form_label">Products &amp; Services Description</td>

        <td><textarea name="comp_ps_desc" cols="45" rows="2" class="input-xxlarge" id="comp_ps_desc" style="height:60px"></textarea></td>

      </tr>

      <tr>

        <td align="left" valign="middle" class="form_label">&nbsp;</td>

        <td align="left" valign="top" class="form_label">

        <span style="font-size:10px; color:#333"> please use statndard keywords that match your exact product</span>

        </td>

      </tr>

     

      <tr>

        <td align="left">&nbsp;</td>

        <td class="form_label">&nbsp;</td>

      </tr>

      <tr>

        <td colspan="2" align="left"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">

          <tr>

            <td width="35%" align="left" class="form_label">List of Product &amp; Services Category</td>

            <td align="center">&nbsp;</td>

            <td width="60%" align="left" class="form_label" style="padding-left:5px;"> Selected  Category List</td>

          </tr>

          <tr>

            <td width="45%" align="left">

            <select name="lst_ps_categ" size="10" multiple="multiple" class="va_text_item" id="lst_ps_categ" style="width:290px; font-size:12px; font-family:Arial, Helvetica, sans-serif" >

              <option value="1">Agriculture</option>

              <option value="2">Automotive</option>

              <option value="3">Automotive parts</option>

              <option value="4">Automotive parts/Manufacturing parts</option>

              <option value="5">Banking/ Financial/ Commerce</option>

              <option value="6">Banking/Financial/Commerce </option>

              <option value="7">Consumer Goods</option>

              <option value="8">Consumer Goods </option>

              <option value="10">Consumer Goods/Food industry</option>

              <option value="11">Consumer Goods/Manufacturing</option>

              <option value="12">Consumer Goods/Service provider</option>

              <option value="9">Consumer goods/Beverages</option>

              <option value="13">Consumer products/Beverages</option>

              <option value="14">Education/School</option>

              <option value="15">Education/Schools</option>

              <option value="16">Electronics</option>

              <option value="17">Engineering</option>

              <option value="18">Engineering/ Constructions/ Architecture</option>

              <option value="19">Engineering/ Constructions/ Architecture/ Real Estate</option>

              <option value="20">Engineering/Constructions/Architecture </option>

              <option value="21">Entertainment/Leisure </option>

              <option value="22">Equipments</option>

              <option value="23">Financial</option>

              <option value="24">Financial/Real Estate Services</option>

              <option value="25">Food Industry</option>

              <option value="26">Food Industry/Restaurant</option>

              <option value="27">Hotel</option>

              <option value="28">Hotel/Casino/Leisure</option>

              <option value="29">Hotel/Lodging</option>

              <option value="35">IT</option>

              <option value="36">IT / Communication</option>

              <option value="37">IT / Outsourcing</option>

              <option value="38">IT/Utility</option>

              <option value="30">Insurance</option>

              <option value="31">Insurance/ Financial/Outsourcing</option>

              <option value="32">Insurance/Financial </option>

              <option value="33">Insurance/Plans</option>

              <option value="34">Insurance/protection services</option>

              <option value="39">Law</option>

              <option value="40">Logistics</option>

              <option value="41">Manufacturing</option>

              <option value="42">Manufacturing Parts</option>

              <option value="43">Manufacturing/Interior design</option>

              <option value="44">Manufacturing/Science &amp; Technology</option>

              <option value="45">Manufacturing/Science and Technology</option>

              <option value="46">Manufacturing/Service provider</option>

              <option value="47">Marketing</option>

              <option value="48">Marketing/Advertising</option>

              <option value="49">Marketing/Service Provider</option>

              <option value="50">Mass Media</option>

              <option value="51">Medical</option>

              <option value="52">Medical/Service provider</option>

              <option value="53">Membership Organization</option>

              <option value="54">Mining</option>

              <option value="55">Museum/Galleries</option>

              <option value="57">Online Services</option>

              <option value="58">Online Services / IT</option>

              <option value="56">Online serivces / IT</option>

              <option value="59">Online services/Electronic Database/IT</option>

              <option value="60">Online services/Outsourcing</option>

              <option value="61">Organization</option>

              <option value="62">Outsourcing</option>

              <option value="63">Outsourcing/IT</option>

              <option value="64">Outsourcing/Service Provider</option>

              <option value="65">Real Estate Services</option>

              <option value="66">Recruitment/Staffing</option>

              <option value="67">Science/Technology</option>

              <option value="68">Science/Technology/Imaging</option>

              <option value="69">Science/Technology/Medical</option>

              <option value="70">Science/Technology/Service Provider</option>

              <option value="71">Security Service</option>

              <option value="72">Security Services</option>

              <option value="73">Service Provider</option>

              <option value="75">Service Provider/ Outsourcing</option>

              <option value="76">Service Provider/Manufacturing</option>

              <option value="74">Service provider / IT</option>

              <option value="77">Sports/Entertainment </option>

              <option value="78">Transportation</option>

              <option value="79">Transportation/Manufacturer</option>

              <option value="80">Transportation/Science</option>

              <option value="81">Transportation/Travel</option>

              <option value="82">Travel/Transportation</option>

              <option value="83">Utility Services/ Consumer Goods</option>

              <option value="84">Utility Services/ Energy Industry/Electricity industry</option>

              <option value="85">Utility Services/ Water Industry</option>

              <option value="86">Venue</option>

            </select></td>

            <td align="center"><input type="button" name="btn_left" value="   &gt;&gt;   "  onclick="moveSelectedOptions(document.forms[0].lst_ps_categ,document.forms[0].lst_sel_ps_categ); func_before_submit(); " />

              <br />

              <br />

              <input type="button" name="btn_right" value="   &lt;&lt;   "  onclick="moveSelectedOptions(this.form['lst_sel_ps_categ'],this.form['lst_ps_categ']); func_before_submit();"/>

              <br />

              <input name="hid_selected_categ" type="hidden" /></td>

            <td align="left" style="padding-left:5px;"><select name="lst_sel_ps_categ" size="10" multiple="multiple" class="va_text_item" id="lst_sel_ps_categ" style="width:250px; font-size:12px; font-family:Arial, Helvetica, sans-serif"" >

            </select></td>

          </tr>

        </table></td>

        </tr>

      <tr>

        <td align="left">&nbsp;</td>

        <td class="form_label">&nbsp;</td>

      </tr>

      <tr>

        <td colspan="2" align="left">

        <fieldset>

        <legend>Reference - 01</legend>

        <table width="93%" border="0" align="right" cellpadding="2" cellspacing="0">

          <tr>

            <td width="50%" valign="bottom">Company Name</td>

            <td valign="bottom">Contact Name</td>

          </tr>

          <tr>

            <td><input name="ref_1_comp_name" type="text" class="form_textbox" id="ref_1_comp_name" style="width:250px" value="" maxlength="50" /></td>

            <td><input name="ref_1_contact_name" type="text" class="form_textbox" id="ref_1_contact_name" style="width:250px" value="" maxlength="50" /></td>

          </tr>

          <tr>

            <td valign="bottom">Phone</td>

            <td valign="bottom">Email</td>

          </tr>

          <tr>

            <td><input name="ref_1_phone" type="text" class="form_textbox" id="ref_1_phone" style="width:250px" value="" maxlength="20" /></td>

            <td><input name="ref_1_email" type="text" class="form_textbox" id="ref_1_email" style="width:250px" value="" maxlength="50" /></td>

          </tr>

          <tr>

            <td valign="bottom">Product/Services Sold</td>

            <td>&nbsp;</td>

          </tr>

          <tr>

            <td colspan="2"><textarea name="ref_1_ps_desc" cols="45" rows="2" class="form_textbox" id="ref_1_ps_desc" style="width:558px; height:40px"></textarea></td>

            </tr>

        </table>        

        </fieldset>

        </td>

        </tr>

      <tr>

        <td align="left">&nbsp;</td>

        <td class="form_label">&nbsp;</td>

      </tr>

      <tr>

        <td colspan="2" align="left">

        <fieldset>

        <legend>Reference - 02</legend>

        <table width="93%" border="0" align="right" cellpadding="2" cellspacing="0">

          <tr>

            <td width="50%" valign="bottom">Company Name</td>

            <td valign="bottom">Contact Name</td>

          </tr>

          <tr>

            <td><input name="ref_2_comp_name" type="text" class="form_textbox" id="ref_2_comp_name" style="width:250px" value="" maxlength="50" /></td>

            <td><input name="ref_2_contact_name" type="text" class="form_textbox" id="ref_2_contact_name" style="width:250px" value="" maxlength="50" /></td>

          </tr>

          <tr>

            <td valign="bottom">Phone</td>

            <td valign="bottom">Email</td>

          </tr>

          <tr>

            <td><input name="ref_2_phone" type="text" class="form_textbox" id="ref_2_phone" style="width:250px" value="" maxlength="50" /></td>

            <td><input name="ref_2_email" type="text" class="form_textbox" id="ref_2_email" style="width:250px" value="" maxlength="50" /></td>

          </tr>

          <tr>

            <td valign="bottom">Product/Services Sold</td>

            <td>&nbsp;</td>

          </tr>

          <tr>

            <td colspan="2"><textarea name="ref_2_ps_desc" cols="45" rows="2" class="form_textbox" id="ref_2_ps_desc" style="width:558px; height:40px"></textarea></td>

            </tr>

        </table>        

        </fieldset>

        </td>

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