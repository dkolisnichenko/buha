<?php

class Controller_Del extends Controller    
{
    
   	function __construct()
	{
		$this->model = new Model_Del();
		$this->view = new View();
       
	}
	
	    function action_rashod() {
            
             $GLOBALS["balance"] =200;
            
            $table = 'full';            
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $data = $conect -> del_db_data($table,$id); 
        $this->view->generate('save_view.php', 'template_view.php',$data); 
            
        }  
    
    	
	    function action_dohod() {
            
         
             $GLOBALS["balance"] =200;
            
              $table = 'full_d';            
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $data = $conect -> del_db_data($table,$id); 
        $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
    
    
        function action_balance() {
            
         
             $GLOBALS["balance"] =200;
            
            $table = 'card_zp';            
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $data = $conect -> del_db_data($table,$id); 
        $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
                
    
        function action_cat() {
            
         
             $GLOBALS["balance"] =200;
            
            $table = 'kat';            
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $data = $conect -> del_db_data($table,$id); 
        $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
    
    
    function action_item() {
            
         
             $GLOBALS["balance"] =200;
            
            $table = 'item';            
            $id=  $GLOBALS["id"];
            
        $conect = new DB();   
        $data = $conect -> del_db_data($table,$id); 
        $this->view->generate('save_view.php', 'template_view.php',$data); 
        } 
          
    	 
    
    function action_card() {
            
         
             $GLOBALS["balance"] =200;
            
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