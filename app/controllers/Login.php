<?php
    defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

    class Login extends Controller {

        
        
        // * start change jcd April 15, 2022
        public function index(){
            $this->call->view('login/login');
        }

        public function user_login()
        {
            if ($this->form_validation->submitted()) {
                $username = $this->io->post('username');
                $password = trim($this->io->post('password'));

                $this->call->model('auth/Login_model');

                $data = $this->Login_model->login_user($username, $password);
                if (empty($data)) {
                    set_flash_alert('danger', 'Wrong username or password.');
                    redirect('Login');
                }
                else {
                    $this->session->set_userdata(
                        array(
                            'logged_in' => 1,
                            'user_id' => $data['user_id'],
                            'id_number' => $data['id_number'],
                            'username' => $data['username'],
                            'email' => $data['email'],
                            'role' => $data['role'],
                            // * start change jcd april 21, 2022
                            'password' => $password
                        )
                    );
                    if(is_logged_in()){
                        if($this->session->userdata('password') === 'MINSU@CALAPAN'){
                            set_flash_alert('warning', 'Please change the default password');
                            redirect('Employee/view_change_password');
                        }
                        else{
                            $this->session->unset_userdata('password');
                            redirect('Employee');
                        }
                    }
                    // * end change jcd april 21, 2022
                    
                }
            }
        }

        public function logout()
        {
            $this->session->unset_userdata(
                array(
                    'logged_in',
                    'user_id',
                    'id_number',
                    'username',
                    'email',
                    'user_role'
                )
            );

            $this->session->sess_destroy();
            redirect('Login');
        }

        #region forgot password
        public function emailverification(){
            if($this->form_validation->submitted()){
                $this->form_validation->name('id_number')
                                        ->alpha_numeric_dash('Id number must be valid and a combination of character and number.')
                                        ->required('This field must not be empty.');
                $this->call->model('auth/login_model');
                if($this->form_validation->run()){
                    
                    $id_number = $this->io->post('id_number');
                    $data = $this->login_model->get_email($id_number);
                    
                    if ($data['email']) {
                        $this->session->unset_userdata('otp');
                        $this->send_OTP($data['email']);
                        redirect('login/otp_code');
                    }
                }
            }
            $this->call->view('login/emailverification');
        }

        public function otp_code(){
            if ($this->form_validation->submitted()) {
                $this->form_validation->name('otp')
                                        ->required();
                
                if ($this->form_validation->run()) {
                    if($this->session->userdata('otp') == $this->io->post('otp')){
                        redirect('login/change_pass');
                    }
                }
            }
            $this->call->view('login/code');
        }

        public function change_pass()
        {
            if ($this->form_validation->submitted()) {
                $pass = trim($this->io->post('pass'));
                // $conf_pass = $this->io->post('conf_pass');
                $this->form_validation
                ->name('pass')
                    ->required('Password must not be empty')
                    ->min_length(8, 'Password must be at least 8 characters long')
                ->name('conf_pass')
                    ->required('This field must not be empty')
                    ->matches('pass', 'This field must match with the Password.');
                if ($this->form_validation->run()) {
                    
                    $this->call->model('auth/login_model');
                    
                    if ($this->login_model->update_pass($this->session->userdata('email'), $pass)) {
                        $this->session->sess_destroy();
                        redirect('login');
                    }
                }
            }
            $this->call->view('login/changepass');
        }

        private function send_OTP($email){
            $OTP = random_int(100000, 999999);
            $this->call->library('email');
            $this->email->recipient($email);
            $this->email->subject('One Time Pin');
            $this->email->email_content($OTP);
            $this->session->set_userdata(array(
                'otp' => $OTP,
                'email' => $email
                )
            );
            $this->email->sender('jcdelizo14@gmail.com');
            $this->email->send();
        }
        #endregion
        
        // * end change jcd April 15, 2022

    }
?>
