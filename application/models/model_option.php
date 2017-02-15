<?php 
class Model_Option extends Model
{
      
	public function get_data()
	{	        
            
$title_table = array( "php",  "html",  "css");
$data_table = array( "php_d", "html5",  "css3", "php_der",  "html5er",  "css3erer");
$id =["1","2"];
        
$title_table1 = array( "Статья Баланса");
$data_table1 = array( "php_d", "html5",  "css3", "php_der",  "html5er",  "css3erer");
$id1 =["1","2","3","4","5","6"];
  
$table = new AdminTable();
$table -> setStyleTable("table table-hover","active","info");
$data  .= $table -> getAdminTable("Категории","category",$title_table ,$data_table,$id);
        
//$table1 = new AdminTable();
$table -> setStyleTable("table table-hover","active","info");
$data  .= $table -> getAdminTable("Статьи","item",$title_table ,$data_table,$id);
        
//$table1 = new AdminTable();
$table -> setStyleTable("table table-hover","active","info");
$data  .= $table -> getAdminTable("Статьи Баланса","cat_balance",$title_table1 ,$data_table1,$id1);


		
        return $data;
	}
}