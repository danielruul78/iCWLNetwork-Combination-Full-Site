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
                <td> <h2><a href="/hosting-linux-control-plesk.php">Plesk</a> Hosting Windows</h2>
                
                <div>
                  <div style="float:left;padding:20px">
                  Basic <a href="/hosting-linux-control-plesk.php">Plesk</a><br>
                  <br>
                  AUD$4.00 /mo<br> 
                  2GB of Web Space<br> 
                  2GB Monthly Traffic<br> 
                  20 Email Accounts<br> 
                  20 Mailing Lists<br> 
                  20 MySQL Databases<br> 
                  20 Max Domains<br> 
                  20 Max Sub Domains
                  </div>

                  <div style="float:left;padding:20px">
                  Standard <a href="/hosting-linux-control-plesk.php">Plesk</a><br><br> 
                  AUD$6.00 /mo<br>
                  4GB of Web Space<br>
                  4GB Monthly Traffic<br>
                  40 Email Accounts<br>
                  40 Mailing Lists<br>
                  40 MySQL Databases<br>
                  40 Max Domains<br>
                  40 Max Sub Domains<br>
                  </div>
                  <div style="float:left;padding:20px">
                  Simple <a href="/hosting-linux-control-plesk.php">Plesk</a><br><br> 
                  AUD$6.00 /mo<br> 
                  2GB of Web Space<br> 
                  2GB Monthly Traffic<br> 
                  Unlimited Email Accounts<br> 
                  Unlimited Mailing Lists<br> 
                  Unlimited MySQL Databases<br> 
                  Unlimited Max Domains<br> 
                  Unlimited Max Sub Domains<br>
                  </div>
                  <div style="float:left;padding:20px">
                  Superior <a href="/hosting-linux-control-plesk.php">Plesk</a><br><br> 
                  AUD$10.00 /mo<br> 
                  8GB of Web Space<br> 
                  8GB Monthly Traffic<br> 
                  80 Email Accounts<br> 
                  80 Mailing Lists<br>
                  80 MySQL Databases<br>
                  80 Max Domains<br>
                  80 Max Sub Domains<br>
                  </div>
                  <div style="float:left;padding:20px">
                  Easy <a href="/hosting-linux-control-plesk.php">Plesk</a><br><br> 
                  AUD$10.00 /mo<br>
                  4GB of Web Space<br>
                  4GB Monthly Traffic<br>
                  Unlimited Email Accounts<br> 
                  Unlimited Mailing Lists<br> 
                  Unlimited MySQL Databases<br> 
                  Unlimited Max Domains<br> 
                  Unlimited Max Sub Domains<br>
                  </div>
                  <div style="float:left;padding:20px">
                  Advanced <a href="/hosting-linux-control-plesk.php">Plesk</a><br><br> 
                  AUD$14.00 /mo<br> 
                  8GB of Web Space<br> 
                  8GB Monthly Traffic<br> 
                  Unlimited Email Accounts<br> 
                  Unlimited Mailing Lists<br> 
                  Unlimited MySQL Databases<br> 
                  Unlimited Max Domains<br> 
                  Unlimited Max Sub Domains<br>
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