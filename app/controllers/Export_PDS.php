<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
class Export_PDS extends Controller {

	/* start change jcd May 19, 2022 */
	public function __construct() {
		parent::__construct();

		$this->call->model('Export_PDS_model', 'exPDS');
	}
	/* end change jcd May 19, 2022 */

	/* start change jcd May 15, 2022 */
    public function pds_exportation(){
		$reader = IOFactory::createReader('Xlsx');
		$spreadsheet = $reader->load(PUBLIC_DIR .'\export_pds\pdsForCapstone.xlsx');
		$spreadsheet->setActiveSheetIndex(0);
        $this->personal_info($spreadsheet);
        $this->pds_child($spreadsheet);
        $this->pds_educbg($spreadsheet);
		$this->resAdd($spreadsheet);
		$this->perAdd($spreadsheet);

		$spreadsheet->setActiveSheetIndex(1);
		$this->csEligiblity($spreadsheet);
		$this->workExp($spreadsheet);

		$spreadsheet->setActiveSheetIndex(2);
		$this->volWork($spreadsheet);
		$this->learningIntervention($spreadsheet);
		$this->skills($spreadsheet);
		$this->acadRecog($spreadsheet);
		$this->orgMembership($spreadsheet);

		$spreadsheet->setActiveSheetIndex(3);
		$this->relative_info($spreadsheet);
		$this->violation_info($spreadsheet);
		$this->conviction_info($spreadsheet);
		$this->separation_info($spreadsheet);
		$this->candidacy_info($spreadsheet);
		$this->immigrant_info($spreadsheet);
		$this->previlege_info($spreadsheet);
		$this->references($spreadsheet);
		$this->govID($spreadsheet);
		$this->photo($spreadsheet, -33, -62, 'L53');


		$spreadsheet->setActiveSheetIndex(0);
        $this->export($spreadsheet);
	}
	
    private function personal_info($spreadsheet){
        $data['emp_profile'] = $this->exPDS->emp_profile($this->session->userdata('user_id'));
		$data['birth_add'] = $this->Address_model->birth_add($this->session->userdata('user_id'));
		$data['get_spouse_info'] = $this->Pds_model->get_spouse_info();
		$data['get_father_info'] = $this->Pds_model->get_father_info();
		$data['get_mother_info'] = $this->Pds_model->get_mother_info();
        $spreadsheet->getActiveSheet()
			->setCellValue('D10', $data['emp_profile']['l_name'])
			->setCellValue('D11', $data['emp_profile']['f_name'])
			->setCellValue('D12', $data['emp_profile']['m_name'])
			->setCellValue('D15', trim($data['birth_add']['municipality_city']).', ' . $data['birth_add']['province'])
			->setCellValue('M11', $data['emp_profile']['name_ex'])
			->setCellValue('D13', $data['emp_profile']['date_of_birth'])
			->setCellValue('D22', $data['emp_profile']['height'])
			->setCellValue('D24', $data['emp_profile']['weight'])
			->setCellValue('D25', $data['emp_profile']['blood_type'])
			->setCellValue('D27', $data['emp_profile']['gsisno'])
			->setCellValue('D29', $data['emp_profile']['pag_ibig_no'])
			->setCellValue('D31', $data['emp_profile']['philhealth_no'])
			->setCellValue('D32', $data['emp_profile']['sss_no'])
			->setCellValue('D33', $data['emp_profile']['tin_no'])
			->setCellValue('D34', $data['emp_profile']['agency_emp_no'])
			->setCellValue('I32', $data['emp_profile']['telephone'])
			->setCellValue('I33', $data['emp_profile']['mobile'])
			->setCellValue('D36', $data['get_spouse_info']['lname'])
			->setCellValue('D37', $data['get_spouse_info']['fname'])
			->setCellValue('D38', $data['get_spouse_info']['mname'])
			->setCellValue('D39', $data['get_spouse_info']['occupation'])
			->setCellValue('D40', $data['get_spouse_info']['bus_name'])
			->setCellValue('D41', $data['get_spouse_info']['bus_add'])
			->setCellValue('D42', $data['get_spouse_info']['tel_num'])
			->setCellValue('H37', $data['get_spouse_info']['name_ext'])
			->setCellValue('D43', $data['get_father_info']['father_lname'])
			->setCellValue('D44', $data['get_father_info']['father_fname'])
			->setCellValue('D45', $data['get_father_info']['father_mname'])
			->setCellValue('H44', $data['get_father_info']['father_ex'])
			->setCellValue('D46', trim($data['get_mother_info']['maiden_fname']) . ' ' . trim($data['get_mother_info']['maiden_mname']) . ' ' . trim($data['get_mother_info']['maiden_lname']))
			->setCellValue('D47', $data['get_mother_info']['lname'])
			->setCellValue('D48', $data['get_mother_info']['maiden_fname'])
			->setCellValue('D49', $data['get_mother_info']['maiden_lname'])
			->setCellValue('I34', $this->session->userdata('email'))
			->setCellValue('L60', date('m/d/Y'));

		/* start change jcd May 17, 2022 */
		$data['emp_profile']['sex'] === 'MALE' ? $this->checkbox($spreadsheet, 16, 8, 'D16') : $this->checkbox($spreadsheet, 5, 8, 'E16');

		switch ($data['emp_profile']['civil_status']) {
			case 'SINGLE': $this->checkbox($spreadsheet, 15, 3, 'D17'); break;
			case 'MARRIED': $this->checkbox($spreadsheet, 5, 2, 'E17'); break;
			case 'WIDOWED': $this->checkbox($spreadsheet, 15, -2, 'D18'); break;
			case 'SEPARATED': $this->checkbox($spreadsheet, 5, -2, 'E18'); break;
			default: $this->checkbox($spreadsheet, 15, 3, 'D19'); break;
		}
		
		$data['emp_profile']['citizenship'] === 'FILIPINO' ? $this->checkbox($spreadsheet, 9, 10, 'J13') : $this->checkbox($spreadsheet, 8, 11, 'L13');
		
		if ($data['emp_profile']['citizenship'] === 'DUAL CITIZENSHIP') {
			$spreadsheet->getActiveSheet()
			->setCellValue('J16', $data['emp_profile']['citizenship_country']);
			switch ($data['emp_profile']['ship_by']) {
				case 'BY BIRTH': $this->checkbox($spreadsheet, 34, 3, 'L14'); break;
				case 'BY NATURALIZATION': $this->checkbox($spreadsheet, 10, 2, 'M14'); break;
				
			}
		}
		else {
			$spreadsheet->getActiveSheet()
			->setCellValue('J16', $data['emp_profile']['citizenship_country']);
		}
		/* end change jcd May 17, 2022 */

    }

