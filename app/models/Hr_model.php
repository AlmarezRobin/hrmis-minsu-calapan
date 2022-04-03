
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Hr_model extends Model {
	public function index() {
		
	}
	public function passwordhash($password)
	{
		$options = array(
		'cost' => 4,
		);
		return password_hash($password, PASSWORD_BCRYPT, $options);
	}

	public function register_admin($admin_id,$username,$email, $_password, $status,$fname,$mname,$lname,$role,$office)
	{
		$bind = array(
			'admin_id'=>$admin_id,
			'username'=>$username,
			'email'=>$email,
			'_password'=> $this->password_hash($_password), 
			'fname'=>$fname,
			'mname'=>$mname,
			'lname'=>$lname,
			'role'=>$role,
			'office'=>$office
			);
		return $this->db->table('admin')->insert($bind)->exec();
	}

	public function login_admin($username, $password)
	{
    	$row = $this->LAVA->db->table('admin') 					
    					->where('username', $username)
    					->get();
		if($row)
		{
			if(password_verify($password, $row['_password']))
			{
				return $row['username'];
			} else {
				return false;
			}
		}
	}

}
?>
