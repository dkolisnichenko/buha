<?php

class DB {    
            
private $MYSQL_SERVER ='localhost';
private $MYSQL_USER= 'root';
private $MYSQL_PASSWORD='';
private $MYSQL_DB='buh';
    
    public function get_db_data_id($table = null, $id=1) {
      
    $mysqli = new mysqli($this -> MYSQL_SERVER, $this -> MYSQL_USER, $this -> MYSQL_PASSWORD, $this -> MYSQL_DB );

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}
       $column ='id';
    if($table =='kat') $column='id_kat';
    if($table =='item') $column='id_item';
    if($table =='card_operation') $column='id_operation';
        
        !!!
$query = "SELECT date,sum,coment FROM $table WHERE $column =$id";
if ($result = $mysqli->query($query)) {     
    while ($row = $result->fetch_row()) {
        $data['date']=$row[0];
        $data['sum']=$row[1];
        $data['coment']=$row[2];
      
    }  
     
       $result->close();
}
$mysqli->close();            

        return $data;        
    }
    
    
    
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
        
$query = "SELECT $columns FROM $table ORDER BY $sort DESC lIMIT 20";
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
    
        
public function set_db_data($table,$date,$kat,$item,$sum,$coment) {
        
$mysqli = new mysqli($this -> MYSQL_SERVER, $this -> MYSQL_USER, $this -> MYSQL_PASSWORD, $this -> MYSQL_DB );

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}
        
        $date= $mysqli->real_escape_string($date);
        $kat = $mysqli->real_escape_string($kat);
        $item= $mysqli->real_escape_string($item);
        $sum= $mysqli->real_escape_string($sum);
        $coment= $mysqli->real_escape_string($coment);

if ($mysqli->query("INSERT into $table (date,kat,item,sum,coment) VALUES ('$date','$kat','$item','$sum','$coment')")) {
    $data = "Cтрока успешно добавлена в таблицу $table";
}

$mysqli->close();
    
        return $data;
        
    }
    

    
public function set_db_data_balance ($date, $operation, $sum, $coment ) {
        
$mysqli = new mysqli($this -> MYSQL_SERVER, $this -> MYSQL_USER, $this -> MYSQL_PASSWORD, $this -> MYSQL_DB );

if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}
        $date = $mysqli->real_escape_string($date);
        $operation = $mysqli->real_escape_string($operation);     
        $sum= $mysqli->real_escape_string($sum);
        $coment= $mysqli->real_escape_string($coment);

    //Определяем колонку в таблице для записи sum.
if(substr_count($operation,'Корректировка') > 0)
    $column = 'correction'; 
if(substr_count($operation,'Снятие') > 0 or substr_count($operation,'Оплата') > 0)
    $column = 'zp_sn';  
if(substr_count($operation,'Зачисление') > 0 or substr_count($operation,'Начисление') > 0)
    $column = 'zp_nach';
            
if ($mysqli->query("INSERT into card_zp (date,operation,$column,coment) VALUES ('$date','$operation','$sum','$coment')")) {
    $data = "Cтрока успешно добавлена в таблицу!";
}

$mysqli->close();
    
        return $data;
        
    }
    
    public function set_db_data_option($table,$column) {
        
$mysqli = new mysqli($this -> MYSQL_SERVER, $this -> MYSQL_USER, $this -> MYSQL_PASSWORD, $this -> MYSQL_DB );

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}
        $column = $mysqli->real_escape_string($column);

if ($mysqli->query("INSERT into $table ($table) VALUES ('$column')")) {
    $data = "Cтрока успешно добавлена в таблицу $table";
}

$mysqli->close();
    
        return $data;
        
    }
    
     public function set_db_data_option_card($table,$operation,$code_operation) {
        
$mysqli = new mysqli($this -> MYSQL_SERVER, $this -> MYSQL_USER, $this -> MYSQL_PASSWORD, $this -> MYSQL_DB );

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}
        $operation = $mysqli->real_escape_string($operation);
        $code_operation = $mysqli -> real_escape_string($code_operation);

if ($mysqli->query("INSERT into card_operation (operation,code_operation) VALUES ('$operation','$code_operation')")) {
    $data = "Cтрока успешно добавлена в таблицу $table";
}

$mysqli->close();
    
        return $data;
        
    }
    
    
    
    
        
public function del_db_data($table,$id) {
        
$mysqli = new mysqli($this -> MYSQL_SERVER, $this -> MYSQL_USER, $this -> MYSQL_PASSWORD, $this -> MYSQL_DB );

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}
 $column ='id';
    if($table =='kat') $column='id_kat';
    if($table =='item') $column='id_item';
    if($table =='card_operation') $column='id_operation';
    
if ($mysqli->query("DELETE FROM $table WHERE $column = $id")) {
    $data = "Cтрока успешно удалена из таблицы $table";
}

$mysqli->close();
    
        return $data;
        
    }
    

    
}