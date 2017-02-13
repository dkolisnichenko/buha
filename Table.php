<?php
class Cell {
    
    private $value;
    protected $style;
    protected $html_code;
    
   function __construct($value = "Пустая ячейка",$style ="default",$html_code="<th>Нет значения</th>") {
        
    $this -> value =  $value ;
    $this -> style = $style ;
    $this -> html_code  = $html_code;                              
    }
       
       protected function setCell($value) {
           
            $this -> value = $value;                
    }    
       
    protected function setStyle($style) {
        $this -> style = $style; 
               
    }
     
     protected function setHtmlCodeCell() {
         
         $value =  $this -> value ;
         $style = $this -> style ;
        $this -> html_code  = "<th  class = \""."$style"."\">"."$value"."</th>";
        return $this -> html_code; 
        
    }
    
      public function getHtmlCode() {
        return $this -> html_code; 
        
    }
      
}

 class Row extends Cell{
   
      private $value_row;            
     
   function __construct($value = ["1","2"]) { 
       
    $this -> value_row =  $value ;
        
    }
     
    protected function setHtmlCodeRow() {
                      
    $value  = $this -> value_row ;
    $style  = $this -> style ;
        
        foreach ($value as $a) {
            $cell = new Cell();
            $cell -> setCell($a);
            $cell -> setHtmlCodeCell();
            $data .= $cell -> getHtmlCode();          
            
        }        
         $this -> html_code  = "<tr  class = \""."$style"."\">"."$data"."</tr>";
             return $this -> html_code; 
        
    }
        
          protected function setRow($value){
              $this -> value_row = $value;
              
          }          
  }


class Table extends Row  {  
    
    protected $name;
    private $title;
    private $data;
    protected $style_data;
    protected $style_title;
    protected  $style_table;
    
         
 function __construct($name = "Таблица",$title=["Заголовок 1","Заголовок 2"],$data=["Данные 1","Данные2","Даые 1","Даые2"]){
     
    $this -> name = $name;  
     $this -> title = $title;
     $this -> data = $data;
    $style_data  = $this -> style;
    $style_title =$this -> style;
       
     // Создаем заголовок таблицы.
            $row = new Row();
             $row -> setRow($title);
            $row -> setStyle($style_title);
             $row -> setHtmlCodeRow();            
             $dat .= $row -> getHtmlCode();   
     
     // Заполняем строки таблицы.
    $arr= array_chunk($data, count($title)); 
     for($i = 0; $i < count($arr); $i++) {          
             $row = new Row();
             $row -> setRow($arr[$i]);
            $row -> setStyle($style_data);
             $row -> setHtmlCodeRow();            
             $dat .= $row -> getHtmlCode();
        
               }
            $this -> html_code  = "<h4>"."$name"."</h4>"."<table  class = \""."$style_table"."\">"."$dat"."</table>";
                  
               
    }
         
      public function setHtmlCodeTable() {
          
    $name =  $this -> name;    
     $style_table = $this -> style_table;
          
            $row = new Row();
             $row -> setRow($this -> title);
            $row -> setStyle($this -> style_title);
             $row -> setHtmlCodeRow();            
             $dat .= $row -> getHtmlCode();
     
     
    $arr= array_chunk($this -> data, count($this -> title));
 
     for($i = 0; $i < count($arr); $i++) {       
             
             $row = new Row();
             $row -> setRow($arr[$i]);
            $row -> setStyle($this -> style_data);
             $row -> setHtmlCodeRow();            
             $dat .= $row -> getHtmlCode();      
          
     }
                
        $this -> html_code  = "<h4>"."$name"."</h4>"."<table  class = \""."$style_table"."\">"."$dat"."</table>";
             return $this -> html_code; 
   
    }
      
    function setStyleTable ($style_table) {
        
        $this ->  style_table = $style_table;
         
    }
    
       function setStyleTitle ($style_title) {
        
        $this ->  style_title = $style_title;
         
    }
        function setStyleData ($style_data) {
        
        $this ->  style_data = $style_data;
         
    }
    
           function setNameTable ($name) {
        
        $this -> name = $name;
         
    }
    
}
    
    
    