    private function resAdd($spreadsheet){
       $data['residential_add'] = $this->Address_model->residential_add($this->session->userdata('user_id'));
       $spreadsheet->getActiveSheet()
			->setCellValue('I17', $data['residential_add']['house_block_lotno'])
			->setCellValue('L17', $data['residential_add']['street_sitio'])
			->setCellValue('I19', $data['residential_add']['subdivision_village'])
			->setCellValue('L19', $data['residential_add']['barangay'])
			->setCellValue('I22', $data['residential_add']['municipality_city'])
			->setCellValue('L22', $data['residential_add']['province'])
			->setCellValue('I24', $data['residential_add']['zipcode']);
       
    }

    private function perAdd($spreadsheet){
       $data['permanent_add'] = $this->Address_model->permanent_add($this->session->userdata('user_id'));
       $spreadsheet->getActiveSheet()
			->setCellValue('I25', $data['permanent_add']['house_block_lotno'])
			->setCellValue('L25', $data['permanent_add']['street_sitio'])
			->setCellValue('I27', $data['permanent_add']['subdivision_village'])
			->setCellValue('L27', $data['permanent_add']['barangay'])
			->setCellValue('I29', $data['permanent_add']['municipality_city'])
			->setCellValue('L29', $data['permanent_add']['province'])
			->setCellValue('I31', $data['permanent_add']['zipcode']);
    }

