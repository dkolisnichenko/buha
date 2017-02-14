<?php 




//$table_title = array("first" => "php", "second" => "html", "third" => "css");

//$table_data = array("first" => "php_d", "second" => "html5", "third" => "css3");




require_once ('config.php');
require_once ('Table.php');
include 'head.php';
include 'body.php';


$title_table = array( "php",  "html",  "css");
$data_table = array( "php_d", "html5",  "css3", "php_der",  "html5er",  "css3erer");
  
$table = new Table();
$table -> setStyleTable("table table-hover","active","info");
$data  = $table -> getTable("Расходы",$title_table ,$data_table);

 include 'table_template.php';


$table1 = new Table();
$table1 -> setStyleTable("table table-hover","active","info");
$data  = $table1 -> getTable("Доходы",$title_table ,$data_table);

 include 'table_template.php';

$table2 = new AdminTable();
$table2 -> setStyleTable("table table-hover","active","info");
$data  = $table2 -> getAdminTable("Доходы","dohod",$title_table ,$data_table,["1","2"]);

 include 'table_template.php';




  

