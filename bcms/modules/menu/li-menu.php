<ul class="list-menu" id="list-menu-id"><?php

	/*
	global $domain_user_data;
	if(count($domain_user_data)==0){
		
		
		if($_SESSION['membersID']>0){
			
			$sql="SELECT URI,MenuTitle FROM content_pages WHERE Menu_Hide='No' AND (Exposure='Member' OR Exposure='Both')";
			$sql.=" AND languagesID=".$app_data['LANGUAGESID']." AND (domainsID=".$domain_data['db']['id']." OR domainsID=0) ORDER BY Sort_Order";
			
		}else{
			$sql="SELECT URI,MenuTitle FROM content_pages WHERE Menu_Hide='No' AND (Exposure='Public' OR Exposure='Both')";
			$sql.=" AND module_viewsID IN (SELECT module_viewsID FROM module_views_menu WHERE Exposure='Public' OR Exposure='Both')";
			$sql.=" AND languagesID=".$app_data['LANGUAGESID']." AND (domainsID=".$domain_data['db']['id']." OR domainsID=0) ORDER BY Sort_Order";
		}
		//print $sql."\n";
		$rslt=$r->RawQuery($sql);
		while($data=$r->Fetch_Array($rslt)){
			?><li><a id="link-item-id" class="link-item-cl" href="http://<?php print $domain_data['Name'].$data[0];?>"><span><?php print $data[1];?></span></a></li><?php
		}
		
	}else{
		?><li><a id="link-item-id" class="link-item-cl"  href="http://<?php print $domain_data['Name']; ?>">Directory Home</a></li><?php
	}

	*/

	include($app_data['MODULEBASEDIR']."menu/menu_base.php");
	//print_r($menu_data["db"]);
	$output_data="";
	foreach($menu_data["db"] as $key=>$val){
		if($val['first']==false){
			$output_data.=' | ';
		}
		$output_data.='<li><a id="link-item-id" class="link-item-cl" href="'.$val['link_address'].'"><span>'.$val["menutitle"].'</span></a></li>';
	}
	print $output_data;
?></ul>