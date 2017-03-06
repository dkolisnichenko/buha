<?php 
class Model_Update extends Model
{
      
	public function get_data() {
        
        
      
             
            $data['date']  = $_POST['date'];
            $data['kat']  =  $_POST['kat'];
           $data['item']  = $_POST['item'];
            $data['sum']  = $_POST['sum'];
             $data['coment']  = $_POST['coment'];
             $data['operation']  = $_POST['operation'];
             $data['code_operation']  = $_POST['code_operation'];
    
        
          return $data;
       
    }
        
		        
        
}