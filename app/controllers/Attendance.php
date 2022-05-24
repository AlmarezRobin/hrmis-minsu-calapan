<?php
    defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

    class Attendance extends Controller {
        public function index(){
            $this->call->view('attendance/attendance');
        }


        public function import_attendance(){
            if ($this->form_validation->submitted()) {
                if($this->form_validation->run()){
                    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      
                    if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) 
                    {
                    
                        $arr_file = explode('.', $_FILES['file']['name']);
                        $extension = end($arr_file);
                    
                        if('csv' == $extension) {
                            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                        } else {
                            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                        }
                
                        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);
                
                        $sheetData = $spreadsheet->getActiveSheet()->toArray();

                        if (!empty($sheetData)) {
                            for ($i=7; $i<count($sheetData); $i++) 
                            { //skipping the first 7 row


                                //para makuha ung specific na value ng bawat cell base sa selected cell
                                // $month = $spreadsheet->getActiveSheet()->getCell('A3')->getValue();
                                // $year = $spreadsheet->getActiveSheet()->getCell('D3')->getValue();
                                // $name = $spreadsheet->getActiveSheet()->getCell('C4')->getValue();
                                // $dept = $spreadsheet->getActiveSheet()->getCell('C5')->getValue();



                                // $var1 = $sheetData[$i][0];
                                // $var2 = $sheetData[$i][1];
                                // $var3 = $sheetData[$i][2];
                                // $var4 = $sheetData[$i][3];
                                // $var5 = $sheetData[$i][4];
                                // $var6 = $sheetData[$i][5];
                                // $var7 = $sheetData[$i][6];
                                // $var8 = $sheetData[$i][7];
                                // $var9 = $sheetData[$i][8];
                                // $var10 = $sheetData[$i][9];
                                // $var11 = $sheetData[$i][10];
                                // $var12 = $sheetData[$i][11];
                                
                                // $this->Attendance_model->import_attendance($this->io->post($month),$this->io->post($year),$this->io->post($name),$this->io->post($dept),$this->io->post($var1),$this->io->post($var2),$this->io->post($var3),$this->io->post($var4),$this->io->post($var5),$this->io->post($var6),$this->io->post($var7),$this->io->post($var8),$this->io->post($var9),$this->io->post($var10),$this->io->post($var11),$this->io->post($var12));

                                $this->Attendance_model->import_attendance(
                                    $this->io->post($spreadsheet->getActiveSheet()->getCell('A3')->getValue()),
                                    $this->io->post($spreadsheet->getActiveSheet()->getCell('D3')->getValue()),
                                    $this->io->post($spreadsheet->getActiveSheet()->getCell('C4')->getValue()),
                                    $this->io->post($spreadsheet->getActiveSheet()->getCell('C5')->getValue()),
                                    $this->io->post($sheetData[$i][1]),
                                    $this->io->post($sheetData[$i][2]),
                                    $this->io->post($sheetData[$i][3]),
                                    $this->io->post($sheetData[$i][4]),
                                    $this->io->post($sheetData[$i][5]),
                                    $this->io->post($sheetData[$i][6]),
                                    $this->io->post($sheetData[$i][7]),
                                    $this->io->post($sheetData[$i][8]),
                                    $this->io->post($sheetData[$i][9]),
                                    $this->io->post($sheetData[$i][10]),
                                    $this->io->post($sheetData[$i][11]));

                                // $db->query("INSERT INTO attendace_tbl(month,year,emp_name,department,date,inam,outam,inpm,	outpm,	inot,	outot,	rot,	sot,	nd,	lt_ut,	lwop) VALUES('$month','$year','$name','$dept', '$var1', '$var2','$var3', '$var4','$var5', '$var6','$var7', '$var8','$var9', '$var10','$var11', '$var12')");
                            }
                        }
                        echo "Records inserted successfully.";
                    } 
                    else {
                        echo "Upload only CSV or Excel file.";
                    }
                }
            }
            
        }
    }
?>
