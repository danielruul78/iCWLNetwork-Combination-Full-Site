<?php
    
	
	include("./Admin_Start_Include.php");
	
	
	
	
	if(isset($_GET['Message']))$Message=$_GET['Message'];
	
	

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
          <?php include("./main/includes/submenu-custom.php");?>
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
                <td><h2>Desktop Applications</h2>
                Websites are great, but if you require more features and functoinality you need to target the users Operating System. 
				
				</td>
              </tr>
          </table></td>
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