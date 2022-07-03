<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class CED extends Controller {
    public function __construct(){
        parent:: __construct();
        if (! is_logged_in()) {
            redirect('Admin');
        }
        
        if ($this->session->userdata('role') != 'ced') {
            redirect('Admin');
        }
        $this->call->model('CED_model');
    }
    public function index(){
        $data=[
			'get_all_locator_request'=>$this->Request_model->get_all_locator_request(),
		];
		$this->call->view('ced/index',$data);
    }
    public function view_locator_emp($id){

        $data=[
            'get_locator_data'=>$this->CED_model->get_locator_data($id),
            'get_designation'=>$this->CED_model->get_designation($id)
        ];

        $this->call->view('ced/view_emp_locator',$data);
    }
	
    public function returning_locator(){
        $this->CED_model->update_emp_locator($this->io->post('locator_id'),$this->io->post('user_id'),$this->io->post('cedsign'),$this->io->post('status'));
        // $this->Request_model->returned_and_update_emp_req($this->io->post('user_id'),$this->io->post('stat'),$this->io->post('remarks'));

        redirect('CED'); 
    }
}
?>
