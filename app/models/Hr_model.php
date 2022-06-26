<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

	class Hr_model extends Model {
		public function index() {
			
		}

		public function get_user_profile(){
			// return $this->db->table('user_profile')->get_all();

			return $this->db->table('user_profile')->select('designation.designation_desc, user_profile.f_name, user_profile.l_name,user_profile.m_name, user_profile.user_id')->INNER_JOIN('designation','designation.designation_id = user_profile.designation_id')->get_all();
		}

		public function get_all_admin(){
			return $this->db->table('admin')->get_all();
		}

		public function register_admin($username,$email, $_password, $fname,$mname,$lname,$role,$office)
		{
			$bind = array(
				'username'=>$username,
				'email'=>$email,
				'_password'=> $this->passwordhash($_password), 
				'fname'=>$fname,
				'mname'=>$mname,
				'lname'=>$lname,
				'role'=>$role,
				'office'=>$office
				);
			return $this->db->table('admin')->insert($bind)->exec();
		}

		public function login_admin($username, $password)
		{
			$row = $this->db->table('admin') 					
							->where('username', $username)
							->get();
			if($row)
			{
				if(password_verify($password, $row['_password']))
				{
					return $row['username'];
				} else {
					return false;
				}
			}
		}

		public function get_single_admin($id){
			return $this->db->table('admin')->where('admin_id', $id)->get();
		}
	
		public function update_admin($id,$username,$email, $fname,$mname,$lname,$role,$office){
			$admin = [
				'admin_id'=>$id,
				'username'=>$username,
				'email'=>$email,
				'fname'=>$fname,
				'mname'=>$mname,
				'lname'=>$lname,
				'role'=>$role,
				'office'=>$office
			];
			return $this->db->table('admin')->where('admin_id', $id)->update($admin)->exec();

		}

		public function delete_admin($id){
			return $this->db->table('admin')->where('admin_id', $id)->delete()->exec();
		}

		public function passwordhash($password)
	    {
            $options = array(
            'cost' => 4,
            );
            return password_hash($password, PASSWORD_BCRYPT, $options);
	    }
		
		public function get_user_id($id)
		{
			return $this->db->table('user')->select('user_id')->where('user_id', $id)->get();
		}
		public function get_user_id_number($id)
		{
			return $this->db->table('user')->select('id_number')->where('id_number', $id)->get();
		}


		public function assign_emp($user_id, $status_id, $office_id, $designation_id)
		{
			$assign = array(
				'user_id' => $user_id,
				'status_id' => $status_id,
				'office_id' => $office_id,
				'designation_id' => $designation_id
			);

			return $this->db->table('user_profile')->insert($assign);
		}
		
		#region for pending and approve request of pds
		// rma 5/4/2022
		public function get_all_request(){
			return $this->db->table('pds_request_tbl')->where('status_of_pds', 'PENDING')->get_all();
		}


		


		public function result($var2,$var1,$var3){
			$bind = [
				'status_of_pds'=>$var1,
				'stat_emp_notif'=>0,
				'comment'=>$var3
			];

			return $this->db->table('pds_request_tbl')->where('user_id',$var2)->update($bind);
			
		}

		

		// public function pds_history(){
		// 	return $this->db->table('pds_request_hist_tbl')->order_by('date_returned','DESC')->get_all();
		// }
		// public function insert_history($var1,$var2,$var3,$var4){
		// 	$hist=[
		// 		'user_id'=>$var1,
		// 		'remarks'=>$var2,
		// 		'date_submitted'=>$var3,
		// 		'comment'=>$var4
		// 	];
		// 	return $this->db->table('pds_request_hist_tbl')->insert($hist);

		// }


		#region for cards in Human resources

		public function count_pending(){
			return $this->db->table('request_tbl')->where('status_of_app', 'PENDING')->select_count('request_id', 'pending')->get();
		}
		public function count_registered_employee(){
			return $this->db->table('user')->select_count('user_id', 'emp')->get();

		}





		// public function emp_profile($id){
		// 	return $this->db->table('user_profile')->where('user_id',$id)->get();
		// }

		// public function emp_profile($id){
		// 	return $this->db->table('user_profile')->select("user_profile.profile_id, user_profile.user_id, user_profile.birth_place_address_id, user_profile.residential_address_id, user_profile.permanent_address_id, user_profile.f_name, user_profile.m_name, user_profile.l_name, user_profile. name_ex, DATE_FORMAT(user_profile.date_of_birth, '%m/%d/%Y') AS date_of_birth, user_profile.sex, user_profile.civil_status, user_profile.height, user_profile. weight, user_profile.blood_type, user_profile.gsisno, user_profile.pag_ibig_no, user_profile. philhealth_no, user_profile.sss_no, user_profile.tin_no, user_profile.agency_emp_no, user_profile.citizenship, user_profile.ship_by, user_profile.citizenship_country, user_profile.telephone, user_profile.mobile, user_profile.photo, user_profile.e_sign, user_profile.salary_rate_cat, user_profile.salary_rate_amount, employee_status.status_id, employee_status.status_code, employee_status.status_desc, designation.designation_id, designation.designation_desc, designation.salary_grade, designation.salary_rate_cat, designation.salary_rate_amount, office.office_id, office.dept_id, office.office_description, office.office_description")
		// 				->inner_join('employee_status', 'employee_status.status_id = user_profile.status_id')
		// 				->inner_join('office', 'office.office_id = user_profile.office_id')
		// 				->inner_join('designation', 'designation.designation_id = user_profile.designation_id')->where('user_id', $id)->get();
		// }

		public function emp_profile($id){
			return $this->db->table('user_profile')->select("user_profile.profile_id, user_profile.user_id, user_profile.birth_place_address_id, pob.municipality_city, pob.province, user_profile.residential_address_id, user_profile.f_name, user_profile.m_name, user_profile.l_name, user_profile. name_ex, DATE_FORMAT(user_profile.date_of_birth, '%m/%d/%Y') AS date_of_birth, user_profile.sex, user_profile.civil_status, user_profile.height, user_profile. weight, user_profile.blood_type, user_profile.gsisno, user_profile.pag_ibig_no, user_profile. philhealth_no, user_profile.sss_no, user_profile.tin_no, user_profile.agency_emp_no, user_profile.citizenship, user_profile.ship_by, user_profile.citizenship_country, user_profile.telephone, user_profile.mobile, user_profile.photo, user_profile.e_sign, user_profile.salary_rate_cat, user_profile.salary_rate_amount, employee_status.status_id, employee_status.status_code, employee_status.status_desc, designation.designation_id, designation.designation_desc, designation.salary_grade, designation.salary_rate_cat, designation.salary_rate_amount, office.office_id, office.dept_id, office.office_description, office.office_description")
						->inner_join('employee_status', 'employee_status.status_id = user_profile.status_id')
						->inner_join('office', 'office.office_id = user_profile.office_id')
						->inner_join('designation', 'designation.designation_id = user_profile.designation_id')
						->inner_join('address as pob', 'pob.address_id = user_profile.birth_place_address_id')->where('user_id', $id)->get();
		}
		
		public function get_spouse($var){
			return $this->db->table('pds_spouse_tbl')->where('user_id',$var)->get();
		}
		public function get_father($var){
			return $this->db->table('pds_father_tbl')->where('user_id',$var)->get();
		}
		public function get_mother($var){
			return $this->db->table('pds_mother_tbl')->where('user_id',$var)->get();
		}
		public function get_all_child($var){
		  return $this->db->table('pds_children_tbl')->select("fname, mname, lname, xname, DATE_FORMAT(bday, '%m/%d/%Y' ) AS bday")->order_by('bday', 'ASC')->where('user_id', $var)->get_all();
		}

		public function get_educ_background($var){
				return $this->db->table('pds_educational_background')->where('user_id', $var)->get_all();
			}
		public function get_eligibility($var){
			  return $this->db->table('pds_service_eligibility_tbl')->select("eligibility_id, user_id, service, rating, DATE_FORMAT(date_conferment, '%m/%d/%Y' ) AS date_conferment, place_conferment, license_num, DATE_FORMAT(validity, '%m/%d/%Y') AS validity")->order_by('date_conferment', 'ASC')->where('user_id',$var)->get_all();
		  }
	
		public function get_experience($var){
			  return $this->db->table('pds_work_experience_tbl')->select("DATE_FORMAT(_from, '%m/%d/%Y') AS _from, DATE_FORMAT(_to, '%m/%d/%Y') AS _to, designation, company, monthly_salary, salary_grade, step_inc, appointment_status, government")->where('user_id',$var)->order_by('_from', 'ASC')->get_all();
		  }
	
		public function get_voluntary($var){
			  return $this->db->table('pds_voluntary_work_tbl')->select("pds_voluntary_work_tbl.name,pds_voluntary_work_tbl.org_address,  DATE_FORMAT(pds_voluntary_work_tbl._from, '%m/%d/%Y') as _from, DATE_FORMAT(pds_voluntary_work_tbl._to, '%m/%d/%Y') as _to, pds_voluntary_work_tbl.hours, pds_voluntary_work_tbl.position, address.barangay, address.municipality_city")->inner_join('address','address.address_id = pds_voluntary_work_tbl.org_address')->where('user_id', $var)->order_by('_from', 'DESC')->get_all();
		  
		  }
	
		public function get_trainings($var){
		  return $this->db->table('pds_learning_dev_intervention')->select("title, DATE_FORMAT(_from, '%m/%d/%Y') AS _from, DATE_FORMAT(_to, '%m/%d/%Y') AS _to, hours, type, sponsored")->where('user_id', $var)->order_by('_from', 'DESC')->get_all();
		}
	
		


		public function get_skill_hobby($var){
			return $this->db->table('pds_specialskill_and_hobby')->where('user_id',$var)->get_all();
		}
		public function get_recognition($var){
			return $this->db->table('pds_non_acad_recognition')->where('user_id',$var)->get_all();
		}
		public function get_membership($var){
			return $this->db->table('pds_organization_membership')->where('user_id',$var)->get_all();
		}

		public function get_references($var){
			return $this->db->table('pds_references')->where('user_id',$var)->get_all();
		}
	
		public function get_gov_id($var){
		  return $this->db->table('pds_gov_issued_id_tbl')->select("pds_gov_issued_id_tbl.id_desc, pds_gov_issued_id_tbl.idno, DATE_FORMAT(pds_gov_issued_id_tbl.date_issued, '%m/%d/%Y') AS date_issued, place_issued")->where('user_id', $var)->get();
		}



		public function get_rel_info($var)
	{
		return $this->db->table('pds_relative_info')->where('user_id', $var)->get();
	}

public function get_violation_info($var)
	{
		return $this->db->table('pds_violation_info')->where('user_id', $var)->get();
	}

public function get_conviction_info($var)
	{
		return $this->db->table('pds_conviction_info')->where('user_id',$var)->get();
	}
public function get_separation_info($var)
	{
		return $this->db->table('pds_separation_info')->where('user_id', $var)->get();
	}
public function get_candidacy_info($var)
	{
		return $this->db->table('pds_candidacy_info')->where('user_id', $var)->get();
	}

public function get_immigrant_info($var)
	{
		return $this->db->table('pds_immigrant_info')->where('user_id', $var)->get();
	}
public function get_previlage_info($var)
	{
		return $this->db->table('pds_special_privilege_info')->where('user_id',$var)->get();
	}

		

	}
?>
