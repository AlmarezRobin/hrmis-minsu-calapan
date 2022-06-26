<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class CED extends Controller {

    public function view_locator_emp(){

        // $data=[
        //     'get_emp_locator'=>$this->Request_model->get_emp_locator($userId)
        // ];

        
        $this->call->view('ced/view_emp_locator');
    }
	
}
?>
