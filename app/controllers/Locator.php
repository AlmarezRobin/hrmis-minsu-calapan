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
			'get_emp_notif'=> $this->Request_model->get_emp_notif(),

			'get_mylocator'=>$this->Employee_model->get_mylocator(),


			
		];

		$this->call->view('emp/locator/index',$data);
	}

	public function file_locator(){
		if($this->form_validation->run()){
			$this->form_validation->name('dep_time')->name('location')->name('reason')->name('arrival')->name('type');
			if($this->form_validation->submitted())
			{
				$this->Request_model->file_locator($this->io->post('dep_time'),$this->io->post('location'),$this->io->post('reason'),$this->io->post('arrival'),$this->io->post('type'));
				
				// $this->Request_model->insert_request($this->io->post('type'),$this->io->post('stat_of_app'));
				 redirect('Locator');
			}
		}
	}




	public function view_locator_history(){
		$this->call-view('emp/locator/locator_history');
	}




}
?>