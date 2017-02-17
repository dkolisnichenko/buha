<?php 
class Model_Add extends Model
{
      
	public function get_data_add($act) {
        if ($act =="rashod"){
        
         $data['kat'] =["1","2","3"];
        $data['item'] =["1","2","3","4"]; }
        
           if ($act =="dohod"){
        
         $data['kat'] =["1","2","3"];
        $data['item'] =["1","2","3","4","5","dohodd"]; }
        
           if ($act =="balance"){
        
         $data['kat'] =["1","2","3"];
        $data['item'] =["1","2","3","4"]; }
        
        
           if ($act =="category"){
        
         $data['kat'] =["1","2","3"];
        $data['item'] =["1","2","3","4"]; }
        
        
           if ($act =="item"){
        
         $data['kat'] =["1","2","3"];
        $data['item'] =["1","2","3","4"]; }
        
           if ($act =="cat_balance"){
        
         $data['kat'] =["1","2","3"];
        $data['item'] =["1","2","3","4"]; }
        
        
        return $data;
    }
		        
        
}

    