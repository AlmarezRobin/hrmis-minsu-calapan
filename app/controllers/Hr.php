<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Hr extends Controller {

	#region employee
	// ! loads index page
	public function index() {
		$this->call->view('hr/index');
	}


	// start change user-profile-and-pds rma 4/5/2022
	public function view_admin(){
		$data = $this->Hr_model->get_all_admin();
		$this->call->view('hr/registered_admin',$data);
	}
	public function add_admin(){
		if ($this->form_validation->submitted()) 
            {
                $this->form_validation
									->name('admin_username')->required()
									->name('admin_email')->required()
									->name('admin_password')->required()
									->name('admin_name')->required()
									->name('admin_midname')->required()
									->name('admin_lname')->required()
									->name('admin_role')->required()
									->name('admin_office')->required();
									if ($this->form_validation->run()) 
                {
                  $this->Hr_model->register_admin(
									$this->io->post('admin_username'), 
									$this->io->post('admin_email'),
									$this->io->post('admin_password'),
									$this->io->post('admin_name'),
									$this->io->post('admin_midname'), 
									$this->io->post('admin_lname'),
									$this->io->post('admin_role'),
									$this->io->post('admin_office'));
										redirect('Hr/view_admin');
                }

                
            }
		$this->call->view('hr/register_admin');
	}

	
	// ! get single employement status
	public function get_single_admin(){
		if($this->form_validation->run()){
			$data = $this->Hr_model->get_single_admin($this->io->post('admin_id'));
			$this->call->view('hr/register_admin', $data);
			
		}
	}
	// ! updates employee status
	public function update_admin()
	{
		if($this->form_validation->submitted())
        {
            $this->form_validation
			->name('admin_username')->required()
			->name('admin_email')->required()
			->name('admin_name')->required()
			->name('admin_midname')->required()
			->name('admin_lname')->required()
			->name('admin_role')->required()
			->name('admin_office')->required();
							
            if($this->form_validation->run())
            {
                if($this->Hr_model->update_admin(
					$this->io->post('admin_id'), 
					$this->io->post('admin_username'), 
					$this->io->post('admin_email'),
					$this->io->post('admin_name'),
					$this->io->post('admin_midname'), 
					$this->io->post('admin_lname'),
					$this->io->post('admin_role'),
					$this->io->post('admin_office')))
                {
                    // $this->session->set_flashdata(array('status'=>'Inserted Succesfully'));
                    redirect('Hr/view_admin');
                    exit;
                }
            }
        }
	}
	public function delete_admin()
	{
		if ($this->form_validation->run()) 
		{
			$this->Hr_model->delete_admin($this->io->post('admin_id'));
			redirect('Hr/view_admin');
			exit;
		}
	}

	// end start change user-profile-and-pds rma 4/5/2022






	// ! selects all employee registered
	public function view_employee(){
		$data = $this->Employee_model->select_all_employee();
		$this->call->view('hr/registered_employee',$data);
	}

	// ! inserting new employee
	public function add_employee(){
		
		if ($this->form_validation->submitted()) 
            {
                $this->form_validation
									->name('emp_idnumber')->required()
									->name('emp_email')->required()
									->name('emp_username')->required()
									->name('emp_password')->required()
									->name('emp_role')->required();
                if ($this->form_validation->run()) 
                {
                  $this->Auth->register(
									$this->io->post('emp_idnumber'),
									$this->io->post('emp_email'),
									$this->io->post('emp_username'), 
									$this->io->post('emp_password'),
									$this->io->post('emp_role'),
									
								);

					$this->Employee_model->insert_emp_desig($this->io->post('designation'));

					
					redirect('Hr/view_employee');
                }
            }

			$data = $this->Utility_model->designation();
		
			$this->call->view('hr/register_employee',$data);
	}
	#endregion


	

}