    private function pds_child($spreadsheet, $currentRow = 37){
		$data['get_all_child'] = $this->exPDS->get_all_child();
		$align = new Alignment();
        foreach($data['get_all_child'] as $child){
			if (($child['lname'] === 'N/A') && ($child['fname'] === 'N/A')){
				$spreadsheet->getActiveSheet()
							->getStyle('I37:M37')
								->getAlignment()
								->setHorizontal($align::HORIZONTAL_CENTER);
				$spreadsheet->getActiveSheet()
					->setCellValue('I37', 'N/A')
					->setCellValue('M37', 'N/A');
			}
			elseif($child['xname'] === 'N/A'){
				$spreadsheet->getActiveSheet()
				->setCellValue('I'.$currentRow, trim($child['lname']). ' ' . trim($child['fname']).'. ' . trim($child['mname']))
				->setCellValue('M'.$currentRow, $child['bday']);

				$currentRow++;
			}
			else {
				$spreadsheet->getActiveSheet()
				->setCellValue('I'.$currentRow, trim($child['lname']). ' ' . trim($child['fname']). ' ' . trim($child['xname']). ' ' . trim($child['mname']))
				->setCellValue('M'.$currentRow, $child['bday']);

				$currentRow++;
			}
			
		}
    }

    private function pds_educbg($spreadsheet, $currentRow = 54){
		$data['get_educational'] = $this->Pds_model->get_educational();
        foreach($data['get_educational'] as $educ){
			$spreadsheet->getActiveSheet()
				->setCellValue('D'.$currentRow, $educ['school_name'] )
				->setCellValue('G'.$currentRow, $educ['degree'])
				->setCellValue('J'.$currentRow, $educ['from_date'])
				->setCellValue('K'.$currentRow, $educ['to_date'])
				->setCellValue('L'.$currentRow, $educ['highest_level'])
				->setCellValue('M'.$currentRow, $educ['year_graduated'])
				->setCellValue('N'.$currentRow, $educ['honors_received']);

			$currentRow++;
		}
    }

	private function csEligiblity($spreadsheet, $currentRow = 5){
		$data['get_eligibility'] = $this->exPDS->get_eligibility();
		$align = new Alignment();
		foreach($data['get_eligibility'] as $eligiblity){
			if ($eligiblity['service'] === 'N/A') {
				$spreadsheet->getActiveSheet()
							->getStyle('A5:M5')
								->getAlignment()
								->setHorizontal($align::HORIZONTAL_CENTER);
				$spreadsheet->getActiveSheet()
				->setCellValue('A5', 'N/A')
				->setCellValue('F5', 'N/A')
				->setCellValue('G5', 'N/A')
				->setCellValue('I5', 'N/A')
				->setCellValue('L5', 'N/A')
				->setCellValue('M5', 'N/A');
			}
			$spreadsheet->getActiveSheet()
				->setCellValue('A'.$currentRow, $eligiblity['service'] )
				->setCellValue('F'.$currentRow, $eligiblity['rating'])
				->setCellValue('G'.$currentRow, $eligiblity['date_conferment'] )
				->setCellValue('I'.$currentRow, $eligiblity['place_conferment'])
				->setCellValue('L'.$currentRow, $eligiblity['license_num'])
				->setCellValue('M'.$currentRow, $eligiblity['validity']);

			$currentRow++;
		}
		$spreadsheet->getActiveSheet()
				->setCellValue('J47', date('m/d/Y'));
	}

	private function workExp($spreadsheet, $currentRow = 18){
		$data['get_experience'] = $this->exPDS->get_experience();
		$align = new Alignment();
		foreach($data['get_experience'] as $exp){
			if ($exp['_from']) {
				$spreadsheet->getActiveSheet()
							->getStyle('A18:M18')
								->getAlignment()
								->setHorizontal($align::HORIZONTAL_CENTER);
				$spreadsheet->getActiveSheet()
					->setCellValue('A18','N/A')
					->setCellValue('C18','N/A')
					->setCellValue('D18','N/A')
					->setCellValue('G18','N/A')
					->setCellValue('J18','N/A')
					->setCellValue('K18','N/A')
					->setCellValue('L18','N/A')
					->setCellValue('M18','N/A');
			}
			$spreadsheet->getActiveSheet()
				->setCellValue('A'.$currentRow, $exp['_from'] )
				->setCellValue('C'.$currentRow, $exp['_to'])
				->setCellValue('D'.$currentRow, $exp['designation'] )
				->setCellValue('G'.$currentRow, $exp['company'])
				->setCellValue('J'.$currentRow, $exp['monthly_salary'])
				->setCellValue('K'.$currentRow, $exp['salary_grade'])
				->setCellValue('L'.$currentRow, $exp['appointment_status'])
				->setCellValue('M'.$currentRow, $exp['government']);

			$currentRow++;
		}
	}

