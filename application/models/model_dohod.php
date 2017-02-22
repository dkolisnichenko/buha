<?php 
class Model_Dohod extends Model
{
      
	public function get_data()
	{	        
         $conect = new DB();   
               
        $data_table = $conect -> get_db_data('full_d','date','id,date,kat,item,sum,coment');
       $title_table = $conect -> get_db_data('full_d_title','id','id,date,kat,item,sum,coment');
        
         //$title_table =['1','2','3','1','2','3'];
        $arr[0]=$title_table;        
       $arr[1]=$data_table;
      
        
return $arr;
	}
}