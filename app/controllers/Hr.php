<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Hr extends Controller {
	#region employee
	// ! loads index page
	public function index() {
		$this->call->view('hr/index');
	}

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
	public function view_employement_status(){
		$data = $this->Utility_model->employment_stat();
		$this->call->view('hr/employment_status',$data);
	}

	// ! adds employment status
	public function add_employment_status(){
		if($this->form_validation->submitted())
        {
            $this->form_validation
							->name('stat_code')->required()
							->name('stat_desc')->required();
							
            if($this->form_validation->run())
            {
                if($this->Utility_model->add_emp_stat(strtoupper($this->io->post('stat_code')),
								strtoupper($this->io->post('stat_desc'))))
                {
                    // $this->session->set_flashdata(array('status'=>'Inserted Succesfully'));
                    redirect('Hr/view_employement_status');
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
			$this->call->view('hr/emp_stat_add', $data);
			
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
                    redirect('Hr/view_employement_status');
                    exit;
                }
            }
        }
	}

	// ! deletes selected employee status
	public function delete_emp_stat(){
		if($this->form_validation->run()){
			$this->Utility_model->delete_emp_stat($this->io->post('status_id'));
			redirect('hr/view_employment_status');
			exit();
		}
	}
	#endregion


	#region designation
	public function view_designation(){
		$data = $this->Utility_model->designation();
		$this->call->view('hr/designation',$data);
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
                    redirect('Hr/view_designation');
                    exit;
                }
            }
        }
		$this->call->view('hr/desig_add');
	}

	public function get_single_designation(){
		if ($this->form_validation->run()) {
			$data = $this->Utility_model->get_single_designation($this->io->post('designation_id'));
			$this->call->view('hr/desig_add',$data);
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
                    redirect('Hr/view_designation');
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
			redirect('hr/view_designation');
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
											redirect('Hr/view_department');
											exit;
										}
            }
        }
		$this->call->view('hr/dept_add');
	}

	public function get_single_dept(){
		if ($this->form_validation->run()) {
			$data = $this->Utility_model->get_single_dept($this->io->post('dept_id'));
			$this->call->view('hr/dept_add',$data);
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
												redirect('Hr/view_department');
												exit;
										}
            }
        }
	}

	public function delete_department(){
		if ($this->form_validation->run()) {
			$this->Utility_model->delete_department($this->io->post('dept_id'));
			redirect('Hr/view_department');
			exit;
		}
	}
	#endregion

	#region office
	public function view_office_add(){

		$data = $this->Utility_model->get_dept_data();
		$this->call->view('hr/office_add',$data);
	}
	public function view_office(){

		$data = $this->Utility_model->office();
		$this->call->view('hr/office',$data);
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
                    redirect('Hr/view_office');
                    exit;
                }
            }
        }
	}

	public function get_single_office(){
		if ($this->form_validation->run()) {
			$data1 = 
			
			$data=[
				'office' =>$this->Utility_model->get_single_office($this->io->post('office_id')),
				'dept' => $this->Utility_model->get_dept_data($this->io->post('dept_id'))

			];



			$this->call->view('hr/office_update',$data);
		}
	}

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
			redirect('hr/view_office');
			exit;
		}
	}
	#endregion

	#region deduction
	public function view_deduction(){
		$data = $this->Utility_model->deduction();
		$this->call->view('hr/deduction',$data);
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
                    redirect('Hr/view_deduction');
                    exit;
                }
            }
        }
		$this->call->view('hr/deduction_add');
	}

	public function get_single_deduction(){
		if($this->form_validation->run()){
			$data = $this->Utility_Model->get_single_deduction($this->io->post('deduction_id'));
			$this->call->view('hr/deduction_add', $data);
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
                    redirect('Hr/view_deduction');
                    exit;
                }
            }
        }
	}

	public function delete_deduction(){
		if ($this->form_validation->run()) {
			$this->Utility_model->delete_office($this->io->post('deduction_id'));
			redirect('hr/view_deduction');
			exit;
		}
	}
	#endregion

	#region leave
	public function view_leave(){
		$this->call->view('hr/leave');
	}

	public function view_leave_add(){
		$this->call->view('hr/leave_add');
	}

	#endregion












	public function logout()
        {
            $this->auth->set_logged_out();
            redirect('Login');
        }
}
?>