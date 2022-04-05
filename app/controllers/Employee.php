<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Employee extends Controller {

	public function index() {
		$data = $this->Employee_model->emp_profile($this->session->userdata('user_id'));
		$this->call->view('emp/index', $data);
	}

	// public function view_myprofile(){
	// 	$this->call->view('emp/index');
	// }
	public function view_edit_profile(){
		$data = $this->Employee_model->emp_profile($this->session->userdata('user_id'));
		$this->call->view('emp/emp_profile/myprofile_edit', $data);
	}

	public function view_emp_designation_edit(){

		$designation = $this->Utility_model->designation();
		$this->call->view('emp/emp_designation_edit',$designation);
	}

	public function insert_profile(){
		if ($this->form_validation->submitted()) 
            {
                $this->form_validation
									->name('fname')->required()
									->name('mname')->required()
									->name('lname')->required()
									->name('xname')
									->name('dob')->required()
									->name('sex')->required()
									->name('cstat')->required()
									->name('tnumber')->required()
									->name('cnumber')->required();
									
				if ($this->form_validation->run()) 
                {
                  $this->Employee_model->insert_user_profile(
									strtoupper($this->io->post('fname')),
									strtoupper($this->io->post('mname')),
									strtoupper($this->io->post('lname')),
									strtoupper($this->io->post('xname')),
									$this->io->post('dob'), 
									strtoupper($this->io->post('sex')),
									strtoupper($this->io->post('cstat')),
									$this->io->post('tnumber'),
									$this->io->post('cnumber'));
									redirect('Employee');
                }

                
            }
		// $this->call->view('hr/register_admin');
	}


	public function update_profile(){
		if ($this->form_validation->submitted()) 
            {
                $this->form_validation
									->name('fname')->required()
									->name('mname')->required()
									->name('lname')->required()
									->name('xname')
									->name('dob')->required()
									->name('sex')->required()
									->name('cstat')->required()
									->name('tnumber')->required()
									->name('cnumber')->required();
									
				if ($this->form_validation->run()) 
                {
                  $this->Employee_model->update_user_profile(
									strtoupper($this->io->post('fname')),
									strtoupper($this->io->post('mname')),
									strtoupper($this->io->post('lname')),
									strtoupper($this->io->post('xname')),
									$this->io->post('dob'), 
									strtoupper($this->io->post('sex')),
									strtoupper($this->io->post('cstat')),
									$this->io->post('tnumber'),
									$this->io->post('cnumber'),
									$this->io->post('profile_id')						 );
									redirect('Employee');
                }

                
            }
		// $this->call->view('hr/register_admin');
	}













}
?>