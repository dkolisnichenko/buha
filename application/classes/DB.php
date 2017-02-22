<?php

class DB {    
            
private $MYSQL_SERVER ='localhost';
private $MYSQL_USER= 'root';
private $MYSQL_PASSWORD='';
private $MYSQL_DB='buh';
    
    public function get_db_data($table = null, $sort = 'id',$columns ='*') {
      
    $mysqli = new mysqli($this -> MYSQL_SERVER, $this -> MYSQL_USER, $this -> MYSQL_PASSWORD, $this -> MYSQL_DB );

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}
        $date_column ='No';
        $count_title= substr_count($table,'title');
        $arr_col=explode(',',$columns);
        $length_arr_col = count($arr_col);
        
        for($i = 0; $i < $length_arr_col; $i++){            
            if($arr_col[$i] == 'date') {
                $position= $i;
                 $date_column ='Yes';
                break;
            }
        }
        
        
/* Select запросы возвращают результирующий набор */
       /* $n = 1 ;
      foreach ($col as $a) {
       
          if ($n != count($col)){
               $columns .= $a.',';
                   $n++;
          } else  $columns .= $a;
   
      }  */     
           
    $query = "SELECT $columns FROM $table  ORDER BY $sort DESC lIMIT 20";
if ($result = $mysqli->query($query)) {     
       while ($row = $result->fetch_row()) {
           for ($i = 0; $i < count($row); $i++) {               
               $arr[]=$row[$i];               
           }     
    }

    
    /* очищаем результирующий набор */
    $result->close();
}

$mysqli->close();   
           
   if ($date_column == 'Yes' & $count_title <= 0) { 
       
        while($position < count($arr) ){
            
            $date = date_create($arr[$position]);
            $arr[$position] =date_format($date, 'd.m.Y'); 
            $position +=$length_arr_col;
                
        }
   }

        return $arr;
        
    }
    
        
    private function set_db_data() {
        
        
    }
    

    
}