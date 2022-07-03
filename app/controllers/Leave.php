<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Leave extends Controller {

	public function __construct(){
		parent::__construct();
		$this->call->model('Leave_model');
	}

	public function index() {
        $data = [
            'emp_profile'=>$this->Employee_model->emp_profile($this->session->userdata('user_id')),
			'get_emp_notif'=>$this->Request_model->get_emp_notif(),

			'get_user_details'=>$this->Leave_model->get_user_details(),




			'get_myleave'=>$this->Employee_model->get_myleave()
        ];
		$this->call->view('emp/leave/index.php',$data);
	}
}
?>