	private function volWork($spreadsheet, $currentRow = 6){
		$data['get_voluntary'] = $this->exPDS->get_voluntary();
		$align = new Alignment();
		foreach($data['get_voluntary'] as $vol){
			if ($vol['_from'] === 'N/A') {
				$spreadsheet->getActiveSheet()
							->getStyle('A6:H6')
								->getAlignment()
								->setHorizontal($align::HORIZONTAL_CENTER);
				$spreadsheet->getActiveSheet()
					->setCellValue('A6','N/A')
					->setCellValue('E6','N/A')
					->setCellValue('F6','N/A')
					->setCellValue('G6','N/A')
					->setCellValue('H6','N/A');
			}
			$spreadsheet->getActiveSheet()
				->setCellValue('A'.$currentRow, $vol['name'] . ' ' . $vol['barangay'] . ', ' . $vol['municipality_city'])
				->setCellValue('E'.$currentRow, $vol['_from'])
				->setCellValue('F'.$currentRow, $vol['_to'] )
				->setCellValue('G'.$currentRow, $vol['hours'])
				->setCellValue('H'.$currentRow, $vol['position']);

			$currentRow++;
		}
	}
	
	private function learningIntervention($spreadsheet, $currentRow = 18){
		$data['get_trainings'] = $this->exPDS->get_trainings();
		$align = new Alignment();
		
		foreach($data['get_trainings'] as $train){
			if ($train['title'] === 'N/A') {
				$spreadsheet->getActiveSheet()
								->getStyle('A18:I18')
									->getAlignment()
									->setHorizontal($align::HORIZONTAL_CENTER);
				$spreadsheet->getActiveSheet()
					->setCellValue('A18', 'N/A')
					->setCellValue('E18', 'N/A')
					->setCellValue('F18', 'N/A')
					->setCellValue('G18', 'N/A')
					->setCellValue('H18', 'N/A')
					->setCellValue('I18', 'N/A');
			}
			$spreadsheet->getActiveSheet()
				->setCellValue('A'.$currentRow, $train['title'])
				->setCellValue('E'.$currentRow,  $train['_from'])
				->setCellValue('F'.$currentRow, $train['_to'])
				->setCellValue('G'.$currentRow, $train['hours'] )
				->setCellValue('H'.$currentRow, $train['type'])
				->setCellValue('I'.$currentRow, $train['sponsored']);

			$currentRow++;
		}
	}

	private function skills($spreadsheet, $currentRow = 42){
		$data['get_skills'] = $this->Pds_model->get_skills();
		$align = new Alignment();
		foreach($data['get_skills'] as $skill){
			if ($skill['special_skill'] === 'N/A') {
				$spreadsheet->getActiveSheet()
								->getStyle('A42')
									->getAlignment()
									->setHorizontal($align::HORIZONTAL_CENTER);
				$spreadsheet->getActiveSheet()
					->setCellValue('A42','N/A');
			}
			$spreadsheet->getActiveSheet()
				->setCellValue('A'.$currentRow, $skill['special_skill'] );
			$currentRow++;
		}
		$spreadsheet->getActiveSheet()
				->setCellValue('I50', date('m/d/Y'));
	}

	private function acadRecog($spreadsheet, $currentRow = 42){
		$data['get_distinctions'] = $this->Pds_model->get_distinctions();
		$align = new Alignment();
		foreach($data['get_distinctions'] as $recog){
			if ($recog['award_desc'] === 'N/A') {
				$spreadsheet->getActiveSheet()
								->getStyle('C42')
									->getAlignment()
									->setHorizontal($align::HORIZONTAL_CENTER);
				$spreadsheet->getActiveSheet()
					->setCellValue('C42','N/A');
			}
			$spreadsheet->getActiveSheet()
				->setCellValue('C'.$currentRow, $recog['award_desc'] );
			$currentRow++;
		}
	}

	private function orgMembership($spreadsheet, $currentRow = 42){
		$data['get_membership'] = $this->Pds_model->get_membership();
		$align = new Alignment();
		foreach($data['get_membership'] as $member){
			if ($member['assoc_name'] === 'N/A') {
				$spreadsheet->getActiveSheet()
								->getStyle('I42')
									->getAlignment()
									->setHorizontal($align::HORIZONTAL_CENTER);
				$spreadsheet->getActiveSheet()
					->setCellValue('I42','N/A');
			}
			$spreadsheet->getActiveSheet()
				->setCellValue('I'.$currentRow, $member['assoc_name']);
			$currentRow++;
		}
	}

