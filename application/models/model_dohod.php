<?php 
class Model_Dohod extends Model
{
      
	public function get_data()
	{	        
            
$title_table = array( "php",  "html",  "css");
$data_table = array( "php_d", "html5",  "css3", "php_der",  "html5er",  "css3erer");
        $id =["1","2"];
  
$table = new AdminTable();
$table -> setStyleTable("table table-hover","active","info");
$data  = $table -> getAdminTable("Доходы","dohod",$title_table ,$data_table,$id);

		
        return $data;
	}
}