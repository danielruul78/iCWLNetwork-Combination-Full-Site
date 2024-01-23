<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title><?php print $content_data['db']['Meta_Title'];?></title>

   
    <meta name="DC.Title" content="<?php print $content_data['db']['Meta_Title'];?>" />
    <meta name="description" content="<?php print $content_data['db']['Meta_Description'];?>" />
    <meta name="keywords" content="<?php print $content_data['db']['Meta_Keywords'];?>" />
	<link rel='shortcut icon' type='image/x-icon' href='<?php print $app_data['asset-sever']; ?>bcms/assets/favicon.ico' />
	<meta name="robots" content="all" />
    <meta name="generator" content="Bubble CMS Lite" />
<link rel="stylesheet" href="<?php print $app_data['asset-sever']; ?>bcms/templates/transparentia/style.css" type="text/css" media="screen" />
<?php print $domain_data['db']['GSiteMapMeta'];?>


</head>

<body>



<div class="container">
	
	<div class="main">

		<div class="header">
		
			<div class="title">
		<h1><a href="/"><?php print stripslashes($domain_data['db']['SiteTitle']); ?></a></h1>
			</div>

		</div>


		
		<div class="content">
	
			

		
			
		  <div class="item">

			
			<h1><?php print $content_data['db']['Title'];?></h1>
			<div class="entry">

			<?php include($app_data['MODULEBASEDIR']."content/display.php");?>

			</div>

			<p class="info">&nbsp;</p>

			</div>
		</div>
			

			

			

		
		
		
		<div class="sidenav">
		  <ul>
				<?php 
					$menu_data['spacers']=false;
					include($app_data['MODULEBASEDIR']."menu/li.php");
				?>
			</ul>
			<h2 style="margin-top:17px">Recent News</h2>
		<?php include($app_data['MODULEBASEDIR']."news/list-items.php");?>
		</div>
	
		<div class="clearer"><span></span></div>


  </div>
	<div class="footer">

	<div class="left">
	  <a href="http://creativeweblogic.info/">Web Design Development Promotion Creative Web Logic</a> </div>
	
	<div class="right"><a href="http://bubblecms.biz/">Website Powered By Bubble CMS</a></div>

	<div class="clearer">&nbsp;</div>

</div>



</div>
<?php print $domain_data['db']['Analytics']?>
</body>

</html>