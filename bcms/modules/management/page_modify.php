<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
            <?php
            //print_r($app_data['current_domain']);
            if(is_array($app_data['current_domain'])){
              if($app_data['current_domain']['mirrorID']>0){
                //echo"Current Domain is a mirror";
                $show=false;
                $error_message="Mirror Domain No Pages";
              }else{
                $show=true;
              }
            }else{
              $show=false;
              $error_message="No Pages -> Add Domain";
            }
            ?>
            <form action="modify.php"  method="post" name="form2" >
              <span class="pageheading">Modify / Delete Pages </span><span class="RedText"><?php print $Message; ?></span><br>
              <br>
              <table width="100%" border="0" cellpadding="3" cellspacing="1" id="table">
                <tr bgcolor="#363E57" id="tablecell">
                  <td width="28%" class="tabletitle"> Page Address</td>
                  <td width="28%" class="tabletitle">Title</td>
                  <td width="20%" bgcolor="#363E57" class="tabletitle">Menu Title</td>
                  <td width="7%" align="center" bgcolor="#363E57" class="tabletitle">Sort</td>
                  <td width="8%" align="center" class="tabletitle">Modify</td>
                  <td width="9%" align="center" class="tabletitle">Delete</td>
                </tr>
                <?php
					  	$Count=0;
					 	//$r=new ReturnRecord();
						$sql="SELECT id,URI,Title,MenuTitle,Sort_Order FROM content_pages WHERE domainsID=".$app_data['domainsID']." AND languagesID=".$app_data['languagesID']." AND module_viewsID=1 ORDER BY Sort_Order";
						//print $sql;
						$sq2=$r->rawQuery($sql);  
            $nrows=$r->NumRows();
            if($show){
              if($nrows>0){
                while ($myrow = $r->Fetch_Array($sq2)) {
                  ?>
                      <tr class="<?php print(($Count%2)==0 ? "row1" : "row2"); ?>">
                        <td><?php print $myrow[1];?></td>
                        <td><?php print $myrow[2];?></td>
                        <td><?php print $myrow[3];?></td>
                        <td align="center"><input name="SFiles[<?php print $myrow[0];?>]" type="text" id="SFiles[<?php print $myrow[0];?>]" value="<?php print $myrow[4];?>" size="3"></td>
                        <td align="center"><a href="modify-edit.php?id=<?php print $myrow[0];?>"><img src="../../images/modify.gif" width="47" height="16" border="0"></a></td>
                        <td><div align="center">
                            <input type="checkbox" name="DFiles[]" value="<?php print $myrow[0];?>">
                        </div></td>
                      </tr>
                      <?php
                    $Count++;
                  };
              }
            }else{
              ?>
                <tr class="row1">
                        <td colspan="6"><?php print $error_message; ?></td>
                        
                      </tr>
              <?php
            }
            
						
					?>
                <tr align="right" bgcolor="#B2C8D8">
                  <td colspan="5"><input name="Sort" type="submit" class="formbuttons" id="Sort" value="Change Sort Order" onClick="return confirmSubmit()"></td>
                  <td align="center"><input name="Delete" type="submit" class="formbuttons" id="Delete" value="Delete" onClick="return confirmSubmit()">                  </td>
                </tr>
              </table>
            <strong><br>
              To Delete a Page:</strong> select the checkbox for that Page and then choose Delete button. <br>
            <strong>Tip:</strong> You can select multiple Pages. <br>
          </form>
        
              
        </td>
        </tr>
      </table>