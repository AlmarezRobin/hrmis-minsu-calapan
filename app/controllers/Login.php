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
                
               	if($data = $this->auth->login($username, $password))
				   {
					   	$this->auth->set_logged_in($data);
								
						// echo $this->session->userdata('username');
						redirect('Hr');
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