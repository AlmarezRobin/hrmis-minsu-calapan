<?php
  defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

  class Export_PDS_model extends Model {
	
    public function emp_profile($id){
        return $this->db->table('user_profile')->select("user_profile.profile_id, user_profile.user_id, user_profile.birth_place_address_id, user_profile.residential_address_id, user_profile.permanent_address_id, user_profile.f_name, user_profile.m_name, user_profile.l_name, user_profile. name_ex, DATE_FORMAT(user_profile.date_of_birth, '%m/%d/%Y') AS date_of_birth, user_profile.sex, user_profile.civil_status, user_profile.height, user_profile. weight, user_profile.blood_type, user_profile.gsisno, user_profile.pag_ibig_no, user_profile. philhealth_no, user_profile.sss_no, user_profile.tin_no, user_profile.agency_emp_no, user_profile.citizenship, user_profile.ship_by, user_profile.citizenship_country, user_profile.telephone, user_profile.mobile, user_profile.photo, user_profile.e_sign, user_profile.salary_rate_cat, user_profile.salary_rate_amount, employee_status.status_id, employee_status.status_code, employee_status.status_desc, designation.designation_id, designation.designation_desc, designation.salary_grade, designation.salary_rate_cat, designation.salary_rate_amount, office.office_id, office.dept_id, office.office_description, office.office_description")
                    ->inner_join('employee_status', 'employee_status.status_id = user_profile.status_id')
                    ->inner_join('office', 'office.office_id = user_profile.office_id')
                    ->inner_join('designation', 'designation.designation_id = user_profile.designation_id')->where('user_id', $id)->get();
    }

    public function get_all_child(){
      return $this->db->table('pds_children_tbl')->select("fname, mname, lname, xname, DATE_FORMAT(bday, '%m/%d/%Y' ) AS bday")->order_by('bday', 'ASC')->where('user_id', $this->session->userdata('user_id'))->get_all();
    }

    public function get_eligibility(){
		  return $this->db->table('pds_service_eligibility_tbl')->select("eligibility_id, user_id, service, rating, DATE_FORMAT(date_conferment, '%m/%d/%Y' ) AS date_conferment, place_conferment, license_num, DATE_FORMAT(validity, '%m/%d/%Y') AS validity")->order_by('date_conferment', 'ASC')->where('user_id', $this->session->userdata('user_id'))->get_all();
	  }

    public function get_experience(){
	  	return $this->db->table('pds_work_experience_tbl')->select("DATE_FORMAT(_from, '%m/%d/%Y') AS _from, DATE_FORMAT(_to, '%m/%d/%Y') AS _to, designation, company, monthly_salary, salary_grade, step_inc, appointment_status, government")->where('user_id', $this->session->userdata('user_id'))->order_by('_from', 'ASC')->get_all();
  	}

    public function get_voluntary(){
	  	return $this->db->table('pds_voluntary_work_tbl')->select("pds_voluntary_work_tbl.name, DATE_FORMAT(pds_voluntary_work_tbl._from, '%m/%d/%Y') as _from, DATE_FORMAT(pds_voluntary_work_tbl._to, '%m/%d/%Y') as _to, pds_voluntary_work_tbl.hours, pds_voluntary_work_tbl.position, address.barangay, address.municipality_city")->inner_join('address','address.address_id = pds_voluntary_work_tbl.org_address')->where('user_id', $this->session->userdata('user_id'))->order_by('_from', 'DESC')->get_all();
      
  	}

    public function get_trainings(){
      return $this->db->table('pds_learning_dev_intervention')->select("title, DATE_FORMAT(_from, '%m/%d/%Y') AS _from, DATE_FORMAT(_to, '%m/%d/%Y') AS _to, hours, type, sponsored")->where('user_id', $this->session->userdata('user_id'))->order_by('_from', 'DESC')->get_all();
    }

    public function get_id(){
      return $this->db->table('pds_gov_issued_id_tbl')->select("pds_gov_issued_id_tbl.id_desc, pds_gov_issued_id_tbl.idno, DATE_FORMAT(pds_gov_issued_id_tbl.date_issued, '%m/%d/%Y') AS date_issued, place_issued")->where('user_id', $this->session->userdata('user_id'))->get();
    }
  }
?>
