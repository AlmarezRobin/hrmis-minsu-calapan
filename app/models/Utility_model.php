<?php
  defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

  class Utility_model extends Model{

    #region employment_status
    public function employment_stat(){
      return $this->db->table('employee_status')->get_all();
    }

    public function add_emp_stat($code, $desc){
      $emp_stat = array('status_code'=>$code,'status_desc'=>$desc);
      return $this->db->table('employee_status')->insert($emp_stat);

    }

    public function get_single_emp_stat($id){
      return $this->db->table('employee_status')->where('status_id', $id)->get();
    }

    public function update_emp_stat($id, $stat_code, $stat_desc){
      $data = [
        'status_code' => $stat_code,
        'status_desc' => $stat_desc,
      ];
      return $this->db->table('employee_status')->where('status_id', $id)->update($data);
    }

    public function delete_emp_stat($id){
      return $this->db->table('employee_status')->where('status_id', $id)->delete();
    }
    #endregion employment_status


    #region designation
    public function designation(){
      return $this->db->table('designation')->get_all();
    }

    public function add_designation($desig_desc, $salary_grade,$salary_rate_cat,$salary_rate_amount){
      $designation = array('designation_desc'=>$desig_desc,
                        'salary_grade'=>$salary_grade,
                        'salary_rate_cat'=>$salary_rate_cat,
                        'salary_rate_amount'=>$salary_rate_amount);
                return $this->db->table('designation')->insert($designation);

    }

    public function get_single_designation($id){
      return $this->db->table('designation')->where('designation_id', $id)->get();
    }

    public function update_designation($id, $desig_desc, $salary_grade,$salary_rate_cat,$salary_rate_amount){
      $designation = array('designation_desc'=>$desig_desc,
                        'salary_grade'=>$salary_grade,
                        'salary_rate_cat'=>$salary_rate_cat,
                        'salary_rate_amount'=>$salary_rate_amount
                      );
      return $this->db->table('designation')->where('designation_id',$id)->update($designation);
    }

    public function delete_designation($id){
      return $this->db->table('designation')->where('designation_id', $id)->delete();
    } 
    #endregion designation


    #region department
    public function department(){
      return $this->db->table('department')->get_all();
    }

    public function add_department($code, $desc){
      $dept = array('dept_code'=>$code,'dept_description'=>$desc);
      return $this->db->table('department')->insert($dept);

    }

    public function get_single_dept($id){
      return $this->db->table('department')->where('dept_id', $id)->get();
    }

    public function update_department($id, $code, $desc){
      $dept = [
        'dept_code' => $code,
        'dept_description' => $desc
      ];
      return $this->db->table('department')->where('dept_id', $id)->update($dept);
    }

    public function delete_department($id){
      return $this->db->table('department')->where('dept_id', $id)->delete();
    }
    #endregion department

    #region office
    public function office(){
      // ? pwede mag left or inner join dine
      return $this->db->table('department')->inner_join('office', 'department.dept_id = office.dept_id')->get_all();
    }

    public function get_office()
    {
      return $this->db->table('office')->select('office_id, office_description')->get_all();
    }

    public function add_office($dept_id, $office_code,$office_description){
      $office = array(
                        'dept_id'=>$dept_id,
                        'office_code'=>$office_code,
                        'office_description'=>$office_description);
                return $this->db->table('office')->insert($office);

    }

    // function para sa pag didisplay ng * department galing database
    public function get_dept_data(){
      return $this->db->table('department')->select('dept_id, dept_code')->get_all();
    }

    // start change user-profile-crud jcd Apr. 5, 2022
    public function get_single_office($id){
      return $this->db->table('department')->select('department.dept_id, department.dept_code, office.office_id, office.office_code, office.office_description')->inner_join('office', 'department.dept_id = office.dept_id')->where('office_id', $id)->get();
    }
    // end change user-profile-crud jcd Apr. 5, 2022

    public function update_office($id, $dept_id, $code, $desc){
      $office = [
        'dept_id' => $dept_id,
        'office_code' => $code,
        'office_description' => $desc,
      ];
      return $this->db->table('office')->where('office_id', $id)->update($office);

    }

    public function delete_office($id){
      return $this->db->table('office')->where('office_id', $id)->delete();
    }
    #endregion office

    #region deduction
    public function deduction(){
      return $this->db->table('deduction')->get_all();
    }
    

    public function add_deduction($name, $base_amt){
      $deduction = array('deduction_name'=>$name,'deduction_base_amount'=>$base_amt);
      return $this->db->table('deduction')->insert($deduction);

    }

    public function get_single_deduction($id){
      return $this->db->table('deduction')->where('deduction_id', $id)->get();
    }

    public function update_deduction($id, $name, $base_amt){
      $data = [
        'deduction_name' => $name,
        'deduction_base_amount' => $base_amt,
      ];
      return $this->db->table('deduction')->where('deduction_id', $id)->update($data);
    }

    public function delete_deduction($id){
      return $this->db->table('deduction')->where('deduction_id', $id)->delete();
    }
    #endregion

    #region leave
    public function leave(){
      return $this->db->table('leave_tbl')->get_all();
    }
    

    public function add_leave($desc, $spec){
      $leave = array('leave_desc'=>$desc, 'leave_specification'=> $spec);
      return $this->db->table('leave_tbl')->insert($leave);

    }

    public function get_single_leave($id){
      return $this->db->table('leave_tbl')->where('leave_id', $id)->get();
    }

    public function update_leave($id, $desc, $spec){
      $data = [
        'leave_desc' => $desc,
        'leave_specification' => $spec
      ];
      return $this->db->table('leave_tbl')->where('leave_id', $id)->update($data);
    }

    public function delete_leave($id){
      return $this->db->table('leave_tbl')->where('leave_id', $id)->delete();
    }
    #endregion
  }


?>