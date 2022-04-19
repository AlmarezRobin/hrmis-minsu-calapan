<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

    class login_model extends Model {
        
        // start change jcd April 15, 2022
        public function passwordhash($password)
	    {
            $options = array(
            'cost' => 4,
            );
            return password_hash($password, PASSWORD_BCRYPT, $options);
	    }

        #region forgot password
        // * gets the where we send the verification code
        public function get_email($id){
        return $this->db->table('user')->select('email')->where('id_number', $id)->get();
        }

        // * use to update the password
        public function update_pass($email, $password)
        {
            $data = array(
                '_password' => $this->passwordhash($password)
            );
            return $this->db->table('user')->where('email', $email)->update($data);
        }
        #endregion


        public function login_user($username, $password)
        {
            $row = $this->db->table('user') 					
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
        
    }
    // end change jcd April 15, 2022
?>
