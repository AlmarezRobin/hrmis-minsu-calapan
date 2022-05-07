<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Employee extends Controller {

	// * start change jcd april 21, 2022
	private function checkpass(){
		if($this->session->userdata('password') === 'MINSU@CALAPAN'){
			set_flash_alert('warning', 'Please change the default password');
			redirect('Employee/view_change_password');
		}
	}
	// * end change jcd april 21, 2022	
	
	public function index() {
		$data = [
			'emp_profile' => $this->Employee_model->emp_profile($this->session->userdata('user_id')),
			'emp_notif_forpds'=> $this->Employee_model->emp_notif_forpds()
	];
		$this->call->view('emp/index', $data);
	}

	#region start uploading profile picture rma 4/7/2022

	public function view_upload(){
		$data['emp_profile'] = $this->Employee_model->emp_profile($this->session->userdata('user_id'));
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

		
		$data = [
			'emp_profile' => $this->Employee_model->emp_profile($this->session->userdata('user_id')),
			'emp_notif_forpds' => $this->Employee_model->emp_notif_forpds()
		];
		$this->checkpass(); // * jcd april 21, 2022
		$this->call->view('emp/emp_profile/personalinformation', $data);
	}

	public function view_emp_designation_edit(){

		$designation = $this->Utility_model->designation();
		$this->call->view('emp/emp_designation_edit',$designation);
	}

	// *commented 4-20-22 jcd
	// public function insert_profile(){
	// 	if ($this->form_validation->submitted()) 
    //         {
    //             $this->form_validation
	// 								->name('fname')->required()
	// 								->name('mname')->required()
	// 								->name('lname')->required()
	// 								->name('xname')
	// 								->name('dob')->required()
	// 								->name('sex')->required()
	// 								->name('cstat')->required()
	// 								->name('tnumber')->required()
	// 								->name('cnumber')->required();
									
	// 			if ($this->form_validation->run()) 
    //             {
    //               $this->Employee_model->insert_user_profile(
	// 								strtoupper($this->io->post('fname')),
	// 								strtoupper($this->io->post('mname')),
	// 								strtoupper($this->io->post('lname')),
	// 								strtoupper($this->io->post('xname')),
	// 								$this->io->post('dob'), 
	// 								strtoupper($this->io->post('sex')),
	// 								strtoupper($this->io->post('cstat')),
	// 								$this->io->post('tnumber'),
	// 								$this->io->post('cnumber'));
	// 								redirect('Employee');
    //             }

                
    //         }
	// 	// $this->call->view('hr/register_admin');
	// }


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

									// added 4-16-22 rma 
									// ->name('citizenship')
									// ->name('dualby')
									// ->name('country')

									->name('tnumber')->required()
									->name('cnumber')->required();
									
				if ($this->form_validation->run()) 
                {
                  $this->Employee_model->update_user_profile(
									strtoupper($this->io->post('fname')),
									strtoupper($this->io->post('mname')),
									strtoupper($this->io->post('lname')),
									strtoupper($this->io->post('xname')),
									$this->io->post('dob'), 
									strtoupper($this->io->post('sex')),
									strtoupper($this->io->post('cstat')),

									// added 4-16-22 rma
									// strtoupper($this->io->post('citizenship')),
									// strtoupper($this->io->post('dualby')),
									// strtoupper($this->io->post('country')),


									$this->io->post('tnumber'),
									$this->io->post('cnumber'),
									$this->io->post('profile_id')						 );
									redirect('Employee');
                }

                
            }
		// $this->call->view('hr/register_admin');
	}


	#endregion

	#region start of family background
	public function view_spouse(){
		$data['get_spouse_info'] = $this->Pds_model->get_spouse_info();
		$this->checkpass(); // * jcd april 21, 2022
		$this->call->view('emp/emp_profile/family_background/spouse_info',$data);
	}

	public function insert_spouse(){

		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('sfname')->required()
				->name('smname')->required()
				->name('slname')->required()
				->name('occupation')
				->name('bname')
				->name('baddress')
				->name('tnumber');

			if ($this->form_validation->run()) {
				$this->Pds_model->insert_spouse(
					strtoupper($this->io->post('sfname')),
					strtoupper($this->io->post('smname')),
					strtoupper($this->io->post('slname')),
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
				->name('occupation')
				->name('bname')
				->name('baddress')
				->name('tnumber');

			if ($this->form_validation->run()) {
				$this->Pds_model->update_spouse(
					strtoupper($this->io->post('sfname')),
					strtoupper($this->io->post('smname')),
					strtoupper($this->io->post('slname')),
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
		$data['get_father_info'] = $this->Pds_model->get_father_info();
		$this->checkpass(); // * jcd april 21, 2022
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
		$data['get_mother_info'] = $this->Pds_model->get_mother_info();
		$this->checkpass(); // * jcd april 21, 2022
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
		$child = $this->Pds_model->get_all_child($this->session->userdata('user_id'));
		$this->checkpass(); // * jcd april 21, 2022
		$this->call->view('emp/emp_profile/family_background/child_info',$child);
	}

	public function insert_child(){

		if ($this->form_validation->submitted()) {
			$this->form_validation
				->name('fname')->required()
				->name('mname')->required()
				->name('lname')->required()
				->name('xname')
				->name('bday')->required();

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
	


	#endregion start of family background
	


//////////////////////////////////////////////////
	#region undone rma 4/9/2022
	public function view_educational_background(){

		if ($this->form_validation->submitted()) 
            {
                $this->form_validation
									->name('level')->required()
									->name('name')->required()
									->name('degree')->required()
									->name('from')
									->name('to')->required()
									->name('unit_earned')->required()
									->name('year_grad')->required()
									->name('honors')->required();
									
				if ($this->form_validation->run()) 
                {
                  $this->Pds_model->insert_educational_bg(
									strtoupper($this->io->post('level')),
									strtoupper($this->io->post('name')),
									strtoupper($this->io->post('degree')),
									strtoupper($this->io->post('from')),
									$this->io->post('to'), 
									strtoupper($this->io->post('unit_earned')),
									strtoupper($this->io->post('year_grad')),
									$this->io->post('honors')
															 );
									redirect('Employee');
                }

                
            }
		$data = $this->Pds_model->get_educational();
		$this->checkpass(); // * jcd april 21, 2022
		$this->call->view('emp/emp_profile/educationalbackground',$data);
	}
	#endregion

	


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
								redirect('Employee');
			}

			
		}

		$data = $this->Pds_model->get_eligibility();
		$this->checkpass(); // * jcd april 21, 2022
		$this->call->view('emp/emp_profile/eligibility',$data);
	}




	public function view_experience(){
		$data = $this->Pds_model->get_experience();
		$this->checkpass(); // * jcd april 21, 2022
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
								$this->io->post('step_incre'), 
								strtoupper($this->io->post('status')),
								strtoupper($this->io->post('gov_ser')),
														 );
												redirect('Employee/view_experience');
			}

			
		}

		
	}














	
	public function view_voluntary_work(){

		$data = $this->Pds_model->get_voluntary();
		$this->checkpass(); // * jcd april 21, 2022
		$this->call->view('emp/emp_profile/voluntarywork',$data);
	}

	public function insert_voluntary(){
		if ($this->form_validation->submitted()) 
		{
			$this->form_validation
				->name('name')
				->name('add')
				->name('from')
				->name('to')
				->name('hours')
				->name('position');
			if ($this->form_validation->run()) 
			{
			  $this->Pds_model->insert_voluntary(
				strtoupper($this->io->post('name')),
				strtoupper($this->io->post('add')),
				$this->io->post('from'),
				$this->io->post('to'),
				$this->io->post('hours'),
				strtoupper($this->io->post('position')),
											);
								redirect('Employee/view_voluntary_work');
			}}
	}






	public function view_trainings(){
		$data = $this->Pds_model->get_trainings();
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


//----------------------------------------------------------
	


	#region lastpage of pds rma 4/15/22

	
	public function view_references(){
		$this->checkpass(); // * jcd april 21, 2022
		$this->call->view('emp/emp_profile/references');
	}
	#endregion of the last page of pds


























	public function view_change_password(){

		$this->call->view('emp/emp_profile/changepassword');
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


		$data = $this->Employee_model->emp_profile($this->session->userdata('user_id'));

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
			'emp_notif_forpds'=> $this->Employee_model->emp_notif_forpds(),
			'get_notif_pds' => $this->Employee_model->get_notif_pds()
		];
		$this->call->view('emp/notification',$data);
	}

	










	#endregion







}
?>