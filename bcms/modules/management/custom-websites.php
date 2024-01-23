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
                <td><h2>Web Design / Development</h2>
                <table width="100%"><tbody><tr><td><img src="https://f005.backblazeb2.com/file/iCWLNet-Website-Assets/bcms/assets/digitization-2.jpg" style="padding-right:50px"><br></td><td valign="top">Web Design / Development Creating professional dynamic websites is one of our specialties. With in depth knowledge in search engine marketing and promotion all our sites are designed to be appealing to both human viewers and search engine spiders. We can create SEO optimized static sites or using our own cms we can give you the client the ability to add / remove and modify the content on your own sites. If you prefer we have experience with open source solutions such as oscommerce and joomla. <span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="display: none; line-height: 0;"></span><span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="display: none; line-height: 0;"></span><br></td></tr></tbody></table><p></p><p class="sceditor-nlf"><br></p>            
           
				
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