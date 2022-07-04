<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Export_Locator_model extends Model {
	public function export_locator($id)
    {
        $where = [
            'locator_tbl.locator_id' => $id,
            'locator_tbl.user_id' => $this->session->userdata('user_id')
        ];
        return $this->db->table('locator_tbl')->select("locator_tbl.locator_id, locator_tbl.user_id, locator_tbl.current_datetime, locator_tbl.departure_time, locator_tbl.location, locator_tbl.reason, locator_tbl.expected_arrival_time, locator_tbl.locator_type, locator_tbl.user_sign_status, locator_tbl.ced_sign_status, user_profile.f_name, user_profile.m_name, user_profile.l_name, designation.designation_desc")->inner_join('user_profile', 'user_profile.user_id = locator_tbl.user_id')->inner_join('designation','user_profile.designation_id = designation.designation_id')->where($where)->get();
    }
}
?>
