<?php 
class Model_Rashod extends Model
{
      
	public function get_data()
	{	        
        $conect = new DB();   
        
        $data_table = $conect -> get_db_data('full','date','id,date,kat,item,sum,coment');
        $title_table = $conect -> get_db_data('full_title','id','id,date,kat,item,sum,coment');
        
        $arr[0]=$title_table;        
       $arr[1]=$data_table;
      
        
return $arr;
     
	}
    

}