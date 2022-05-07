<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Employee_model extends Model{
   public function select_all_employee(){
      return $this->db->table('user')->get_all();
   }

   public function emp_profile($id){
      return $this->db->table('user_profile')
                  ->inner_join('employee_status as es', 'es.status_id = user_profile.status_id')
                  ->inner_join('office', 'office.office_id = user_profile.office_id')
                  ->inner_join('designation', 'designation.designation_id = user_profile.designation_id')->where('user_id', $id)->get();
   }

   public function designation(){
      return $this->db->table('designation')->get_all();
      
   }
    
    #region user profile
    
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

         // 4/16/22 rma
         // 'citizenship'=>$citezenship,
         // 'ship_by'=>$shipby,
         // 'citizenship_country'=>$country,
         
         'telephone'=>$tnumber,
         'mobile'=>$cnumber
         
      );
      return $this->db->table('user_profile')->insert($bind);
   }

   public function update_user_profile($res_id, $per_id, $birth_id, $fnam, $mname, $lname, $xname, $bday, $sex, $cstat, $height, $weight, $blood_type, $gsisno, $pag_ibig_no, $philhealth, $sss_no, $tin_no, $agency, $citezenship, $shipby, $country, $cnumber, $tnumber)
   {
      $bind = array(
         // * added jcd april 24, 2022
         'residential_address_id' => $res_id,
         'permanent_address_id' => $per_id,
         'birth_place_address_id' => $birth_id,

         'f_name'=>$fnam,
         'm_name'=>$mname,
         'l_name'=>$lname,
         'name_ex'=>$xname, 
         'date_of_birth'=>$bday,
         'sex'=>$sex,
         'civil_status'=>$cstat,

         // * added jcd april 24, 2022
         'height' => $height,
         'weight' => $weight,
         'blood_type' => $blood_type,
         'gsisno' => $gsisno,
         'pag_ibig_no' => $pag_ibig_no,
         'philhealth_no' => $philhealth,
         'sss_no' => $sss_no,
         'tin_no' => $tin_no,
         'agency_emp_no' => $agency, 


         // added 4/16/22 rma
         'citizenship'=>$citezenship,
         'ship_by'=>$shipby,
         'citizenship_country'=>$country,

         'telephone'=>$tnumber,
         'mobile'=>$cnumber
         
      );
      return $this->db->table('user_profile')->where('user_id', $this->session->userdata('user_id'))->update($bind);
   }

#endregion


   // public function insert_emp_desig($designation){
   //    $bind = [
   //       'designation_id'=>$designation
   //    ];
   //   return $this->db->table('user_profile')->insert($bind);
   // }


   
   


















   //4/7/2022 rma
   #region uploading file for profile
   public function uploadprofile($photo){
      return $this->db->table('user_profile')->where('user_id',$this->session->userdata('user_id'))->update(array('photo'=>$photo));
   }


   public function uploadsignature($sign){
      $sign = [
         'e_sign'=>$sign
      ];

      return $this->db->table('user_profile')->where('user_id',$this->session->userdata('user_id'))->update($sign);
   }


   // public function displaysign($id=6){
   //    return $this->table('user_profile')->select('photo')->where('user_id',$id)->get();
   // }


   #endregion

   public function passwordhash($password)
   {
        $options = array('cost' => 4, );
        return password_hash($password, PASSWORD_BCRYPT, $options);
   }

public function change_password($pass){
   $bind = [
      '_password'=>$this->Employee_model->passwordhash($pass)
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




   #region for submission of pds
   public function submit_pds($stat){
      $bind = [
         'user_id'=>$this->session->userdata('user_id'),
         'status_of_pds'=>$stat
      ];
      return $this->db->table('pds_request_tbl')->insert($bind);
   }

   public function update_pds($var){

      $bind = [
         'status_of_pds'=>$var
      ];
      return $this->db->table('pds_request_tbl')->where('user_id', $this->session->userdata('user_id'))->update($bind);
   }

   public function get_stat_pds(){
      return $this->db->table('pds_request_tbl')->where('user_id', $this->session->userdata('user_id'))->get();
   }

   public function get_notif_pds(){
      return $this->db->table('pds_request_hist_tbl')->where('user_id', $this->session->userdata('user_id'))->order_by('date_returned', 'DESC')->get_all();
   }


   //function notification to notif employee

   public function emp_notif_forpds(){
      $where = [
         'stat_emp_notif'=> 0,
         'user_id'=>$this->session->userdata('user_id')
      ];
      return $this->db->table('pds_request_tbl')->where($where)->not_where('status_of_pds' , 'PENDING')->select_count('pds_id', 'notif')->get();
   }

   //pra iupdate ung status nung notification at para clear once na naclick
   public function stat_emp_notif(){

      $bind = [
         'stat_emp_notif'=>1
      ];
      return $this->db->table('pds_request_tbl')->where('user_id', $this->session->userdata('user_id'))->update($bind);
   }


   #endregion

}
?>