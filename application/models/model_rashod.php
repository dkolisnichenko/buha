<?php 
class Model_Rashod extends Model
{
      
	public function get_data()
	{	        
        
$title_table = array( "php",  "html",  "css");
  $arr[0]=$title_table;
                 
$data_table = array( "php_d", "html5",  "css3", "php_der",  "html5er",  "css3erer");   
       $arr[1]=$data_table;
        
        $id =["1","2"];
        $arr[2]=$id;
        
return $arr;
     
	}
    

}