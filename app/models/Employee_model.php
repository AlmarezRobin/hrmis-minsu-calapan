<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Employee_model extends Model{
   public function select_all_employee(){
   return $this->db->table('user')->get_all();
   }

}
?>