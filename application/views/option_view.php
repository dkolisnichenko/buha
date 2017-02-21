     <div  class="table-responsive"> 
          
    <?php    
$table = new AdminTable();
$table -> setStyleTable("table table-hover","active","info");
$html_code  = $table -> getAdminTable("Таблица Категорий","cat",$title_table, $data_table);
print($html_code);
                       
          ?>  
                                
            </div> 

<br>

     <div  class="table-responsive"> 
          
    <?php    
$table = new AdminTable();
$table -> setStyleTable("table table-hover","active","info");
$html_code  = $table -> getAdminTable("Таблица Статей","item",$title_table1, $data_table1);
print($html_code);
                       
          ?>  
                                
            </div> 

<br>
     <div  class="table-responsive"> 
          
    <?php    
$table = new AdminTable();
$table -> setStyleTable("table table-hover","active","info");
$html_code  = $table -> getAdminTable("Таблица операций по карте",'card',$title_table2, $data_table2);
print($html_code);
                       
          ?>  
                                
            </div> 