	private function relative_info($spreadsheet){
		$data['get_rel_info'] = $this->Pds_model->get_rel_info();

		$data['get_rel_info']['third_degree'] === 'YES' ? $this->checkbox($spreadsheet, 20, 2, 'G6') : $this->checkbox($spreadsheet, 23, 3, 'I6');

		$data['get_rel_info']['fourth_degree'] === 'YES' ? $this->checkbox($spreadsheet, 20, 4, 'G8') : $this->checkbox($spreadsheet, 25, 4, 'I8');

		if (($data['get_rel_info']['third_degree'] === 'YES' && $data['get_rel_info']['fourth_degree'] === 'YES') || ($data['get_rel_info']['third_degree'] === 'YES' || $data['get_rel_info']['fourth_degree'] === 'YES')) {
			$spreadsheet->getActiveSheet()
				->setCellValue('H11', $data['get_rel_info']['relative_details']);
		}
	}

	private function violation_info($spreadsheet){
		$data['get_violation_info'] = $this->Pds_model->get_violation_info();

		$data['get_violation_info']['admin_offense'] === 'YES' ? $this->checkbox($spreadsheet, 20, 5, 'G13') : $this->checkbox($spreadsheet, 33, 6, 'I13');

		if ($data['get_violation_info']['admin_offense'] === 'YES') {
			$spreadsheet->getActiveSheet()
				->setCellValue('H15', $data['get_violation_info']['offense_desc']);
		}

		$data['get_violation_info']['criminal_charged'] === 'YES' ? $this->checkbox($spreadsheet, 20, 2, 'G18') : $this->checkbox($spreadsheet, 27, 2, 'I18');
		
		if ($data['get_violation_info']['criminal_charged'] === 'YES') {
			$spreadsheet->getActiveSheet()
				->setCellValue('K19', $data['get_violation_info']['crime_details'])
				->setCellValue('K20', $data['get_violation_info']['date_crime_filed'])
				->setCellValue('K21', $data['get_violation_info']['criminal_case_status']);
		}
	}

	private function conviction_info($spreadsheet){
		$data['get_conviction_info'] = $this->Pds_model->get_conviction_info();

		$data['get_conviction_info']['convicted'] === 'YES' ? $this->checkbox($spreadsheet, 20, 5, 'G23') : $this->checkbox($spreadsheet, 4, 6, 'J23');
		
		if ($data['get_conviction_info']['convicted'] === 'YES') {
			$spreadsheet->getActiveSheet()
				->setCellValue('H25', $data['get_conviction_info']['conviction_details']);
		}
	}

	private function separation_info($spreadsheet){
		$data['get_separation_info'] = $this->Pds_model->get_separation_info();

		$data['get_separation_info']['separated_from_service'] === 'YES' ? $this->checkbox($spreadsheet, 20, 3, 'G27') : $this->checkbox($spreadsheet, 1, 5, 'J27');
		
		if ($data['get_separation_info']['separated_from_service'] === 'YES') {
			$spreadsheet->getActiveSheet()
				->setCellValue('H29', $data['get_separation_info']['separation_desc']);
		}
	}

	private function candidacy_info($spreadsheet){
		$data['get_candidacy_info'] = $this->Pds_model->get_candidacy_info();

		$data['get_candidacy_info']['political_candidate'] === 'YES' ? $this->checkbox($spreadsheet, 21, 6, 'G31') : $this->checkbox($spreadsheet, 1, 5, 'J31');

		if ($data['get_candidacy_info']['political_candidate'] === 'YES') {
			$spreadsheet->getActiveSheet()
				->setCellValue('K32', $data['get_candidacy_info']['candidacy_details']);
		}

		$data['get_candidacy_info']['resigned_frm_gov'] === 'YES' ? $this->checkbox($spreadsheet, 22, 3, 'G34') : $this->checkbox($spreadsheet, 1, 3, 'J34');

		if ($data['get_candidacy_info']['resigned_frm_gov'] === 'YES') {
			$spreadsheet->getActiveSheet()
				->setCellValue('K35', $data['get_candidacy_info']['resignation_desc']);
		}
	}

