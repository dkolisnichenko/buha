
  
      <div  class="table-responsive"> 
          
    <?php    
$table = new AdminTable();
$table -> setStyleTable("table table-hover","active","info");
$html_code  = $table -> getAdminTable("Доходы","dohod",$title_table, $data_table);
print($html_code);
                       
          ?>  
                                
            </div> 
