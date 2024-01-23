<?php
    //exit();
	//echo $current_dir;
	
	//------------------------------------------------
	/*
	if(isset($_SESSION["administratorsID"])){
		$loc="Location: main/logged-in/index.php";
		header($loc);
		ob_end_flush();
		exit();
	}
	*/
	
	function set_log($var_array="",$message=""){
	    //exit();
		    //$message="fff";
		    $output="";
		    if(is_array($var_array)){
		        $output=var_export($var_array,true);
		    }else{
		        $output=$var_array;
		    }
		    if($message!=""){
		        $output.="-".$message;
		    }
		    $output="\n <br>".$output."<br> \n";
		    //return $output;
		    print($output);
			//exit();
		}


	//----------------------------------------------------------------
	/*
	if(isset($_GET['dcmsuri'])){
		//print "--".$_GET['dcmsuri']."--";
		if(substr($_GET['dcmsuri'],strlen($_GET['dcmsuri'])-1)!="/"){
			$DisplayFile=".".$_GET['dcmsuri'];
			//print $DisplayFile." - ";
			if(file_exists($DisplayFile)){
				$ForbiddenExtensions=array("php");
				$ShowFile=true;
				if(strlen($DisplayFile)>3){
					$file_extension=substr($DisplayFile,strlen($DisplayFile)-3);
					if(in_array($file_extension,$ForbiddenExtensions)){
						$ShowFile=false;	
					}else{
						$ShowFile=true;
					}	
				}else{
					$ShowFile=false;	
				}
				if($ShowFile){
					//$ContType=exec("file -bi '$DisplayFile'");
					$ContType=mime_content_type($DisplayFile);
					$head="Content-Type: $ContType";
					header($head);
					print $file_extension."fff".$head;
					print file_get_contents($DisplayFile);
					//ob_end_flush();
					exit();
				}else{
					//ob_end_flush();
					//exit();	
				}
			}else{
				//print $DisplayFile." - 404 File Not Found";
				header("HTTP/1.1 404 Not Found");
			}
		}
	}
	*/
	function Get_HTML_Tags(){
		$tag_array=array("a","abbr","acronym","address","applet","article","aside","audio","b","basefont","bdi","bdo","big","blockquote","body","button",
		"canvas","caption","center","cite","code","colgroup","data","datalist","dd","del","details","dfn","dialog","dir","div","dl","dt","em","fieldset",
		"figcaption","figre","font","footer","form","frame","frameset","h1","head","header","html","i","iframe","ins","kbd","label","legend","li","main","map","mark","meter",
		"nav","noframes","noscript","object","ol","optgroup","option","output","p","param","picture","pre","progress","q","rp","rt","ruby","s","samp",
		"script","section","select","small","span","strike","strong","style","sub","summary","sup","svg","table","tbody","td","template","textarea",
		"tfoot","th","thead","time","title","tr","tt","u","ul","var","video");
		$tag_void_array=array("area","base","br","col","embed","hr","img","input","link","meta","source","track","wbr","!DOCTYPE");
		return array($tag_array,$tag_void_array);
	}
	
	//$all_html_tags=Get_HTML_Tags();
	//print_r($all_html_tags);
	//----------------------------------------------------------------
	function callback($buffer)
	{
	    //$pos = strpos($buffer, 2);
		//$buffer=substr($buffer, $pos);
		$buffer="";
		return $buffer;
	    
	    
	}
	
	function callback_template($buffer)
	{
	    //$buffer = substr($buffer, 2, 1);  // returns "cde"
	    
	    //$pos = strpos($buffer, '{');
		//$buffer=substr($buffer, $pos);
		return $buffer;
	    
	    
	}
	
	function callback_output($buffer)
	{
	    //$buffer = substr($buffer, 2, 1);  // returns "cde"
	    
	    //$pos = strpos($buffer, '{');
		//$buffer=substr($buffer, $pos);
		//global $text_data;
		//$text_data['debug'][]=$buffer;
		return $buffer;
	    
	    
	}
	
	function callback_main_output($buffer)
	{
	    //$buffer = substr($buffer, 2, 1);  // returns "cde"
	    
	    //$pos = strpos($buffer, '{');
		//$buffer=substr($buffer, $pos);
		global $text_data;
		$text_data['output_html']=base64_encode($buffer);
		return $buffer;
	    
	    
	}
	
	
	function callback_big($buffer)
	{
		// replace all the apples with oranges
		//return (str_replace("Yamba", "oranges", $buffer));
		//$buffer="\n".$buffer;
		//$buffer = trim($buffer," \t\n\r"););
		//echo"\n<br>666-----------------------------------------------------------------------------\n <br>";


		
		global $tag_match_array;
		//print_r($tag_match_array);
		$all_html_tags=Get_HTML_Tags();
		$html_tags=$all_html_tags[0];
		$html_void_tags=$all_html_tags[1];
		//print_r($all_html_tags);
		//$buffer=var_export($all_html_tags,true).$buffer;
		$sub_string_total="xx";
		$match_array=array();
		$inner_array=array();
		$search=0;
		$buffer_size=strlen($buffer);
		$query="";
		$str_match="";
		$cur_match=array(); 
		$inner_match=array();
		$start_count=array();
		$end_count=array();
		$open_char=array("{","<");
		$close_char=array("}",">");
		$custom_char=array($open_char[0],$close_char[0]);
		$html_char=array($open_char[1],$close_char[1]);
		$tag_array=array("custom"=>$custom_char,"html"=>$html_char);
		$tag_array_count=array("custom"=>2,"html"=>1);
		$current_tag=0;
		while($search<=$buffer_size){
			$sub_string = substr($buffer, $search, 1);
			foreach($tag_array as $tag_type=>$tag_val){
				//$start_count=0;
				//$cur_match="";
				//$buffer="\n tv-".$start_count."-".$end_count."-".$cur_match."-".var_export($tag_val,true).$buffer."\n";
				if($sub_string==$tag_val[0]){
					if(!isset($start_count[$tag_type])) $start_count[$tag_type]=0;
					if(!isset($cur_match[$tag_type])) $cur_match[$tag_type]="";
					$start_count[$tag_type]++;
					$cur_match[$tag_type].=$sub_string;
					//$buffer=$buffer."\n -22".$sub_string."-".$tag_val[0]."-33- \n";
				}elseif($sub_string==$tag_val[1]){
					if(!isset($end_count[$tag_type])) $end_count[$tag_type]=0;
					if(!isset($cur_match[$tag_type])) $cur_match[$tag_type]="";
					$end_count[$tag_type]++;
					$cur_match[$tag_type].=$sub_string;
					//$buffer=$buffer."\n -223".$sub_string."-".$tag_val[1]."-334- \n";
				}else{
					if(!isset($start_count[$tag_type])){
						$start_count[$tag_type]=0;
					}
					if(!isset($end_count[$tag_type])){
						$end_count[$tag_type]=0;
					}
					if(!isset($inner_match[$tag_type])){
						$inner_match[$tag_type]="";
					}
					if($start_count[$tag_type]>0){
						$cur_match[$tag_type].=$sub_string;
						$inner_match[$tag_type].=$sub_string;
						//$buffer=$buffer."\n -224".$sub_string."-".$cur_match[$tag_type]."-35- \n";
					}
				}
				//if(($start_count[$tag_type]>$tag_array_count[$tag_type])&&($end_count[$tag_type]>$tag_array_count[$tag_type])){
				$match_count=$tag_array_count[$tag_type]-1;
				//if(($start_count[$tag_type]>0)&&($end_count[$tag_type]>0)){
				if(($start_count[$tag_type]>$match_count)&&($end_count[$tag_type]>$match_count)){
					$current_tag++;
					$match_array[$current_tag]['html']=$cur_match[$tag_type];
					$inner_array[$current_tag]['html']=$inner_match[$tag_type];
					$cur_match[$tag_type]="";
					$inner_match[$tag_type]="";
					$start_count[$tag_type]=0;
					$end_count[$tag_type]=0;
					$tag_string=$match_array[$current_tag]['html'];
					$tag_string=substr($tag_string,1,-1);
					if(substr($tag_string,-1)=='/'){
						$tag_string=substr($tag_string,0,-1);
					}
					$tag_attributes=explode(' ',$tag_string);
					$tag_attr_list = array_slice($tag_attributes, 1);
					foreach($tag_attr_list as $attr_key=>$attri_val){
						if (str_contains($attri_val, '=')) {
							$match_array[$current_tag]['attributes'][]=$attri_val;
						}
					}
					//$match_array[$current_tag]['attributes']=$tag_attr_list;
					$tag_name=$tag_attributes[0];
					$match_array[$current_tag]['tag_name']=$tag_name;
					if(in_array($tag_name,$html_tags)){
						$match_array[$current_tag]['tag_type']="html";
					}elseif(in_array($tag_name,$html_void_tags)){
						$match_array[$current_tag]['tag_type']="void";
					}
				}
			}
			//$buffer=$buffer."\n -1".var_export($match_array,true)."-2- \n";
			$search++;
			
		}
		$set_dimentions=true;
		$tag_count=0;
		$parent=0;
		/*
		while($set_dimentions==true){
			if($start_tag_count==0){
				if($match_array[$tag_count]['tag_type']=="void"){
					$match_array[$tag_count]['parent']=$parent;
					$start_tag_count=0;
				}else{
					$tag_search_name=$match_array[$tag_count]['tag_name'];
					$start_tag_count=$tag_count;
				};
			}else{

			}
			
			if (str_contains($tag_search_name, '/')) {
				
				$end_tag_search_name=substr($tag_string,1);
				if($end_tag_search_name==$tag_search_name){
					
				}
					$end_tag_search_name=$tag_search_name;
				}
			}
			if($tag_search_name)
			$tag_count++;
		}*/

		$tag_current_name="";
		$tag_search_name="";
		$end_tag_search_name="";
		$end_tag_search_array=array();
		$open_tag_num=0;
		$start_tag_count=0;
		$parentID=0;
		$debug="";
		while(($tag_count<count($match_array))&&($tag_count<100)){
			if(isset($tag_current_name)){
				$match_array[$tag_count]['debug_0']=$tag_current_name."-".$tag_search_name."-".$end_tag_search_name."-|";

			}
				
			if(isset($match_array[$tag_count]['tag_name'])){
				$tag_current_name=$match_array[$tag_count]['tag_name'];
			}
			
			//$end_tag_search_name=$end_tag_search_array[$open_tag_num];
			if(!isset($match_array[$tag_count]['tag_name'])){
				$match_array[$tag_count]['tag_name']="";
			}
			$match_array[$tag_count]['children']=array();
			
			if(!isset($match_array[$tag_count]['tag_type'])){
				$match_array[$tag_count]['tag_type']="";
			}
			if(($tag_search_name=="")&&($match_array[$tag_count]['tag_type']!="void")){
				//$match_array[$current_tag]['tag_type']="void";
				
				if (!str_contains($tag_current_name, '/')) {
					
					$tag_search_name=$tag_current_name;
					$end_tag_search_name='/'.$tag_search_name;
					
					$start_tag_count=$tag_count;
					$parentID=$tag_count;
					$open_tagID=$tag_count;
					
					$match_array[$tag_count]['end_tag']=$end_tag_search_name;
					
				}else{
					
					$match_array[$tag_count]['end_tag']=$tag_current_name;
					
					$end_tag_search_name="";
					$tag_search_name="";
				}
			}
			
			if($match_array[$tag_count]['tag_type']!="void"){
				$end_tag_search_name=$tag_current_name;
				$end_tag_search_array[$open_tag_num]=$end_tag_search_name;
				$open_tag_num++;
			}
			
			if($tag_current_name==$end_tag_search_name){

				$match_array[$tag_count]['end_tag']=$end_tag_search_name;
				$match_array[$tag_count]['open_tag_ID']=$open_tagID;
				$match_array[$open_tagID]['tag_type']=$match_array[$tag_count]['tag_type'];
				$open_tag_num--;
				//$match_array[$tag_count]['children'][]=$tag_count;
				/*
				$tag_count=$start_tag_count;
				$tag_search_name="";
				$end_tag_search_name="";
				$start_tag_count=0;
				$match_array[$tag_count]['parent']=$parentID;
				$parentID=0;
				$tag_search_name="";
				*/
			}
			//$end_tag_search_name='/'.$tag_search_name;
			$match_array[$tag_count]['debug']=$tag_current_name."-".$tag_search_name."-".$end_tag_search_name."-".var_export($end_tag_search_array,true)."|";
			/*
			$match_array[$tag_count]['end_tag']=$end_tag_search_name;
			if($match_array[$tag_count]['end_tag']==$match_array[$tag_count]['tag_name']){
				$match_array[$tag_count]['open_tag']=$open_tagID;
			}
			*/
			//if(!isset($match_array[$tag_count]['debug'])){
				//$match_array[$tag_count]['debug']=$debug;
			//}
			//$match_array[$tag_count]['debug_code']=$debug;
			//$match_array[0]=$tag_search_name;
			//$match_array['debug']=$debug;
			$tag_count++;

			if($tag_count>100) die("Too Many");
		}

		
		for($x=0;$x<count($match_array);$x++){
			if(isset($tag_match_array[$inner_array[$x]['html']])){
				$query.="| ".$x." |\n ".$inner_array[$x]."\n--".$match_array[$x]."=>".$tag_match_array[$inner_array[$x]['html']];//var_export($tag_match_array[$inner_array[$x]],true);
				$buffer=str_replace($match_array[$x], $tag_match_array[$inner_array[$x]['html']], $buffer);
			}else{
				//$buffer=str_replace($match_array[$x], "", $buffer);
			}
			
		}
		
		
		/*
		//$buffer=$query."--".$buffer;
		$pos = strpos($buffer, "<");
		$buffer=substr($buffer, $pos);
		//$buffer=$pos.$buffer;
		//$buffer = trim($buffer);
		*/
		$server_name=$_GET['dcmshost'];
		//$server_name=$_SERVER['SERVER_NAME'];
		if($server_name=="creativeweblogic.info"){
			//$buffer="\n\n | ".$server_name." |Hello World IWLNet | ".var_export($match_array,true).$buffer;
		}else{
			//$buffer=$server_name."\n\n X Hello World".$buffer;
		}
		
		//$buffer="\n 666all done".$buffer;
		$pos = strpos($buffer, "<");
		$buffer=substr($buffer, $pos);
		return $buffer;
	}

	global $callback_num;
	global $html_piece;
	$html_piece=array();
	$callback_num=0;
	function callback_all($buffer)
	{
		$html_piece[]=$buffer;
		$callback_num+=1;
		//print $buffer;
		//$buffer="";
		return $buffer;
	}

	static $total_html;
	global $combined_total_html;
	$total_html=array();
	$combined_total_html="";

	function callback_everyone($buffer)
	{
		$buffer=implode($total_html);
		
		return $buffer;
	}
	function callback_combined($buffer,$order)
	{
		print $buffer;
		if(!isset($total_html[$order])){
			$total_html[$order]=$buffer;
			$combined_total_html=implode($total_html);
		}
		
		return $buffer;
	}


	

	function include_read($inc_dir)
	{
		global $log;
		global $r;
		
		if(file_exists($inc_dir)){
		    print $inc_dir."<br>\n";
			//ob_start("callback_template");
			include($inc_dir);
			//$return_buffer = ob_get_contents();
			ob_end_clean();
		}else{
			$return_buffer="";
		}
		
		//return $return_buffer;
	}
?>