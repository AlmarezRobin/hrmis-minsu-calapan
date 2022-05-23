<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Pds extends Controller {

	// * start change jcd april 21, 2022
	private function checkpass(){
		if($this->session->userdata('password') === 'MINSU@CALAPAN'){
			set_flash_alert('warning', 'Please change the default password');
			redirect('Employee/view_change_password');
		}
	}
	// * end change jcd april 21, 2022	

	public function view_finished_pds(){
		$data=[
			'emp_profile' => $this->Employee_model->emp_profile($this->session->userdata('user_id')),

			'get_spouse_info'=> $this->Pds_model->get_spouse_info(),
			'get_father_info'=> $this->Pds_model->get_father_info(),
			'get_mother_info' =>$this->Pds_model->get_mother_info(),
			'get_all_child' => $this->Pds_model->get_all_child(),




			'get_rel_info'=>$this->Pds_model->get_rel_info(),
			'get_violation_info'=>$this->Pds_model->get_violation_info(),
			'get_conviction_info'=>$this->Pds_model->get_conviction_info(),
			'get_separation_info'=>$this->Pds_model->get_separation_info(),
			'get_candidacy_info'=>$this->Pds_model->get_candidacy_info(),
			'get_immigrant_info'=>$this->Pds_model->get_immigrant_info(),
			'get_previlage_info'=>$this->Pds_model->get_previlage_info(),
			'get_id' => $this->Pds_model->get_id(),
			'get_stat_pds'=>$this->Employee_model->get_stat_pds(), //para sa pagkuha ng status ng submitted pds 5422
			'emp_notif_forpds'=> $this->Employee_model->emp_notif_forpds()

		];
		$data['emp_profile'] = $this->Employee_model->emp_profile($this->session->userdata('user_id'));
		$this->call->view('emp/emp_pds/pds',$data);
	}


	public function view_other_information(){
		$data=[
			'insert_skills'=>$this->Pds_model->get_skills(),
			'get_skills'=>$this->Pds_model->get_skills(),
			'get_distinctions'=> $this->Pds_model->get_distinctions(),
			'get_membership'=> $this->Pds_model->get_membership(),
			'get_id' => $this->Pds_model->get_id(),
			'get_ref'=>$this->Pds_model->get_ref(),
			'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds()
		];
		$this->checkpass(); // * jcd april 21, 2022
		$this->call->view('emp/emp_profile/otherinformation',$data);
	}

	#region for special skills
	public function insert_skill(){
		if ($this->form_validation->submitted()) {
			$this->form_validation->name('skill');
			if ($this->form_validation->run()) {
				$this->Pds_model->insert_skills(strtoupper($this->io->post('skill')));
				redirect('Pds/view_other_information');
			}
		}
	}

	public function update_skill(){
		if ($this->form_validation->submitted()) {
			$this->form_validation->name('skill');
			if ($this->form_validation->run()) {
				$this->Pds_model->update_skills($this->io->post('sps_id'),strtoupper($this->io->post('skill')));
				redirect('Pds/view_other_information');
			}
		}
	}

	public function delete_skill(){
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_skills($this->io->post('ss_id'));
			redirect('Pds/view_other_information');
			exit();
		}
	}

	#endregion

	#region for non acad distinctions and recognition
	public function insert_acad_recognition(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation->name('distinction');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->insert_distinctions(strtoupper($this->io->post('distinction')));
				redirect('Pds/view_other_information');
			}
		}
	}
	public function update_acad_recognition(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation->name('distinction');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->update_distinctions(strtoupper($this->io->post('distinction')), $this->io->post('recognition_id'));
				redirect('Pds/view_other_information');
			}
		}
	}
	public function delete_distinctions(){
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_distinctions($this->io->post('recognition_id'));
			redirect('Pds/view_other_information');
			exit();
		}
	}
	#endregion


	#region membership
	public function insert_membership(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation->name('name');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->insert_membership(strtoupper($this->io->post('name')));
				redirect('Pds/view_other_information');
			}
		}
	}
	public function update_membership(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation->name('name');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->update_membership(strtoupper($this->io->post('name')),$this->io->post('org_id'));
				redirect('Pds/view_other_information');
			}
		}
	}

	public function delete_membership(){
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_membership($this->io->post('membership_id'));
			redirect('Pds/view_other_information');
			exit();
		}
	}
	#endregion
	
	
	#region gov issued id
	public function insert_id()
	{
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('id-desc')->required()
				->name('id-num')->required()
				->name('date-issued')->required()
				->name('place-issued')->required();
			if ($this->form_validation->run()) {
				$idDesc = strtoupper($this->io->post('id-desc'));
				$idNum = strtoupper($this->io->post('id-num'));
				$date = $this->io->post('date-issued');
				$place = strtoupper($this->io->post('place-issued'));
				if ($this->Pds_model->insert_id($idDesc, $idNum, $date, $place)) {
					redirect('Pds/view_other_information');
				}
			}
		}
	}

	public function update_gov_id()
	{
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('id-desc')->required()
				->name('id-num')->required()
				->name('date-issued')->required()
				->name('place-issued')->required()
				->name('pk-id')->required();
			if ($this->form_validation->run()) {
				$idDesc = strtoupper($this->io->post('id-desc'));
				$idNum = strtoupper($this->io->post('id-num'));
				$date = $this->io->post('date-issued');
				$place = strtoupper($this->io->post('place-issued'));
				$gid = $this->io->post('pk-id');
				if ($this->Pds_model->update_id($idDesc, $idNum, $date, $place, $gid)) {
					redirect('Pds/view_other_information');
				}
			}
		}
	}


	public function delete_id()
	{
		if($this->form_validation->run()) {
			if ($this->Pds_model->delete_id($this->io->post('gov-issued-id'))) {
				redirect('Pds/view_other_information');
			}
		}
	}
	#endregion

	#region for references
	public function insert_references(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation->name('fname')->name('mname')->name('lname')->name('add')->name('tel');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->insert_references(strtoupper($this->io->post('fname')),strtoupper($this->io->post('mname')),strtoupper($this->io->post('lname')),strtoupper($this->io->post('add')),$this->io->post('tel'));
				redirect('Pds/view_other_information');
			}
		}
	}
	public function update_references(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation->name('fname')->name('mname')->name('lname')->name('add')->name('tel');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->update_references(strtoupper($this->io->post('fname')),strtoupper($this->io->post('mname')),strtoupper($this->io->post('lname')),strtoupper($this->io->post('add')),$this->io->post('tel'),$this->io->post('ref_id'));
				redirect('Pds/view_other_information');
			}
		}
	}
	public function delete_references(){
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_references($this->io->post('ref_id'));
			redirect('Pds/view_other_information');
			exit();
		}
	}
	#endregion





	
	#region relative information
	public function insert_relative(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation->name('34a')->name('34b')->name('34byes');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->insert_rel($this->io->post('34a'),$this->io->post('34b'),$this->io->post('34byes'));
				redirect('Pds/view_lastpage');
			}
		}
	}
	public function update_relative(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation->name('34a')->name('34b')->name('34byes');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->update_rel($this->io->post('34a'),$this->io->post('34b'),$this->io->post('34byes'));
				redirect('Pds/view_lastpage');
			}
		}
	}
	#endregion relative information

	#region for violation

	public function insert_violation(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('35a')
				->name('35ayes')
				->name('35b')
				->name('detail')
				->name('35bfiled')
				->name('35bstatus');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->insert_violation(
					$this->io->post('35a'),
					$this->io->post('35ayes'),
					$this->io->post('35b'),
					$this->io->post('detail'),
					$this->io->post('35bfiled'),
					$this->io->post('35bstatus'));
				redirect('Pds/view_lastpage');
			}
		}
	}

	public function update_violation(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('35a')
				->name('35ayes')
				->name('35b')
				->name('detail')
				->name('35bfiled')
				->name('35bstatus');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->update_violation(
					$this->io->post('35a'),
					$this->io->post('35ayes'),
					$this->io->post('35b'),
					$this->io->post('detail'),
					$this->io->post('35bfiled'),
					$this->io->post('35bstatus'));
				redirect('Pds/view_lastpage');
			}
		}
	}

	#endregion

	#region for conviction
	public function insert_conviction(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('36yes')
				->name('36txtyes');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->insert_conviction(
					$this->io->post('36yes'),
					$this->io->post('36txtyes'));
				redirect('Pds/view_lastpage');
			}
		}
	}

	public function update_conviction(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('36yes')
				->name('36txtyes');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->update_conviction(
					$this->io->post('36yes'),
					$this->io->post('36txtyes'));
				redirect('Pds/view_lastpage');
			}
		}
	}
	#endregion

	#region for separation
	public function insert_separation(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('37yes')
				->name('37txtyes');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->insert_separation(
					$this->io->post('37yes'),
					$this->io->post('37txtyes'));
				redirect('Pds/view_lastpage');
			}
		}
	}

	public function update_separation(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('37yes')
				->name('37txtyes');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->update_separation(
					$this->io->post('37yes'),
					$this->io->post('37txtyes'));
				redirect('Pds/view_lastpage');
			}
		}
	}
	#endregion

	#region for candidacy
	public function insert_candidacy(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('38ayes')
				->name('38atxtyes')
				->name('38byes')
				->name('38btxtyes');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->insert_candidacy(
					$this->io->post('38ayes'),
					$this->io->post('38atxtyes'),
					$this->io->post('38byes'),
					$this->io->post('38btxtyes'));
				redirect('Pds/view_lastpage');
			}
		}
	}

	public function update_candidacy(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('38ayes')
				->name('38atxtyes')
				->name('38byes')
				->name('38btxtyes');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->update_candidacy(
					$this->io->post('38ayes'),
					$this->io->post('38atxtyes'),
					$this->io->post('38byes'),
					$this->io->post('38btxtyes'));
				redirect('Pds/view_lastpage');
			}
		}
	}
	#endregion

	#region for immigrant
	public function insert_immigrant(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('39yes')
				->name('39txtyes');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->insert_immigrant(
					$this->io->post('39yes'),
					$this->io->post('39txtyes'));
				redirect('Pds/view_lastpage');
			}
		}
	}

	public function update_immigrant(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('39yes')
				->name('39txtyes');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->update_immigrant(
					$this->io->post('39yes'),
					$this->io->post('39txtyes'));
				redirect('Pds/view_lastpage');
			}
		}
	}
	#endregion


	#region for candidacy
	public function insert_previlage(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('40ayes')
				->name('40atxtyes')
				->name('40byes')
				->name('40btxtyes')
				->name('40cyes')
				->name('40ctxtyes');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->insert_previlage(
					$this->io->post('40ayes'),
					$this->io->post('40atxtyes'),
					$this->io->post('40byes'),
					$this->io->post('40btxtyes'),
					$this->io->post('40cyes'),
					$this->io->post('40ctxtyes'));
				redirect('Pds/view_lastpage');
			}
		}
	}
	public function update_previlage(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('40ayes')
				->name('40atxtyes')
				->name('40byes')
				->name('40btxtyes')
				->name('40cyes')
				->name('40ctxtyes');
			if ($this->form_validation->run()) 
			{
				$this->Pds_model->update_previlage(
					$this->io->post('40ayes'),
					$this->io->post('40atxtyes'),
					$this->io->post('40byes'),
					$this->io->post('40btxtyes'),
					$this->io->post('40cyes'),
					$this->io->post('40ctxtyes'));
				redirect('Pds/view_lastpage');
			}
		}
	}
	#endregion

	public function view_lastpage(){

		$data = [
			'get_rel_info'=>$this->Pds_model->get_rel_info(),
			'get_violation_info'=>$this->Pds_model->get_violation_info(),
			'get_conviction_info'=>$this->Pds_model->get_conviction_info(),
			'get_separation_info'=>$this->Pds_model->get_separation_info(),
			'get_candidacy_info'=>$this->Pds_model->get_candidacy_info(),
			'get_immigrant_info'=>$this->Pds_model->get_immigrant_info(),
			'get_previlage_info'=>$this->Pds_model->get_previlage_info(),
			'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds()
		];
		$this->call->view('emp/emp_profile/lastpage',$data);
	}

}
?>
