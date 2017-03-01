<?php 
class Model_Edit extends Model
{
      
	public function get_data_add($act) {
        if ($act =="rashod"){
        
            $table ='full';
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $row = $conect -> get_db_data_id($table,$id); 
           
        $data['kat'] = $conect -> get_db_data('kat','id_kat','kat');
        $data['item'] =$conect -> get_db_data('item','id_item','item');
        $data["date"]=$row['date'];
        $data["sum"]=$row['sum'];
        $data["coment"]=$row['coment'];
        }
        
           if ($act =="dohod"){
   $data['kat'] =["1","2","3"];
        $data['item'] =["1","2","3","4"];
        $data["date"]="11.08.2003";
        $data["sum"]="500.65";
        $data["coment"]="Редактирование проверка";
           
           }
        
           if ($act =="balance"){
                
        $data["date"]="11.08.2003";
        $data["sum"]="500";        
        $data['operation'] =["1","2","3","4"];
        $data["coment"]="Редактирование проверка";
           
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

    