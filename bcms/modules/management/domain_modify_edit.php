<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><form action="modify-edit.php"  method="post" name="form2" onSubmit="YY_checkform('form2','FirstName','#q','0','You must fill in the field Name.','Email','S','2','You must fill in a valid Email Address.','UserName','#q','0','You must fill in the field Username.','Password','#q','0','You must fill in the field Password','Password2','#Password','6','Passwords must match.');return document.MM_returnValue">
              <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><span class="pageheading">Modify Website - <?php print $Insert['SiteTitle'];?></span> <span class="RedText"><?php print $Message; ?></span></td>
                  <td width="20%" align="right"><a href="modify.php" class="buttonbacklist">Back To List </a></td>
                </tr>
              </table>
            <br>
            Complete the website details below.<br>
            <br>
            <span class="RedText"><strong>*</strong></span><strong> Mandatory Fields </strong>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" id="tablecell">
              <tr>
                <td><strong>Website Title<span class="RedText">*</span></strong></td>
                <td><input name="SiteTitle" type="text" id="SiteTitle" value="<?php print $Insert['SiteTitle'];?>" size="45"></td>
              </tr>
              <tr>
                <td width="163"><strong> Website Address<span class="RedText">*</span></strong></td>
                <td width="352"><input name="Name" type="text" id="Name" value="<?php print $Insert['Name'];?>" size="45"></td>
              </tr>
              <tr>
                <td><strong>Domain Mirror</strong></td>
                <td><select name="mirrorID" id="mirrorID">
                
                  <?php
                  //print_r($Insert);
                    $tmp=(0==$Insert['mirrorID'] ? "selected" : "");
                    $output="<option value='0' ".$tmp.">No Mirror</option>";
                    print $output;

                    $r->Initialise_Remote_Server(true);
                    //$r=new ReturnRecord();
                    $sql="SELECT id,Name,mirrorID FROM domains WHERE clientsID=".$session_data['original_clientsID']." AND id<>".$Insert['id']." ORDER BY Name";
                    print $sql;
                    $rslt=$r->rawQuery($sql);
                    while($data=$r->Fetch_Array($rslt)){
                      $tmp=($data[0]==$Insert['mirrorID'] ? "selected" : "");
                      echo"<option value='$data[0]' $tmp>$data[1]</option>";
                    };
                  ?>
                </select></td>
              </tr>
              <tr>
                <td><strong>Deafult Template</strong></td>
                <td><select name="templatesID" id="templatesID">
                  <?php
						
				//$r=new ReturnRecord();
				$rslt=$r->rawQuery("SELECT id,Name FROM templates ORDER BY Name");
				while($data=$r->Fetch_Array($rslt)){
					$tmp=($data[0]==$Insert['templatesID'] ? "selected" : "");
					echo"<option value='$data[0]' $tmp>$data[1]</option>";
				};
			?>
                </select></td>
              </tr>
              <tr>
                <td><strong>Admin Email Address<span class="RedText">*</span></strong></td>
                <td><input name="AEmail" type="text" id="AEmail" value="<?php print $Insert['AEmail'];?>" size="45"></td>
              </tr>
              <tr>
                <td colspan="2"><strong>Google SiteMaps Meta Tag</strong></td>
              </tr>
              <tr>
                <td colspan="2"><textarea name="GSiteMapMeta" cols="110" id="GSiteMapMeta"><?php print $Insert['GSiteMapMeta'];?></textarea></td>
                </tr>
              <tr>
                <td colspan="2"><strong>Google Analytics Code</strong></td>
                </tr>
              <tr>
                <td colspan="2"><textarea name="Analytics" cols="110" rows="9" id="Analytics"><?php print $Insert['Analytics'];?></textarea></td>
                </tr>
              <tr>
                <td><strong>Installed Modules</strong></td>
                <td><select name="modulesID[]" size="5" multiple id="modulesID[]">
                <?php
					$rslt=$r->RawQuery("SELECT id,Name FROM modules WHERE optional='Yes'");
					while($myrow=$r->Fetch_Array($rslt)){
						$tmp=(in_array($myrow[0],$ModsArr) ? "selected" : "");
						echo "<option value='$myrow[0]' $tmp>$myrow[1]</a>";	
					}
				
				?>
                </select></td>
              </tr>
            </table>
            <input name="Button2" type="button" class="formbuttons" onClick="MM_goToURL('parent','modify.php');return document.MM_returnValue;return confirmSubmit()" value="Cancel">
            <input name="Submit" type="submit"  class="formbuttons" id="Submit3" value="Save" onClick="return confirmSubmit()">
            <input name="id" type="hidden" id="id" value="<?php print $id; ?>">
          </form></td>
        </tr>
      </table>