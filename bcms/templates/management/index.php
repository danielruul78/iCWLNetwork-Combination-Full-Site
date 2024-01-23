<html>
<head>
    <title><?php print $content_data['db']['Meta_Title'];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="DC.Title" content="<?php print $content_data['db']['Meta_Title'];?>" />
<meta name="description" content="<?php print $content_data['db']['Meta_Description'];?>" />
<meta name="keywords" content="<?php print $content_data['db']['Meta_Keywords'];?>" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

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
    <?php include($app_data['MODULEBASEDIR']."admin_includes/header-empty.php");?>
<div id="MainMenuManagement">
    <div id="ManagementMainMenu">
        <?php
        $empty_tags=true;
    $display_file=$app_data['MODULEBASEDIR']."menu/horizontal.php";
    if(file_exists($display_file)){
      include($display_file);
    }else{
      print "Error No File";
    }
 ?>
        
    </div>
</div>

<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0" class="border">
  <tr>
    <td width="179" valign="top" class="ManagementContentLeftColumn"><table width="97%"  border="0" align="center" cellpadding="0" cellspacing="0" class="ManagementContentLeftColumnLinks">
      <tr>
        <td height="10">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="leftside">
            <?php include($app_data['MODULEBASEDIR']."menu/vertical-sub-page.php");?>
        </span></td>
      </tr>
    </table></td>
    <td valign="top" class="rightbg">
      <br />
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>
		  <?php
                    //$display_file=$app_data['MODULEBASEDIR']."content/display.php";
                    $display_file=$app_data['MODULEBASEDIR']."content/display.php";
                    //$display_file="";
                    //print $display_file;
                    if(file_exists($display_file)){
                      $log->general("10 Loading Current Content->".$display_file,3);
                      include($display_file);
                    }else{

                      print "Error No File";
                    }
                 ?>
		</td>
        </tr>
        
      </table></td>
  </tr>
</table>
<?php
    $display_file=$app_data['MODULEBASEDIR']."admin_includes/footer.php";
    if(file_exists($display_file)){
      include($display_file);
    }else{
      print "Error No File";
    }
 ?>
</body>
</html>
<?php
    $display_file=$app_data['MODULEBASEDIR']."admin_includes/end-of-file.php";
    if(file_exists($display_file)){
      include($display_file);
    }else{
      print "Error No File";
    }
 ?>