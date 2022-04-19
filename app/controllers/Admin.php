<?php
    defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

    class Admin extends Controller {

         public function __construct() {
            parent::__construct();
        }

        // start change jcd April 15, 2022
        public function index(){
            
            $this->call->view('admin/login/login');
        }
        
        public function admin_login()
        {
            if ($this->form_validation->submitted()) {
                $username = $this->io->post('username');
                $password = trim($this->io->post('password'));

                $this->call->model('auth/Admin_model');

                $data = $this->Admin_model->login_admin($username, $password);
                if (empty($data)) {
                    set_flash_alert('danger', 'Wrong username or password.');
                    redirect('Admin');
                }
                else {
                    $this->session->set_userdata(
                        array(
                            'logged_in' => 1,
                            'admin_id' => $data['admin_id'],
                            'username' => $data['username'],
                            'email' => $data['email'],
                            'role' => $data['role']
                        )
                    );

                    if(is_logged_in())
                        redirect('Hr');
                }
            }
        }
        

        public function logout()
        {
            $this->session->unset_userdata(
                array(
                    'logged_in',
                    'user_id',
                    'username',
                    'email',
                    'user_role'
                )
            );

            $this->session->sess_destroy();
            redirect('Admin');
        }
        

        #region forgot password
        public function emailverification(){
            if($this->form_validation->submitted()){
                $this->form_validation
                    ->name('admin_username')
                        ->alpha_numeric_dash('Username cannot contain any special character.')
                        ->required('This field must not be empty.');

                $this->call->model('auth/admin_model');
                
                if($this->form_validation->run()){
                    
                    $admin_username = $this->io->post('admin_username');
                    $data = $this->admin_model->get_email($admin_username);
                    
                    if ($data['email']) {
                        $this->session->unset_userdata('otp');
                        $this->send_OTP($data['email']);
                        redirect('admin/otp_code');
                    }
                }
            }
            $this->call->view('admin/login/emailverification');
        }

        public function otp_code(){
            if ($this->form_validation->submitted()) {
                $this->form_validation->name('otp')
                                        ->required();
                
                if ($this->form_validation->run()) {
                    if($this->session->userdata('otp') == $this->io->post('otp')){
                        redirect('admin/change_pass');
                    }
                }
            }
            $this->call->view('admin/login/code');
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
                    
                    $this->call->model('auth/Admin_model');
                    
                    if ($this->Admin_model->update_pass($this->session->userdata('email'), $pass)) {
                        $this->session->sess_destroy();
                        redirect('Admin');
                    }
                }
            }
            $this->call->view('admin/login/changepass');
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
        
        // end change jcd April 15, 2022
        
    }
?>
