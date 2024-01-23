<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><form action="password.php"  method="post" name="form2" >
              <span class="pageheading">Change Your Password </span><span class="RedText"><?php print $Message; ?></span><br>
              <br>
              <table width="100%" border="0" cellpadding="3" cellspacing="1" id="tablecell">
                <tr>
                  <td width="170"><strong> Current Password</strong></td>
                  <td width="465"><input name="cpassword" type="text" class="formfield1" id="cpassword"></td>
                </tr>
                <tr>
                  <td><strong>New Password</strong></td>
                  <td><input name="password" type="text" class="formfield1" id="password"></td>
                </tr>
                <tr>
                  <td><strong>Retype New Password</strong></td>
                  <td><input name="password2" type="text" class="formfield1" id="password2"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input name="Submit" type="submit" class="formbuttons" value="Save" onClick="return confirmSubmit()"></td>
                </tr>
              </table>
          </form></td>
        </tr>
      </table>