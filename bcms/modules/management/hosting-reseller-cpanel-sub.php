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
                <td> <h2>Reseller <a href="/hosting-linux-control-cpanel.php">WHM/CPanel</a> Hosting Linux</h2>
                
                <div>
                  <div style="float:left;padding:20px">
                  Essential <a href="/hosting-linux-control-cpanel.php">WHM/CPanel</a> Reseller<br>
                  <br>
                  Perfect to Start Reselling<br>
                  <br>
                  $15 /mo<br>
                  Unlimited Websites<br>
                  Free SSL Certificate<br>
                  4 GB SSD Disk Space<br>
                  8 GB Data Transfer<br>
                  Free SSL Certificates<br>
                  Unlimited Websites<br>
                  Unlimited Databases<br>
                  Unlimited Email<br>
                  Unlimited Mailing Lists<br>
                  Unlimited Auto Responders<br>
                  5 cPanel Accounts<br>
                  </div>

                  <div style="float:left;padding:20px">
                  Advance <a href="/hosting-linux-control-cpanel.php">WHM/CPanel</a> Reseller<br>
                  <br>
                  Best Value for Money<br>
                  <br>
                  $20 /mo<br>
                  Unlimited Websites<br>
                  Free SSL Certificate<br>
                  8 GB SSD Disk Space<br>
                  16 GB Data Transfer<br>
                  Free SSL Certificates<br>
                  Unlimited Websites<br>
                  Unlimited Databases<br>
                  Unlimited Email<br>
                  Unlimited Mailing Lists<br>
                  Unlimited Auto Responders<br>
                  10 cPanel Accounts<br>
                  </div>
                  <div style="float:left;padding:20px">
                  Pro <a href="/hosting-linux-control-cpanel.php">WHM/CPanel</a> Reseller<br>
                  <br>
                  More Resources to fuel your growth<br>
                  <br>
                  $25 /mo<br>
                  Unlimited Websites<br>
                  Free SSL Certificate<br>
                  16 GB SSD Disk Space<br>
                  30 GB Data Transfer<br>
                  Free SSL Certificates<br>
                  Unlimited Websites<br>
                  Unlimited Databases<br>
                  Unlimited Email<br>
                  Unlimited Mailing Lists<br>
                  Unlimited Auto Responders<br>
                  20 cPanel Accounts<br>
                  </div>
                  <div style="float:left;padding:20px">
                  Ultimate <a href="/hosting-linux-control-cpanel.php">WHM/CPanel</a> Reseller<br>
                  <br>
                  Become a Web Hosting Pro<br>
                  <br>
                  $30 /mo<br>
                  Unlimited Websites<br>
                  Free SSL Certificate<br>
                  30 GB SSD Disk Space<br>
                  80 GB Data Transfer<br>
                  Free SSL Certificates<br>
                  Unlimited Websites<br>
                  Unlimited Databases<br>
                  Unlimited Email<br>
                  Unlimited Mailing Lists<br>
                  Unlimited Auto Responders<br>
                  50 cPanel Accounts<br>
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