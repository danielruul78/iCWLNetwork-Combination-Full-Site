﻿<?php
/*
class clsLog{
        
   var $MessageArray=array();
   var $PriorityMessages=array();
   var $clsFact;

   function general($msg,$num=0){
       
       if($num>=3){
           $this->PriorityMessages[]=$msg;
       }else{
           $this->MessageArray[]=$msg;
       }

   }
   
   public function user($msg,$num=1,$memberID=0,$member_name="") 
   { 
      $log_array=array("Msg"=>$msg,"Error_Code"=>$num,"memberID"=>$memberID,"member_name"=>$member_name);
      if($num>=3){
            $this->PriorityMessages[]=var_export($log_array,true);
      }else{
            $this->MessageArray[]=var_export($log_array,true);
      }
   }

   function display_all(){
      
   }

   function display_priority(){
      // print var_export($this->PriorityMessages,true);

   }

   
   function display_normal(){
      //print var_export($this->MessageArray,true);

   }

   private function print_msg_arrays($msg) 
   { 
      //print($msg);
   }

}
*/
class clsLog{
        
   
   function __construct(){
       
   }

   function general($msg,$num=0){
       

   }
   
   public function user($msg,$num=1,$memberID=0,$member_name="") 
   { 
      
   }

   function display_all(){
      
   }

   function display_priority(){
      // print var_export($this->PriorityMessages,true);

   }

   
   function display_normal(){
      //print var_export($this->MessageArray,true);

   }

   private function print_msg_arrays($msg) 
   { 
      //print($msg);
   }

}

?>