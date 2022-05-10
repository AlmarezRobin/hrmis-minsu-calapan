<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Locator extends Controller {
	public function index() {
		$data = [
			//para sa notification
			'emp_notif_forpds'=> $this->Employee_model->emp_notif_forpds()
		];



		$this->call->view('emp/locator/create_new_locator',$data);
	}
}
?>