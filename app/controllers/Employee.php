<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Employee extends Controller {

	public function index() {
		$this->call->view('emp/index');
	}

	// public function view_myprofile(){
	// 	$this->call->view('emp/index');
	// }
	public function view_edit_profile(){
		$this->call->view('emp/emp_profile/myprofile_edit');
	}

	public function view_emp_designation_edit(){

		$designation = $this->Utility_model->designation();
		$this->call->view('emp/emp_designation_edit',$designation);
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
                  $this->Employee_model->insert_user_profile(
									
									$this->io->post('fname'),
									$this->io->post('mname'),
									$this->io->post('lname'),
									$this->io->post('xname'),
									$this->io->post('dob'), 
									$this->io->post('sex'),
									$this->io->post('cstat'),
									$this->io->post('tnumber'),
									$this->io->post('cnumber'));
										redirect('Employee');
                }

                
            }
		// $this->call->view('hr/register_admin');
	}













}
?>