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
                  $this->auth->register(
									$this->io->post('emp_idnumber'),
									$this->io->post('emp_email'),
									$this->io->post('emp_username'), 
									$this->io->post('emp_password'),
									$this->io->post('emp_role'));
										redirect('Hr/view_employee');
                }
            }
						$this->call->view('hr/register_employee');
	}
	#endregion


	#region employee status
	// ! selects all data frm employment_status tbl
	public function view_employment_status(){
		$data = $this->Utility_model->employment_stat();
		$this->call->view('hr/utility_settings/employment_status',$data);
	}

	// ! adds employment status
	public function add_employment_status(){
		if($this->form_validation->submitted())
        {
            $this->form_validation
							->name('stat_code')->required('Status code is required')
							->name('stat_desc')->required('Status Description is required');
							
            if($this->form_validation->run())
            {
                if($this->Utility_model->add_emp_stat(strtoupper($this->io->post('stat_code')),
								strtoupper($this->io->post('stat_desc'))))
                {
                    // $this->session->set_flashdata(array('status'=>'Inserted Succesfully'));
                    redirect('Hr/utility_settings/view_employement_status');
                    exit;
                }
            }
        }
		$this->call->view('hr/emp_stat_add');
	}

	// ! get single employement status
	public function get_single_emp_stat(){
		if($this->form_validation->run()){
			$data = $this->Utility_model->get_single_emp_stat($this->io->post('status_id'));
			$this->call->view('hr/utility_settings/emp_stat_add', $data);
			
		}
	}
	// ! updates employee status
	public function update_emp_stat(){
		if($this->form_validation->submitted())
        {
            $this->form_validation
							->name('stat_code')->required()
							->name('stat_desc')->required();
							
            if($this->form_validation->run())
            {
                if($this->Utility_model->update_emp_stat($this->io->post('stat_id'),strtoupper($this->io->post('stat_code')),strtoupper($this->io->post('stat_desc'))))
                {
                    // $this->session->set_flashdata(array('status'=>'Inserted Succesfully'));
                    redirect('Hr/utility_settings/view_employement_status');
                    exit;
                }
            }
        }
	}

	// ! deletes selected employee status
	public function delete_emp_stat(){
		if($this->form_validation->run()){
			$this->Utility_model->delete_emp_stat($this->io->post('status_id'));
			redirect('hr/vieutility_settings/w_employment_status');
			exit();
		}
	}
	#endregion


	#region designation
	public function view_designation(){
		$data = $this->Utility_model->designation();
		$this->call->view('hr/utility_settings/designation',$data);
	}

	public function add_designation(){
		if($this->form_validation->submitted())
        {
            $this->form_validation
							->name('designation_desc')->required()
							->name('salary_grade')->required()
							->name('salary_rate_cat')->required()
							->name('salary_rate_amount')->required();
							
            if($this->form_validation->run())
            {
                if($this->Utility_model->add_designation(
									strtoupper($this->io->post('designation_desc')),
									strtoupper($this->io->post('salary_grade')),
									strtoupper($this->io->post('salary_rate_cat')),
									strtoupper($this->io->post('salary_rate_amount'))))
                {
                    // $this->session->set_flashdata(array('status'=>'Inserted Succesfully'));
                    redirect('Hr/utility_settings/view_designation');
                    exit;
                }
            }
        }
		$this->call->view('hr/desig_add');
	}

	public function get_single_designation(){
		if ($this->form_validation->run()) {
			$data = $this->Utility_model->get_single_designation($this->io->post('designation_id'));
			$this->call->view('hr/utility_settings/desig_add',$data);
		}
	}

	public function update_designation(){
		if($this->form_validation->submitted())
        {
            $this->form_validation
							->name('designation_desc')->required()
							->name('salary_grade')->required()
							->name('salary_rate_cat')->required()
							->name('salary_rate_amount')->required();
							
            if($this->form_validation->run())
            {
				// var_dump($this->io->post());
				// exit;
                if($this->Utility_model->update_designation($this->io->post('designation_id'),				
							strtoupper($this->io->post('designation_desc')),
							strtoupper($this->io->post('salary_grade')),
							strtoupper($this->io->post('salary_rate_cat')),
							strtoupper($this->io->post('salary_rate_amount'))))
                {
                    // $this->session->set_flashdata(array('status'=>'Inserted Succesfully'));
                    redirect('Hr/utility_settings/view_designation');
					exit;
                    
                }
				else{
					$this->session->set_flashdata(array('err'=>'Inserted Succesfully'));

				}
            }
        }
	}

	public function delete_designation(){
		if ($this->form_validation->run()) {
			$this->Utility_model->delete_designation($this->io->post('designation_id'));
			redirect('hr/utility_settings/view_designation');
			exit();
		}
	}
	#endregion

	#region department
	
	public function view_department(){
		$data = $this->Utility_model->department();
		$this->call->view('hr/department',$data);
	}

	public function add_department(){
		if($this->form_validation->submitted())
        {
            $this->form_validation
							->name('dept_code')->required()
							->name('dept_description')->required();
							
            if($this->form_validation->run())
            {
                if($this->Utility_model->add_department(
									strtoupper($this->io->post('dept_code')),
									strtoupper($this->io->post('dept_description'))))
										{
											// $this->session->set_flashdata(array('status'=>'Inserted Succesfully'));
											redirect('Hr/utility_settings/view_department');
											exit;
										}
            }
        }
		$this->call->view('hr/dept_add');
	}

	public function get_single_dept(){
		if ($this->form_validation->run()) {
			$data = $this->Utility_model->get_single_dept($this->io->post('dept_id'));
			$this->call->view('hr/utility_settings/dept_add',$data);
		}
	}

	public function update_department(){
		if($this->form_validation->submitted())
        {
            $this->form_validation
							->name('dept_code')->required()
							->name('dept_description')->required();
							
            if($this->form_validation->run())
            {
                if($this->Utility_model->update_department($this->io->post('dept_id'),
									strtoupper($this->io->post('dept_code')),
									strtoupper($this->io->post('dept_description'))))
										{
												// $this->session->set_flashdata(array('status'=>'Inserted Succesfully'));
												redirect('Hr/utility_settings/');
												exit;
										}
            }
        }
	}

	public function delete_department(){
		if ($this->form_validation->run()) {
			$this->Utility_model->delete_department($this->io->post('dept_id'));
			redirect('Hr/utility_settings/view_department');
			exit;
		}
	}
	#endregion

	#region office

    // start change user-profile-crud jcd Apr. 5, 2022
	public function view_office(){

		$data = $this->Utility_model->office();
		$this->call->view('hr/utility_settings/office',$data);
	}

	public function add_office(){
		if($this->form_validation->submitted())
        {
            $this->form_validation
							->name('dept_id')->required()
							->name('office_code')->required()
							->name('office_description')->required();
							
            if($this->form_validation->run())
            {
                if($this->Utility_model->add_office(
									strtoupper($this->io->post('dept_id')),
									strtoupper($this->io->post('office_code')),
									strtoupper($this->io->post('office_description'))))
                {
                    // $this->session->set_flashdata(array('status'=>'Inserted Succesfully'));
                    redirect('Hr/utility_settings/view_office');
                    exit;
                }
            }
        }
		$data = $this->Utility_model->get_dept_data();
		$this->call->view('hr/utility_settings/office_add',$data);
	}

	public function get_single_office(){
		if ($this->form_validation->run()) {
			
			$data=[
				'office' =>$this->Utility_model->get_single_office($this->io->post('office_id')),
				'dept' => $this->Utility_model->get_dept_data($this->io->post('dept_id'))

			];
			$this->call->view('hr/utility_settings/office_update',$data);
		}
	}
	// end change user-profile-crud jcd Apr. 5, 2022

	public function update_office(){
		if($this->form_validation->submitted())
        {
            $this->form_validation
								->name('dept_id')->required()
								->name('office_code')->required()
								->name('office_description')->required();
							
            if($this->form_validation->run())
            {
                if($this->Utility_model->update_office($this->io->post('office_id'),
										strtoupper($this->io->post('dept_id')),
										strtoupper($this->io->post('office_code')),
										strtoupper($this->io->post('office_description'))))
										{
											// $this->session->set_flashdata(array('status'=>'Inserted Succesfully'));
											redirect('Hr/view_office');
											exit;
										}
            }
        }
	}

	public function delete_office(){
		if ($this->form_validation->run()) {
			$this->Utility_model->delete_office($this->io->post('office_id'));
			redirect('hr/utility_settings/view_office');
			exit;
		}
	}
	#endregion

	#region deduction
	public function view_deduction(){
		$data = $this->Utility_model->deduction();
		$this->call->view('hr/utility_settings/deduction',$data);
	}

	public function add_deduction(){
		if($this->form_validation->submitted())
        {
            $this->form_validation
							->name('deduction_name')->required()
							->name('deduction_base_amount')->required();
							
            if($this->form_validation->run())
            {
                if($this->Utility_model->add_deduction(
									strtoupper($this->io->post('deduction_name')),
									strtoupper($this->io->post('deduction_base_amount'))))
                {
                    // $this->session->set_flashdata(array('status'=>'Inserted Succesfully'));
                    redirect('Hr/utility_settings/view_deduction');
                    exit;
                }
            }
        }
		$this->call->view('hr/deduction_add');
	}

	public function get_single_deduction(){
		if($this->form_validation->run()){
			$data = $this->Utility_Model->get_single_deduction($this->io->post('deduction_id'));
			$this->call->view('hr/utility_settings/deduction_add', $data);
		}
	}

	public function update_deduction(){
		if($this->form_validation->submitted())
        {
            $this->form_validation
							->name('deduction_name')->required()
							->name('deduction_base_amount')->required();
							
            if($this->form_validation->run())
            {
                if($this->Utility_model->add_deduction($this->io->post('deduction_id'),
									strtoupper($this->io->post('deduction_name')),
									strtoupper($this->io->post('deduction_base_amount'))))
                {
                    // $this->session->set_flashdata(array('status'=>'Inserted Succesfully'));
                    redirect('Hr/utility_settings/view_deduction');
                    exit;
                }
            }
        }
	}

	public function delete_deduction(){
		if ($this->form_validation->run()) {
			$this->Utility_model->delete_office($this->io->post('deduction_id'));
			redirect('hr/utility_settings/view_deduction');
			exit;
		}
	}
	#endregion

	#region leave
	public function view_leave(){
		$data = $this->Utility_model->leave();
		$this->call->view('hr/utility_settings/leave', $data);
	}

	public function leave_add(){
		if($this->form_validation->submitted()){
			$this->form_validation->name('leave_description')->required()
								->name('no_of_days')->required()
								->name('leave_specification')->required();
			if ($this->form_validation->run()) {
				if($this->Utility_model->add_leave(
					strtoupper($this->io->post('leave_description')),
					$this->io->post('no_of_days'),
					strtoupper($this->io->post('leave_specification'))
				))
				redirect('Hr/view_leave');
				exit;
			}
		}
		$this->call->view('hr/utility_settings/leave_add');
	}

	public function get_single_leave(){
		if ($this->form_validation->run()) {
			$data = $this->Utility_model->get_single_leave($this->io->post('leave_id'));
			$this->call->view('hr/leave_add', $data);
		}
	}
	
	public function leave_update(){
		if($this->form_validation->submitted()){
			$this->form_validation->name('leave_description')->required()
								->name('no_of_days')->required()
								->name('leave_specification')->required();
			if ($this->form_validation->run()) {
				if($this->Utility_model->update_leave(
					$this->io->post('leave_id'),
					strtoupper($this->io->post('leave_description')),
					$this->io->post('no_of_days'),
					strtoupper($this->io->post('leave_specification'))
				))
				redirect('Hr/view_leave');
				exit;
			}
		}
	}

	public function leave_delete(){
		if($this->form_validation->run()){
			$this->Utility_model->delete_leave($this->io->post('leave_id'));
			redirect('hr/view_leave');
			exit;
		}
	}



	#endregion












	public function logout()
        {
            $this->auth->set_logged_out();
            redirect('Login');
        }
}
