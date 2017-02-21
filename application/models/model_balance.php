<?php 
class Model_Balance extends Model
{
      
	public function get_data()
	{	        
        $conect = new DB();   
               
        $data_table = $conect -> get_db_data('card_zp');
        $title_table = $conect -> get_db_data('card_zp_title');
        
        $arr[0]=$title_table;        
       $arr[1]=$data_table;
      
        
return $arr;    

	}
}