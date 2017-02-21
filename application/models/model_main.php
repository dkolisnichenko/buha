<?php 
class Model_Main extends Model
{
    
         
	public function get_data()
	{	        
            
   $conect = new DB();   
               
        $data_table = $conect -> get_db_data('full');
        $title_table = $conect -> get_db_data('full_title');
        
        $data_table1 = $conect -> get_db_data('card_zp');
        $title_table1 = $conect -> get_db_data('card_zp_title');
        
        $data_table2 = $conect -> get_db_data('full_d');
        $title_table2 = $conect -> get_db_data('full_d_title');
  
        $arr[0]=$title_table;
        $arr[1]=$data_table; 
        $arr[2]=$title_table1;
        $arr[3]=$data_table1;  
        $arr[4]=$title_table2;
        $arr[5]=$data_table2;
        
        

		
        return $arr;
	}
}