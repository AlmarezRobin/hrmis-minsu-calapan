<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
class Export_Locator extends Controller {
	

    public function export_locator()
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
