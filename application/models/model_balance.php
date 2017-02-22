<?php 
class Model_Balance extends Model
{
      
	public function get_data()
	{	        
        $conect = new DB();   
               
        $data_table = $conect -> get_db_data('card_zp','date','id,date,operation,zp_nach,zp_sn,correction,coment');
        $title_table = $conect -> get_db_data('card_zp_title','id','id,date,operation,zp_nach,zp_sn,correction,coment');
        
        $arr[0]=$title_table;        
       $arr[1]=$data_table;
      
        
return $arr;    

	}
}