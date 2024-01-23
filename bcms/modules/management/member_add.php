<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><form action="index.php"  method="post" name="form2" onSubmit="YY_checkform('form2','FirstName','#q','0','You must fill in the field Name.','Email','S','2','You must fill in a valid Email Address.','UserName','#q','0','You must fill in the field Username.','Password','#q','0','You must fill in the field Password','Password2','#Password','6','Passwords must match.');return document.MM_returnValue" >
              <span class="pageheading">Add New Member </span><span class="RedText"><?php print $Message; ?></span><br>
              <br>
            Complete the member details below.<br>
            <br>
            <span class="RedText"><strong>*</strong></span><strong> Mandatory Fields </strong>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" id="table">
              <tr>
                <td class="tabletitle"><strong>Sub Domain</strong></td>
                <td class="tablewhite"><input name="subdomain" type="text" id="subdomain" size="45"></td>
              </tr>
              <tr>
                <td width="163" class="tabletitle"><strong> Business Name<span class="RedText">*</span></strong></td>
                <td width="352" class="tablewhite"><input name="name" type="text" id="name" size="45"></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>Contact Name</strong></td>
                <td class="tablewhite"><input name="contact_name" type="text" id="contact_name" size="45"></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong> Email<span class="RedText">*</span></strong></td>
                <td class="tablewhite"><input name="email" type="text" id="email" size="45"></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>Address</strong></td>
                <td class="tablewhite"><input name="address" type="text" id="address" size="45"></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>Suburb</strong></td>
                <td class="tablewhite"><input name="suburb" type="text" id="suburb" size="45"></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>State</strong></td>
                <td class="tablewhite"><input name="state" type="text" id="state" size="45"></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>Postcode</strong></td>
                <td class="tablewhite"><input name="postcode" type="text" id="postcode" size="45"></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>Phone</strong></td>
                <td class="tablewhite"><input name="phone" type="text" id="phone" size="45"></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>Mobile</strong></td>
                <td class="tablewhite"><input name="mobile" type="text" id="mobile" size="45"></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>Fax</strong></td>
                <td class="tablewhite"><input name="fax" type="text" id="fax" size="45"></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>Website</strong></td>
                <td class="tablewhite"><input name="website" type="text" id="website" size="45"></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>Password</strong></td>
                <td class="tablewhite"><input name="password" type="text" id="password" size="45"></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>Status</strong></td>
                <td class="tablewhite"><select name="status" id="accesslvl">
                  <option value="New" <?php print($Insert['accesslvl']=="New" ? "selected" : "");?>>New Member</option>
                  <option value="Rejected" <?php print($Insert['accesslvl']=="Rejected" ? "selected" : "");?>>Rejected</option>
                  <option value="Approved" <?php print($Insert['accesslvl']=="Approved" ? "selected" : "");?>>Approved</option>
                </select></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>Abn</strong></td>
                <td class="tablewhite"><input name="abn" type="text" id="abn" size="45"></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>Business Category</strong></td>
                <td class="tablewhite"><SELECT NAME="mod_business_categoriesID" id="mod_business_categoriesID">
                  <?php
					  	$Count=0;
					 //	$r=new ReturnRecord();
            //$sql="SELECT id,CategoryTitle FROM mod_business_categories WHERE domainsID=".$session_data['domainsID']." ORDER BY CategoryTitle";
            $sql="SELECT id,CategoryTitle FROM mod_business_categories WHERE ((domainsID=".$session_data['domainsID'].") OR  (domainsID=0)) ORDER BY CategoryTitle";
            print $sql;
						$sq2=$r->rawQuery($sql);  
						while ($myrow = $r->Fetch_Array($sq2)) {
							print "<option value='$myrow[0]' ".($Insert['mod_business_categoriesID']==$myrow[0] ? "selected" : "").">$myrow[1]</option>";
						};
						?>
                </SELECT></td>
              </tr>
              <tr>
                <td class="tabletitle"><strong>Directory Description</strong></td>
                <td class="tablewhite"><textarea name="business_description" cols="45" rows="4" id="business_description"><?php print $Insert['business_description'];?>
                </textarea></td>
              </tr>
              </table>
            <p><br>
              <input name="Submit" type="submit"  class="formbuttons" id="Submit" value="Save" onClick="return confirmSubmit()">
              </p>
            </form></td>
        </tr>
      </table>