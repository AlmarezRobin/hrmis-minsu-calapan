<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
class Export_PDS extends Controller {
	/* start change jcd May 15, 2022 */
    public function pds_exportation(){
		$reader = IOFactory::createReader('Xlsx');
		$spreadsheet = $reader->load('D:\Desktop\Second Sem\3 ITP321 Capstone Project 1\Caspstone Project\pdsForCapstone.xlsx');
		$spreadsheet->setActiveSheetIndex(0);
		$this->checkbox($spreadsheet, 10, 2, 'M14');
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
		$this->references($spreadsheet);
		$this->govID($spreadsheet);

		$spreadsheet->setActiveSheetIndex(0);
        $this->export($spreadsheet);
	}
	
    private function personal_info($spreadsheet){
        $data['emp_profile'] = $this->Employee_model->emp_profile($this->session->userdata('user_id'));
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
			->setCellValue('D46', trim($data['get_mother_info']['maiden_lname']) . ' ' . trim($data['get_mother_info']['maiden_fname']) . ' ' . trim($data['get_mother_info']['maiden_mname']))
			->setCellValue('D47', $data['get_mother_info']['lname'])
			->setCellValue('D48', $data['get_mother_info']['maiden_fname'])
			->setCellValue('D49', $data['get_mother_info']['maiden_lname'])
			->setCellValue('I34', $this->session->userdata('email'))
			->setCellValue('L60', date('m/d/Y'));
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
		$data['get_all_child'] = $this->Pds_model->get_all_child();
        foreach($data['get_all_child'] as $child){
			$spreadsheet->getActiveSheet()
				->setCellValue('I'.$currentRow, trim($child['lname']). ' ' . trim($child['fname']). ' ' . trim($child['xname']).'. ' . trim($child['mname']))
				->setCellValue('M'.$currentRow, $child['bday']);

			$currentRow++;
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
		$data['get_eligibility'] = $this->Pds_model->get_eligibility();
		foreach($data['get_eligibility'] as $eligiblity){
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
		$data['get_experience'] = $this->Pds_model->get_experience();
		foreach($data['get_experience'] as $exp){
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
		$data['get_voluntary'] = $this->Pds_model->get_voluntary();
		foreach($data['get_voluntary'] as $vol){
			$spreadsheet->getActiveSheet()
				->setCellValue('A'.$currentRow, $vol['name'] . ' ' . $vol['org_address'])
				->setCellValue('E'.$currentRow, $vol['_from'])
				->setCellValue('F'.$currentRow, $vol['_to'] )
				->setCellValue('G'.$currentRow, $vol['hours'])
				->setCellValue('H'.$currentRow, $vol['position']);

			$currentRow++;
		}
	}
	
	private function learningIntervention($spreadsheet, $currentRow = 18){
		$data['get_trainings'] = $this->Pds_model->get_trainings();
		foreach($data['get_trainings'] as $train){
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
		foreach($data['get_skills'] as $skill){
			$spreadsheet->getActiveSheet()
				->setCellValue('A'.$currentRow, $skill['special_skill'] );
			$currentRow++;
		}
		$spreadsheet->getActiveSheet()
				->setCellValue('I50', date('m/d/Y'));
	}

	private function acadRecog($spreadsheet, $currentRow = 42){
		$data['get_distinctions'] = $this->Pds_model->get_distinctions();
		foreach($data['get_distinctions'] as $recog){
			$spreadsheet->getActiveSheet()
				->setCellValue('C'.$currentRow, $recog['award_desc'] );
			$currentRow++;
		}
	}

	private function orgMembership($spreadsheet, $currentRow = 42){
		$data['get_membership'] = $this->Pds_model->get_membership();
		foreach($data['get_membership'] as $member){
			$spreadsheet->getActiveSheet()
				->setCellValue('I'.$currentRow, $member['assoc_name']);
			$currentRow++;
		}
	}
	
	private function references($spreadsheet, $currentRow = 52){
		$data['get_ref'] = $this->Pds_model->get_ref();
		foreach($data['get_ref'] as $reference){
			$spreadsheet->getActiveSheet()
				->setCellValue('A'.$currentRow, $reference['ref_fname'])
				->setCellValue('F'.$currentRow, $reference['ref_mname'])
				->setCellValue('G'.$currentRow, $reference['ref_lname']);
			$currentRow++;
		}
	}
	
	private function govID($spreadsheet){
		$data['get_id'] = $this->Pds_model->get_id();
		$spreadsheet->getActiveSheet()
			->setCellValue('D61', $data['get_id']['id_desc'])
			->setCellValue('D62', $data['get_id']['idno'])
			->setCellValue('D64', $data['get_id']['date_issued']);

	}

	private function export($spreadsheet){
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

		header('Content-Disposition: attachment;filename=result.xlsx');

		$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
		ob_end_clean();
		$writer->save('php://output');
        redirect('Pds/view_finished_pds');
	}

	private function checkbox($spreadsheet, $offsetX, $offsetY, $coordinate, $height= 13, $path = 'D:\Desktop\Second Sem\3 ITP321 Capstone Project 1\Caspstone Project\Checkboxes\checked.png'){
		$checked = new Drawing();
		$checked->setPath($path);
		$checked->setHeight($height); 
		$checked->setOffsetX($offsetX); 
		$checked->setOffsetY($offsetY); 
		$checked->setCoordinates($coordinate); 
		$checked->setWorksheet($spreadsheet->getActiveSheet());
		
	}

	/* end change jcd May 15, 2022 */

}
?>
