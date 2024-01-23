<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><form action="modify.php"  method="post" name="form2" >
              <span class="pageheading">Modify / Delete Web Sites </span><span class="RedText"><?php print $Message; ?></span><br>
              <br>
              <table width="100%" border="0" cellpadding="3" cellspacing="1" id="table">
                <tr bgcolor="#363E57" id="tablecell">
                  <td class="tabletitle"> Website Address</td>
                  <td width="8%" align="center" class="tabletitle">Modify</td>
                  <td width="9%" align="center" class="tabletitle">Delete</td>
                </tr>
                <?php

              if(count($app_data['domains'])>0){
                $Count=0;
                $output="";
                $selected_key=$session_data['original_domainsID'];
                $drop_array=$app_data['domains'];
                //print_r($drop_array);
                foreach($drop_array as $key=>$val){
                  //foreach($val as $key2=>$val2){
                    //$tmp=($key2==$selected_key ? "selected" : "");
                    //echo"<option value='".$key2."' ".$tmp.">".$val2."</option>";
                    $output.='<tr class="'."\n";
                    $op=(($Count%2)==0 ? "row1" : "row2");
                    $output.=$op;
                    $output.='"><td>'.$val['title'].'</td>'."\n";
                    $output.='<td align="center"><a href="modify-edit.php?id='.$val['id'].'">'."\n";
                    $output.='<img src="../../images/modify.gif" width="47" height="16" border="0"></a></td>'."\n";
                    $output.='<td><div align="center"><input type="checkbox" name="DFiles[]" value="'.$val['id'].'">'."\n";
                    $output.='</div></td></tr>'."\n";
                    $Count++;
                  //}
                }
                print $output;
              }
              /*
					  	$Count=0;
					 	if($session_data["SU"]!="No"){
							$sql="SELECT domains.id,Name FROM domains WHERE clientsID=$session_data[clientsID] ORDER BY Name";
						}else{
							$sql="SELECT domains.id,Name FROM domains,administrators_domains WHERE domains.id=administrators_domains.domainsID AND administratorsID=$session_data[administratorsID] AND clientsID=$session_data[clientsID] ORDER BY Name";
						}
						$sq2=$r->rawQuery($sql);  
						while ($myrow = $r->Fetch_Array($sq2)) {
						?>
                <tr class="<?php print(($Count%2)==0 ? "row1" : "row2"); ?>">
                  <td><?php print $myrow[1];?></td>
                  <td align="center"><a href="modify-edit.php?id=<?php print $myrow[0];?>"><img src="../../images/modify.gif" width="47" height="16" border="0"></a></td>
                  <td><div align="center">
                      <input type="checkbox" name="DFiles[]" value="<?php print $myrow[0];?>">
                  </div></td>
                </tr>
                <?php
							$Count++;
						};
            */
					?>
                <tr align="right" bgcolor="#B2C8D8">
                  <td colspan="2">&nbsp;</td>
                  <td align="center"><input name="Delete" type="submit" class="formbuttons" id="Delete" value="Delete" onClick="return confirmSubmit()">                  </td>
                </tr>
              </table>
            <strong><br>
              To Delete a Website:</strong> select the checkbox for that Website and then choose Delete button. <br>
            <strong>Tip:</strong> You can select multiple Websites. <br>
          </form></td>
        </tr>
      </table>