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
    
   public function insert_user_profile($fnam, $mname, $lname, $xname, $bday, $sex, $cstat, $cnumber, $tnumber)
	{
		$bind = array(
         'user_id' =>$this->session->userdata('user_id'),
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
      return $this->db->table('user_profile')->insert($bind);
	}

   


   public function insert_emp_desig($designation){
      $bind = [
         'designation_id'=>$designation
      ];
     return $this->db->table('user_profile')->insert($bind);
   }




   //4/7/2022 rma
   #region uploading file for profile
   public function uploadprofile($photo){
      return $this->db->table('user_profile')->where('user_id',$this->session->userdata('user_id'))->update(array('photo'=>$photo));
   }


   public function uploadsignature($sign){
      return $this->db->table('user_profile')->where('user_id',$this->session->userdata('user_id'))->update(array('e_sign'=>$sign));
   }
   // public function displaysign($id=6){
   //    return $this->table('user_profile')->select('photo')->where('user_id',$id)->get();
   // }


   #endregion








   public function update_user_profile($fname, $mname, $lname, $xname, $bday, 
   $sex, $cstat, $cnumber, $tnumber, $profile_id)
	{
		$bind = array(
			'f_name'=>$fname,
         'm_name'=>$mname,
         'l_name'=>$lname,
         'name_ex'=>$xname, 
         'date_of_birth'=>$bday,
         'sex'=>$sex,
         'civil_status'=>$cstat,
         'telephone'=>$tnumber,
         'mobile'=>$cnumber
         
      );
      return $this->db->table('user_profile')->where('profile_id', $profile_id)->update($bind);
	}


   public function add_educ($level,$school_name,$degree,	$from_date,	$to_date,	
   $highest_level,	$year_graduated,	$honors_received){

      $bind = array(
         'level' =>$level,
         'school_name'=>$school_name,
         'degree'=>$degree,
         'from_date'=>$from_date,
         'to_date'=>$to_date,
         'highest_level'=>$highest_level,
         'year_graduated'=>$year_graduated,
         'honors_received'=>$honors_received
      );

      return $this->tb->table('educational_background')->insert->where('user_id',$this->session->userdata('user_id'));

   }







public function change_password($pass){
   $bind = [
      '_password'=>$this->Auth->passwordhash($pass)
   ];
//   return $this->db->table('user')->where('user_id',$this->session->userdata('user_id')->update($bind));
  return $this->db->table('user')->where('user_id',$this->session->userdata('user_id'))->update($bind);
}


















   // start change user-profile-crud jcd Apr. 5, 2022
   public function sess_log($username){
      $bind = array(
         'username' => $username
      );
      return $this->db->table('user')->select('user.user_id, user.username ,user.id_number, user.role, user_profile.profile_id, user_profile.f_name, user_profile.m_name, user_profile.l_name, user_profile.name_ex, user_profile.date_of_birth, user_profile.sex, user_profile.civil_status, user_profile.telephone, user_profile.mobile')->inner_join('user_profile', 'user.user_id = user_profile.user_id')->where($bind)->get();
   }

   // end change user-profile-crud jcd Apr. 5, 2022






}
?>