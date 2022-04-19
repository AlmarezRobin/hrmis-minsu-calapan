
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Pds_model extends Model {
	public function index() {
	}


	#region family background

	public function insert_spouse($fname,$mname,$lname,$ex,$occu,$bname,$badd,$tnumber){
		$bind = array(
			'fname'=>$fname,
			'mname'=>$mname,
			'lname'=>$lname,
			'xname'=>$ex,
			'occupation'=>$occu,
			'bus_name'=>$bname,
			'bus_add'=>$badd,
			'tnumber'=>$tnumber,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('spouse_tbl')->insert($bind)->exec();
	}





	public function insert_father($fname,$mname,$lname,$ex){
		$bind = array(
			'father_fname'=>$fname,
			'father_mname'=>$mname,
			'father_lname'=>$lname,
			'father_ex'=>$ex,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('father_tbl')->insert($bind)->exec();
	}

	public function insert_mother($maname,$fname,$mname,$lname){
		$bind = array(
			'maiden_name'=>$maname,
			'fname'=>$fname,
			'mname'=>$mname,
			'lname'=>$lname,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('mother_tbl')->insert($bind)->exec();
	}


	#region child information
	public function insert_child($fname,$mname,$lname,$ex,$bday){
		$bind = array(
			'fname'=>$fname,
			'mname'=>$mname,
			'lname'=>$lname,
			'xname'=>$ex,
			'bday'=>$bday,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('children_tbl')->insert($bind)->exec();
	}
	public function get_all_child(){
		return $this->db->table('children_tbl')->get_all();
	}
	#endregion child information

	#endregion family background



	#region educational background
	public function insert_educational_bg($level,$schoolname,$degree,$from,$to,$high_lvl_earned,$year_grad,$honors_received){
		$bind = array(
			'level'=>$level,
			'school_name'=>$schoolname,
			'degree'=>$degree,
			'from_date'=>$from,
			'to_date'=>$to,
			'highest_level'=>$high_lvl_earned,
			'year_graduated'=>$year_grad,
			'honors_received'=>$honors_received,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('educational_background')->insert($bind)->exec();
	}

	public function get_educational(){
		return $this->db->table('educational_background')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}

	#endregion educational background


	#region civil cervice eligibility
	public function insert_eligibility($service,$rating,$date,$place,$number,$validity){
		$bind = array(
			'service'=>$service,
			'rating'=>$rating,
			'date_conferment'=>$date,
			'place_conferment'=>$place,
			'number'=>$number,
			'validity'=>$validity,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table(' service_eligibility_tbl')->insert($bind)->exec();
	}
	public function get_eligibility(){
		return $this->db->table('service_eligibility_tbl')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}


	#endregion civil cervice eligibility

	#region work experience 
	public function insert_experience($_from,$_to,$position,$company,$monthly_salary,$salary_grade,$status,$government){
		$bind = array(
			'_from'=>$_from,
			'_to'=>$_to,
			'position'=>$position,
			'company'=>$company,
			'monthly_salary'=>$monthly_salary,
			'salary_grade'=>$salary_grade,
			'status'=>$status,
			'government'=>$government,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table(' work_experience_tbl')->insert($bind)->exec();
	}
	public function get_experience(){
		return $this->db->table('work_experience_tbl')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}


	#endregion work experience 


	#region voluntary work
	public function insert_voluntary($name,$address,$_from,$_to,$hours,$position){
		$bind = array(
			'name'=>$name,
			'add_org'=>$address,
			'_from'=>$_from,
			'_to'=>$_to,
			'hours'=>$hours,
			'position'=>$position,
			
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('voluntary_work_tbl')->insert($bind)->exec();
	}
	public function get_voluntary(){
		return $this->db->table('voluntary_work_tbl')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}


	#endregion voluntary work



	#region trainings attended
	public function insert_trainings($title,$_from,$_to,$hours,$ld,$spon){
		$bind = array(
			'title'=>$title,
			'_from'=>$_from,
			'_to'=>$_to,
			'hours'=>$hours,
			'type'=>$ld,
			'sponsored'=>$spon,
			
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('trainings_attended_tbl')->insert($bind)->exec();
	}
	public function get_trainings(){
		return $this->db->table('trainings_attended_tbl')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}


	#endregion trainings attended









	public function insert_other_info($skills,$recognition,$membership){
		$bind = array('special_skill'=>$skills, 'recognition'=>$recognition,'membership'=>$membership,'user_id'=>$this->session->userdata('user_id'));
		return $this->db->table('other_info_tbl')->insert($bind)->exec();
	 }

	public function get_other_info(){
		return $this->db->table('other_info_tbl')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}
  
  

















}
?>
