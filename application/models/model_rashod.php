<?php 
class Model_Rashod extends Model
{
      
	public function get_data()
	{	        
        $conect = new DB();   
        
        $data_table = $conect -> get_db_data('full','date');
        $title_table = $conect -> get_db_data('full_title');
        
        $arr[0]=$title_table;        
       $arr[1]=$data_table;
      
        
return $arr;
     
	}
    

}