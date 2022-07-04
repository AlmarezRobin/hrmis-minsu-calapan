<?php
    defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

    class Request extends Controller {

        //function para sa pag papasa ni employee ng application
        public function sending_app_to_hr(){
            if ($this->form_validation->submitted()) {
                if($this->form_validation->run()){
                    $this->Request_model->insert_request($this->io->post('type'),$this->io->post('stat_of_app'));
                    redirect('Pds/view_finished_pds');
                    //echo succesfully submitted
                }
            }
        }
        public function update_app_to_hr(){
            if ($this->form_validation->submitted()) {
                if($this->form_validation->run()){
                    $this->Request_model->update_request($this->io->post('type'),$this->io->post('stat_of_app'));
                    redirect('Pds/view_finished_pds');
                    //echo succesfully updated
                }
            }
        }

        //returning ng application ni employee
        public function returning_app_to_emp(){
            if($this->form_validation->submitted())
            {
                $this->form_validation->name('remarks')->requred();
                if($this->form_validation->run())
                {
                    $this->Request_model->returned_and_update_emp_req($this->io->post('user_id'),$this->io->post('status'),$this->io->post('remarks'));
                    redirect('Hr/view_pds_request');

                }
            }
            
        }

        public function approval_of_pds(){
            if($this->form_validation->submitted()){
                if($this->form_validation->run())
                {
                    $this->Request_model->insert_into_history();
                    $this->Request_model->returned_and_update_emp_req($this->io->post('user_id'),$this->io->post('stat'),$this->io->post('remarks'));
    
                    redirect('Hr/view_pds_request');
                }
            }
        }
        public function rejection_of_pds(){
            if($this->form_validation->submitted()){
                if($this->form_validation->run())
                {
                    
                    $this->Request_model->returned_and_update_emp_req($this->io->post('user_id'),$this->io->post('stat'),$this->io->post('remarks'));
                    $this->Request_model->insert_into_history();
                    redirect('Hr/view_pds_request');
                }
            }
        }




        
    }
?>