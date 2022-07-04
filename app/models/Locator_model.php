<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Locator_model extends Model {
	

    public function get_all_locator(){
        return $this->db->table('locator_tbl')->select('locator_tbl.locator_id, locator_tbl.user_id,locator_tbl.status, user_profile.l_name, user_profile.f_name,
        locator_tbl.current_datetime,locator_tbl.departure_time,locator_tbl.location,locator_tbl.reason,locator_tbl.expected_arrival_time,locator_tbl.locator_type,locator_tbl.current_datetime')->inner_join('user_profile','locator_tbl.user_id = user_profile.user_id')->order_by('locator_id','DESC')->get_all();
    }






}
?>
