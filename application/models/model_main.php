<?php 
class Model_Main extends Model
{
    
         
	public function get_data()
	{	        
            
$title_table = array( "php",  "html",  "css");
$data_table = array( "php_d", "html5",  "css3", "php_der",  "html5er",  "css3erer");
  
$table = new Table();
$table -> setStyleTable("table table-hover","active","info");
$data  .= $table -> getTable("Расходы",$title_table ,$data_table);
        
$table = new Table();
$table -> setStyleTable("table table-hover","active","info");
$data  .= $table -> getTable("Баланс",$title_table ,$data_table);
        
$table = new Table();
$table -> setStyleTable("table table-hover","active","info");
$data  .= $table -> getTable("Доходы",$title_table ,$data_table);
		
        return $data;
	}
}