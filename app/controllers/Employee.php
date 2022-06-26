<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Employee extends Controller {

	#region index
	/* start change jcd april 21, 2022 */
	private function checkpass(){
		if($this->session->userdata('password') === 'MINSU@CALAPAN'){
			set_flash_alert('warning', 'Please change the default password');
			redirect('Employee/view_change_password');
		}
	}
	/* end change jcd april 21, 2022 */	

	
	public function index() {
		/* start change jcd May 4, 2022 */
		$data = [
			'emp_profile' => $this->Employee_model->emp_profile($this->session->userdata('user_id')),
			'birth_add' => $this->Address_model->birth_add($this->session->userdata('user_id')),
			'residential_add' => $this->Address_model->residential_add($this->session->userdata('user_id')),
			'permanent_add' => $this->Address_model->permanent_add($this->session->userdata('user_id')),

			//para sa notification
			'get_emp_notif'=> $this->Request_model->get_emp_notif()
		];
		/* end change jcd May 4, 2022 */
		
		$this->call->view('emp/index', $data);
	}
	#endregion

	#region start uploading profile picture rma 4/7/2022

	public function view_upload(){
		$data = [
			'emp_profile' => $this->Employee_model->emp_profile($this->session->userdata('user_id')),'emp_notif_forpds'=> $this->Employee_model->emp_notif_forpds()
		] ;
		$this->call->view('emp/fileupload/photo',$data);
	}


	public function uploadprofile(){
		if ($_POST) {
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) 
			{
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) 
				{
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} 
				else 
				{
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}

			// Check if file already exists
			if (file_exists($target_file)) 
			{
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}

			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 1000000) 
			{
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}

			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" )
			{
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) 
			{
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} 
			else
			{
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
				{

					$this->Employee_model->uploadprofile(basename( $_FILES["fileToUpload"]["name"]));

					echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
					redirect('Employee');
				} 
				else 
				{
					echo "Sorry, there was an error uploading your file.";
				}

			}
		}


		

	}

	#endregion



	// public function view_myprofile(){
	// 	$this->call->view('emp/index');
	// }

	#region start ng paglilipat ng mga inputs sa another file 

	//--------------before--------------
	// public function view_edit_profile(){
	// 	$data = $this->Employee_model->emp_profile($this->session->userdata('user_id'));
	// 	$this->call->view('emp/emp_profile/myprofile_edit', $data);
	// }
	//-----------after-------------
	public function view_edit_profile(){
		/* start change jcd May 4, 2022 */
		$data = [
			'emp_profile' => $this->Employee_model->emp_profile($this->session->userdata('user_id')),
			'birth_add' => $this->Address_model->birth_add($this->session->userdata('user_id')),
			'residential_add' => $this->Address_model->residential_add($this->session->userdata('user_id')),
			'permanent_add' => $this->Address_model->permanent_add($this->session->userdata('user_id')),

			'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds()
		];
		/* end change jcd May 4, 2022 */
		$this->checkpass(); // * jcd april 21, 2022
		$this->call->view('emp/emp_profile/personalinformation', $data);
	}

	public function view_emp_designation_edit(){

		$designation = $this->Utility_model->designation();
		$this->call->view('emp/emp_designation_edit',$designation);
	}

	public function update_profile(){

		if ($this->form_validation->submitted()){
			$this->form_validation
				->name('fname')
					->required('First Name must not be empty.')
					->alpha_space('First Name accepts series of letters only.')
				->name('mname')
					->required('Middle Name must not be empty.')
					->alpha_space('Middle Name accepts series of letters only.')
				->name('lname')
					->required('Last Name must not be empty.')
					->alpha_space('Last Name accepts series of letters only.')
				->name('xname')
					->custom_pattern('^[a-zA-Z \/]+', 'Name extension accepts series of letter only.')
					->max_length(5, 'Name extension must be less than five characters.')
				->name('dob')
					->required('Date of birth must not be empty')

				// * added jcd april 24, 2022 /* modified jcd may 10, 2022 */
				->name('birth-province-text')
					->required('Brith Place must not be empty.')
					->alpha_space('Brith Place City/Municipality accepts series of letters only.')
				->name('birth-city-text')
					->required('Brith Place must not be empty.')
					->alpha_space('Brith Place Province accepts series of letters only.')
				

				->name('sex')
					->required('Must select one sex orientation.')
				->name('cstat')
					->required('Must select one civil status')
				
				// * added jcd april 24, 2022
				->name('height')
					->required('Height must not be empty')
					->numeric('Height must be a number')
				->name('weight')
					->required('Weight must not be empty')
					->numeric('Weight must be a number')
				->name('blood-type')
					->required('Blood type must not be empty.')
				->name('gsis-no')
					->required('GSIS No. must not be empty.')
					->numeric('GSIS No. must be a number')
					->max_length(11,'GSIS No. must be exactly 11 digits.')
				->name('pag-ibig-no')
					->required('PAG-IBIG ID No. must not be empty.')
					->numeric('PAG-IBIG ID No. must be a number')
					->max_length(12, 'PAG-IBIG No. must be exactly 12 digits.')
				->name('philhealth-no')
					->required('PHILHEALTH No. must not be empty.')
					->custom_pattern('^[0-9-]+','PHILHEALTH No. must be a combination of dash and number')
				->name('sss-no')
					->required('SSS No. must not be empty')
					->custom_pattern('^[0-9-]+','SSS No. must be a combination of dash and a number')
				->name('tin-no')
					->required('TIN No. must not be empty.')
					->custom_pattern('^[0-9-]+','TIN No. must be a a combination of dash and number')
				->name('agency-emp-no')
					->required('AGENCY EMPLOYEE No. must not be empty.')
					->alpha_numeric_dash('AGENCY EMPLOYEE No must be a combination of letters, number, and dash.')
				// added 4-16-22 rma 
				->name('citizenship')
					->required('Must select one citizenship category.')
				// ->name('dualby')
				// 	->required()
				// ->name('country')
				// 	->required()

				// * added jcd april 24, 2022
				->name('region-text')
					->required('Must select one region.')
				->name('province-text')
					->required('Must select one province.')
				->name('city-text')
					->required('Must select one city.')
				->name('barangay-text')
					->required('Must select one barangay.')
				->name('street')
					->required('Street must not be empty.')
				->name('house')
					->required('House/Block/Lot No. must not be empty.')
				->name('village')
					->required('Subdivision/Village must not be empty.')
				->name('zipcode')
					->required('Zipcode must not be empty.')
				->name('compare-add') //* added May 10,2022

				// * added jcd april 24, 2022
				->name('permanent-region-text')
				->name('permanent-province-text')
				->name('permanent-city-text')
				->name('permanent-barangay-text')
				->name('permanent-street')
				->name('permanent-house')
				->name('permanent-village')
				->name('permanent-zipcode')

				->name('tnumber')
					->required('Telephone No. must not be empty.')
					->pattern('tel', 'Telephone No. does not contain any letters and special characters.')
				->name('cnumber')
					->required('Mobile No. must not be empty.')
					->pattern('tel', 'Mobile No. does not contain any letters and special chracters');
								
			
					
			if ($this->form_validation->run()) {
				$same = NULL;
				$this->io->post('compare-add') ? $same = html_escape($this->io->post('compare-add')) : $same = 0;
				#region birth address
				$birth_province =  strtoupper(html_escape($this->io->post('birth-province-text')));
				$birth_city =  strtoupper(html_escape($this->io->post('birth-city-text')));
				#endregion

				#region residential address
				$res_region =  strtoupper(html_escape($this->io->post('region-text')));
				$res_province =  strtoupper(html_escape($this->io->post('province-text')));
				$res_city =  strtoupper(html_escape($this->io->post('city-text')));
				$res_barangay =  strtoupper(html_escape($this->io->post('barangay-text')));
				$res_street =  strtoupper(html_escape($this->io->post('street')));
				$res_house =  strtoupper(html_escape($this->io->post('house')));
				$res_village =  strtoupper(html_escape($this->io->post('village')));
				$res_zipcode = html_escape($this->io->post('zipcode'));
				#endregion
				
				#region permanent address
				$per_region =  strtoupper(html_escape($this->io->post('permanent-region-text')));
				$per_province =  strtoupper(html_escape($this->io->post('permanent-province-text')));
				$per_city =  strtoupper(html_escape($this->io->post('permanent-city-text')));
				$per_barangay =  strtoupper(html_escape($this->io->post('permanent-barangay-text')));
				$per_street =  strtoupper(html_escape($this->io->post('permanent-street')));
				$per_house =  strtoupper(html_escape($this->io->post('permanent-house')));
				$per_village =  strtoupper(html_escape($this->io->post('permanent-village')));
				$per_zipcode = html_escape($this->io->post('permanent-zipcode'));
				#endregion
				
				/* start change jcd april 24, 2022  ** modified May 10, 2022 */
				$data['select_birth_add'] = $this->Address_model->select_birth_add($birth_province, $birth_city);
				$data['select_residential_add'] = $this->Address_model->select_residential_add($res_region, $res_province, $res_city, $res_barangay, $res_street, $res_house, $res_village, $res_zipcode);
				$data['select_permanent_add'] = $this->Address_model->select_permanent_add($per_region, $per_province, $per_city, $per_barangay, $per_street, $per_house, $per_village, $per_zipcode);

				
				/* start change jcd april 30, 2022 ** modified May 10, 2022 */
				
				if(empty($data['select_birth_add'])){
					$this->Address_model->insert_birth_address($birth_province, $birth_city);
				}

				if ($same) {
					#region new values for permanent address
					$per_region = $res_region;
					$per_province = $res_province;
					$per_city = $res_city;
					$per_barangay = $res_barangay;
					$per_street = $res_street;
					$per_house = $res_house;
					$per_village =$res_village;
					$per_zipcode = $res_zipcode;
					#endregion
					if(empty($data['select_residential_add'])){
						$this->Address_model->insert_address($res_region, $res_province, $res_city, $res_barangay, $res_street, $res_house, $res_village, $res_zipcode);
					}
				} 
				else {
					if(empty($data['select_residential_add'])){
						$this->Address_model->insert_address($res_region, $res_province, $res_city, $res_barangay, $res_street, $res_house, $res_village, $res_zipcode);
					}
					if(empty($data['select_permanent_add'])){
						$this->Address_model->insert_address($per_region, $per_province, $per_city, $per_barangay, $per_street, $per_house, $per_village, $per_zipcode);
					}
				}
				
				/* end change jcd april 30, 2022 ** modified May 10, 2022 */
				
				$data['select_birth_add'] = $this->Address_model->select_birth_add($birth_province, $birth_city);
				$data['select_residential_add'] = $this->Address_model->select_residential_add($res_region, $res_province, $res_city, $res_barangay, $res_street, $res_house, $res_village, $res_zipcode);
				$data['select_permanent_add'] = $this->Address_model->select_permanent_add($per_region, $per_province, $per_city, $per_barangay, $per_street, $per_house, $per_village, $per_zipcode);
				
				$this->Employee_model->update_user_profile(

								// * added jcd april 24, 2022
								$data['select_birth_add']['address_id'],
								$data['select_residential_add']['address_id'],
								$data['select_permanent_add']['address_id'],

								strtoupper(html_escape($this->io->post('fname'))),
								strtoupper(html_escape($this->io->post('mname'))),
								strtoupper(html_escape($this->io->post('lname'))),
								strtoupper(html_escape($this->io->post('xname'))),
								html_escape($this->io->post('dob')), 
								strtoupper(html_escape($this->io->post('sex'))),
								strtoupper(html_escape($this->io->post('cstat'))),

								// * added jcd april 24, 2022
								strtoupper(html_escape($this->io->post('height'))),
								strtoupper(html_escape($this->io->post('weight'))),
								strtoupper(html_escape($this->io->post('blood-type'))),
								strtoupper(html_escape($this->io->post('gsis-no'))),
								strtoupper(html_escape($this->io->post('pag-ibig-no'))),
								strtoupper(html_escape($this->io->post('philhealth-no'))),
								strtoupper(html_escape($this->io->post('sss-no'))),
								strtoupper(html_escape($this->io->post('tin-no'))),
								strtoupper(html_escape($this->io->post('agency-emp-no'))),
								/* end change jcd april 24, 2022 ** modified May 10, 2022 */
			
								// added 4-16-22 rma
								strtoupper(html_escape($this->io->post('citizenship'))),
								strtoupper(html_escape($this->io->post('dualby'))),
								strtoupper(html_escape($this->io->post('country'))),


								html_escape($this->io->post('tnumber')),
								html_escape($this->io->post('cnumber')));
								set_flash_alert('success' ,'Profile details updated successfully.');
								redirect('Employee');
			}
			else {
				// var_dump($this->form_validation->errors());
				// exit;
				set_flash_alert('danger' ,$this->form_validation->errors());
				redirect('Employee/view_edit_profile');
			}

			
		}
	}
		// $this->call->view('hr/register_admin');
	#endregion

	#region start of family background
	public function view_spouse(){
		$data = ['get_spouse_info' => $this->Pds_model->get_spouse_info(),
			'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds()
		];
		$this->checkpass(); // * added jcd april 21, 2022
		$this->call->view('emp/emp_profile/family_background/spouse_info',$data);
	}

	public function insert_spouse(){

		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('sfname')
					->required('First Name must not be empty.')
					->alpha_space('First Name accepts series of letter only.')
				->name('smname')
					->required('Middle Name must not be empty.')
					->alpha_space('Middle Name accepts series of letter only.')
				->name('slname')
					->required('Last Name must not be empty.')
					->alpha_space('Last Name accepts series of letter only.')
				->name('sxname')
					->custom_pattern('^[a-zA-Z \/]+','Name extension accepts series of letter only.')
					->max_length(5, 'Name extension must be less than or equal to five characters.')
				->name('occupation')
					->required('Occupation must not be empty.')
					->alpha_space('Occupation accepts series of letters only.')
				->name('bname')
					->required('Employer/Business Name must not be empty.')
				->name('baddress')
					->required('Business Address must not be empty.')
					->custom_pattern('^[a-zA-Z0-9- \/ ]+', 'Business Address does not special characters except for a dash.')
				->name('tnumber')
					->required('Telephone No. must not be empty.')
					->pattern('tel', 'Telephone No. does not contain any letters and special chracters');

			if ($this->form_validation->run()) {
				$this->Pds_model->insert_spouse(
					strtoupper(html_escape($this->io->post('sfname'))),
					strtoupper(html_escape($this->io->post('smname'))),
					strtoupper(html_escape($this->io->post('slname'))),
					strtoupper(html_escape($this->io->post('sxname'))),
					strtoupper(html_escape($this->io->post('occupation'))),
					strtoupper(html_escape($this->io->post('bname'))),
					strtoupper(html_escape($this->io->post('baddress'))),
					html_escape($this->io->post('tnumber'))
				);
				set_flash_alert('success', 'Spouse Information inserted successfully.');
				redirect('Employee/view_spouse');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors);
				redirect('Employee/view_spouse');
			}
		}
	}

	public function update_spouse(){

		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('sfname')
					->required('First Name must not be empty.')
					->alpha_space('First Name accepts series of letter only.')
				->name('smname')
					->required('Middle Name must not be empty.')
					->alpha_space('Middle Name accepts series of letter only.')
				->name('slname')
					->required('Last Name must not be empty.')
					->alpha_space('Last Name accepts series of letter only.')
				->name('sxname')
					->custom_pattern('^[a-zA-Z \/]+', 'Name extension accepts series of letter only.')
					->max_length(5, 'Name extension must be less than or equal to five characters.')
				->name('occupation')
					->required('Occupation must not be empty.')
					->alpha_space('Occupation accepts series of letters only.')
				->name('bname')
					->required('Employer/Business Name must not be empty.')
				->name('baddress')
					->required('Business Address must not be empty.')
					->custom_pattern('^[a-zA-Z0-9- \/]+', 'Business Address does not special characters except for a dash.')
				->name('tnumber')
					->required('Telephone No. must not be empty.')
					->pattern('tel', 'Telephone No. does not contain any letters and special chracters');

			if ($this->form_validation->run()) {
				$this->Pds_model->update_spouse(
					strtoupper(html_escape($this->io->post('sfname'))),
					strtoupper(html_escape($this->io->post('smname'))),
					strtoupper(html_escape($this->io->post('slname'))),
					strtoupper(html_escape($this->io->post('sxname'))),
					strtoupper(html_escape($this->io->post('occupation'))),
					strtoupper(html_escape($this->io->post('bname'))),
					strtoupper(html_escape($this->io->post('baddress'))),
					html_escape($this->io->post('tnumber'))
				);
				set_flash_alert('success', 'Spouse Information updated successfully.');
				redirect('Employee/view_spouse');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_spouse');
			}
		}
	}
	//------------------------------------------------------------------------------------------------------------------------
	//------------------------------------------------------------------------------------------------------------------------

	public function view_father(){
		$data = ['get_father_info' => $this->Pds_model->get_father_info(),
		'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds()
		];
		$this->checkpass(); // * added jcd april 21, 2022
		$this->call->view('emp/emp_profile/family_background/father_info',$data);
	}

	public function insert_father(){

		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('fafname')
					->required('First Name must not be empty.')
					->alpha_space('First Name accepts series of letter only.')
				->name('famname')
					->required('First Name must not be empty.')
					->alpha_space('First Name accepts series of letter only.')
				->name('falname')
					->required('First Name must not be empty.')
					->alpha_space('First Name accepts series of letter only.')
				->name('faxname')
					->custom_pattern('^[a-zA-Z \/]+', 'Name extension accepts series of letter only.')
					->max_length(5, 'Name extension must be less than or equal to five characters.');

			if ($this->form_validation->run()) {
				$this->Pds_model->insert_father(
					strtoupper(html_escape($this->io->post('fafname'))),
					strtoupper(html_escape($this->io->post('famname'))),
					strtoupper(html_escape($this->io->post('falname'))),
					strtoupper(html_escape($this->io->post('faxname')))
				);
				set_flash_alert('success', "Father's information is inserted successfully.");
				redirect('Employee/view_father');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_father');
			}
		}
	}

	public function update_father(){

		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('fafname')
					->required('First Name must not be empty.')
					->alpha_space('First Name accepts series of letter only.')
				->name('famname')
					->required('First Name must not be empty.')
					->alpha_space('First Name accepts series of letter only.')
				->name('falname')
					->required('First Name must not be empty.')
					->alpha_space('First Name accepts series of letter only.')
				->name('faxname')
					->custom_pattern('^[a-zA-Z \/]+', 'Name extension accepts series of letter only.')
					->max_length(5, 'Name extension must be less than or equal to five characters.');

			if ($this->form_validation->run()) {
				$this->Pds_model->update_father(
					strtoupper(html_escape($this->io->post('fafname'))),
					strtoupper(html_escape($this->io->post('famname'))),
					strtoupper(html_escape($this->io->post('falname'))),
					strtoupper(html_escape($this->io->post('faxname')))
				);
				set_flash_alert('success', "Father's information is updated successfully.");
				redirect('Employee/view_father');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_father');
			}
		}
	}
	//------------------------------------------------------------------------------------------------------------------------
	//------------------------------------------------------------------------------------------------------------------------


	public function view_mother(){
		$data= ['get_mother_info' => $this->Pds_model->get_mother_info(), 'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds()];
		$this->checkpass(); // * added jcd april 21, 2022
		$this->call->view('emp/emp_profile/family_background/mother_info',$data);
	}

	public function insert_mother(){
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('momainame')
					->required("Mother's Maiden First Name must not be empty.")
					->alpha_space("Mother's Maiden First Name accepts series of letter only.")
				->name('mofname')
					->required("Mother's Maiden Middle Name must not be empty.")
					->alpha_space("Mother's Maiden Middle Name accepts series of letter only.")
				->name('momname')
					->required("Mother's Maiden Last Name must not be empty.")
					->alpha_space("Mother's Maiden Last Name accepts series of letter only.")
				->name('molname')
					->required("Mother's Last Name must not be empty.")
					->alpha_space("Mother's Last Name accepts series of letter only.");

			if ($this->form_validation->run()) {
				$this->Pds_model->insert_mother(
					strtoupper(html_escape($this->io->post('momainame'))),
					strtoupper(html_escape($this->io->post('mofname'))),
					strtoupper(html_escape($this->io->post('momname'))),
					strtoupper(html_escape($this->io->post('molname')))
				);
				set_flash_alert('success', "Mother's information is inserted successfully.");
				redirect('Employee/view_mother');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors);
				redirect('Employee/view_mother');
			}
		}
	}
	
	public function update_mother(){
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('momainame')
					->required("Mother's Maiden First Name must not be empty.")
					->alpha_space("Mother's Maiden First Name accepts series of letter only.")
				->name('mofname')
					->required("Mother's Maiden Middle Name must not be empty.")
					->alpha_space("Mother's Maiden Middle Name accepts series of letter only.")
				->name('momname')
					->required("Mother's Maiden Last Name must not be empty.")
					->alpha_space("Mother's Maiden Last Name accepts series of letter only.")
				->name('molname')
					->required("Mother's Last Name must not be empty.")
					->alpha_space("Mother's Last Name accepts series of letter only.");

			if ($this->form_validation->run()) {
				$this->Pds_model->update_mother(
					strtoupper(html_escape($this->io->post('momainame'))),
					strtoupper(html_escape($this->io->post('mofname'))),
					strtoupper(html_escape($this->io->post('momname'))),
					strtoupper(html_escape($this->io->post('molname')))
				);
				set_flash_alert('success', "Mother's information is updated successfully.");
				redirect('Employee/view_mother');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors);
				redirect('Employee/view_mother');
			}
		}
	}

	//------------------------------------------------------------------------------------------------------------------------
	//------------------------------------------------------------------------------------------------------------------------





	public function view_child(){
		$data =['get_all_child' => $this->Pds_model->get_all_child($this->session->userdata('user_id')), 'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds() ] ;
		$this->checkpass(); // * added jcd april 21, 2022
		$this->call->view('emp/emp_profile/family_background/child_info',$data);
	}

	public function insert_child(){

		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('fname')
					->required('First Name must no be empty.')
					->alpha_space('First Name accepts series of letter only.')
				->name('mname')
					->required('Middle Name must not be empty.')
					->alpha_space('Middle Name accepts series of letter only.')
				->name('lname')
					->required('Last Name must not be empty.')
					->alpha_space('Last Name accepts series of letter only.')
				->name('xname')
					->required('Name extenstion must not be empty.')
					->max_length(5, 'Name extension must be less than or equal to five characters.');
				

			if ($this->form_validation->run()) {
				$this->Pds_model->insert_child(
					strtoupper(html_escape($this->io->post('fname'))),
					strtoupper(html_escape($this->io->post('mname'))),
					strtoupper(html_escape($this->io->post('lname'))),
					strtoupper(html_escape($this->io->post('xname'))),
					html_escape($this->io->post('bday'))
				);
				set_flash_alert('success', "Child's information added successfully.");
				redirect('Employee/view_child');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_child');
			}
		}
	}
	public function update_child(){

		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('fname')
					->required('First Name must no be empty.')
					->alpha_space('First Name accepts series of letter only.')
				->name('mname')
					->required('Middle Name must not be empty.')
					->alpha_space('Middle Name accepts series of letter only.')
				->name('lname')
					->required('Last Name must not be empty.')
					->alpha_space('Last Name accepts series of letter only.')
				->name('xname')
					->required('Name extenstion must not be empty.')
					->max_length(5, 'Name extension must be less than or equal to five characters.');

			if ($this->form_validation->run()) {
				$this->Pds_model->update_child(
					strtoupper(html_escape($this->io->post('fname'))),
					strtoupper(html_escape($this->io->post('mname'))),
					strtoupper(html_escape($this->io->post('lname'))),
					strtoupper(html_escape($this->io->post('xname'))),
					html_escape($this->io->post('bday')),
					html_escape($this->io->post('child_id'))
				);
				set_flash_alert('success', "Child's information updated successfully.");
				redirect('Employee/view_child');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_child');
			}
		}
	}

	public function delete_child(){
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_child(html_escape($this->io->post('child_id')));
			set_flash_alert('success', "Child's information deleted successfully.");
			redirect('Employee/view_child');
		}
	}
	


	#endregion start of family background
	


