<?php

class DB {    
            
private $MYSQL_SERVER ='localhost';
private $MYSQL_USER= 'root';
private $MYSQL_PASSWORD='';
private $MYSQL_DB='buh';
    
    public function get_db_data($table = null, $sort = 'id') {
      
        $mysqli = new mysqli($this -> MYSQL_SERVER, $this -> MYSQL_USER, $this -> MYSQL_PASSWORD, $this -> MYSQL_DB );

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}

/* Select запросы возвращают результирующий набор */
       /* $n = 1 ;
      foreach ($col as $a) {
       
          if ($n != count($col)){
               $columns .= $a.',';
                   $n++;
          } else  $columns .= $a;
   
      }  */     
           
    $query = "SELECT * FROM $table  ORDER BY $sort DESC lIMIT 20";
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

        return $arr;
        
    }
    
        
    private function set_db_data() {
        
        
    }
    

    
}