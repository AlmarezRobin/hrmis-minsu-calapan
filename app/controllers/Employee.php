<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Employee extends Controller {

	public function index() {
		$this->call->view('emp/index');
	}

	public function view_myprofile(){
		$this->call->view('emp/myprofile');
	}
	public function view_edit_profile(){
		$this->call->view('emp/myprofile_edit');
	}

	public function view_pds(){
		$this->call->view('emp/personal_data_sheet');
	}

	public function view_locator(){
		$this->call->view('emp/locator/locator_history');
	}
	public function view_create_locator(){
		$this->call->view('emp/locator/create_new_locator');
	}





















}
?>