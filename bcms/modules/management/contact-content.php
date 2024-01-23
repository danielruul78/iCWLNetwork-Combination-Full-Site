<?php
    
	
	include("./Admin_Start_Include.php");
	
	
	
	
	if(isset($_GET['Message']))$Message=$_GET['Message'];
	
  if(isset($_POST['Submit'])){
    $econtent="\n\n".$_POST['description']."\n\n";
    /*
    $email->To(array("danielruul78@gmail.com","dpr@icwl.me"));
    $email->From($_POST['name'],$_POST['email']);
    $email->Subject("SM iCWLNet Contact Form");
    $email->Body($econtent,$econtent);
    $email->Send();
    */

    $to      = 'danielruul78@gmail.com';
    $subject = 'SM iCWLNet Contact Form';
    $message = $econtent;
    $headers = array(
        'From' => 'admin@sitemanage.info',
        'Reply-To' => 'admin@sitemanage.info',
        'X-Mailer' => 'PHP/' . phpversion()
    );

    mail($to, $subject, $message, $headers);
    $Message="Email sent to admin.";
  }
	

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Bubble CMS Lite Administration</title>
<link href="https://f005.backblazeb2.com/file/iCWLNet-Website-Assets/admin/css/management.css" rel="stylesheet" type="text/css">
</head>
<script language="JavaScript" type="text/JavaScript">function confirmSubmit()
{
var agree=confirm("Are you sure you wish to continue?");
if (agree)
	return true ;
else
	return false ;
}</script>

<body>
<?php include("./main/includes/empty-header.php");?>
<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0" class="border">
  <tr>
    <td width="179" valign="top" class="ManagementContentLeftColumn"><table width="97%"  border="0" align="center" cellpadding="0" cellspacing="0" class="ManagementContentLeftColumnLinks">
      <tr>
        <td height="10">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="leftside">
          <?php include("./main/includes/submenu-contact.php");?>
        </span></td>
      </tr>
    </table></td>
    <td valign="top" class="rightbg">
      <br />
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>
		  
	<form name="form1" method="post" action="">
			

      <table  border="0" align="center" cellpadding="0" cellspacing="0">
       
        <tr>
          <td align="center" ><table width="100%"  border="0" cellspacing="0" cellpadding="10">
              <tr>
                <td><h2>Contact US</h2>
                <table width="100%"><tbody><tr><td width="450px" valign="top"><img style="padding-right:50px" src="https://f005.backblazeb2.com/file/iCWLNet-Website-Assets/bcms/assets/contact.jpg"><br></td><td valign="top">Email: <a href="mailto:dpr@icwl.me">dpr@icwl.me</a><br> Phone: 61280033457<br> Mobile: 61474539524<br><br><a href="https://g.dev/cwl">Google Developer</a><br><a rel="ugc nofollow" title="https://www.facebook.com/Icwl.me" class="urlextern" href="https://www.facebook.com/Icwl.me">Facebook</a><br><a rel="ugc nofollow" title="https://twitter.com/daniel_ruul" class="urlextern" href="https://twitter.com/daniel_ruul"> Twitter</a><br><a rel="ugc nofollow" title="http://www.tiktok.com/@danielruul" class="urlextern" href="http://www.tiktok.com/@danielruul"> Tick Tock</a><br><a rel="ugc nofollow" title="https://www.linkedin.com/company/creative-web-logic/?lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3B7lvDVqY0SZmV8HnzC3Giuw%3D%3D" class="urlextern" href="https://www.linkedin.com/company/creative-web-logic/?lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3B7lvDVqY0SZmV8HnzC3Giuw%3D%3D"> Linked In<br></a><a href="https://wa.me/61474539524">Whats App</a><br><a href="https://github.com/danielruul78">Git Hub<br></a><a href="https://join.skype.com/invite/ujsaGrTZvMOi">Skype</a><br><a href="https://call.icq.com/789023ffffca4c79bf38b7730658ac3d">ICQ</a></td></tr></tbody></table><p class="sceditor-nlf"><span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="display: none; line-height: 0;"></span><span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="display: none; line-height: 0;"></span><br></p>            
           
				</td>
              </tr>
          </table>
          <form action="contact.php"  method="post" name="form2" >
              <span class="pageheading">Contact Administration </span><span class="RedText"><?php print $Message; ?></span><br>
              <br>
              <table width="100%" border="0" cellpadding="3" cellspacing="1" id="tablecell">
                <tr>
                  <td width="170"><strong> Name</strong></td>
                  <td width="465"><input name="name" type="text" class="formfield1" id="name"></td>
                </tr>
                <tr>
                  <td><strong>Email</strong></td>
                  <td><input name="email" type="text" class="formfield1" id="email"></td>
                </tr>
                <tr>
                <td ><strong>Contact Details</strong></td>
                <td><textarea name="description" cols="45" rows="4" id="description"></textarea></td>
              </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input name="Submit" type="submit" class="formbuttons" value="Send" onClick="return confirmSubmit()"></td>
                </tr>
              </table>
          </form>
        
        </td>
		  <td>
		  
		  </td>
        </tr>
        
        
      </table>
      
      </form>
		  

		</td>
        </tr>
        
      </table></td>
  </tr>
</table>
<?php include("./main/includes/footer.php");?>
</body>
</html>
<?php 
  include("./main/includes/end-of-file.php");
?>