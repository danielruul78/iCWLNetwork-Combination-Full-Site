<?php


	class clsInstall{
		function __construct(){
			
			ini_set( 'display_errors', '1' );
			
		}
		
		function download($file_source, $file_target) {
			$rh = fopen($file_source, 'rb');
			$wh = fopen($file_target, 'wb');
			if ($rh===false || $wh===false) {
	// error reading or opening file
			   return true;
			}
			while (!feof($rh)) {
				if (fwrite($wh, fread($rh, 1024)) === FALSE) {
					   // 'Download error: Cannot write to file ('.$file_target.')';
					   return true;
				   }
			}
			fclose($rh);
			fclose($wh);
			// No error
			return false;
		}

		function url_get_contents($url){
			$useragent="curl";
			$encoded="";
			if(count($_GET)>0){
				foreach($_GET as $name => $value) {
					$encoded .= urlencode($name).'='.urlencode($value).'&';
				  }
			}
			if(count($_POST)>0){
				foreach($_POST as $name => $value) {
					$encoded .= urlencode($name).'='.urlencode($value).'&';
				  }
			}
			  
			$encoded = substr($encoded, 0, strlen($encoded)-1);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_POSTFIELDS,  $encoded);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			//curl_setopt($ch, CURLOPT_COOKIEFILE, $this->cookieFile); // Cookie aware
			//curl_setopt($ch, CURLOPT_COOKIEJAR, $this->cookieFile); // Cookie aware
			$result=curl_exec($ch);
			curl_close($ch);
			
			return $result;
		}
		//----------------------------------------------------------------
		function callback($buffer)
		{
			global $tag_match_array;
		   // print "=101=======================================================\n<br>";
			//print_r($tag_match_array);
			//print "=102=======================================================\n<br>";
			//$sub_string_total="xx";
			$match_array=array();
			$inner_array=array();
			$search=0;
			$buffer_size=strlen($buffer);
			$query="";
			$str_match="";
			$cur_match=""; 
			$inner_match="";
			$start_count=0;
			$end_count=0;
			$start_tag="[";
			$end_tag="]";
			while($search<=$buffer_size){
			
				$sub_string = substr($buffer, $search, 1);
				if($sub_string==$start_tag){
					$start_count++;
					$cur_match.=$sub_string;
				}elseif($sub_string==$end_tag){
					$end_count++;
					$cur_match.=$sub_string;
				}else{
					if($start_count>0){
						$cur_match.=$sub_string;
						$inner_match.=$sub_string;
					}
				}
				if(($start_count==2)&&($end_count==2)){
					$match_array[]=$cur_match;
					$inner_array[]=$inner_match;
					$cur_match="";
					$inner_match="";
					$start_count=0;
					$end_count=0;
				}
				$search++;
			}
			for($x=0;$x<count($match_array);$x++){
				if(isset($tag_match_array[$inner_array[$x]])){
					$query.="| ".$x." |\n ".$inner_array[$x]."\n--".$match_array[$x]."=>".$tag_match_array[$inner_array[$x]];//var_export($tag_match_array[$inner_array[$x]],true);
					$buffer=str_replace($match_array[$x], $tag_match_array[$inner_array[$x]], $buffer);
				}else{
					$buffer=str_replace($match_array[$x], "", $buffer);
				}
			}
			return $buffer;
		}
	
		function Display($RemoteServer,$LocalServer,$DisplayPage){
			$urldetails=$RemoteServer."?x=1&dcmshost=".$LocalServer."&dcmsuri=".$DisplayPage;	
			//print $urldetails;
			$retdata=url_get_contents($urldetails);
			return $retdata;
		
		}
		
		function Execute_Page(){
			//echo "xxx";
			$this->message="";
			$DisplayPageArray=explode("/",$_SERVER['REQUEST_URI']);
			//$DisplayPage=$_SERVER['REQUEST_URI'];
			if(isset($_GET['uri'])){
				$DisplayPage=$_GET['uri'];
			}else{
				$DisplayPage=urlencode("/");
			}
			$OriginalDisplayPage=$DisplayPage;
			//print "-".$DisplayPage."-";
			$RemoteServer="w-d.biz/";
			$LocalHost=urlencode($_SERVER['HTTP_HOST']);
			$DisplayPage.="&LocalServer=".$LocalHost;
			$LocalServer="install.me";
			//print $DisplayPage."-".$RemoteServer."-".$LocalHost."-".$LocalServer."-\n<br>";
			
			
			
			$source_code=$this->Display($RemoteServer,$LocalServer,$DisplayPage);
			
			$step=urldecode($OriginalDisplayPage);
			//$message.=$step;
			switch($step){
				case "/":
					$this->message='Step 1-';
					$filename = './install.zip';

					if (file_exists($filename)) {
						$this->message.="The file $filename has already been downloaded";
					} else {
						$file_url="http://assets.w-d.biz/downloads/Latest-BCMS_Distributed.zip";
						$file_target="./install.zip";
						$this->download($file_url, $file_target);
					}
					
					

					$filename = './install.zip';

					if (file_exists($filename)) {
						$this->message.="The file $filename exists";
					} else {
						$this->message.="The file $filename does not exist";
					}
				break;
				case "/step-2/":
					//$message.='Step 2-<br>';
					$total_count=0;
					$zip = new ZipArchive;
					if ($zip->open('./install.zip') === TRUE) {
						$zip->extractTo('.');
						$zip->close();
						$this->message.='Files Unzipped<br>';
						$total_count++;
					} else {
						$this->message.='failed';
					}
					$file_array=array();
					$file_array[]="./";
					$file_array[]="./index.php";
					$file_array[]="./.htaccess";
					$file_array[]="./info.php";
					$file_array[]="./classes/clsDCMS.php";
					$file_array[]="./classes/info.php";
					$file_array[]="./cache";
					$file_array[]="./cache/cookies";
					$total_files=count($file_array);
					
					$total_items=13;
					$file_count=0;
					$total_dirs=3;
					$dir_count=0;
					foreach($file_array as $val){
						if (file_exists($val)) {
							//$message.="$filename exists<br>";
							$file_count++;
							$total_count++;
							if(is_dir($val)){
								//$perms=fileperms($val);
								$perms=substr(sprintf('%o', fileperms($val)), -4);
								if($perms>=666){
									$dir_count++;
									$total_count++;
								}
								
							}
							//$message.=$val." exists<br>";
						} else {
						   // $this->message.=$val." does not exist<br>";
						}
					}
					$this->message.="Directory Permissions:- ".$dir_count." of ".$total_dirs."<br>";
					$this->message.="Install Items:-".$file_count." of ".$total_files."<br>";

					$test_source_code=$this->Display($RemoteServer,$LocalServer,"/test/");
					if(strlen($test_source_code)>0){
						$this->message.="Search engine friendly URLS working<br>";
						$total_count++;
					}else{
						$this->message.="Search engine friendly URLS broken<br>";
					}
					$Install_Percent=($total_count/$total_items)*100;
					$this->message.="<br><br>Total Install Percent:- ".$Install_Percent."%<br>";


					if(isset($Install_Percent)){
						if($Install_Percent==100){
							$this->message.="<br><br><a href='install.php?uri=".urlencode("/step-3/")."'>Continue to Step 3</a><br>";
					
						}
					}
					break;

				}
				
				function Show_Outut(){
					$tag_match_array["message"]=$this->message;
			
					$source_code=$this->callback($source_code);
					echo $source_code;
				}
				
			}

    
   
    
?>