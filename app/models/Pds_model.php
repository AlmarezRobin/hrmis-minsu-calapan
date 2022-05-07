
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Pds_model extends Model {
	public function index() {
	}


	#region spouse crud information 
	public function insert_spouse($fname,$mname,$lname,$ex,$occu,$bname,$badd,$tnumber){
		$bind = array(
			'fname'=>$fname,
			'mname'=>$mname,
			'lname'=>$lname,
			'name_ext'=>$ex,
			'occupation'=>$occu,
			'bus_name'=>$bname,
			'bus_add'=>$badd,
			'tel_num'=>$tnumber,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('pds_spouse_tbl')->insert($bind);
	}

	public function get_spouse_info(){
		return $this->db->table('pds_spouse_tbl')->where('user_id',$this->session->userdata('user_id'))->get();
	}
	public function update_spouse($fname,$mname,$lname, $ex, $occu,$bname,$badd,$tnumber){
		$bind = array(
			'fname'=>$fname,
			'mname'=>$mname,
			'lname'=>$lname,
			'name_ext'=>$ex,
			'occupation'=>$occu,
			'bus_name'=>$bname,
			'bus_add'=>$badd,
			'tel_num'=>$tnumber,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('pds_spouse_tbl')->where('user_id',$this->session->userdata('user_id'))->update($bind);
	}

	#endregion spouse crud information 


	#region father crud information
	public function get_father_info(){
		return $this->db->table('pds_father_tbl')->where('user_id',$this->session->userdata('user_id'))->get();
	}
	public function insert_father($fname,$mname,$lname,$ex){
		$bind = array('father_fname'=>$fname,'father_mname'=>$mname,'father_lname'=>$lname,'father_ex'=>$ex,'user_id'=>$this->session->userdata('user_id'));
		return $this->db->table('pds_father_tbl')->insert($bind);
	}
	public function update_father($fname,$mname,$lname,$ex){
		$bind = array('father_fname'=>$fname,'father_mname'=>$mname,'father_lname'=>$lname,'father_ex'=>$ex,);
		return $this->db->table('pds_father_tbl')->where('user_id',$this->session->userdata('user_id'))->update($bind);
	}

	#endregion father crud information

	#region mother crud information
	public function insert_mother($maname,$fname,$mname,$lname){
		$bind = array('maiden_fname'=>$maname,'maiden_mname'=>$fname,'maiden_lname'=>$mname,'lname'=>$lname,'user_id'=>$this->session->userdata('user_id'));
		return $this->db->table('pds_mother_tbl')->insert($bind);
	}
	public function get_mother_info(){
		return $this->db->table('pds_mother_tbl')->where('user_id',$this->session->userdata('user_id'))->get();
	}

	public function update_mother($maiden_fname,$maiden_lname,$maiden_mname,$lname){
		$bind = array('maiden_fname'=>$maiden_fname,'maiden_mname'=>$maiden_mname,'maiden_lname'=>$maiden_lname,'lname'=>$lname,'user_id'=>$this->session->userdata('user_id'));
		return $this->db->table('pds_mother_tbl')->where('user_id',$this->session->userdata('user_id'))->update($bind);

	}
	#endregion mother crud information


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

		return $this->db->table('pds_children_tbl')->insert($bind);
	}
	public function update_child($fname,$mname,$lname,$ex,$bday, $id){
		$bind = array(
			'fname'=>$fname,
			'mname'=>$mname,
			'lname'=>$lname,
			'xname'=>$ex,
			'bday'=>$bday,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('pds_children_tbl')->where('child_id', $id)->update($bind);
	}
	public function get_all_child(){
		return $this->db->table('pds_children_tbl')->get_all();
	}
	public function delete_child($id)
	{
		return $this->db->table('pds_children_tbl')->where('child_id', $id)->delete();
	}

	
	#endregion child information



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

		return $this->db->table('pds_educational_background')->insert($bind);
	}

	public function get_educational(){
		return $this->db->table('pds_educational_background')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}

	public function update_educ_bg($level,$schoolname,$degree,$from,$to,$high_lvl_earned,$year_grad,$honors_received, $id){
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

		return $this->db->table('pds_educational_background')->where('educ_id', $id)->update($bind);
	}

	public function delete_educ_bg($id)
	{
		return $this->db->table('pds_educational_background')->where('educ_id', $id)->delete();
	}

	#endregion educational background


	#region civil cervice eligibility
	public function insert_eligibility($service,$rating,$date,$place,$number,$validity){
		$bind = array(
			'service'=>$service,
			'rating'=>$rating,
			'date_conferment'=>$date,
			'place_conferment'=>$place,
			'license_num'=>$number,
			'validity'=>$validity,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('pds_service_eligibility_tbl')->insert($bind);
	}
	public function get_eligibility(){
		return $this->db->table('pds_service_eligibility_tbl')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}

	public function update_eligibility($service,$rating,$date,$place,$number,$validity, $id)
	{
		$bind = array(
			'service'=>$service,
			'rating'=>$rating,
			'date_conferment'=>$date,
			'place_conferment'=>$place,
			'license_num'=>$number,
			'validity'=>$validity,
			'user_id'=>$this->session->userdata('user_id')
		);
		return $this->db->table('pds_service_eligibility_tbl')->where('eligibility_id', $id)->update($bind);
	}

	public function delete_eligibility($id)
	{
		return $this->db->table('pds_service_eligibility_tbl')->where('eligibility_id', $id)->delete();
	}

	#endregion civil cervice eligibility

	#region work experience 
	public function insert_experience($_from,$_to,$position,$company,$monthly_salary,$salary_grade, $step_inc, $status, $government){
		$bind = array(
			'_from'=>$_from,
			'_to'=>$_to,
			'designation'=>$position,
			'company'=>$company,
			'monthly_salary'=>$monthly_salary,
			'salary_grade'=>$salary_grade,
			'step_inc'=>$step_inc,
			'appointment_status'=>$status,
			'government'=>$government,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('pds_work_experience_tbl')->insert($bind);
	}
	public function get_experience(){
		return $this->db->table('pds_work_experience_tbl')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}

	public function update_experience($_from,$_to,$position,$company,$monthly_salary,$salary_grade, $step_inc, $status, $government, $id){
		$bind = array(
			'_from'=>$_from,
			'_to'=>$_to,
			'designation'=>$position,
			'company'=>$company,
			'monthly_salary'=>$monthly_salary,
			'salary_grade'=>$salary_grade,
			'step_inc'=>$step_inc,
			'appointment_status'=>$status,
			'government'=>$government,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('pds_work_experience_tbl')->where('work_exp_id',$id)->update($bind);
	}

	public function delete_experience($id)
	{
		return $this->db->table('pds_work_experience_tbl')->where('work_exp_id', $id)->delete();
	}

	#endregion work experience 


	#region voluntary work
	public function insert_voluntary($name,$address,$_from,$_to,$hours,$position){
		$bind = array(
			'name'=>$name,
			'org_address'=>$address,
			'_from'=>$_from,
			'_to'=>$_to,
			'hours'=>$hours,
			'position'=>$position,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('pds_voluntary_work_tbl')->insert($bind);
	}
	public function get_voluntary(){
		return $this->db->table('pds_voluntary_work_tbl')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}

	public function update_voluntary($name,$address,$_from,$_to,$hours,$position,$id)
	{
		$bind = array(
			'name'=>$name,
			'org_address'=>$address,
			'_from'=>$_from,
			'_to'=>$_to,
			'hours'=>$hours,
			'position'=>$position,
			'user_id'=>$this->session->userdata('user_id')
		);
		return $this->db->table('pds_voluntary_work_tbl')->where('voluntary_id', $id)->update($bind);

	}

	public function delete_voluntary($id)
	{
		return $this->db->table('pds_voluntary_work_tbl')->where('voluntary_id', $id)->delete();
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

		return $this->db->table('pds_learning_dev_intervention')->insert($bind);
	}
	public function get_trainings(){
		return $this->db->table('pds_learning_dev_intervention')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}

	public function update_trainings($title,$_from,$_to,$hours,$ld,$spon, $id){
		$bind = array(
			'title'=>$title,
			'_from'=>$_from,
			'_to'=>$_to,
			'hours'=>$hours,
			'type'=>$ld,
			'sponsored'=>$spon,
			'user_id'=>$this->session->userdata('user_id')
		);

		return $this->db->table('pds_learning_dev_intervention')->where('ldi_id', $id)->update($bind);
	}

	public function delete_trainings($id)
	{
		return $this->db->table('pds_learning_dev_intervention')->where('ldi_id', $id)->delete();
	}
	#endregion trainings attended





	// rma 4-17 editing other information section

	#region other infomation

	#region for skills
	public function insert_skills($special_skill){
		$skill = ['special_skill'=>$special_skill,'user_id'=>$this->session->userdata('user_id')];
		return $this->db->table('pds_specialskill_and_hobby')->insert($skill);
	}
	public function update_skills($id,$special_skill){
		$skill = ['special_skill'=>$special_skill];
		return $this->db->table('pds_specialskill_and_hobby')->where('ss_id',$id)->update($skill);
	}
	public function get_skills(){
		return $this->db->table('pds_specialskill_and_hobby')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}
	public function get_single_skills($id){
		return $this->db->table('pds_specialskill_and_hobby')->where('ss_id',$id)->get();
	}
	public function delete_skills($id){
		return $this->db->table('pds_specialskill_and_hobby')->where("ss_id", $id)->delete();
	}
	#endregion

	#region acad recognition
	public function insert_distinctions($distinctions){
		$recognition = ['award_desc'=>$distinctions,'user_id'=>$this->session->userdata('user_id')];
		return $this->db->table('pds_non_acad_recognition')->insert($recognition);
	}
	public function update_distinctions($distinctions, $id){
		$recognition = ['award_desc'=>$distinctions,'user_id'=>$this->session->userdata('user_id')];
		return $this->db->table('pds_non_acad_recognition')->where('recognition_id', $id)->update($recognition);
	}
	public function get_distinctions(){
		return $this->db->table('pds_non_acad_recognition')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}
	public function get_single_distinctions(){
		return $this->db->table('pds_non_acad_recognition')->where('user_id',$this->session->userdata('user_id'))->get();
	}
	public function delete_distinctions($id){
		return $this->db->table('pds_non_acad_recognition')->where("recognition_id", $id)->delete();
	}
	#endregion

	#region membership
	public function insert_membership($name,$address, $id){
		$membership = ['assoc_name'=>$name,'org_address'=>$address,'user_id'=>$this->session->userdata('user_id')];
		return $this->db->table('pds_organization_membership')->insert($membership);
	}
	public function update_membership($name,$address, $id){
		$membership = ['assoc_name'=>$name,'org_address'=>$address,'user_id'=>$this->session->userdata('user_id')];
		return $this->db->table('pds_organization_membership')->where('membership_id',$id)->update($membership);
	}
	public function get_membership(){
		return $this->db->table('organization_membership')->where('user_id',$this->session->userdata('pds_user_id'))->get_all();
	}
	public function get_single_membership(){
		return $this->db->table('pds_organization_membership')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}
	public function delete_membership($id){
		return $this->db->table('pds_organization_membership')->where("membership_id", $id)->delete();
	}
	#endregion




	#region references
	public function insert_references($fname,$mname,$lname, $add, $tel){
		$ref = ['ref_fname'=>$fname,'ref_mname'=>$mname,'ref_lname'=>$lname, 'ref_add'=>$add,'ref_telno'=>$tel,'user_id'=>$this->session->userdata('user_id')];
		return $this->db->table('pds_references')->insert($ref);
	}
	public function update_references($fname,$mname,$lname, $add, $tel, $id){
		$ref = ['ref_fname'=>$fname,'ref_mname'=>$mname,'ref_lname'=>$lname, 'ref_add'=>$add,'ref_telno'=>$tel,'user_id'=>$this->session->userdata('user_id')];
		return $this->db->table('pds_references')->where('ref_id', $id)->update($ref);
	}
	public function get_ref(){
		return $this->db->table('pds_references')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}
	public function get_single_ref(){
		return $this->db->table('pds_references')->where('user_id',$this->session->userdata('user_id'))->get_all();
	}
	public function delete_references($id){
		return $this->db->table('pds_references')->where("ref_id", $id)->delete();
	}
	#endregion

	#endregion other infomation




	#region for lastpage continuation of other information


	#region insertion and update of relative information
	public function insert_rel($var1,$var2,$var3){
		$ref = [
			'third_degree'=>$var1,
			'fourth_degree'=>$var2,
			'relative_details'=>$var3,
			'user_id'=>$this->session->userdata('user_id')];
		return $this->db->table('pds_relative_info')->insert($ref);
	}

	public function update_rel($var1,$var2,$var3){
		$ref = [
			'third_degree'=>$var1,
			'fourth_degree'=>$var2,
			'relative_details'=>$var3
			];
		return $this->db->table('pds_relative_info')->where('user_id',$this->session->userdata('user_id'))->update($ref);
	}

	public function get_rel_info(){
		return $this->db->table('pds_relative_info')->where('user_id',$this->session->userdata('user_id'))->get();
	}
	#endregion

	#region insertion and update of violation
	public function insert_violation($var1,$var2,$var3,$var4,$var5,$var6){
		$violation = [
			'admin_offense'=>$var1,
			'offense_desc'=>$var2,
			'criminal_charged'=>$var3,
			'crime_details'=>$var4,
			'date_crime_filed'=>$var5,
			'criminal_case_status'=>$var6,
			'user_id'=>$this->session->userdata('user_id')];
		return $this->db->table('pds_violation_info')->insert($violation);
	}

	public function update_violation($var1,$var2,$var3,$var4,$var5,$var6){
		$violation = [
			'admin_offense'=>$var1,
			'offense_desc'=>$var2,
			'criminal_charged'=>$var3,
			'crime_details'=>$var4,
			'date_crime_filed'=>$var5,
			'criminal_case_status'=>$var6
			];
		return $this->db->table('pds_violation_info')->where('user_id',$this->session->userdata('user_id'))->update($violation);
	}
	public function get_violation_info(){
		return $this->db->table('pds_violation_info')->where('user_id',$this->session->userdata('user_id'))->get();
	}
	#endregion

	#region for insertion and update of conviction
	public function insert_conviction($var1,$var2){
		$conviction = [
			'convicted'=>$var1,
			'conviction_details'=>$var2,
			'user_id'=>$this->session->userdata('user_id')
		];
		return $this->db->table('pds_conviction_info')->insert($conviction);
	}

	public function update_conviction($var1,$var2){
		$conviction = [
			'convicted'=>$var1,
			'conviction_details'=>$var2,
		];
		return $this->db->table('pds_conviction_info')->where('user_id',$this->session->userdata('user_id'))->update($conviction);
	}

	public function get_conviction_info(){
		return $this->db->table('pds_conviction_info')->where('user_id',$this->session->userdata('user_id'))->get();
	}
	#endregion

	#region for insertion and update of separation
	public function insert_separation($var1,$var2){
		$conviction = [
			'separated_from_service'=>$var1,
			'separation_desc'=>$var2,
			'user_id'=>$this->session->userdata('user_id')
		];
		return $this->db->table('pds_separation_info')->insert($conviction);
	}

	public function update_separation($var1,$var2){
		$conviction = [
			'separated_from_service'=>$var1,
			'separation_desc'=>$var2,
		];
		return $this->db->table('pds_separation_info')->where('user_id',$this->session->userdata('user_id'))->update($conviction);
	}

	public function get_separation_info(){
		return $this->db->table('pds_separation_info')->where('user_id',$this->session->userdata('user_id'))->get();
	}
	#endregion

	#region for insertion and update of candidacy
	public function insert_candidacy($var1,$var2,$var3,$var4){
		$candidacy = [
			'political_candidate'=>$var1,
			'candidacy_details'=>$var2,
			'resigned_frm_gov'=>$var3,
			'resignation_desc'=>$var4,
			'user_id'=>$this->session->userdata('user_id')
		];
		return $this->db->table('pds_candidacy_info')->insert($candidacy);
	}

	public function update_candidacy($var1,$var2,$var3,$var4){
		$candidacy = [
			'political_candidate'=>$var1,
			'candidacy_details'=>$var2,
			'resigned_frm_gov'=>$var3,
			'resignation_desc'=>$var4
		];
		return $this->db->table('pds_candidacy_info')->where('user_id',$this->session->userdata('user_id'))->update($candidacy);
	}

	public function get_candidacy_info(){
		return $this->db->table('pds_candidacy_info')->where('user_id',$this->session->userdata('user_id'))->get();
	}
	#endregion


	#region for insertion and update of immigrant
	public function insert_immigrant($var1,$var2){
		$immigrant = [
			'foreign_residency'=>$var1,
			'residency_details'=>$var2,
			'user_id'=>$this->session->userdata('user_id')
		];
		return $this->db->table('pds_immigrant_info')->insert($immigrant);
	}

	public function update_immigrant($var1,$var2){
		$immigrant = [
			'foreign_residency'=>$var1,
			'residency_details'=>$var2
		];
		return $this->db->table('pds_immigrant_info')->where('user_id',$this->session->userdata('user_id'))->update($immigrant);
	}

	public function get_immigrant_info(){
		return $this->db->table('pds_immigrant_info')->where('user_id',$this->session->userdata('user_id'))->get();
	}
	#endregion

		

	#region for insertion and update of previlage information
	public function insert_previlage($var1,$var2,$var3,$var4,$var5,$var6){
		$previlage = [
			'member_of_ig'=>$var1,
			'ig_desc'=>$var2,
			'pwd'=>$var3,
			'pwd_id_no'=>$var4,
			'solo_parent'=>$var5,
			'solo_parent_id_number'=>$var6,
			'user_id'=>$this->session->userdata('user_id')
		];
		return $this->db->table('pds_special_privilege_info')->insert($previlage);
	}

	public function update_previlage($var1,$var2,$var3,$var4,$var5,$var6){
		$previlage = [
			'member_of_ig'=>$var1,
			'ig_desc'=>$var2,
			'pwd'=>$var3,
			'pwd_id_no'=>$var4,
			'solo_parent'=>$var5,
			'solo_parent_id_number'=>$var6
		];
		return $this->db->table('pds_special_privilege_info')->where('user_id',$this->session->userdata('user_id'))->update($previlage);
	}

	public function get_previlage_info(){
		return $this->db->table('pds_special_privilege_info')->where('user_id',$this->session->userdata('user_id'))->get();
	}
	#endregion

												





	#endregion for lastpage continuation of other information



  
}
?>
