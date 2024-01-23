<?php
	
	if(count($domain_user_data)==0){
		if(isset($domain_data["original_db"])){
			$domain_name=$domain_data["original_db"]['Name'];
			$SEOFriendly=$domain_data["original_db"]['SEOFriendly'];
		}else{
			$domain_name=$domain_data["db"]['Name'];
			$SEOFriendly=$domain_data["db"]['SEOFriendly'];
		}
		$side_menu_sql="";
		$menu_hide_sql=" Menu_Hide='No' AND ";
        //$menu_hide_sql="";
        //$side_menu_sql=" AND content_pages.parentID=".$content_data['db']['id'];
        $group_by="GROUP BY URI";
        /*
		if(isset($_SESSION['membersID'])){
			$member_type="Member";
		}elseif(isset($_SESSION['administratorsID'])){
			$member_type="Admin";
		}else{
		    $member_type="Public";
		}
		*/
		if(!isset($_SESSION['administratorsID'])) $_SESSION['administratorsID']=0;
		if(!isset($_SESSION['membersID'])) $_SESSION['membersID']=0;
		
		if($_SESSION['membersID']>0){
			$member_type="Member";
			$exposure="(Exposure='".$member_type."' OR Exposure='Both')";
		}elseif($_SESSION['administratorsID']>0){
			$member_type="Admin";
			$exposure="Exposure='".$member_type."'";
		}else{
		    $member_type="Public";
		    $exposure="(Exposure='".$member_type."' OR Exposure='Both')";
		}
		
		if($content_data['db']['domainsID']==0){
            //$admin_menu_sql=" AND domainsID=0";
            $admin_menu_sql="AND domainsID=0";
            if(isset($show_side_menu)){
                $side_menu_sql=" AND parentID=".$content_data['db']['id'];
            }else{
                $side_menu_sql="";
            }
            
        }else{
            if(isset($show_side_menu)){
                $side_menu_sql=" AND parentID=".$content_data['db']['id'];
            }else{
                $side_menu_sql="";
            }
            $admin_menu_sql="AND domainsID=".$domain_data["db"]['id']." ";
            //$side_menu_sql="";
        }
		
		//$sql="SELECT DISTINCT URI AS uri,MenuTitle AS menutitle,id AS content_pagesid FROM content_pages WHERE ".$menu_hide_sql;
			//$sql.=$exposure." AND languagesID=".$app_data['LANGUAGESID']." ".$admin_menu_sql." ".$side_menu_sql."   ORDER BY Sort_Order";
		
		$sql="SELECT URI AS uri,MenuTitle AS menutitle,id AS content_pagesid FROM content_pages WHERE Menu_Hide='No' AND ".$exposure." ".$side_menu_sql." ".$admin_menu_sql." ORDER BY Sort_Order;";
		
		
		//$sql="SELECT URI AS uri,MenuTitle AS menutitle,id AS content_pagesid FROM content_pages WHERE Menu_Hide='No' AND Exposure='Admin' AND parentID=959 AND domainsID=0 ORDER BY Sort_Order;";
		
		//print $sql."\n".$sql2." \n";
		$rslt=$r->RawQuery($sql);
		$first=true;
		$row_count=$r->NumRows($rslt);
		/*
		while($row_count==0){
		    $side_menu_sql=" AND content_pages.parentID=".$content_data['db']['parentID'];
        
		    
		    $sql="SELECT DISTINCT URI AS uri,MenuTitle AS menutitle,id AS content_pagesid FROM content_pages WHERE ".$menu_hide_sql." (Exposure='".$member_type."' OR Exposure='Both')";
			$sql.=" AND languagesID=".$app_data['LANGUAGESID']." AND (domainsID=".$domain_data["db"]['id']." OR domainsID=0) ".$side_menu_sql."  GROUP BY URI ORDER BY Sort_Order";
			$rslt=$r->RawQuery($sql);
			$row_count=$r->NumRows($rslt);
		}
		*/
		
		while($data=$r->Fetch_Assoc($rslt)){
			// show spacers in menu
			if($menu_data['spacers']){
				if($first){
					$first=false;
					$data['first']=true;
				}else{
					$data['first']=false;
				}
			}else{
				// no show spacers in menu
				$data['first']=true;
			}
			
			if($SEOFriendly=="No"){
				$data['link_address']='http://'.$domain_name.$app_data['ROOTDIR'].'index.php?guid=1&cpid='.$data["content_pagesid"];
			}else{
				$data['link_address']='http://'.$domain_name.$data["uri"];
			}
			$menu_data["vb"][]=$data;
		}
	}else{
		$data=array();
		$data['first']=true;
		$data['link_address']='http://'.$domain_data["db"]['Name'];
		$data["menutitle"]="Directory Home";
		$menu_data["vb"][]=$data;
	}

?>