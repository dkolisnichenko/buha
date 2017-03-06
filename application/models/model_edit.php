<?php 
class Model_Edit extends Model
{
      
	public function get_data_add($act) {
        if ($act =="rashod"){
        
            $table ='full';
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $row = $conect -> get_db_data_id($table,$id);            
$data['kat'] = $conect -> get_db_data('kat','id_kat','kat');    array_unshift( $data['kat'],$row['kat'] );
 $data['item'] =$conect -> get_db_data('item','id_item','item');
array_unshift( $data['item'],$row['item'] );    
        $data["date"]=$row['date'];
        $data["sum"]=$row['sum'];
        $data["coment"]=$row['coment'];
        }
        
           if ($act =="dohod"){
            $table ='full_d';
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $row = $conect -> get_db_data_id($table,$id);            
$data['kat'] = $conect -> get_db_data('kat','id_kat','kat');    array_unshift( $data['kat'],$row['kat'] );
 $data['item'] =$conect -> get_db_data('item','id_item','item');
array_unshift( $data['item'],$row['item'] );    
        $data["date"]=$row['date'];
        $data["sum"]=$row['sum'];
        $data["coment"]=$row['coment'];
           
           }
        
           if ($act =="balance"){
               
            $table ='card_zp';
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $row = $conect -> get_db_data_id_card_zp($table,$id);     
               
        $data["date"]=$row['date'];
        $data["sum"]=$row['sum'];       
        $data['operation'] =$conect -> get_db_data('card_operation','id_operation','operation');
array_unshift( $data['operation'],$row['operation'] ); 
        $data["coment"]=$row['coment'];
           
           }
        
                
           if ($act =="cat"){
        
            $table ='kat';
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $row = $conect -> get_db_data_id_kat($table,$id);            $data['kat'] = $row['kat'];
           
           }
        
        
           if ($act =="item"){
            
               $table ='item';
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $row = $conect -> get_db_data_id_kat($table,$id);            $data['item'] = $row['item'];
           
           }
        
           if ($act =="card"){
        
            $table ='card_operation';
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $row = $conect -> get_db_data_id_code($table,$id); 
               
               $data['operation'] = $row['operation'];  
               $data['code_operation'] = $row['code_operation'];  
                  
           }
        
        
        return $data;
    }
		        
        
}

    