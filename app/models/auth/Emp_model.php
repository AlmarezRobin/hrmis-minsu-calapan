<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

    class emp_model extends Model {
		
        // start change jcd April 15, 2022
        public function passwordhash($password)
	    {
            $options = array(
            'cost' => 4,
            );
            return password_hash($password, PASSWORD_BCRYPT, $options);
	    }

        public function register($emp_idnumber,$emp_email,$emp_username, $emp_password, $emp_role)
	    {
		    $bind = array(
			'id_number' => $emp_idnumber,
			'email' => $emp_email,
			'username' => $emp_username,
			'_password' => $this->passwordhash($emp_password),
			'role' => $emp_role
			
			);
		    return $this->db->table('user')->insert($bind);
	    }
    }
	// end change jcd April 15, 2022
?>
