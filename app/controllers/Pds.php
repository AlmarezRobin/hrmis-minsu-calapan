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
		$this->call->model('Export_PDS_model', 'exPDS');

		$data=[
			'emp_profile' => $this->exPDS->emp_profile($this->session->userdata('user_id')), /* change jcd June 13, 2022 */

			'get_spouse_info'=> $this->Pds_model->get_spouse_info(),
			'get_father_info'=> $this->Pds_model->get_father_info(),
			'get_mother_info' =>$this->Pds_model->get_mother_info(),
			'get_all_child' => $this->exPDS->get_all_child(),
			
			/* start change jcd June 13, 2022 */
			'get_educational' => $this->Pds_model->get_educational(),
			'residential_address' => $this->Address_model->residential_add($this->session->userdata('user_id')),
			'permanent_address' => $this->Address_model->permanent_add($this->session->userdata('user_id')),
			'get_eligibility' => $this->exPDS->get_eligibility(),
			'get_experience' => $this->exPDS->get_experience(),
			'get_voluntary' => $this->exPDS->get_voluntary(),
			'get_trainings' => $this->exPDS->get_trainings(),

			'get_skills' => $this->Pds_model->get_skills(),
			'get_distinctions' => $this->Pds_model->get_distinctions(),
			'get_membership' => $this->Pds_model->get_membership(),
			'get_ref' => $this->Pds_model->get_ref(),
			'get_id' => $this->exPDS->get_id(),
			/* end change jcd June 13, 2022 */


			'get_rel_info'=>$this->Pds_model->get_rel_info(),
			'get_violation_info'=>$this->Pds_model->get_violation_info(),
			'get_conviction_info'=>$this->Pds_model->get_conviction_info(),
			'get_separation_info'=>$this->Pds_model->get_separation_info(),
			'get_candidacy_info'=>$this->Pds_model->get_candidacy_info(),
			'get_immigrant_info'=>$this->Pds_model->get_immigrant_info(),
			'get_previlage_info'=>$this->Pds_model->get_previlage_info(),


			'get_stat_pds'=>$this->Request_model->get_stat_pds(), //para sa pagkuha ng status ng submitted pds 5422
			'get_emp_notif'=> $this->Request_model->get_emp_notif()

		];
		// $data['emp_profile'] = $this->Employee_model->emp_profile($this->session->userdata('user_id'));
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
				$this->form_validation
					->name('skill')
						->required('Special skill must not be empty.')
						->alpha_space('Special skill must be composed of letters.');
			if ($this->form_validation->run()) {
				$this->Pds_model->insert_skills(strtoupper(html_escape($this->io->post('skill'))));
				set_flash_alert('success', 'Special skill added successfully.');
				redirect('Pds/view_other_information');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Pds/view_other_information');
			}
		}
	}

	public function update_skill(){
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('skill')
					->requred('Special skill must not be empty.')
					->alpha_space('Special skill must be composed of letters.');
			if ($this->form_validation->run()) {
				$this->Pds_model->update_skills(html_escape($this->io->post('sps_id')),strtoupper(html_escape($this->io->post('skill'))));
				set_flash_alert('success', 'Special skill updated successfully.');
				redirect('Pds/view_other_information');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
			}
		}
	}

	public function delete_skill(){
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_skills(html_escape($this->io->post('ss_id')));
			set_flash_alert('success', 'Special Skill has been deleted sucessfully.');
			redirect('Pds/view_other_information');
			exit();
		}
	}

	#endregion

	#region for non acad distinctions and recognition
	public function insert_acad_recognition(){
		if ($this->form_validation->submitted()){
			$this->form_validation
				->name('distinction')
					->required('Non-academic distinction must not be empty.')
					->alpha_numeric_space('Non-academic distinction must be composed of letters.');
			if ($this->form_validation->run()) {
				$this->Pds_model->insert_distinctions(strtoupper(html_escape($this->io->post('distinction'))));
				set_flash_alert('success', 'Non-academic distinction has been added successfully.');
				redirect('Pds/view_other_information');
			}else {
				set_flash_alert('danger', $this->form_validation->errors());
			}
		}
	}
	public function update_acad_recognition(){
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('distinction')
					->required('Non-academic distinction must not be empty.')
					->alpha_numeric_space('Non-academic distinction must be composed of letters.');
			if ($this->form_validation->run()){
				$this->Pds_model->update_distinctions(strtoupper(html_escape($this->io->post('distinction'))), html_escape($this->io->post('recognition_id')));
				set_flash_alert('success', 'Non-academic distinction has been updated successfully.');
				redirect('Pds/view_other_information');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
			}
		}
	}
	public function delete_distinctions(){
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_distinctions(html_escape($this->io->post('recognition_id')));
			set_flash_alert('success', 'Non academic distinction has been deleted successfully.');
			redirect('Pds/view_other_information');
			exit();
		}
	}
	#endregion


	#region membership
	public function insert_membership(){
		if ($this->form_validation->submitted()){
			$this->form_validation
				->name('name')
					->required('Association name must not be empty.')
					->alpha_numeric_space('Association name must be composed of letters.');
			if ($this->form_validation->run()) {
				$this->Pds_model->insert_membership(strtoupper(html_escape($this->io->post('name'))));
				set_flash_alert('success', 'Association name has been added successfully.');
				redirect('Pds/view_other_information');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
			}
		}
	}
	public function update_membership(){
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('name')
					->required('Association name must not be empty.')
					->alpha_numeric_space('Association name must be composed of letters.');
			if ($this->form_validation->run()) {
				$this->Pds_model->update_membership(strtoupper(html_escape($this->io->post('name'))),html_escape($this->io->post('org_id')));
				set_flash_alert('success', 'Association name has been updated successfully.');
				redirect('Pds/view_other_information');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
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
	public function insert_gov_id(){
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('id-desc')
					->required('I.D. description must not be empty.')
					//->custom_pattern("a-zA-Z0-9,\-\' ", 'I.D. description must be composed of letters.')
				->name('id-num')
					->required('I.D. number must be not be empty.')
					//->custom_pattern('[a-z0-9\-]', 'I.D. number must be valid.')
				->name('date-issued')
					->required('Date issued must not be empty.')
				->name('place-issued')
					->required('Place of issuance must not be empty.')
					->alpha_numeric_space('Place of issuance must be composed of letters.');
			if ($this->form_validation->run()) {
				// var_dump($this->io->post());
				// exit;
				$idDesc = strtoupper(html_escape($this->io->post('id-desc')));
				$idNum = strtoupper(html_escape($this->io->post('id-num')));
				$date = html_escape($this->io->post('date-issued'));
				$place = strtoupper(html_escape($this->io->post('place-issued')));
				if ($this->Pds_model->insert_id($idDesc, $idNum, $date, $place)) {
					set_flash_alert('success', 'Government Issued I.D. has been added successfully.');
					redirect('Pds/view_other_information');
				}
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Pds/view_other_information');
			}
		}
	}

	public function update_gov_id(){
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('id-desc')	
					->required('I.D. description must not be empty.')
					//->custom_pattern('[a-zA-Z0-9,\- ]', 'I.D. description must be composed of letters.')
				->name('id-num')
					->required('I.D. number must be not be empty.')
					//->custom_pattern('[a-zA-Z0-9,\-]', 'I.D. number must be valid.')
				->name('date-issued')
					->required('Date issued must not be empty.')
				->name('place-issued')
					->required('Place of issuance must not be empty.')
					->alpha_numeric_space('Place of issuance must be composed of letters.');
			if ($this->form_validation->run()) {
				$idDesc = strtoupper(html_escape($this->io->post('id-desc')));
				$idNum = strtoupper(html_escape($this->io->post('id-num')));
				$date = html_escape($this->io->post('date-issued'));
				$place = strtoupper(html_escape($this->io->post('place-issued')));
				$gid = html_escape($this->io->post('pk-id'));
				if ($this->Pds_model->update_id($idDesc, $idNum, $date, $place, $gid)) {
					set_flash_alert('success', 'Government issued I.D. has been updated successfully.');
					redirect('Pds/view_other_information');
				}
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Pds/view_other_information');
			}
		}
	}


	public function delete_id(){
		if($this->form_validation->run()) {
			if ($this->Pds_model->delete_id(html_escape($this->io->post('gov-issued-id')))) {
				set_flash_alert('success', 'Government issued I.D. has been deleted successfully.');
				redirect('Pds/view_other_information');
			}
		}
	}
	#endregion

	#region for references
	public function insert_references(){
		if ($this->form_validation->submitted()) {	
			/* start change jcd May 26, 2022 */
			$this->form_validation
				->name('fname')
					->required('First Name must not be empty.')
					->alpha_space('First Name must be composed of letters.')
				->name('mname')
					->required('Middle Name must not be empty.')
					->alpha_space('Middle Name must be composed of letters.')
				->name('lname')
					->required('Last Name must not be empty.')
					->alpha_space('Last Name must be composed of letters.')				
				->name('add-bar')
					->required('Barangay must not be empty.')
					->alpha_numeric_space('Barangay must be composed of letters.')
				->name('add-city')
					->required('City/Municipality must not be empty.')
					->alpha_numeric_space('City/Municipality must be composed of letters.')
				->name('tel')
					->required('Telephone number must not be empty.')
					->pattern('tel', 'Telephone number must be valid.');
			if ($this->form_validation->run()) {
				$add_bar = strtoupper(html_escape($this->io->post('add-bar')));
				$add_city = strtoupper(html_escape($this->io->post('add-city')));
				$data['reference_add'] = $this->Address_model->reference_add($add_bar, $add_city);

				if (empty($data['reference_add'])) {
					$this->Address_model->insert_ref_add($add_bar, $add_city);
				}

				$data['reference_add'] = $this->Address_model->reference_add($add_bar, $add_city);

				$this->Pds_model->insert_references(strtoupper(html_escape($this->io->post('fname'))),strtoupper(html_escape($this->io->post('mname'))),strtoupper(html_escape($this->io->post('lname'))),$data['reference_add']['address_id'],html_escape($this->io->post('tel')));
				set_flash_alert('success', 'Reference has been added successfully.');
				redirect('Pds/view_other_information');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Pds/view_other_information');
			}
		}
	}
	public function update_references(){
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('fname')
					->required('First Name must not be empty.')
					->alpha_space('First Name must be composed of letters.')
				->name('mname')
					->required('Middle Name must not be empty.')
					->alpha_space('Middle Name must be composed of letters.')
				->name('lname')
					->required('Last Name must not be empty.')
					->alpha_space('Last Name must be composed of letters.')				
				->name('update-bar')
					->required('Barangay must not be empty.')
					->alpha_numeric_space('Barangay must be composed of letters.')
				->name('update-city')
					->required('City/Municipality must not be empty.')
					->alpha_numeric_space('City/Municipality must be composed of letters.')
				->name('tel')
					->required('Telephone number must not be empty.')
					->pattern('tel', 'Telephone number must be valid.');
			if ($this->form_validation->run()) {
				$update_bar = strtoupper(html_escape($this->io->post('update-bar')));
				$update_city = strtoupper(html_escape($this->io->post('update-city')));
				$data['reference_add'] = $this->Address_model->reference_add($update_bar, $update_city);

				if (empty($data['reference_add'])) {
					$this->Address_model->insert_ref_add($update_bar, $update_city);
				}

				$data['reference_add'] = $this->Address_model->reference_add($update_bar, $update_city);

				$this->Pds_model->update_references(strtoupper(html_escape($this->io->post('fname'))),strtoupper(html_escape($this->io->post('mname'))),strtoupper(html_escape($this->io->post('lname'))),$data['reference_add']['address_id'],html_escape($this->io->post('tel')),html_escape($this->io->post('ref_id')));
				set_flash_alert('success', 'Reference has been updated sucessfully.');
				redirect('Pds/view_other_information');
				/* end change jcd May 26, 2022 */
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Pds/view_other_information');
			}
		}
	}
	public function delete_references(){
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_references(html_escape($this->io->post('ref_id')));
			set_flash_alert('success', 'Reference has been deleted successfully.');
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
