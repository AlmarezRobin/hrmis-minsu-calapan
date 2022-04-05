<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Employee_model extends Model{
   public function select_all_employee(){
      return $this->db->table('user')->get_all();
   }

   public function emp_profile($id){
      return $this->db->table('user_profile')->where('user_id', $id)->get();
   }

   public function designation(){
      return $this->db->table('designation')->get_all();
      
   }
    
   public function insert_user_profile($fnam, $mname, $lname, $xname, $bday, $sex, $cstat, $cnumber, $tnumber, $userid =6)
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
      return $this->db->table('user_profile')->insert($bind)->exec();
	}

   public function update_user_profile($fnam, $mname, $lname, $xname, $bday, $sex, $cstat, $cnumber, $tnumber, $profile_id, $userid =6)
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
      return $this->db->table('user_profile')->update($bind)->where('profile_id', $profile_id)->exec();
	}

   // start change user-profile-crud jcd Apr. 5, 2022
   public function sess_log($username){
      $bind = array(
         'username' => $username
      );
      return $this->db->table('user')->select('user.user_id, user.username, user.id_number, user.role, user_profile.profile_id, user_profile.f_name, user_profile.m_name, user_profile.l_name, user_profile.name_ex, user_profile.date_of_birth, user_profile.sex, user_profile.civil_status, user_profile.telephone, user_profile.mobile')->inner_join('user_profile', 'user.user_id = user_profile.user_id')->where($bind)->get();
   }

   // end change user-profile-crud jcd Apr. 5, 2022






}
?>