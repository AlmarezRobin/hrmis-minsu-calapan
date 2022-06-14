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
			'emp_notif_forpds'=> $this->Employee_model->emp_notif_forpds()
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
		if ($this->form_validation->submitted()) 
            {
                $this->form_validation
						->name('fname')->required()
						->name('mname')->required()
						->name('lname')->required()
						->name('xname')
						->name('dob')->required()

						// * added jcd april 24, 2022 /* modified jcd may 10, 2022 */
						->name('birth-province-text')->required()
						->name('birth-city-text')->required()
						

						->name('sex')->required()
						->name('cstat')->required()
						
						// * added jcd april 24, 2022
						->name('height')->required()
						->name('weight')->required()
						->name('blood-type')->required()
						->name('gsis-no')->required()
						->name('pag-ibig-no')->required()
						->name('philhealth-no')->required()
						->name('sss-no')->required()
						->name('tin-no')->required()
						->name('agency-emp-no')->required()

						// added 4-16-22 rma 
						->name('citizenship')->required()
						->name('dualby')->required()
						->name('country')->required()

						// * added jcd april 24, 2022
						->name('region-text')->required()
						->name('province-text')->required()
						->name('city-text')->required()
						->name('barangay-text')->required()
						->name('street')->required()
						->name('house')->required()
						->name('village')->required()
						->name('zipcode')->required()
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

						->name('tnumber')->required()
						->name('cnumber')->required();
									
				
						
				if ($this->form_validation->run()) 
                {
					$same = NULL;
					$this->io->post('compare-add') ? $same = $this->io->post('compare-add') : $same = 0;
					#region birth address
					$birth_province =  strtoupper($this->io->post('birth-province-text'));
					$birth_city =  strtoupper($this->io->post('birth-city-text'));
					#endregion

					#region residential address
					$res_region =  strtoupper($this->io->post('region-text'));
					$res_province =  strtoupper($this->io->post('province-text'));
					$res_city =  strtoupper($this->io->post('city-text'));
					$res_barangay =  strtoupper($this->io->post('barangay-text'));
					$res_street =  strtoupper($this->io->post('street'));
					$res_house =  strtoupper($this->io->post('house'));
					$res_village =  strtoupper($this->io->post('village'));
					$res_zipcode = $this->io->post('zipcode');
					#endregion
					
					#region permanent address
					$per_region =  strtoupper($this->io->post('permanent-region-text'));
					$per_province =  strtoupper($this->io->post('permanent-province-text'));
					$per_city =  strtoupper($this->io->post('permanent-city-text'));
					$per_barangay =  strtoupper($this->io->post('permanent-barangay-text'));
					$per_street =  strtoupper($this->io->post('permanent-street'));
					$per_house =  strtoupper($this->io->post('permanent-house'));
					$per_village =  strtoupper($this->io->post('permanent-village'));
					$per_zipcode = $this->io->post('permanent-zipcode');
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
					} else {
						if(empty($data['select_residential_add'])){
							$this->Address_model->insert_address($res_region, $res_province, $res_city, $res_barangay, $res_street, $res_house, $res_village, $res_zipcode);
						}
						if(empty($data['select_residential_add'])){
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

									strtoupper($this->io->post('fname')),
									strtoupper($this->io->post('mname')),
									strtoupper($this->io->post('lname')),
									strtoupper($this->io->post('xname')),
									$this->io->post('dob'), 
									strtoupper($this->io->post('sex')),
									strtoupper($this->io->post('cstat')),

									// * added jcd april 24, 2022
									strtoupper($this->io->post('height')),
									strtoupper($this->io->post('weight')),
									strtoupper($this->io->post('blood-type')),
									strtoupper($this->io->post('gsis-no')),
									strtoupper($this->io->post('pag-ibig-no')),
									strtoupper($this->io->post('philhealth-no')),
									strtoupper($this->io->post('sss-no')),
									strtoupper($this->io->post('tin-no')),
									strtoupper($this->io->post('agency-emp-no')),
									/* end change jcd april 24, 2022 ** modified May 10, 2022 */
             
									// added 4-16-22 rma
									strtoupper($this->io->post('citizenship')),
									strtoupper($this->io->post('dualby')),
									strtoupper($this->io->post('country')),


									$this->io->post('tnumber'),
									$this->io->post('cnumber'));
									redirect('Employee');
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
				->name('sfname')->required()
				->name('smname')->required()
				->name('slname')->required()
				->name('sxname')->required()
				->name('occupation')
				->name('bname')
				->name('baddress')
				->name('tnumber');

			if ($this->form_validation->run()) {
				$this->Pds_model->insert_spouse(
					strtoupper($this->io->post('sfname')),
					strtoupper($this->io->post('smname')),
					strtoupper($this->io->post('slname')),
					strtoupper($this->io->post('sxname')),
					strtoupper($this->io->post('occupation')),
					strtoupper($this->io->post('bname')),
					strtoupper($this->io->post('baddress')),
					$this->io->post('tnumber')
				);
				redirect('Employee/view_spouse');
			}
		}
	}

	public function update_spouse(){

		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('sfname')->required()
				->name('smname')->required()
				->name('slname')->required()
				->name('sxname')->required()
				->name('occupation')->required()
				->name('bname')->required()
				->name('baddress')->required()
				->name('tnumber')->required();

			if ($this->form_validation->run()) {
				$this->Pds_model->update_spouse(
					strtoupper($this->io->post('sfname')),
					strtoupper($this->io->post('smname')),
					strtoupper($this->io->post('slname')),
					strtoupper($this->io->post('sxname')),
					strtoupper($this->io->post('occupation')),
					strtoupper($this->io->post('bname')),
					strtoupper($this->io->post('baddress')),
					$this->io->post('tnumber')
				);
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
				->name('fafname')->required()
				->name('famname')->required()
				->name('falname')->required()
				->name('faxname');

			if ($this->form_validation->run()) {
				$this->Pds_model->insert_father(
					strtoupper($this->io->post('fafname')),
					strtoupper($this->io->post('famname')),
					strtoupper($this->io->post('falname')),
					strtoupper($this->io->post('faxname'))
				);
				redirect('Employee/view_father');
			}
		}
	}
	public function update_father(){

		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('fafname')->required()
				->name('famname')->required()
				->name('falname')->required()
				->name('faxname');

			if ($this->form_validation->run()) {
				$this->Pds_model->update_father(
					strtoupper($this->io->post('fafname')),
					strtoupper($this->io->post('famname')),
					strtoupper($this->io->post('falname')),
					strtoupper($this->io->post('faxname'))
				);
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
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('momainame')->required()
				->name('mofname')->required()
				->name('momname')->required()
				->name('molname')->required();

			if ($this->form_validation->run()) 
			{
				$this->Pds_model->insert_mother(
					strtoupper($this->io->post('momainame')),
					strtoupper($this->io->post('mofname')),
					strtoupper($this->io->post('momname')),
					strtoupper($this->io->post('molname'))
				);
				redirect('Employee/view_mother');
			}
		}
	}
	public function update_mother(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('momainame')->required()
				->name('mofname')->required()
				->name('momname')->required()
				->name('molname')->required();

			if ($this->form_validation->run()) 
			{
				$this->Pds_model->update_mother(
					strtoupper($this->io->post('momainame')),
					strtoupper($this->io->post('mofname')),
					strtoupper($this->io->post('momname')),
					strtoupper($this->io->post('molname'))
				);
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
				->name('fname')->required()
				->name('mname')->required()
				->name('lname')->required()
				->name('xname')
				->name('bday');

			if ($this->form_validation->run()) {
				$this->Pds_model->insert_child(
					strtoupper($this->io->post('fname')),
					strtoupper($this->io->post('mname')),
					strtoupper($this->io->post('lname')),
					strtoupper($this->io->post('xname')),
					$this->io->post('bday')
				);
				redirect('Employee/view_child');
			}
		}
	}
	public function update_child(){

		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('fname')->required()
				->name('mname')->required()
				->name('lname')->required()
				->name('xname')
				->name('bday');

			if ($this->form_validation->run()) {
				$this->Pds_model->update_child(
					strtoupper($this->io->post('fname')),
					strtoupper($this->io->post('mname')),
					strtoupper($this->io->post('lname')),
					strtoupper($this->io->post('xname')),
					$this->io->post('bday'),
					$this->io->post('child_id')
				);
				redirect('Employee/view_child');
			}
		}
	}

	public function delete_child()
	{
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_child($this->io->post('child_id'));
			redirect('Employee/view_child');
		}
	}
	


	#endregion start of family background
	


