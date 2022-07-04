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




			'get_myleave'=>$this->Employee_model->get_myleave(),
			'leave_type'=>$this->Leave_model->leave_type()
        ];
		$this->call->view('emp/leave/index.php',$data);
	}

	public function file_leave(){
		if($this->form_validation->run()){
			$this->form_validation->name('type')->name('details')->name('specify')->name('no_days_applied_for')->name('from')->name('to')->name('commutation');
			if($this->form_validation->submitted())
			{
				$this->Request_model->file_leave(
					$this->io->post('type'),
					$this->io->post('details'),
					$this->io->post('specify'),
					$this->io->post('no_days_applied_for'),
					$this->io->post('from'),
					$this->io->post('to'),
					$this->io->post('commutation'),
					$this->io->post('dept'),
					$this->io->post('desig'));
				
				// $this->Request_model->insert_request($this->io->post('type'),$this->io->post('stat_of_app'));
				 redirect('Leave');
			}
		}
	}
}
?>