	private function immigrant_info($spreadsheet){
		$data['get_immigrant_info'] = $this->Pds_model->get_immigrant_info();

		$data['get_immigrant_info']['foreign_residency'] === 'YES' ? $this->checkbox($spreadsheet, 22, 5, 'G37') : $this->checkbox($spreadsheet, 1, 5, 'J37');

		if ($data['get_immigrant_info']['foreign_residency'] === 'YES') {
			$spreadsheet->getActiveSheet()
				->setCellValue('H39', $data['get_immigrant_info']['residency_details']);
		}
	}

	private function previlege_info($spreadsheet){
		$data['get_previlage_info'] = $this->Pds_model->get_previlage_info();
		
		$data['get_previlage_info']['member_of_ig'] === 'YES' ? $this->checkbox($spreadsheet, 22, 2, 'G43') : $this->checkbox($spreadsheet, 1, 3, 'J43');

		if ($data['get_previlage_info']['member_of_ig'] === 'YES') {
			$spreadsheet->getActiveSheet()
				->setCellValue('L44', $data['get_previlage_info']['ig_desc']);
		}

		$data['get_previlage_info']['pwd'] === 'YES' ? $this->checkbox($spreadsheet, 22, 2, 'G45') : $this->checkbox($spreadsheet, 1, 2, 'J45');

		if ($data['get_previlage_info']['pwd'] === 'YES') {
			$spreadsheet->getActiveSheet()
				->setCellValue('L46', $data['get_previlage_info']['pwd_id_no']);
		}
		
		$data['get_previlage_info']['solo_parent'] === 'YES' ? $this->checkbox($spreadsheet, 22, 2, 'G47') : $this->checkbox($spreadsheet, 1, 2, 'J47');

		if ($data['get_previlage_info']['solo_parent'] === 'YES') {
			$spreadsheet->getActiveSheet()
				->setCellValue('L48', $data['get_previlage_info']['solo_parent_id_number']);
		}


	}

	private function references($spreadsheet, $currentRow = 52){
		$data['get_ref'] = $this->Pds_model->get_ref();
		foreach($data['get_ref'] as $reference){
			$spreadsheet->getActiveSheet()
				->setCellValue('A'.$currentRow, $reference['ref_fname'] . ' ' . $reference['ref_mname'] . ' ' . $reference['ref_lname'])
				->setCellValue('F'.$currentRow, trim($reference['barangay']). ', ' . $reference['municipality_city'])
				->setCellValue('G'.$currentRow, $reference['ref_telno']);
			$currentRow++;
		}
		$spreadsheet->getActiveSheet()
				->setCellValue('F64', date('m/d/Y'));
	}
	
	private function govID($spreadsheet){
		$data['get_id'] = $this->exPDS->get_id();
		$spreadsheet->getActiveSheet()
			->setCellValue('D61', $data['get_id']['id_desc'])
			->setCellValue('D62', $data['get_id']['idno'])
			->setCellValue('D64', $data['get_id']['date_issued'] . '/' . $data['get_id']['place_issued']);

	}

	private function export($spreadsheet){
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

		header('Content-Disposition: attachment;filename=result.xlsx');

		$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
		ob_end_clean();
		$writer->save('php://output');
        redirect('Pds/view_finished_pds');
	}

	private function checkbox($spreadsheet, $offsetX, $offsetY, $coordinate, $height= 13, $path = PUBLIC_DIR . '\export_pds\Checkboxes\checked.png'){
		$checked = new Drawing();
		$checked->setPath($path);
		$checked->setHeight($height); 
		$checked->setOffsetX($offsetX); 
		$checked->setOffsetY($offsetY); 
		$checked->setCoordinates($coordinate); 
		$checked->setWorksheet($spreadsheet->getActiveSheet());
		
	}

	private function photo($spreadsheet, $offsetX, $offsetY, $coordinate, $height = 171, $path = 'C:\xampp\htdocs\hrmis\uploads\IMG_20190128_074128_845.JPG'){
		$photo = new Drawing();
		$photo->setPath($path);
		$photo->setHeight($height); 
		$photo->setOffsetX($offsetX); 
		$photo->setOffsetY($offsetY); 
		$photo->setCoordinates($coordinate); 
		$photo->setWorksheet($spreadsheet->getActiveSheet());
		
	}

	/* end change jcd May 15, 2022 */

}
?>
