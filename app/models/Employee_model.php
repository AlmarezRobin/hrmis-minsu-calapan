<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Employee_model extends Model{
   public function select_all_employee(){
   return $this->db->table('user')->get_all();
   }
   public function   designation(){
      return $this->db->table('designation')->get_all();
      
    }
    
    public function insert_user_profile(
       
       $fnam,
       $mname, 
       $lname,
       $xname, 
       $bday,
       $sex,
       $cstat,
       $cnumber,
       $tnumber,
       $userid =6
       
      )
	{
		$bind = array(
         'user_id' =>$userid,
			'f_name'=>$fnam,
         'm_name'=>$mname,
         'l_name'=>$lname,
         'name_ex'=>$xname, 
         'date_of_birth'=>$bday,
         'sex'=>$sex,
         'civil_status'=>$cstat,
         'telephone'=>$tnumber,
         'mobile'=>$cnumber
         
			);
		// return $this->db->table('user_profile')->insert($bind)->where('user_id','?')->exec();

      return $this->db->table('user_profile')->insert($bind)->exec();
	}






}
?>