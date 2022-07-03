<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Hr extends Controller {

	#region employee
	// ! loads index page
	public function index() {
		$data =[
			'get_user_profile'=>$this->Hr_model->get_user_profile(),
			
			//para sa pag count ng mga pending notif rma 5422
			'count_pending' =>$this->Hr_model->count_pending(),
			'count_registered_employee'=>$this->Hr_model->count_registered_employee()
		]; 
		$this->call->view('hr/index',$data);
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
		$data['get_office'] = $this->Utility_model->get_office();
		$this->call->view('hr/register_admin', $data);
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
	#endregion

	#region Employee
	// ! selects all employee registered
	public function view_employee()
	{
		// todo use inner join to view where he/she is assigned
		$data = $this->Employee_model->select_all_employee();
		$this->call->view('hr/registered_employee', $data);
	}

	// ! inserting new employee
	public function add_employee()
	{

		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('emp_idnumber')->required()
				->name('emp_email')->required()
				->name('emp_username')->required()
				->name('emp_password')->required()
				->name('emp_role')->required();
			if ($this->form_validation->run()) 
			{
				$this->call->model('auth/emp_model');

				$this->emp_model->register(
					$this->io->post('emp_idnumber'),
					$this->io->post('emp_email'),
					$this->io->post('emp_username'),
					$this->io->post('emp_password'),
					$this->io->post('emp_role'),

				);

				// $this->Employee_model->insert_emp_desig($this->io->post('emp_idnumber'),$this->io->post('designation'));


				redirect('Hr/view_employee');
			}
		}

		// $data = $this->Utility_model->designation();

		$this->call->view('hr/register_employee');
	}

	#endregion

	#region Assign Employeee
	public function view_assign_emp()
	{
		if ($this->form_validation->run()) {
			$user_id = $this->io->post('user_id');
			$user_id_number = $this->io->post('id_number');
			$data = array(
				'designation' => $this->Utility_model->designation(),
				'office' => $this->Utility_model->office(),
				'employment_stat' => $this->Utility_model->employment_stat(),
				'get_user_id' => $this->Hr_model->get_user_id($user_id),
				'get_user_id_number'=>$this->Hr_model->get_user_id_number($user_id_number)
			);

			$this->call->view('hr\assign_employee', $data);
		}
	}

	public function assign_emp()
	{
		if ($this->form_validation->submitted()) {
			$this->form_validation
					->name('emp_status')
						->required()
					->name('office')
						->required()
					->name('designation')
						->required();

			if ($this->form_validation->run()) {
				
				$user_id = $this->io->post('user_id');
				$emp_status = $this->io->post('emp_status');
				$office = $this->io->post('office');
				$designation = $this->io->post('designation');
				if ($this->Hr_model->assign_emp($user_id, $emp_status, $office, $designation)) {
					redirect('hr/view_employee');
				}
			}


		}
	}



	#endregion

	#region for view pds notif
	public function view_pds_request(){
		$data = [
			'get_request'=>$this->Request_model->get_request()
		];
		$this->call->view('hr/employee_pds/request',$data);
	}

	public function view_emp_pds($id)
	{
		$data = [
			'get_id'=>$this->Request_model->get_id($id),
			'emp_profile'=>$this->Hr_model->emp_profile($id),
			'get_all_child'=>$this->Hr_model->get_all_child($id),
			'get_eligibility'=>$this->Hr_model->get_eligibility($id),

			'get_educ_background'=>$this->Hr_model->get_educ_background($id),

			'get_experience'=>$this->Hr_model->get_experience($id),
			'get_voluntary'=>$this->Hr_model->get_voluntary($id),
			'get_trainings'=>$this->Hr_model->get_trainings($id),
			'get_gov_id'=>$this->Hr_model->get_gov_id($id),
			'get_skill_hobby'=>$this->Hr_model->get_skill_hobby($id),
			'get_recognition'=>$this->Hr_model->get_recognition($id),
			'get_membership'=>$this->Hr_model->get_membership($id),
			'get_references'=>$this->Hr_model->get_references($id),
			'get_gov_id'=>$this->Hr_model->get_gov_id($id),
			'get_spouse'=>$this->Hr_model->get_spouse($id),
			'get_father'=>$this->Hr_model->get_father($id),
			'get_mother'=>$this->Hr_model->get_mother($id),
			'get_rel_info'=>$this->Hr_model->get_rel_info($id),
			'get_violation_info'=>$this->Hr_model->get_violation_info($id),
			'get_conviction_info'=>$this->Hr_model->get_conviction_info($id),
			'get_separation_info'=>$this->Hr_model->get_separation_info($id),
			'get_candidacy_info'=>$this->Hr_model->get_candidacy_info($id),
			'get_immigrant_info'=>$this->Hr_model->get_immigrant_info($id),
			'get_previlage_info'=>$this->Hr_model->get_previlage_info($id),
			'residential_address' => $this->Address_model->residential_add($id),
			'permanent_address' => $this->Address_model->permanent_add($id),
			// ''=>$this->Hr_model->($id),
			
		];
		$this->call->view('hr/employee_pds/pdsview',$data);
	}

	



	public function pds_history()
	{
		$data =[
			'pds_history'=>$this->Hr_model->pds_history()
		]; 
		$this->call->view('hr/employee_pds/history',$data);
	}
	#endregion

	public function view_emp_profile($id){

		$data = [
			'get_id'=>$this->Request_model->get_id($id),
			'emp_profile'=>$this->Hr_model->emp_profile($id),
			'get_all_child'=>$this->Hr_model->get_all_child($id),
			'get_eligibility'=>$this->Hr_model->get_eligibility($id),

			'get_educ_background'=>$this->Hr_model->get_educ_background($id),

			'get_experience'=>$this->Hr_model->get_experience($id),
			'get_voluntary'=>$this->Hr_model->get_voluntary($id),
			'get_trainings'=>$this->Hr_model->get_trainings($id),
			'get_gov_id'=>$this->Hr_model->get_gov_id($id),
			'get_skill_hobby'=>$this->Hr_model->get_skill_hobby($id),
			'get_recognition'=>$this->Hr_model->get_recognition($id),
			'get_membership'=>$this->Hr_model->get_membership($id),
			'get_references'=>$this->Hr_model->get_references($id),
			'get_gov_id'=>$this->Hr_model->get_gov_id($id),
			'get_spouse'=>$this->Hr_model->get_spouse($id),
			'get_father'=>$this->Hr_model->get_father($id),
			'get_mother'=>$this->Hr_model->get_mother($id),
			'get_rel_info'=>$this->Hr_model->get_rel_info($id),
			'get_violation_info'=>$this->Hr_model->get_violation_info($id),
			'get_conviction_info'=>$this->Hr_model->get_conviction_info($id),
			'get_separation_info'=>$this->Hr_model->get_separation_info($id),
			'get_candidacy_info'=>$this->Hr_model->get_candidacy_info($id),
			'get_immigrant_info'=>$this->Hr_model->get_immigrant_info($id),
			'get_previlage_info'=>$this->Hr_model->get_previlage_info($id),
			'residential_address' => $this->Address_model->residential_add($id),
			'permanent_address' => $this->Address_model->permanent_add($id),
			// ''=>$this->Hr_model->($id),
			
		];
		$this->call->view('hr/emp_profile',$data);
	}


}
	

	
