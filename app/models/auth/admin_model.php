<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

    class admin_model extends Model {

        
        // start change jcd April 15, 2022
        public function passwordhash($password)
	    {
            $options = array(
            'cost' => 4,
            );
            return password_hash($password, PASSWORD_BCRYPT, $options);
	    }

        public function register_admin($username,$email, $_password, $fname,$mname,$lname,$role,$office)
        {
            $bind = array(
                'username'=>$username,
                'email'=>$email,
                '_password'=> $this->passwordhash($_password), 
                'fname'=>$fname,
                'mname'=>$mname,
                'lname'=>$lname,
                'role'=>$role,
                'office'=>$office
                );
            return $this->db->table('admin')->insert($bind);
        }

        public function login_admin($username, $password)
        {
            $row = $this->db->table('admin') 					
                            ->where('username', $username)
                            ->get();
            if($row)
            {
                if(password_verify($password, $row['_password']))
                {
                    return $row;
                } else {
                    return false;
                }
            }
        }


        #region forgot password
        // * gets the where we send the verification code
        public function get_email($admin_username){
            return $this->db->table('admin')->select('email')->where('username', $admin_username)->get();
            }
    
        // * use to update the password
        public function update_pass($email, $password)
        {
            $data = array(
                '_password' => $this->passwordhash($password)
            );
            return $this->db->table('admin')->where('email', $email)->update($data);
        }
        #endregion
        
        // end change jcd April 15, 2022
    }
?>
