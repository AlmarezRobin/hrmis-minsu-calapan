<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Utility_Settings extends Controller {


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
                    redirect('Utility_Settings/view_employment_status');
                    exit;
                }
            }
        }
		$this->call->view('hr/utility_settings/emp_stat_add');
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
                    redirect('Utility_Settings/view_employment_status');
                    exit;
                }
            }
        }
	}

	// ! deletes selected employee status
	public function delete_emp_stat(){
		if($this->form_validation->run()){
			$this->Utility_model->delete_emp_stat($this->io->post('status_id'));
			redirect('Utility_Settings/view_employment_status');
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
                    redirect('Utility_Settings/view_designation');
                    exit;
                }
            }
        }
		$this->call->view('hr/utility_settings/desig_add');
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
				$id = $this->io->post('designation_id');
				$desc = strtoupper($this->io->post('designation_desc'));
				$sg = strtoupper($this->io->post('salary_grade'));
				$rate = strtoupper($this->io->post('salary_rate_cat'));
				$amount = strtoupper($this->io->post('salary_rate_amount'));
                if($this->Utility_model->update_designation($id, $desc, $sg, $rate, $amount))
                {
                    redirect('Utility_Settings/view_designation');
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
			redirect('Utility_Settings/view_designation');
			exit();
		}
	}
	#endregion


	#region department
	
	public function view_department(){
		$data = $this->Utility_model->department();
		$this->call->view('hr/utility_settings/department',$data);
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
											redirect('Utility_Settings/view_department');
											exit;
										}
            }
        }
		$this->call->view('hr/utility_settings/dept_add');
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
												redirect('Utility_Settings/view_department');
												exit;
										}
            }
        }
	}

	public function delete_department(){
		if ($this->form_validation->run()) {
			$this->Utility_model->delete_department($this->io->post('dept_id'));
			redirect('Utility_Settings/view_department');
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
                    redirect('Utility_Settings/view_office');
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
											redirect('Utility_Settings/view_office');
											exit;
										}
            }
        }
	}

	public function delete_office(){
		if ($this->form_validation->run()) {
			$this->Utility_model->delete_office($this->io->post('office_id'));
			redirect('Utility_Settings/view_office');
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
                    redirect('Utility_Settings/view_deduction');
                    exit;
                }
            }
        }
		$this->call->view('hr/utility_settings/deduction_add');
	}

	public function get_single_deduction(){
		if($this->form_validation->run()){
			$data = $this->Utility_model->get_single_deduction($this->io->post('deduction_id'));
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
                if($this->Utility_model->update_deduction($this->io->post('deduction_id'),
									strtoupper($this->io->post('deduction_name')),
									strtoupper($this->io->post('deduction_base_amount'))))
                {
                    // $this->session->set_flashdata(array('status'=>'Inserted Succesfully'));
                    redirect('Utility_Settings/view_deduction');
                    exit;
                }
            }
        }
	}

	public function delete_deduction(){
		if ($this->form_validation->run()) {
			$this->Utility_model->delete_deduction($this->io->post('deduction_id'));
			redirect('Utility_Settings/view_deduction');
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
				redirect('Utility_Settings/view_leave');
				exit;
			}
		}
		$this->call->view('hr/utility_settings/leave_add');
	}

	public function get_single_leave(){
		if ($this->form_validation->run()) {
			$data = $this->Utility_model->get_single_leave($this->io->post('leave_id'));
			$this->call->view('hr/utility_settings/leave_add', $data);
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
				redirect('Utility_Settings/view_leave');
				exit;
			}
		}
	}

	public function leave_delete(){
		if($this->form_validation->run()){
			$this->Utility_model->delete_leave($this->io->post('leave_id'));
			redirect('Utility_Settings/view_leave');
			exit;
		}
	}
	#endregion
}
?>
