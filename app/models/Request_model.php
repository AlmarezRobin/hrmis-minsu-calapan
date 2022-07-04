<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Request_model extends Model {


    //==========================================================================================
    //  |||||||||||||       ||||            ||||    |||||||||||||||
    //  |||||||||||||       |||||          |||||    ||||        |||
    //  ||||                ||||||        ||||||    ||||        |||
    //  |||||||||||||       ||| |||      ||| |||    |||||||||||||||
    //  |||||||||||||       |||  |||    |||  |||    ||||
    //  ||||                |||   |||  |||   |||    ||||
    //  |||||||||||||       |||    ||||||    |||    ||||
    //  |||||||||||||       |||     ||||     |||    ||||
    //=========================================================================================
    //insertion ng request ni employee
    public function insert_request($type_of_app, $stat_of_app){
        $data = [
            'type_of_app'=>$type_of_app,
            'status_of_app'=>$stat_of_app,
            'status_of_notif'=>0,
            'user_id'=> $this->session->userdata('user_id')

        ];	
        return $this->db->table('request_tbl')->insert($data);
    }
    public function update_request($type_of_app, $stat_of_app){
        $data = [
            'type_of_app'=>$type_of_app,
            'status_of_app'=>$stat_of_app,
            'user_id'=> $this->session->userdata('user_id')

        ];	
        return $this->db->table('request_tbl')->update($data);
    }

    public function get_stat_pds(){
        return $this->db->table('request_tbl')->where('user_id', $this->session->userdata('user_id'))->get();
     }



    

     /// notification para kay employee ....
    public function get_emp_notif(){
        $where = [
            'status_of_notif'=> 1,
            'user_id'=>$this->session->userdata('user_id')
         ];
         return $this->db->table('request_tbl')->where($where)->not_where('status_of_app' , 'PENDING')->select_count('request_id', 'notif')->get();
    }

    //once na maclick ung notif btn ay maiinsert sa history then mauupdate ang statu notif para mwala ang notif
    public function view_notif_clear(){
        $bind = [
            'status_of_notif'=>0
         ];
         return $this->db->table('request_tbl')->where('user_id', $this->session->userdata('user_id'))->update($bind);
    }

    public function insert_into_history(){
        return $this->db->raw('insert into request_hist_tbl (user_id,type_of_app, status_of_app,status_of_notif,remarks,date_submitted,date_returned) select user_id,type_of_app,status_of_app,status_of_notif,remarks,date_submitted,date_returned from request_tbl where status_of_notif = ?', array(1));
    }

    public function get_notif_get_all(){
        return $this->db->table('request_hist_tbl')->where('user_id', $this->session->userdata('user_id'))->order_by('date_returned', 'DESC')->get_all();
     }
  




    //returning employee request
    public function returned_and_update_emp_req($user_id,$stat_of_app,$remarks){
        $data=[
            'status_of_app'=>$stat_of_app,
            'remarks'=>$remarks,
            'status_of_notif'=> 1
        ];
        $this->db->table('request_tbl')->where('user_id',$user_id)->update($data);
    }




    // ===                 |||||||||||      |||||||||||             |||
    // ===               |||         |||  |||         ||           |||||
    // ===               |||         |||  |||                     ||| |||
    // ===               |||         |||  |||                    |||   |||
    // ===               |||         |||  |||                  |||      |||
    // ===               |||         |||  |||                 |||        |||
    // ===               |||         |||  |||                ||||||||||||||||
    // ===               |||         |||  |||               |||            |||
    // ===============   |||         |||  |||         ||   |||              |||
    // ===============     |||||||||||      |||||||||||   |||                |||

    public function file_locator($dep_time,$location, $reason, $ex_arriv_time, $type){
        $data=[
            'departure_time'=>$dep_time,
            'location'=>$location,
            'reason'=>$reason,
            'expected_arrival_time'=>$ex_arriv_time,
            'locator_type'=>$type,
            'user_sign_status'=>0,
            'user_id'=>$this->session->userdata('user_id'),
            'status'=>"PENDING"
        ];
        return $this->db->table('locator_tbl')->insert($data);
    }

    public function get_all_locator_request(){
        return $this->db->table('locator_tbl')->select('locator_tbl.locator_id, locator_tbl.user_id, user_profile.l_name, user_profile.f_name,
        locator_tbl.current_datetime,locator_tbl.departure_time,locator_tbl.location,locator_tbl.reason,locator_tbl.expected_arrival_time,locator_tbl.locator_type,locator_tbl.current_datetime')->inner_join('user_profile','locator_tbl.user_id = user_profile.user_id')->where('status','PENDING')->get_all();

        // return $thi  s->db->table('locator_tbl')->get_all();
    }
    






    public function get_emp_locator($userid){
        return $this->db->table('locator_tbl')->where('user_id',$user_id)->get();
    }

						































    //hr

    //pagkuha ng lahat ng request para maview sa admin side
    public function get_request(){
        $where=[
            'status_of_app'=>"PENDING",
            'type_of_app'=>"PDS"
        ];
        return $this->db->table('request_tbl')->select('request_tbl.type_of_app, request_tbl.status_of_app,request_tbl.date_submitted, user_profile.user_id,user_profile.f_name,user_profile.m_name, user_profile.l_name')
        ->inner_join('user_profile','request_tbl.user_id = user_profile.user_id')->where($where)->get_all();
    }

    public function get_id($var){
        return $this->db->table('request_tbl')->where('user_id',$var)->get();
    }








    public function file_leave($type,$details, $specify, $days,$from, $to,$commutation,$dept, $desig){
        $data=[
            'type_of_leave'=>$type,
            'details_of_leave'=>$details,
            'details_desc'=>$specify,
            'no_days_applied'=>$days,
            'from_date'=>$from,
            'to_date'=>$to,
            'commutation'=>$commutation,
            'dept_id'=>$dept,
            'designation_id'=>$desig,
            'user_id'=>$this->session->userdata('user_id'),
            'status'=>"PENDING"
            
        ];
        return $this->db->table('leave_details_tbl')->insert($data);
    }




    
    

    
	
}
?>