//////////////////////////////////////////////////
	#region educ bg 4/9/2022 /* done na */
	public function view_educational_background(){

		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('level')
					->required('Must select the the appropriate level of educational attainment.')
				->name('name')
					->required('School name must not be empty.')
					->alpha_numeric_space('School name must only contain series of letters.')
				->name('degree')
					->required('Degree/course must not be empty.')
					->alpha_space('Degree/course must only contain series of letters')
				->name('from')
					->required('Period of attendance must not be empty.')
					->numeric('Period of atttendance must be a valid year.')
				->name('to')
					->required('Period of attendance must not be empty.')
					->numeric('Period of attendace must be a valid year.')
				->name('unit_earned')
					->required('Unit earned must not be empty.')
					->alpha_numeric_space('Scholarship/Academic honors must only contain series of letters.')
				->name('year_grad')
					->numeric('Year graduated must be a valid year.')
				->name('honors')
					->required('Scholarship/Academic honors received must not be empty.')
					->alpha_numeric_space('Scholarship/Academic honors must only contain series of letters.');
								
			if ($this->form_validation->run()) {
				$year = '';
				$year_grad = '';
				$this->io->post('to') == date('Y') ? $year = 'PRESENT' : $year = $this->io->post('to');
				$this->io->post('year_grad') === date('Y') ? $year_grad = 'PURSUING' : $year_grad = $this->io->post('year_grad');
				$this->Pds_model->insert_educational_bg(
					strtoupper(html_escape($this->io->post('level'))),
					strtoupper(html_escape($this->io->post('name'))),
					strtoupper(html_escape($this->io->post('degree'))),
					strtoupper(html_escape($this->io->post('from'))),
					strtoupper(html_escape($year)), 
					strtoupper(html_escape($this->io->post('unit_earned'))),
					strtoupper(html_escape($year_grad)),
					strtoupper(html_escape($this->io->post('honors')))
				);
				set_flash_alert('success', 'Educational Background information added successfully.');
				redirect('Employee/view_educational_background');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_educational_background');
			}

			
		}
		$data = ['get_educational' => $this->Pds_model->get_educational(),
		'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds()
		];
		$this->checkpass(); // *  added jcd april 21, 2022
		$this->call->view('emp/emp_profile/educationalbackground',$data);
	}

	/* start change jcd May 6, 2022 */
	public function update_educ_bg(){
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('level')
					->required('Must select the the appropriate level of educational attainment.')
				->name('name')
					->required('School name must not be empty.')
					->alpha_numeric_space('School name must only contain series of letters.')
				->name('degree')
					->required('Degree/course must not be empty.')
					->alpha_space('Degree/course must only contain series of letters')
				->name('from')
					->required('Period of attendance must not be empty.')
					->numeric('Period of atttendance must be a valid year.')
				->name('to')
					->required('Period of attendance must not be empty.')
					->numeric('Period of attendace must be a valid year.')
				->name('unit_earned')
					->required('Unit earned must not be empty.')
					->alpha_numeric_space('Scholarship/Academic honors must only contain series of letters.')
				->name('year_grad')
					->numeric('Year graduated must be a valid year.')
				->name('honors')
					->required('Scholarship/Academic honors received must not be empty.')
					->alpha_numeric_space('Scholarship/Academic honors must only contain series of letters.');
								
			if ($this->form_validation->run()) {
				$year = '';
				$year_grad = '';
				$this->io->post('to') === date('Y') ? $year = 'PRESENT' : $year = $this->io->post('to');
				$this->io->post('year_grad') === date('Y') ? $year_grad = 'PURSUING' : $year_grad = $this->io->post('year_grad');
				
				$this->Pds_model->update_educ_bg(
					strtoupper(html_escape($this->io->post('level'))),
					strtoupper(html_escape($this->io->post('name'))),
					strtoupper(html_escape($this->io->post('degree')),
					strtoupper(html_escape($this->io->post('from'))),
					strtoupper(html_escape($year)), 
					strtoupper(html_escape($this->io->post('unit_earned'))),
					strtoupper(html_escape($year_grad)),
					strtoupper(html_escape($this->io->post('honors'))),
					html_escape($this->io->post('emid')))
				);
				set_flash_alert('success', 'Educational Background information updated successfully.');
				redirect('Employee/view_educational_background');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_educational_background');
			}
		}
	}

	public function delete_educ_bg(){
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_educ_bg(html_escape($this->io->post('emid')));
			set_flash_alert('success', 'Edacational background information has been deleted successfully.');
			redirect('Employee/view_educational_background');
		}
	}
	/* end change jcd May 6, 2022 */
	#endregion

	#region eligibility
	public function view_eligibility(){
		if ($this->form_validation->submitted()){
			$this->form_validation
				->name('service')
					->required('Career service must not be empty.')
				->name('rating')
				->name('date')
					->required('Date of conferment must not be empty.')
				->name('place')
					->required('Place of conferment must not be empty.')
					->alpha_numeric_space('Place of conferment must be composed of letters.')
				->name('number')
					->required('License number must not be empty.')
					->alpha_numeric_dash('License numbers must combination of letter/s, numbers, and dash.')
				->name('validity')
					->required('Date of validity must not be empty.');
								
								
			if ($this->form_validation->run()) {
			  	$this->Pds_model->insert_eligibility(
					strtoupper($this->io->post('service')),
					strtoupper($this->io->post('rating')),
					strtoupper($this->io->post('date')),
					strtoupper($this->io->post('place')),
					$this->io->post('number'), 
					strtoupper($this->io->post('validity')),
				);
				set_flash_alert('success','Eligibility information added successfully.');
				redirect('Employee/view_eligibility');
			}
			else{
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_eligibility');
			}

			
		}

		$data = ['get_eligibility' => $this->Pds_model->get_eligibility(),
			'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds()
		] ;
		$this->checkpass(); // * added jcd april 21, 2022
		$this->call->view('emp/emp_profile/eligibility',$data);
	}

	public function update_eligibility(){
		if ($this->form_validation->submitted()){
			$this->form_validation
				->name('service')
					->required('Career service must not be empty.')
				->name('rating')
				->name('date')
					->required('Date of conferment must not be empty.')
				->name('place')
					->required('Place of conferment must not be empty.')
					->alpha_numeric_space('Place of conferment must be composed of letters.')
				->name('number')
					->required('License number must not be empty.')
					->alpha_numeric_dash('License numbers must combination of letter/s, numbers, and dash.')
				->name('validity')
					->required('Date of validity must not be empty.')
				->name('eligibility-id');
								
								
			if ($this->form_validation->run()) {
			  	$this->Pds_model->update_eligibility(
					strtoupper(html_escape($this->io->post('service'))),
					strtoupper(html_escape($this->io->post('rating'))),
					strtoupper(html_escape($this->io->post('date'))),
					strtoupper(html_escape($this->io->post('place'))),
					html_escape($this->io->post('number')), 
					strtoupper($this->io->post('validity')),
					html_escape($this->io->post('eligibility-id'))						 
				);
				set_flash_alert('success', 'Eligibility information updated successfully.');
				redirect('Employee/view_eligibility');
			}
			else{
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_eligibility');
			}

			
		}
	}

	public function delete_eligibility(){
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_eligibility(html_escape($this->io->post('eligibility_id')));
			set_flash_alert('success', 'Eligibility information has been deleted successfully.');
			redirect('Employee/view_eligibility');
		}
	}
	#endregion

	#region work experience
	public function view_experience(){
		$data = ['get_experience' => $this->Pds_model->get_experience(),
			'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds()
		] ;
		$this->checkpass(); // * added jcd april 21, 2022
		$this->call->view('emp/emp_profile/workexperience',$data);
	}

	public function insert_experience(){
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('from')
					->required('Inclusive dates must not be empty.')
				->name('to')
					->required('Inclusive dates must not be empty.')
				->name('position')
					->required('Position title must not be empty.')
					->alpha_space('Position title must be composed of letters.')
				->name('company')
					->required('Company must not be empty.')
					->alpha_space('Company must be composed of letters')
				->name('month_sal')
					->required('Monthly salary must not be empty.')
					->numeric('Monthly salary must be valid denomination of money.')
				->name('step_incre')
					->required('Step increment must not be empty.')
				->name('status')
					->required('Status of appointment must not be empty.')
					->alpha_space('Status of appointment must be composed of letters.')
				->name('gov_ser')
					->required('Must select one value on Goverment Service.');
								
								
			if ($this->form_validation->run()) {
			  	$this->Pds_model->insert_experience(
					html_escape($this->io->post('from')),
					html_escape($this->io->post('to')),
					strtoupper(html_escape($this->io->post('position'))),
					strtoupper(html_escape($this->io->post('company'))),
					strtoupper(html_escape($this->io->post('month_sal'))),
					strtoupper(html_escape($this->io->post('salary_grade'))), 
					strtoupper(html_escape($this->io->post('step_incre'))), 
					strtoupper(html_escape($this->io->post('status'))),
					strtoupper(html_escape($this->io->post('gov_ser'))),
				);
				set_flash_alert('success', 'Work experience information added successfully.');
				redirect('Employee/view_experience');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_experience');
			}
		}
	}
	public function update_experience(){
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('from')
					->required('Inclusive dates must not be empty.')
				->name('to')
					->required('Inclusive dates must not be empty.')
				->name('position')
					->required('Position title must not be empty.')
					->alpha_space('Position title must be composed of letters.')
				->name('company')
					->required('Company must not be empty.')
					->alpha_space('Company must be composed of letters')
				->name('month_sal')
					->required('Monthly salary must not be empty.')
					->numeric('Monthly salary must be valid denomination of money.')
				->name('step_incre')
					->required('Step increment must not be empty.')
				->name('status')
					->required('Status of appointment must not be empty.')
					->alpha_space('Status of appointment must be composed of letters.')
				->name('gov_ser')
					->required('Must select one value on Goverment Service.');
								
								
			if ($this->form_validation->run()) {
			  	$this->Pds_model->update_experience(
					html_escape($this->io->post('from')),
					html_escape($this->io->post('to')),
					strtoupper(html_escape($this->io->post('position'))),
					strtoupper(html_escape($this->io->post('company'))),
					strtoupper(html_escape($this->io->post('month_sal'))),
					html_escape($this->io->post('salary_grade')), 
					html_escape($this->io->post('step_incre')), 
					strtoupper(html_escape($this->io->post('status'))),
					strtoupper(html_escape($this->io->post('gov_ser'))),
					html_escape($this->io->post('work_exp_id'))
				);
				set_flash_alert('success', 'Work experience information updated successfully.');
				redirect('Employee/view_experience');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_experience');
			}
		}
	}

	public function delete_experience(){
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_experience(html_escape($this->io->post('work_exp')));
			set_flash_alert('success', 'Work experience information has been deleted successfully.');
			redirect('Employee/view_experience');
		}
	}
	#endregion

	#region voluntary work
	public function view_voluntary_work(){
		$data = $this->Pds_model->get_voluntary();
		$this->checkpass(); // * added jcd april 21, 2022
		$this->call->view('emp/emp_profile/voluntarywork',$data);
	}

	public function insert_voluntary(){
		if ($this->form_validation->submitted()){
			$this->form_validation
				->name('name')
					->required('Organization name must not be empty.')
					->alpha_numeric_space('Organization name must be composed of letters.')
				->name('add-bar')
					->required('Barangay must not be empty.')
				->name('add-city')
					->required('City/Municipality must not be empty.')
				->name('from')
					->required('Inclusive dates must not be empty.')
				->name('to')
					->required('Inclusive dates must not be empty.')
				->name('hours')
					->required('must not be empty.')
					->numeric('Hours must be a number.')
				->name('position')
					->required('must not be empty.')
					->alpha_numeric_space('Positon must be composed of letters.');
			if ($this->form_validation->run()) {
				$add_bar = strtoupper(html_escape($this->io->post('add-bar')));
				$add_city = strtoupper(html_escape($this->io->post('add-city')));
				$data['voluntary_add'] = $this->Address_model->voluntary_add($add_bar, $add_city);
				
				if (empty($data['voluntary_add'])) {
					$this->Address_model->insert_voluntary_add($add_bar, $add_city);
				}

				$data['voluntary_add'] = $this->Address_model->voluntary_add($add_bar, $add_city);


				$this->Pds_model->insert_voluntary(
					strtoupper(html_escape($this->io->post('name'))),
					$data['voluntary_add']['address_id'],
					html_escape($this->io->post('from')),
					html_escape($this->io->post('to')),
					html_escape($this->io->post('hours')),
					strtoupper(html_escape($this->io->post('position'))),
				);
				set_flash_alert('success', 'Voluntary work information added successfully.');
				redirect('Employee/view_voluntary_work');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_voluntary_work');
			}
		}
	}
	public function update_voluntary(){
		if ($this->form_validation->submitted()){

			$this->form_validation
				->name('name')
					->required('Organization name must not be empty.')
					->alpha_numeric_space('Organization name must be composed of letters.')
				->name('add-bar')
					->required('Barangay must not be empty.')
				->name('add-city')
					->required('City/Municipality must not be empty.')
				->name('from')
					->required('Inclusive dates must not be empty.')
				->name('to')
					->required('Inclusive dates must not be empty.')
				->name('hours')
					->required('must not be empty.')
					->numeric('Hours must be a number.')
				->name('position')
					->required('must not be empty.')
					->alpha_numeric_space('Positon must be composed of letters.');

			if ($this->form_validation->run()) {
				$update_bar = strtoupper(html_escape($this->io->post('update-bar')));
				$update_city = strtoupper(html_escape($this->io->post('update-city')));
				$data['voluntary_add'] = $this->Address_model->voluntary_add($update_bar, $update_city);
				
				if (empty($data['voluntary_add'])) {
					$this->Address_model->insert_voluntary_add($update_bar, $update_city);
				}

				$data['voluntary_add'] = $this->Address_model->voluntary_add($update_bar, $update_city);
			
				$this->Pds_model->update_voluntary(
					strtoupper(html_escape($this->io->post('name'))),
					$data['voluntary_add']['address_id'],
					html_escape($this->io->post('from')),
					html_escape($this->io->post('to')),
					html_escape($this->io->post('hours')),
					strtoupper(html_escape($this->io->post('position'))),
					$this->io->post('voluntary_id'),
				);
				set_flash_alert('success', 'Voluntary work information updated successfully.');
				redirect('Employee/view_voluntary_work');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_voluntary_work');
			}
		}
	}
	public function delete_voluntary(){
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_voluntary(html_escape($this->io->post('vol_id')));
			set_flash_alert('success', 'Voluntary work information has been deleted successfully.');
			redirect('Employee/view_voluntary_work');
		}
	}
	#endregion

	#region trainings
	public function view_trainings(){
		$data = ['get_trainings' => $this->Pds_model->get_trainings(),
			'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds()
		];
		$this->call->view('emp/emp_profile/trainings',$data);
	}

	public function insert_trainings(){
		if ($this->form_validation->submitted()){
			$this->form_validation
				->name('title')
					->required('Training programs must not be empty.')
					->custom_pattern('[a-zA-Z0-9,- ]','Training programs must be composed of letters.')
				->name('from')
					->required('Inclusive dates must not be empty.')
				->name('to')
					->required('Inclusive dates must not be empty.')
				->name('hours')
					->required('Number of hours must not be empty.')
					->numeric('Number of hours must be a number.')
				->name('type')
					->required('Type of LD must not be empty.')
					->alpha_space('Type of LD must be composed of letters.')
				->name('spon')
					->required('Sponsor must not be empty.')
					->custom_pattern('[a-zA-Z0-9,- ]', 'Sponsor must be composed of letters.');
			if ($this->form_validation->run()){
			  	$this->Pds_model->insert_trainings(
					strtoupper(html_escape($this->io->post('title'))),
					html_escape($this->io->post('from')),
					html_escape($this->io->post('to')),
					html_escape($this->io->post('hours')),
					strtoupper(html_escape($this->io->post('type'))),
					strtoupper(html_escape($this->io->post('spon'))),
				);
				set_flash_alert('success', 'Learning and Development, Interventions/Training Programs Attended information added successfully.');
				redirect('Employee/view_trainings');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_trainings');
			}
		}
	}

	public function update_trainings(){
		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('title')
					->required('Training programs must not be empty.')
					->custom_pattern('[a-zA-Z0-9,- ]','Training programs must be composed of letters.')
				->name('from')
					->required('Inclusive dates must not be empty.')
				->name('to')
					->required('Inclusive dates must not be empty.')
				->name('hours')
					->required('Number of hours must not be empty.')
					->numeric('Number of hours must be a number.')
				->name('type')
					->required('Type of LD must not be empty.')
					->alpha_space('Type of LD must be composed of letters.')
				->name('spon')
					->required('Sponsor must not be empty.')
					->custom_pattern('[a-zA-Z0-9,- ]', 'Sponsor must be composed of letters.');
			if ($this->form_validation->run()) {
			  $this->Pds_model->update_trainings(
				strtoupper(html_escape($this->io->post('title'))),
				html_escape($this->io->post('from')),
				html_escape($this->io->post('to')),
				html_escape($this->io->post('hours')),
				strtoupper(html_escape($this->io->post('type'))),
				strtoupper(html_escape($this->io->post('spon'))),
				html_escape($this->io->post('ldi_id'))
			);
			set_flash_alert('success', 'Learning and Development, Interventions/Training Programs Attended information has been updated successfully.');
			redirect('Employee/view_trainings');
			}
			else {
				set_flash_alert('danger', $this->form_validation->errors());
				redirect('Employee/view_trainings');
			}
		}
	}
	public function delete_trainings(){
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_trainings(html_escape($this->io->post('ld_id')));
			set_flash_alert('success', 'Learning and Development, Interventions/Training Programs Attended has been deleted successfully.');
			redirect('Employee/view_trainings');
		}
	}
	#endregion

