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
          <?php include("./main/includes/submenu-hosting.php");?>
        </span></td>
      </tr>
    </table></td>
    <td valign="top" class="rightbg">
      <br />
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>
		  
	<form name="form1" method="post" action="">
			

      <table  border="0" align="center" cellpadding="0" cellspacing="0">
       
        <tr>
          <td align="center" ><table width="100%"  border="0" cellspacing="0" cellpadding="10">
              <tr>
                <td> <h2>Reseller <a href="/hosting-linux-control-direct-admin.php">Direct Admin</a> Hosting Linux</h2>
                
                <div>
                  <div style="float:left;padding:20px">
                  Essential <a href="/hosting-linux-control-direct-admin.php">DA</a> Reseller<br>
                  <br>
                  Perfect to Start Reselling<br>
                  <br>
                  $10 /mo<br>
                  3 GB SSD Disk Space<br>
                  5 GB Data Transfer<br>
                  Free SSL Certificates<br>
                  Unlimited Websites<br>
                  Unlimited Email<br>
                  Unlimited Databases<br>
                  5 User Accounts<br>
                  </div>

                  <div style="float:left;padding:20px">
                  Advance <a href="/hosting-linux-control-direct-admin.php">DA</a> Reseller<br>
                  <br>
                  Best Value for Money<br>
                  <br>
                  $15 /mo<br>
                  5 GB SSD Disk Space<br>
                  10 GB Data Transfer<br>
                  Free SSL Certificates<br>
                  Unlimited Websites<br>
                  Unlimited Email<br>
                  Unlimited Databases<br>
                  10 User Accounts<br>
                  </div>
                  <div style="float:left;padding:20px">
                  PRO <a href="/hosting-linux-control-direct-admin.php">DA</a> Reseller<br>
                  <br>
                  More Resources for growth<br>
                  <br>
                  $20 /mo<br>
                  10 GB SSD Disk Space<br>
                  20 GB Data Transfer<br>
                  Free SSL Certificates<br>
                  Unlimited Websites<br>
                  Unlimited Email<br>
                  Unlimited Databases<br>
                  20 User Accounts<br>
                  </div>
                  <div style="float:left;padding:20px">
                  Ultimate <a href="/hosting-linux-control-direct-admin.php">DA</a> Reseller<br>
                  <br>
                  Become a Web Hosting Pro<br>
                  <br>
                  $40 /mo<br>
                  20 GB SSD Disk Space<br>
                  50 GB Data Transfer<br>
                  Free SSL Certificates<br>
                  Unlimited Websites<br>
                  Unlimited Email<br>
                  Unlimited Databases<br>
                  Unlimited User Accounts<br>
                  </div>
                </div>   
           
				
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