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
<script language="JavaScript" type="text/JavaScript">
function confirmSubmit()
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
          <?php include("./main/includes/submenu-network.php");?>
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
                <td>Network

                <h2>Network</h2>
                <span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="display: none; line-height: 0;"> </span><span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="display: none; line-height: 0;"> </span><table width="100%"><tbody><tr><td valign="top"><img style="padding-right:50px" src="https://f005.backblazeb2.com/file/iCWLNet-Website-Assets/bcms/assets/portfolio.jpg"><br></td><td><div><table><tbody><tr><td valign="top">Cloud<a href="http://creativeweblogic.net"><br>creativeweblogic.net<br> </a><a href="http://ozychurch.com">ozychurch.com<br> </a><a href="http://internetlogistics.net">internetlogistics.net<br> </a><a href="http://sydneywebdev.net">sydneywebdev.net<br> </a><a href="http://w-d.biz">w-d.biz<br> </a><a href="http://web-dev.biz">web-dev.biz<br> </a><a href="http://website-design.sydney">website-design.sydney<br></a><a href="https://bizdirectory.online">bizdirectory.online</a><br> <a href="http://l--k.me">l--k.me - Url Shortener<br> </a><a href="http://sitemanage.info">sitemanage.info<br></a><a href="http://bizhome.me">bizhome.me</a><p class="" style=""></p><br></td><td>Linux Reseller #1<a href="http://icwl.me"><br>icwl.me<br> </a><a href="http://icwl.host">icwl.host<br> </a><a href="http://macquariechurch.com">macquariechurch.com<br> </a><a href="http://bubblecms.biz">bubblecms.biz<br> </a><a href="http://bizfurnace.com">bizfurnace.com<br> </a><a href="http://l-k.biz">l-k.biz<br> </a><a href="http://easycms.site">easycms.site<br> </a><a href="http://bizpage.club">bizpage.club<br> </a><a href="http://businesswebsites.club">businesswebsites.club<br></a><a href="http://cpanel-hosting.info">cpanel-hosting.info<br> </a><a href="http://freesslcert.club">freesslcert.club<br> </a><a href="http://imessages.club">imessages.club<br> </a><a href="http://inetbook.club">inetbook.club<br> </a><a href="http://promo-network.info">promo-network.info<br> </a><a href="http://smoothbuild.website">smoothbuild.website</a> <br></td></tr><tr><td>Linux Reseller #2<br> <a href="http://home-page.live">home-page.live<br> </a><a href="http://bizpages.me">bizpages.me<br> </a><a href="http://creativeweblogic.info">creativeweblogic.info<br> </a><a href="http://hostingdiscount.club">hostingdiscount.club<br> </a><a href="http://sydneygardening.info">sydneygardening.info</a> <br></td><td>Shared #1<br> <a href="http://ownpage.club">ownpage.club<br> </a><a href="http://website-development.online">website-development.online</a> <br></td></tr><tr><td>Wordpress<br> <a href="http://creativelogistics.site">creativelogistics.site</a> <br></td><td>VPS #1<br> <a href="http://auseo.net">auseo.net<br></a>VPS #2<br> <a href="http://ozhost.live">ozhost.live</a> <br> <br></td></tr><tr><td>White Label<br><a href="http://ozdev.org">ozdev.org<br> </a><a href="http://hostingproducts.club">hostingproducts.club<br></a>Shared #2<br> <a href="http://i-n.club">i-n.club</a> <br></td><td>Windows Reseller<a href="http://audev.org"><br>audev.org</a> <br></td></tr></tbody></table></div><p><br></p></td></tr></tbody></table><p class="sceditor-nlf"><br></p>            
           
				
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