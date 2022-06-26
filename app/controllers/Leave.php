<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Leave extends Controller {

	public function index() {
        $data = [
            'emp_profile'=>$this->Employee_model->emp_profile($this->session->userdata('user_id')),
			'get_emp_notif'=>$this->Request_model->get_emp_notif()
        ];
		$this->call->view('emp/leave/file_leave.php',$data);
	}
}
?>