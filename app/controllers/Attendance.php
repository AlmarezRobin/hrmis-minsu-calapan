<?php
    defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

    class Attendance extends Controller {
        public function index(){
            $data = [
                'get_all_attendance'=>$this->Attendance_model->get_all_attendance()
        ];
            $this->call->view('attendance/attendance',$data);
        }

       
        
        public function import_attendance(){
            if (isset($_POST['submit'])) {
  
                $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                  
                if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {
                  
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
            
                        $date_counter = 0;
                        $select_date = true;
                        $skip_counter = 0;
                        $skip = true;
            
                        for($count = 0; $count < count($sheetData); $count++ ){
            
                            if($spreadsheet->getActiveSheet()->getCell('A'.$count)->getValue() == 'Employee Name'){
                                $name = $spreadsheet->getActiveSheet()->getCell('C'.$count)->getValue();
                            }
                            if(str_contains($spreadsheet->getActiveSheet()->getCell('A'.$count)->getValue(),'Month:')){
                                $month = ltrim( $spreadsheet->getActiveSheet()->getCell('A'.$count)->getValue(),'Month:');
                            }
                            if(str_contains($spreadsheet->getActiveSheet()->getCell('D'.$count)->getValue(),'Year:')){
                                $year = ltrim( $spreadsheet->getActiveSheet()->getCell('D'.$count)->getValue(),'Year:');
                            }
            
                            //month & year
            
                            if($count >= 7){
            
                                if($select_date == true)
                                {
            
                                      $date_counter++;
                                       $var1 = $sheetData[$count][0];
                                       $var2 = rtrim($sheetData[$count][1],'AM');
                                       $var3 = rtrim($sheetData[$count][2],'PM');
                                       $var4 = rtrim($sheetData[$count][3],'PM');
                                       $var5 = rtrim($sheetData[$count][4],'PM');
                                       $var6 = $sheetData[$count][5];
                                       $var7 = $sheetData[$count][6];
                                       $var8 = $sheetData[$count][7];
                                       $var9 = $sheetData[$count][8];
                                       $var10 = $sheetData[$count][9];
                                       $var11 = $sheetData[$count][10];
                                       $var12 = $sheetData[$count][11];
                                      $realDay = day_of_month(trim($month), trim($year));

                                      $this->Attendance_model->import_attendance(
                                          $month,
                                          $year,
                                          $name, 
                                          $var1, 
                                          $var2,
                                          $var3, 
                                          $var4,
                                          $var5, 
                                          $var6,
                                          $var7, 
                                          $var8,
                                          $var9, 
                                          $var10,
                                          $var11, 
                                          $var12);
                                    // insert to db
                                    // $db->query("INSERT INTO attendace_tbl(month,year,emp_name,date,inam,outam,inpm,	outpm,	inot,	outot,	rot,	sot,	nd,	lt_ut,	lwop) VALUES('$month','$year','$name', '$var1', '$var2','$var3', '$var4','$var5', '$var6','$var7', '$var8','$var9', '$var10','$var11', '$var12') ");
            
                                   
                                    if($date_counter > $realDay){ // get last day of month
                                        $select_date = false;
                                        $date_counter = 0;
                                        $skip = true;
                                    }
                                  
                                }
            
                                if($skip == true)
                                {
                                    $skip_counter++;
            
                                    if($skip_counter > 12){
                                        $select_date = true;
                                        $skip = false;
                                        $skip_counter = 0;
                                        
                                    }
                                    
                                }
                            }
            
                        }
            
                    }
                  echo '';
                    redirect('Attendance');
                    // "Records inserted successfully. " ;
                } else {
                    echo "Upload only CSV or Excel file.";
                }
            }
            
            
        }

        #region
        public function get_all_attendance(){

        }
        #endregion













    }
    function day_of_month($month, $year)
        {
            $day = 0;
            switch ($month) {
                case 'January':
                case 'March':
                case 'May':
                case 'July':
                case 'August':
                case 'October':
                case 'December': return $day = 31; break;
                case 'April':
                case 'June':
                case 'September':
                case 'November': return $day = 30; break;
                case 'February': if ($year % 4 == 0) {
                    return $day = 29;
                }
                else{
                    return $day = 28;
                }
                break;
            }
        }
?>
