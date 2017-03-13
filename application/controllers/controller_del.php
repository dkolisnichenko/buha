<?php

class Controller_Del extends Controller    
{
    
   	function __construct()
	{
		$this->model = new Model_Del();
		$this->view = new View();
       
	}
	
	    function action_rashod() {
            
                      $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $table = 'full';            
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $data = $conect -> del_db_data($table,$id); 
        $this->view->generate('save_view.php', 'template_view.php',$data); 
            
        }  
    
    	
	    function action_dohod() {
            
         
                         $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
              $table = 'full_d';            
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $data = $conect -> del_db_data($table,$id); 
        $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
    
    
        function action_balance() {
            
         
                         $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $table = 'card_zp';            
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $data = $conect -> del_db_data($table,$id); 
        $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
                
    
        function action_cat() {
            
         
                        $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $table = 'kat';            
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $data = $conect -> del_db_data($table,$id); 
        $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
    
    
    function action_item() {
            
         
                         $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $table = 'item';            
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $data = $conect -> del_db_data($table,$id); 
        $this->view->generate('save_view.php', 'template_view.php',$data); 
        } 
          
    	 
    
    function action_card() {
            
         
                        $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $table = 'card_operation';            
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $data = $conect -> del_db_data($table,$id); 
        $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
    
	function action_index()
	{	
   
	}
}