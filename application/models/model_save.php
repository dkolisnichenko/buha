<?php 
class Model_Save extends Model
{
      
	public function get_data() {
        
        $data = "Строка успешно добавлена!";
        
          return $data;
       
    }
        
    	public function set_data() {
        
         $data['kat'] =["1","2","3"];
        $data['item'] =["1","2","3","4"];
        
        return true;
    }
		        
        
}