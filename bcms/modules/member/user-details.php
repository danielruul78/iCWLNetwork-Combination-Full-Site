<?php
	//echo "\n\n ===================================================================================== 777 \n\n";
	$membersID=$_SESSION['membersID'];
    //$r=new ReturnRecord();
	$r->AddTable("users");
  
	$r->AddSearchVar($_SESSION['membersID']);
	$Memb=$r->GetRecord();
	
	$user_details_array=array('name','address','suburb','state','postcode','abn','phone','mobile','fax','email','website','contact_name','password','business_description');
	foreach($user_details_array as $key=>$val){
	    if(!isset($Memb[$val])){
	        $Memb[$val]="";
	    } 
	}
	
?>

            
<form method="post" action="<?php print $content_data["proxy_uri"]; ?>">
  <div align="center">
    <center>
    <?php print $Message;?>
      <table width="391" border="0" alig-="left" cellpadding="3" cellspacing="1" bgcolor="#97C8F9">
        <tr>
          <td width="179" align="right" bgcolor="#E6E6E6"><font size="2">Name :</font></td>
          <td width='197' bgcolor="#FFFFFF"><input name="name" type="text" id="name" value="<?php print $Memb['name'];?>" /></td>
        </tr>
        <tr>
          <td width="179" align="right" bgcolor="#E6E6E6"><font size="2">Address :</font></td>
          <td width='197' bgcolor="#FFFFFF"><input name="address" type="text" id="address" value="<?php print $Memb['address'];?>" /></td>
        </tr>
        <tr>
          <td width="179" align="right" bgcolor="#E6E6E6"><font size="2">Suburb :</font></td>
          <td width='197' bgcolor="#FFFFFF"><input name="suburb" type="text" id="suburb" value="<?php print $Memb['suburb'];?>" /></td>
        </tr>
        <tr>
          <td width="179" align="right" bgcolor="#E6E6E6"><font size="2">State :</font></td>
          <td width='197' bgcolor="#FFFFFF"><input name="state" type="text" id="state" value="<?php print $Memb['state'];?>" /></td>
        </tr>
        <tr>
          <td width="179" align="right" bgcolor="#E6E6E6"><font size="2">Postcode :</font></td>
          <td width='197' bgcolor="#FFFFFF"><input name="postcode" type="text" id="postcode" value="<?php print $Memb['postcode'];?>" /></td>
        </tr>
        <tr bgcolor="#C6C6CD" >
                    <td width="35%" align="left"><strong>*Country</strong></td>
                    <td align="left"><select name="countryID" onChange="setDelivery(this.value)">
                      <?php
				  	$sql=$r->rawQuery("SELECT id,Country_Name FROM countries");
					while($myrow=$r->Fetch_Array($sql)){
						if($Memb['countryID']==$myrow[0]){
							echo "<option value='$myrow[0]' selected>$myrow[1]</option>";
						}else{
							echo "<option value='$myrow[0]'>$myrow[1]</option>";
						};
					}
				  ?>
                    </select></td>
        <tr>
          <td width="179" align="right" bgcolor="#E6E6E6"><font size="2">ABN:</font></td>
          <td width='197' bgcolor="#FFFFFF"><input name="abn" type="text" id="abn" value="<?php print $Memb['abn'];?>" /></td>
        </tr>
        <tr>
          <td width="179" align="right" bgcolor="#E6E6E6"><font size="2">Phone Number :</font></td>
          <td width='197' bgcolor="#FFFFFF"><input name="phone" type="text" id="phone" value="<?php print $Memb['phone'];?>" /></td>
        </tr>
        <tr>
          <td width="179" align="right" bgcolor="#E6E6E6"><font size="2">Mobile Number :</font></td>
          <td width='197' bgcolor="#FFFFFF"><input name="mobile" type="text" id="mobile" value="<?php print $Memb['mobile'];?>" /></td>
        </tr>
        <tr>
          <td width="179" align="right" bgcolor="#E6E6E6"><font size="2">Fax Number :</font></td>
          <td width='197' bgcolor="#FFFFFF"><input name="fax" type="text" id="fax" value="<?php print $Memb['fax'];?>" /></td>
        </tr>
        <tr>
          <td width="179" align="right" bgcolor="#E6E6E6"><font size="2">Email Address :</font></td>
          <td width='197' bgcolor="#FFFFFF"><input name="email" type="text" id="email" value="<?php print $Memb['email'];?>" /></td>
        </tr>
        <tr>
          <td width="179" height="24" align="right" bgcolor="#E6E6E6"><font size="2">Web Site :</font></td>
          <td width='197' bgcolor="#FFFFFF">
            http://            
            <input name="website" type="text" id="website" value="<?php print $Memb['website'];?>" /></td>
        </tr>
        <tr>
          <td width="179" align="right" bgcolor="#E6E6E6"><font size="2">Contact Name :</font></td>
          <td width='197' bgcolor="#FFFFFF"><input name="contact_name" type="text" id="contact_name" value="<?php print $Memb['contact_name'];?>" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#E6E6E6">Password :</td>
          <td bgcolor="#FFFFFF"><input name="password" type="text" id="password" value="<?php print $Memb['password'];?>" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center" bgcolor="#E6E6E6">Directory Description</td>
        </tr>
        <tr>
          <td colspan="2" align="center" bgcolor="#E6E6E6"><textarea name="business_description" cols="50" rows="5" id="business_description"><?php print $Memb['business_description'];?></textarea></td>
        </tr>
      </table>
    </center>
  </div>
  <div align="center">
    <center>
      <p>
        <input type="submit" value="Update Details"
  name="Submit" id="Submit" />
      </p>
    </center>
  </div>
</form>
        </td>
