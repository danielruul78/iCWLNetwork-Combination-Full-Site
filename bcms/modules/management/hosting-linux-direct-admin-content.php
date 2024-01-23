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
                <td> <h2>Hosting Linux - <a href="/hosting-linux-control-direct-admin.php">Direct Admin</a></h2>
                <p><span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="display: none; line-height: 0;"> </span><span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="display: none; line-height: 0;"> </span> <br></p>
                <table style="padding:20px">
                <tbody>
                  <tr>
                    <td valign="top">
                     
                <div style="float:left;padding:20px">
                Shared Accounts - Linux<br>
                  <div style="float:left;padding:20px">
                  Tiny Direct Admin<br>
                      <br> AUD$0.50 /mo<br> 
                      1GB of Web Space<br> 
                      1GB Monthly Traffic<br> 
                      5 Email Accounts<br>
                       2 Mailing Lists<br> 
                       1 MySQL Databases<br> 
                       2 Max Domains<br> 
                       5 Max Sub Domains<br>
                  </div>
                  <div style="float:left;padding:20px">
                  Basic Direct Admin<br><br>
                  AUD$1.00 /mo<br> 
                  2GB of Web Space<br> 
                  2GB Monthly Traffic<br> 
                  5 Email Accounts<br> 
                  5 Mailing Lists<br> 
                  5 MySQL Databases<br> 
                  5 Max Domains<br> 
                  5 Max Sub Domains<br>
                  </div>
                  <div style="float:left;padding:20px">
                  Corporate Direct Admin<br><br> 
                  AUD$4.00 /mo<br> 
                  8GB of Web Space<br> 
                  8GB Monthly Traffic<br> 
                  20 Email Accounts<br> 
                  20 Mailing Lists<br> 
                  20 MySQL Databases<br> 
                  20 Max Domains<br> 
                  20 Max Sub Domains<br>
                  </div>
                  <div style="float:left;padding:20px">
                  Business  Direct Admin<br><br> 
                  AUD$2.00 /mo<br> 
                  4GB of Web Space<br> 
                  4GB Monthly Traffic<br> 
                  10 Email Accounts<br> 
                  10 Mailing Lists<br> 
                  10 MySQL Databases<br> 
                  10 Max Domains<br> 
                  10 Max Sub Domains<br>
                  5 Max Sub Domains<br>
                  </div>
                </div>
                <div style="float:left;padding:20px">
                Unlimited Accounts - Linux<br>
                <div style="float:left;padding:20px">
                Biz Direct Admin<br><br> 
                AUD$5.00 /mo<br> 
                10GB of Web Space<br> 
                10GB Monthly Traffic<br>
                Unlimited Email Accounts<br> 
                Unlimited Mailing Lists<br> 
                Unlimited MySQL Databases<br> 
                Unlimited Domains<br> 
                Unlimited Sub Domains<br>
                  </div>
                  <div style="float:left;padding:20px">
                  Super Direct Admin<br><br> 
                  AUD$8.00 /mo<br> 
                  15GB of Web Space<br> 
                  15GB Monthly Traffic<br> 
                  Unlimited Email Accounts<br> 
                  Unlimited Mailing Lists<br> 
                  Unlimited MySQL Databases<br> 
                  Unlimited Domains<br> 
                  Unlimited Sub Domains<br>
                  </div>
                  <div style="float:left;padding:20px">
                  Amazing Direct Admin<br><br> 
                  AUD$10.00 /mo<br> 
                  20GB of Web Space<br> 
                  20GB Monthly Traffic<br> 
                  Unlimited Email Accounts<br> 
                  Unlimited Mailing Lists<br> 
                  Unlimited MySQL Databases<br> 
                  Unlimited Domains<br> 
                  Unlimited Sub Domains<br>
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