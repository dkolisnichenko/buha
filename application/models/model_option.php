<?php 
class Model_Option extends Model
{
      
	public function get_data()
	{	  
         $conect = new DB();   
               
        $data_table = $conect -> get_db_data('kat');
        $title_table = $conect -> get_db_data('kat_title');
        
        $data_table1 = $conect -> get_db_data('item');
        $title_table1 = $conect -> get_db_data('item_title');
        
        $data_table2 = $conect -> get_db_data('card_operation');
        $title_table2 = $conect -> get_db_data('card_operation_title');
  
        $arr[0]=$title_table;
        $arr[1]=$data_table; 
        $arr[2]=$title_table1;
        $arr[3]=$data_table1;  
        $arr[4]=$title_table2;
        $arr[5]=$data_table2;
                		
        return $arr;
	}
}