<?php 
class Model_Add extends Model
{
      
	public function get_data_add($act) {
        if ($act =="rashod"){
            
        $conect = new DB();   
        $items = $conect -> get_db_data('item','id_item','item'); $kats = $conect -> get_db_data('card_operation','id_operation','operation');
                   
        $data['kat'] =$kats;
        $data['item'] =$items;
           
        }
        
           if ($act =="dohod"){
           $conect = new DB();   
        $items = $conect -> get_db_data('item','id_item','item'); $kats = $conect -> get_db_data('card_operation','id_operation','operation');
                   
        $data['kat'] =$kats;
        $data['item'] =$items;
            
           }
        
           if ($act =="balance"){
                       
        $conect = new DB();   
        $data['operation'] = $conect -> get_db_data('card_operation','id_operation','operation'); 
        
                       
      
           }
        
        
           if ($act =="cat"){
        
         $data['kat'] =["1","2","3"];
        $data['item'] =["1","2","3","4"]; }
        
        
           if ($act =="item"){
        
         $data['kat'] =["1","2","3"];
        $data['item'] =["1","2","3","4"]; }
        
           if ($act =="card"){
        
         $data['kat'] =["1","2","3"];
        $data['item'] =["1","2","3","4"]; }
        
        
        return $data;
    }
		        
        
}

    