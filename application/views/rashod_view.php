<div class="container">
  
      <div  class="table-responsive"> 
          
    <?php    
$table = new AdminTable();
$table -> setStyleTable("table table-hover","active","info");
$html_code  = $table -> getAdminTable("Расходы","rashod",$title_table, $data_table,$id);
print($html_code);
                       
          ?>  
                                
            </div> 
    <br>
</div>