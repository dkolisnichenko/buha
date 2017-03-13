<?php

class Balance {
    
    public $balance;
    
    public function __construct($balance = 0){
        
        $conect = new DB(); 
        $balance = $conect -> get_db_data_id_kat('balance'); 
        
        $this -> balance = $balance;  
        
    }
    
    public function get_balance() {
         $conect = new DB(); 
         $balance = $conect -> get_db_data_id_kat('balance');
         return $this -> balance;       
    }
    
    public function set_balance($balance) {
                     
        $conect = new DB();   
        $data = $conect -> update_db_data_option('balance','1',$balance);             
        $this -> balance = $balance;   
    }
    
      public function del_balance($balance,$id) {
                     
        $conect = new DB();            
        $data = $conect -> get_db_data_id_card_zp('card_zp',$id);
                  
          if(isset($data['zp_nach'])) $balance -= $data['zp_nach'];
          if(isset($data['zp_sn'])) $balance += $data['zp_sn'];
          if(isset($data['correction'])) $balance -= $data['correction'];  
                  
        $data = $conect -> update_db_data_option('balance','1',$balance); 
                   
        $this -> balance = $balance;   
    }
    
}