<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><form action="index.php"  method="post" name="form2" onSubmit="YY_checkform('form2','FirstName','#q','0','You must fill in the field Name.','Email','S','2','You must fill in a valid Email Address.','UserName','#q','0','You must fill in the field Username.','Password','#q','0','You must fill in the field Password','Password2','#Password','6','Passwords must match.');return document.MM_returnValue" >
              <span class="pageheading">Add New Administrator </span><span class="RedText"><?php print $Message; ?></span><br>
              <br>
            Complete the administrator details below.<br>
            <br>
            <span class="RedText"><strong>*</strong></span><strong> Mandatory Fields </strong>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" id="tablecell">
              <tr>
                <td width="163"><strong> Name<span class="RedText">*</span></strong></td>
                <td width="352"><input name="name" type="text" id="name" size="45"></td>
              </tr>
              <tr>
                <td><strong> Email<span class="RedText">*</span></strong></td>
                <td><input name="email" type="text" id="email" size="45"></td>
              </tr>
              <tr>
                <td><strong> Username<span class="RedText">*</span></strong></td>
                <td><input name="username" type="text" id="username" size="15"></td>
              </tr>
              <tr>
                <td><strong>Password<span class="RedText">*</span> </strong></td>
                <td><input name="password" type="password" id="password" size="45"></td>
              </tr>
              <tr>
                <td><strong> Retype Password Again<span class="RedText">*</span> </strong></td>
                <td><input name="password2" type="password" id="password2" size="45"></td>
              </tr>
              <tr>
                <td height="25"><strong>Website Available To Administrator</strong></td>
                <td height="25"><select name="domainsID[]" size="5" multiple id="domainsID[]">
                  <?php
					if($session_data["SU"]!="No"){
						$sql="SELECT domains.id,Name FROM domains WHERE  clientsID=$session_data[clientsID] ORDER BY Name";
					}else{
						$sql="SELECT domains.id,Name FROM domains,administrators_domains WHERE domains.id=administrators_domains.domainsID AND administratorsID=$session_data[administratorsID] AND  clientsID=$session_data[clientsID] ORDER BY Name";
					}
					$rslt=$r->rawQuery($sql);
					while($data=$r->Fetch_Array($rslt)){
						//$tmp=(in_array($data[0],$DomArr) ? "selected" : "");
						echo"<option value='$data[0]' $tmp>$data[1]</option>";
					};
				?>
                </select></td>
              </tr>
            </table>
            <p><br>
              <input name="Submit" type="submit"  class="formbuttons" id="Submit" value="Save" onClick="return confirmSubmit()">
              </p>
            </form></td>
        </tr>
      </table>