//////////////////////////////////////////////////
	#region educ bg 4/9/2022 /* done na */
	public function view_educational_background(){

		if ($this->form_validation->submitted()) 
            {
                $this->form_validation
									->name('level')->required()
									->name('name')->required()
									->name('degree')->required()
									->name('from')->required()
									->name('to')->required()
									->name('unit_earned')->required()
									->name('year_grad')
									->name('honors')->required();
									
				if ($this->form_validation->run()) 
                {
					$year = '';
					$year_grad = '';
					$this->io->post('to') == date('Y') ? $year = 'PRESENT' : $year = $this->io->post('to');
					$this->io->post('year_grad') === date('Y') ? $year_grad = 'PURSUING' : $year_grad = $this->io->post('year_grad');
                  $this->Pds_model->insert_educational_bg(
									strtoupper($this->io->post('level')),
									strtoupper($this->io->post('name')),
									strtoupper($this->io->post('degree')),
									strtoupper($this->io->post('from')),
									strtoupper($year), 
									strtoupper($this->io->post('unit_earned')),
									strtoupper($year_grad),
									strtoupper($this->io->post('honors'))
															 );
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
	public function update_educ_bg()
	{
		if ($this->form_validation->submitted()) 
            {
                $this->form_validation
									->name('level')->required()
									->name('name')->required()
									->name('degree')->required()
									->name('from')->required()
									->name('to')->required()
									->name('unit_earned')->required()
									->name('year_grad')->required()
									->name('honors')->required();
									
				if ($this->form_validation->run()) 
                {
					$year = '';
					$year_grad = '';
					$this->io->post('to') === date('Y') ? $year = 'PRESENT' : $year = $this->io->post('to');
					$this->io->post('year_grad') === date('Y') ? $year_grad = 'PURSUING' : $year_grad = $this->io->post('year_grad');
					
					$this->Pds_model->update_educ_bg(
									strtoupper($this->io->post('level')),
									strtoupper($this->io->post('name')),
									strtoupper($this->io->post('degree')),
									strtoupper($this->io->post('from')),
									strtoupper($year), 
									strtoupper($this->io->post('unit_earned')),
									strtoupper($year_grad),
									strtoupper($this->io->post('honors')),
									$this->io->post('emid'));
									redirect('Employee/view_educational_background');
                }
		}
	}

	public function delete_educ_bg()
	{
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_educ_bg($this->io->post('emid'));
			redirect('Employee/view_educational_background');
		}
	}
	/* end change jcd May 6, 2022 */
	#endregion

	#region eligibility
	public function view_eligibility(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation->name('service')
								->name('rating')
								->name('date')
								->name('place')
								->name('number')
								->name('validity');
								
								
			if ($this->form_validation->run()) 
			{
			  $this->Pds_model->insert_eligibility(
								strtoupper($this->io->post('service')),
								strtoupper($this->io->post('rating')),
								strtoupper($this->io->post('date')),
								strtoupper($this->io->post('place')),
								$this->io->post('number'), 
								strtoupper($this->io->post('validity')),
														 );
								redirect('Employee/view_eligibility');
			}

			
		}

		$data = ['get_eligibility' => $this->Pds_model->get_eligibility(),
			'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds()
		] ;
		$this->checkpass(); // * added jcd april 21, 2022
		$this->call->view('emp/emp_profile/eligibility',$data);
	}

	public function update_eligibility()
	{
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation->name('service')
								->name('rating')
								->name('date')
								->name('place')
								->name('number')
								->name('validity')
								->name('eligibility-id');
								
								
			if ($this->form_validation->run()) 
			{
			  $this->Pds_model->update_eligibility(
								strtoupper($this->io->post('service')),
								strtoupper($this->io->post('rating')),
								strtoupper($this->io->post('date')),
								strtoupper($this->io->post('place')),
								$this->io->post('number'), 
								strtoupper($this->io->post('validity')),
								$this->io->post('eligibility-id')						 );
								redirect('Employee/view_eligibility');
			}

			
		}
	}

	public function delete_eligibility()
	{
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_eligibility($this->io->post('eligibility_id'));
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
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation->name('from')
								->name('to')
								->name('position')
								->name('company')
								->name('month_sal')
								->name('step_incre')
								->name('status')
								->name('gov_ser');
								
								
			if ($this->form_validation->run()) 
			{
			  $this->Pds_model->insert_experience(
								$this->io->post('from'),
								$this->io->post('to'),
								strtoupper($this->io->post('position')),
								strtoupper($this->io->post('company')),
								strtoupper($this->io->post('month_sal')),
								strtoupper($this->io->post('salary_grade')), 
								strtoupper($this->io->post('step_incre')), 
								strtoupper($this->io->post('status')),
								strtoupper($this->io->post('gov_ser')),
														 );
												redirect('Employee/view_experience');
			}
		}
	}
	public function update_experience(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation->name('from')
								->name('to')
								->name('position')
								->name('company')
								->name('month_sal')
								->name('salary_grade')
								->name('step_incre')
								->name('status')
								->name('gov_ser');
								
								
			if ($this->form_validation->run()) 
			{
				// echo '<pre> <br>';
				// var_dump($this->io->post());
				// echo '</pre>';
				// exit;
			  	$this->Pds_model->update_experience(
								$this->io->post('from'),
								$this->io->post('to'),
								strtoupper($this->io->post('position')),
								strtoupper($this->io->post('company')),
								strtoupper($this->io->post('month_sal')),
								$this->io->post('salary_grade'), 
								$this->io->post('step_incre'), 
								strtoupper($this->io->post('status')),
								strtoupper($this->io->post('gov_ser')),
								$this->io->post('work_exp_id'));
												redirect('Employee/view_experience');
			}
		}
	}

	public function delete_experience()
	{
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_experience($this->io->post('work_exp'));
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
				->name('name')->required()
				->name('add-bar')->required()
				->name('add-city')->required()
				->name('from')
				->name('to')
				->name('hours')
				->name('position')->required();
			if ($this->form_validation->run()) {
				$add_bar = strtoupper($this->io->post('add-bar'));
				$add_city = strtoupper($this->io->post('add-city'));
				$data['voluntary_add'] = $this->Address_model->voluntary_add($add_bar, $add_city);
				
				if (empty($data['voluntary_add'])) {
					$this->Address_model->insert_voluntary_add($add_bar, $add_city);
				}

				$data['voluntary_add'] = $this->Address_model->voluntary_add($add_bar, $add_city);


				$this->Pds_model->insert_voluntary(
					strtoupper($this->io->post('name')),
					$data['voluntary_add']['address_id'],
					$this->io->post('from'),
					$this->io->post('to'),
					$this->io->post('hours'),
					strtoupper($this->io->post('position')),
												);
									redirect('Employee/view_voluntary_work');
			}
		}
	}
	public function update_voluntary(){
		if ($this->form_validation->submitted()) 
		{

			$this->form_validation
				->name('name')->required()
				->name('update-bar')->required()
				->name('update-city')->required()
				->name('from')
				->name('to')
				->name('hours')
				->name('position')->required();
			if ($this->form_validation->run()) 
			{
				$update_bar = strtoupper($this->io->post('update-bar'));
				$update_city = strtoupper($this->io->post('update-city'));
				$data['voluntary_add'] = $this->Address_model->voluntary_add($update_bar, $update_city);
				
				if (empty($data['voluntary_add'])) {
					$this->Address_model->insert_voluntary_add($update_bar, $update_city);
				}

				$data['voluntary_add'] = $this->Address_model->voluntary_add($update_bar, $update_city);
			
				$this->Pds_model->update_voluntary(
					strtoupper($this->io->post('name')),
					$data['voluntary_add']['address_id'],
					$this->io->post('from'),
					$this->io->post('to'),
					$this->io->post('hours'),
					strtoupper($this->io->post('position')),
					$this->io->post('voluntary_id'),
												);
									redirect('Employee/view_voluntary_work');
			}}
	}
	public function delete_voluntary()
	{
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_voluntary($this->io->post('vol_id'));
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
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('title')
				->name('from')
				->name('to')
				->name('hours')
				->name('type')
				->name('spon');
			if ($this->form_validation->run()) 
			{
			  $this->Pds_model->insert_trainings(
				strtoupper($this->io->post('title')),
				$this->io->post('from'),
				$this->io->post('to'),
				$this->io->post('hours'),
				strtoupper($this->io->post('type')),
				strtoupper($this->io->post('spon')),
											);
								redirect('Employee/view_trainings');
			}
		}
	}

	public function update_trainings()
	{
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('title')
				->name('from')
				->name('to')
				->name('hours')
				->name('type')
				->name('spon');
			if ($this->form_validation->run()) 
			{
			  $this->Pds_model->update_trainings(
				strtoupper($this->io->post('title')),
				$this->io->post('from'),
				$this->io->post('to'),
				$this->io->post('hours'),
				strtoupper($this->io->post('type')),
				strtoupper($this->io->post('spon')),
				$this->io->post('ldi_id'));
								redirect('Employee/view_trainings');
			}
		}
	}
	public function delete_trainings()
	{
		if ($this->form_validation->run()) {
			$this->Pds_model->delete_trainings($this->io->post('ld_id'));
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














	#region uploading of signature rma 4/8/2022 
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
		$this->Employee_model->stat_emp_notif();
		$data = [
			'emp_profile' => $this->Employee_model->emp_profile($this->session->userdata('user_id')),
			'emp_notif_forpds'=> $this->Employee_model->emp_notif_forpds(),
			'get_notif_pds' => $this->Employee_model->get_notif_pds()
		];
		$this->call->view('emp/notification',$data);
	}

	



	#endregion







}
?>