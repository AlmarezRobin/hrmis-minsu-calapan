<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
class Export_Locator extends Controller {
	

	public function __construct() {
		parent::__construct();

		$this->call->model('Export_Locator_model', 'loc');
	}
    public function export_locator($id)
    {
		$reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load(PUBLIC_DIR .'\export_locator\Locator.xlsx');
		$data['export_locator'] = $this->loc->export_locator($id);
		
		$spreadsheet->getActiveSheet()
			->setCellValue('I7', $data['export_locator']['current_datetime'])
			->setCellValue('H14', $data['export_locator']['departure_time'])
			->setCellValue('D15', $data['export_locator']['location'])
			->setCellValue('D15', $data['export_locator']['location'])
			->setCellValue('B17', $data['export_locator']['reason'])
			->setCellValue('F20', $data['export_locator']['expected_arrival_time'])
			->setCellValue('H24', $data['export_locator']['f_name']. ' ' . $data['export_locator']['m_name'] . ' '. $data['export_locator']['l_name'])
			->setCellValue('H26', $data['export_locator']['designation_desc']);

		$this->export($spreadsheet);

    }
	private function locator_details($spreadsheet, $id)
	{
		
	}
    private function export($spreadsheet){
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

		header('Content-Disposition: attachment;filename=locator.xlsx');

		$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
		ob_end_clean();
		$writer->save('php://output');
        redirect('Locator');
	}
}
?>
