<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><form action="index-sub.php"  method="post" name="form2" onSubmit="YY_checkform('form2','FirstName','#q','0','You must fill in the field Name.','Email','S','2','You must fill in a valid Email Address.','UserName','#q','0','You must fill in the field Username.','Password','#q','0','You must fill in the field Password','Password2','#Password','6','Passwords must match.');return document.MM_returnValue" >
              <span class="pageheading">Add New Website </span><span class="RedText"><?php print $Message; ?></span><br>
              <br>
            Complete the Website details below.<br>
            <br>
            <span class="RedText"><strong>*</strong></span><strong> Mandatory Fields </strong>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" id="tablecell">
              <tr>
                <td><strong>Website Title<span class="RedText">*</span></strong></td>
                <td><input name="SiteTitle" type="text" id="SiteTitle" size="45"></td>
              </tr>
              <tr>
                <td width="163"><strong> Website Address<span class="RedText">*</span></strong></td>
                <td width="352">
                    <input name="Name" type="text" id="Name" size="45"> .
                    <select name="DomainsID" id="DomainsID">
                    <?php
              if(isset($app_data['public_domains'])){
                if(count($app_data['public_domains'])>0){
                  //$Count=0;
                  $output="";
                 $drop_array=$app_data['public_domains'];
                  //print_r($drop_array);
                  foreach($drop_array as $key=>$val){
                    //foreach($val as $key2=>$val2){
                      
                      $output.="\n<option value='".$val['domainsID']."'>".$val['Host']."</option>";
                      /*
                      //$tmp=($key2==$selected_key ? "selected" : "");
                      //echo"<option value='".$key2."' ".$tmp.">".$val2."</option>";
                      $output.='<tr class="'."\n";
                      $op=(($Count%2)==0 ? "row1" : "row2");
                      $output.=$op;
                      $output.='"><td>'.$val2.'</td>'."\n";
                      $output.='<td align="center"><a href="modify-edit.php?id='.$key2.'">'."\n";
                      $output.='<img src="../../images/modify.gif" width="47" height="16" border="0"></a></td>'."\n";
                      $output.='<td><div align="center"><input type="checkbox" name="DFiles[]" value="'.$key2.'">'."\n";
                      $output.='</div></td></tr>'."\n";
                      */
                      //$Count++;
                    //}
                  }
                  print $output;
                }
              }
              
              ?></select>
                </td>
              </tr>
              <tr>
                <td><strong>Default Template</strong></td>
                <td><select name="templatesID" id="templatesID">
                  <?php
						
				//$r=new ReturnRecord();
				$rslt=$r->rawQuery("SELECT id,Name FROM templates ORDER BY Name");
				while($data=$r->Fetch_Array($rslt)){
					echo"<option value='$data[0]' $tmp>$data[1]</option>";
				};
			?>
                </select></td>
              </tr>
              <tr>
                <td><strong>Admin Email Address<span class="RedText">*</span></strong></td>
                <td><input name="AEmail" type="text" id="AEmail" size="45"></td>
              </tr>
              <tr>
                <td colspan="2"><strong>Google SiteMaps Meta Tag</strong></td>
              </tr>
              <tr>
                <td colspan="2"><textarea name="GSiteMapMeta" cols="110" id="GSiteMapMeta"></textarea></td>
              </tr>
              <tr>
                <td colspan="2"><strong>Google Analytics Code</strong></td>
              </tr>
              <tr>
                <td colspan="2"><textarea name="Analytics" cols="110" rows="9" id="Analytics"></textarea></td>
              </tr>
              <tr>
                <td><strong>Installed Modules</strong></td>
                <td><select name="modulesID[]" size="5" multiple id="modulesID[]">
                  <?php
					$rslt=$r->RawQuery("SELECT id,Name FROM modules WHERE optional='Yes'");
					while($myrow=$r->Fetch_Array($rslt)){
						echo "<option value='$myrow[0]' >$myrow[1]</a>";	
					}
				
				?>
                </select></td>
              </tr>
              </table>
            <p>
              <input name="Submit" type="submit"  class="formbuttons" id="Submit" value="Save" onClick="return confirmSubmit()">
              </p>
            </form></td>
        </tr>
      </table>