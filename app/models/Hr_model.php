
<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Hr_model extends Model {
	public function index() {
		
	}

	public function get_all_admin(){
		return $this->db->table('admin')->get_all();
	}
	public function register_admin($username,$email, $_password, $fname,$mname,$lname,$role,$office)
	{
		$bind = array(
			'username'=>$username,
			'email'=>$email,
			'_password'=> $this->Auth->passwordhash($_password), 
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
    	$row = $this->db->table('admin') 					
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

	public function get_single_admin($id){
		return $this->db->table('admin')->where('admin_id', $id)->get();
	  }
  
	  public function update_admin($id,$username,$email, $fname,$mname,$lname,$role,$office){
		$admin = [
			'admin_id'=>$id,
			'username'=>$username,
			'email'=>$email,
			'fname'=>$fname,
			'mname'=>$mname,
			'lname'=>$lname,
			'role'=>$role,
			'office'=>$office
		];
		return $this->db->table('admin')->where('admin_id', $id)->update($admin)->exec();
  
	  }

	public function delete_admin($id){
		return $this->db->table('admin')->where('admin_id', $id)->delete()->exec();
	  } 

}
?>