//----------------------------------------------------------
	


	#region lastpage of pds rma 4/15/22

	
	public function view_references(){
		$this->checkpass(); // * added jcd april 21, 2022
		$this->call->view('emp/emp_profile/references');
	}
	#endregion of the last page of pds
























	#region change pass

	public function view_change_password(){
		$data['emp_notif_forpds'] = $this->Employee_model->emp_notif_forpds();
		$this->call->view('emp/emp_profile/changepassword', $data);
	}
	public function changepass(){
		if($this->form_validation->submitted()){
			$this->form_validation->name('new_pass');

			if($this->form_validation->run()){
				$this->Employee_model->change_password($this->io->post('new_pass'));
				// * start change jcd april 21, 2022	
				$this->session->userdata('password') ?? $this->session->unset_usedata('password');
				// * end change jcd april 21, 2022	
				set_flash_alert('primary', 'Please Login using your new password.');
				redirect('Login');
			}
		}
	}


	#endregion














	#region uploading of signature rma 4/8/2022 n
	public function view_upload_signature(){
		if ($_POST) {
			$target_dir = "signatures/";
			$target_file = $target_dir . basename($_FILES["fileToUploadSign"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) 
			{
				$check = getimagesize($_FILES["fileToUploadSign"]["tmp_name"]);
				if($check !== false) 
				{
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} 
				else 
				{
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}

			// Check if file already exists
			if (file_exists($target_file)) 
			{
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}

			// Check file size
			if ($_FILES["fileToUploadSign"]["size"] > 1000000) 
			{
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}

			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" )
			{
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) 
			{
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} 
			else
			{
				if (move_uploaded_file($_FILES["fileToUploadSign"]["tmp_name"], $target_file)) 
				{

					$this->Employee_model->uploadsignature(basename( $_FILES["fileToUploadSign"]["name"]));

					echo "The file ". htmlspecialchars( basename( $_FILES["fileToUploadSign"]["name"])). " has been uploaded.";
					redirect('Employee/view_upload_signature');
				} 
				else 
				{
					echo "Sorry, there was an error uploading your file.";
				}

			}
		}


		$data = ['emp_profile' => $this->Employee_model->emp_profile($this->session->userdata('user_id')), 'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds()] ;
		$this->call->view('emp/emp_profile/uploadsignature',$data);
	}
	#endregion

	#region for submission of pds
	public function submit_pds(){
		if($this->form_validation->submitted()){
			if($this->form_validation->run())
			{
				$this->Employee_model->submit_pds($this->io->post('stat'));
				redirect('Pds/view_finished_pds');
				
			}
		}
	}
	public function update_pds(){
		if($this->form_validation->submitted()){
			if($this->form_validation->run())
			{
				$this->Employee_model->update_pds($this->io->post('stat'));
				redirect('Pds/view_finished_pds');
			}
		}
	}


	//for notification
	public function view_notif(){
		$this->Request_model->view_notif_clear();
		$data = [
			'emp_profile' => $this->Employee_model->emp_profile($this->session->userdata('user_id')),
			'get_notif_get_all'=> $this->Request_model->get_notif_get_all(),
			'get_emp_notif' => $this->Request_model->get_emp_notif()
		];
		$this->call->view('emp/notification',$data);
	}

	



	#endregion
















	#region employee Attendance
	public function view_emp_attendance(){

		$data=[
			'emp_profile'=>$this->Employee_model->emp_profile($this->session->userdata('user_id')),
			'get_emp_notif'=>$this->Request_model->get_emp_notif(),
			
		];
		$this->call->view('emp/attendance/attendance',$data);
	}

	#endregion







}
?>