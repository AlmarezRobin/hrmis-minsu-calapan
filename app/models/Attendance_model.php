<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Attendance_model extends Model {

    public function import_attendance($month,$year,$name,$var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8,$var9,$var10,$var11,$var12){
        $data = [
            'month'         =>$month,
            'year'          =>$year,
            'emp_name'      =>$name,
            'date'          =>$var1,
            'inam'          =>$var2,
            'outam'         =>$var3,
            'inpm'          =>$var4,
            'outpm'         =>$var5,
            'inot'          =>$var6,
            'outot'         =>$var7,
            'rot'           =>$var8,
            'sot'           =>$var9 ,    
            'nd'            =>$var10,
            'lt_ut'         =>$var11,
            'lwop'          =>$var12
        ];
        return $this->db->table('attendace_tbl')->insert($data);

    }
    public function get_all_attendance(){
        return $this->db->table('attendace_tbl')->order_by('date_imported','DESC')->get_all();
            
    }

    
	
}
?>
