<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Leave_model extends Model {


    public function get_user_details(){
        return $this->db->table('user_profile')->select('office.office_id, office.office_code, office.office_description, office.dept_id, department.dept_description,user_profile.l_name,user_profile.m_name,user_profile.f_name')->inner_join('office','user_profile.office_id = office.office_id ')->inner_join('department','office.dept_id = department.dept_id')->where('user_id',$this->session->userdata('user_id'))->get();
    }
	
}
?>
