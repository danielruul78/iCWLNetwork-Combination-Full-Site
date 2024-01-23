<?php
    //----------------------------------------------------------------
	// root data types
	//----------------------------------------------------------------
	$module_data=array();
	$domain_user_data=array();
	$domain_data=array();
	$app_data=array();
	$template_data=array();
	$content_data=array();
	$text_data=array();
	$bizcat_data=array();
	$sidebar_data=array();
	$news_data=array();
	//$session_data=array();

	
	$domain_data['domain_Name']=$_SERVER['SERVER_NAME'];
	//----------------------------------static asset files------------------------------
	$app_data['asset_server_number']=11;
	$app_data['asset-severs'][0]='https://sitemanage.info/main/assets/'; // digital ocean custom server
	$app_data['asset-severs'][1]='https://spaces.auseo.net/'; // digital ocean custom server
	$app_data['asset-severs'][2]='https://static-cms.nyc3.cdn.digitaloceanspaces.com/'; // digital ocean cdn server
	$app_data['asset-severs'][3]='https://static-cms.nyc3.digitaloceanspaces.com/'; //digital ocean standard server
	$app_data['asset-severs'][4]='https://assets.ownpage.club/'; //asura standard server
	$app_data['asset-severs'][5]='https://assets.hostingdiscount.club/'; //asura reseller server
	$app_data['asset-severs'][6]='https://assets.icwl.me/'; //hostgator reseller server
	$app_data['asset-severs'][7]='https://static-assets.w-d.biz/'; //cloud unlimited server
	$app_data['asset-severs'][8]='https://assets.i-n.club/'; //ionos unlimited server
	$app_data['asset-severs'][9]='http://assets.creativeweblogic.net'; //ionos unlimited server
	$app_data['asset-severs'][10]='https://static-assets.site'; //ionos unlimited server
	$app_data['asset-severs'][11]='https://assets.bubblecms.biz'; //hostgator server

	$app_data['asset-sever']=$app_data['asset-severs'][$app_data['asset_server_number']];
	//----------------------------------------------------------------
	//----------------------------------------------------------------
	$app_data['languages']=array();
	$app_data['domains']=array();
	$app_data['domain_Name']=$domain_data['domain_Name'];
	$app_data['clients']=array();
	//----------------------------------------------------------------
	$spos=strpos($_SERVER["PHP_SELF"],'/main/');
	if($spos!==false){
		$app_data['APPBASEDIR']='../../';
		$app_data['INCLUDEBASEDIR']='/main/';
	}else{
		$app_data['APPBASEDIR']='./';
		$app_data['INCLUDEBASEDIR']='/main/';
	}
	$app_data['CLASSESBASEDIR']="./classes/";
	//print $_SERVER["PHP_SELF"]."-".$current_dir['dirname']."--".$spos;
	$app_data['MODULEBASEDIR']=$app_data['APPBASEDIR'].'modules/';
	$clsRetrieveRecords=$app_data['APPBASEDIR'].'classes/';
	//$app_data['INCLUDESDIR']=$app_data['INCLUDEBASEDIR'].'includes/';
	$app_data['INCLUDESDIR']=$app_data['APPBASEDIR'].'includes/';

	include($app_data['INCLUDESDIR']."config.inc.php");	
	include($app_data['INCLUDESDIR']."functions.inc.php");
	include($app_data['CLASSESBASEDIR']."clsMail.php");
	include($app_data['CLASSESBASEDIR'].'clsLogger.php');
	echo"<br>\n\n 00055666----------------------------|-|-------------------------------------------------\n\n";
	
	$log = new clsLog();
	//$log = "";
	//$loggeneral("Start Management ",1);
	$dcls=$app_data['CLASSESBASEDIR'].'clsDb.php';
	echo"\n---".$dcls."--==\n";
	include($dcls);
	//$dcls=$app_data['CLASSESBASEDIR'].'clsVariables.php';
	//echo"\n---".$dcls."--==\n";
	//include($dcls);
	//$vs=new clsVariables();

	echo"<br>\n\n 0005566644321----------------------------|-|-------------------------------------------------\n\n";
	//$vs->Set_Log($log);
	//$loggeneral("-clsVariables Loaded-",1);
	
	$r=new clsRetrieveRecords($log);
	echo"<br>\n\n 0004321----------------------------|-|-------------------------------------------------\n\n";
	$r->test_mysql();
	echo"<br>\n\n 111XXX77743210001234----------------------------|-|-------------------------------------------------\n\n";
	$r->Add_App_Data($app_data);
	echo"<br>\n\n 77743210001234----------------------------|-|-------------------------------------------------\n\n";
	$r->CreateDB();
	//exit();
	echo"<br>\n\n 0001234----------------------------|-|-------------------------------------------------\n\n";
	/*
	*/
	//print_r($app_data);
	//echo"<br>\n\n 00055666001----------------------------|-|-------------------------------------------------\n\n";
	
	//$loggeneral('Loading Create VS $r',1);
	//$r->Set_Vs($vs);

	//$email=new clsEmail();
	//echo"000231999----------------------------||-------------------------------------------------\n\n";
	//print_r($session_data);
	echo"<br>\n\n 0005335666----------------------------|-|-------------------------------------------------\n\n";
?>