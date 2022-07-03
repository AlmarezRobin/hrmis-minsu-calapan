<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class CED_model extends Model {



    public function get_locator_data($id){
        $where=[
            'locator_tbl.user_id'=>$id,
            'locator_tbl.ced_sign_status'=>0


        ];
        return $this->db->table('locator_tbl')->select('locator_tbl.user_id, locator_tbl.current_datetime,locator_tbl.departure_time,locator_tbl.location,locator_tbl.reason,locator_tbl.expected_arrival_time,locator_tbl.user_sign_status,locator_tbl.ced_sign_status,user_profile.f_name, user_profile.l_name')->inner_join('user_profile','locator_tbl.user_id = user_profile.user_id')->where($where)->get();
    }
    public function get_designation($id){
        return $this->db->table('user_profile')->select('designation.designation_id, designation.designation_desc, user_profile.designation_id')->inner_join('designation','user_profile.designation_id=designation.designation_id')->where('user_id',$id)->get();
    }


    public function update_emp_locator($locator_id,$id,$cedsgn,$status){
        $data= [
            'ced_sign_status'=>$cedsgn,
            'status'=>$status
        ];
        $where =[
            'locator_id'=>$locator_id,
            'user_id'=>$id
        ];
        return $this->db->table('locator_tbl')->where($where)->update($data);
    }
	
}
?>
