<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Locator extends Controller {
	public function index() {
		$data = [


			//pansamantala
			'emp_profile' => $this->Employee_model->emp_profile($this->session->userdata('user_id')),
			'birth_add' => $this->Address_model->birth_add($this->session->userdata('user_id')),
			'residential_add' => $this->Address_model->residential_add($this->session->userdata('user_id')),
			'permanent_add' => $this->Address_model->permanent_add($this->session->userdata('user_id')),





			//para sa notification
			'emp_notif_forpds'=> $this->Employee_model->emp_notif_forpds()
		];



		$this->call->view('emp/locator/create_new_locator',$data);
	}




}
?>