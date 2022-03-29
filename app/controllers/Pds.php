
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Pds extends Controller {
	public function index() {

		
	}


	public function view_father_info(){
		$this->call->view('emp/father_info');
	}


	public function view_mother_info(){
		$this->call->view('emp/mother_info');
	}


	public function view_child_info(){
		$this->call->view('emp/children_info');
	}
}
?>
