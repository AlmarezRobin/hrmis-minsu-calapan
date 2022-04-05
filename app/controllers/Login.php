<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Login extends Controller {
	public function index() {
		$this->call->view('login/login');
	}
	public function login(){
		if ($this->form_validation->submitted()) 
        {
            $this->form_validation->name('username')->required()->name('password')->required();
            if ($this->form_validation->run()) 
            {
                $username = trim($this->io->post('username'));
                $password = trim($this->io->post('password'));
                
               	if($data = $this->Auth->login($username, $password))
				   {
					   	// start change user-profile-crud jcd Apr. 5, 2022
						$sess_log = $this->Employee_model->sess_log($username, $password);
						$this->session->set_userdata(array(
							'user_id' => $sess_log['user_id'],
							'username' => $sess_log['username'],
							'profile_id' => $sess_log['profile_id'],
							'user_role' => $sess_log['role']
							)
						);
						// echo '<pre> <br>';
						// var_dump($sess_log);
						// echo '</pre>';
						// exit;
						// end change user-profile-crud jcd Apr. 5, 2022
					   	$this->Auth->set_logged_in($data);
						
						
								
						// echo $this->session->userdata('username');
						redirect('Employee');
				   }
				else{
					$this->session->set_flashdata(array('status' => 'Invalid Username or Password.'));
					redirect('Login');
				}
					
            } 
        }
	}
	
	public function emailverification() {
		$this->call->view('login/emailverification');
	}
	public function code(){
		$this->call->view('login/code');
	}
	public function changepassword() {
		$this->call->view('login/changepass');
	}

	public function welcome(){
		$this->call->view('welcome_page');
	}
	
}
?>