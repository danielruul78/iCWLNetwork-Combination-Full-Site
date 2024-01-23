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
                <td> 
                  <div style="width:60%">
                  DirectAdmin is a web hosting control panel that provides a simple and user-friendly interface for managing web hosting accounts. It's a popular
                   choice for small to medium-sized hosting companies and individual website owners. In this article, we'll take a closer look at the features and
                    benefits of DirectAdmin and why it's a great option for web hosting.
<br><br>
Overview of DirectAdmin
DirectAdmin is a web hosting control panel that provides a streamlined interface for managing web hosting accounts. It's designed to simplify the management of web 
hosting accounts and make it easy for website owners to manage their websites. DirectAdmin provides features such as email management, domain management, file management, and more.
<br><br>
Features of DirectAdmin
DirectAdmin offers a wide range of features for both hosting providers and website owners. Here are some of the key features of DirectAdmin:
  <br><br>
User-Friendly Interface: DirectAdmin provides a user-friendly interface that is easy to use for both hosting providers and website owners. The interface is designed 
to simplify the process of managing hosting accounts and websites.
<br><br>
Domain Management: DirectAdmin allows hosting providers and website owners to manage multiple domains from a single interface. Users can easily add, remove, and manage 
domains and subdomains.
<br><br>
Email Management: DirectAdmin provides a powerful email management interface that allows users to manage email accounts, forwarders, and more. It also includes spam 
filters and virus protection.
<br><br>
File Management: DirectAdmin provides a powerful file management interface that allows website owners to manage their website files. Users can easily upload, download, 
and manage files through a web-based interface.
<br><br>
Security: DirectAdmin includes several security features such as SSL/TLS certificates, IP blocking, and more. It provides a secure environment for hosting websites 
and ensures that website data is protected.
<br><br>
Benefits of DirectAdmin
DirectAdmin offers several benefits for hosting providers and website owners. Here are some of the key benefits of using DirectAdmin:
  <br><br>
Easy Management: DirectAdmin simplifies the process of managing hosting accounts and websites. It provides a user-friendly interface that makes it easy to manage domains,
 email accounts, and files.
 <br><br>
Time-Saving: DirectAdmin saves time for hosting providers and website owners by providing a powerful yet simple interface for managing hosting accounts and websites.
<br><br>
Reliable: DirectAdmin is a reliable software solution that has been used by hosting providers and website owners for many years. It provides a stable and secure hosting environment.
<br><br>
Affordable: DirectAdmin is an affordable software solution that is ideal for small to medium-sized hosting companies and individual website owners.
<br><br>
Conclusion
DirectAdmin is a powerful web hosting control panel that provides a simple and user-friendly interface for managing web hosting accounts. It offers a wide range of features, 
including domain management, email management, file management, and more. DirectAdmin is a great option for small to medium-sized hosting companies and individual website 
owners who are looking for an affordable and reliable web hosting control panel.
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