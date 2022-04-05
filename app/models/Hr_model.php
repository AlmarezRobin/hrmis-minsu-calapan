
<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Hr_model extends Model
{
	public function index()
	{
	}


	public function register_admin($admin_id, $username, $email, $_password, $fname, $mname, $lname, $role, $office)
	{
		$bind = array(
			'admin_id' => $admin_id,
			'username' => $username,
			'email' => $email,
			'_password' => $this->Auth->password_hash($_password),
			'fname' => $fname,
			'mname' => $mname,
			'lname' => $lname,
			'role' => $role,
			'office' => $office
		);
		return $this->db->table('admin')->insert($bind)->exec();
	}

	public function login_admin($username, $password)
	{
		$row = $this->LAVA->db->table('admin')
			->where('username', $username)
			->get();
		if ($row) {
			if (password_verify($password, $row['_password'])) {
				return $row['username'];
			} else {
				return false;
			}
		}
	}
}
?>
