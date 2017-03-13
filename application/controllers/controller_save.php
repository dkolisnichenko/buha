<?php

class Controller_Save extends Controller    
{
    
   	function __construct()
	{
		$this->model = new Model_Save();
		$this->view = new View();
       
	}
	
	    function action_rashod() {
            
                     $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $table = 'full';
                
            $data = $this->model->get_data();             
            $date = $data['date']; 
            $kat= $data['kat'];  
            $item = $data['item'];
            $sum = $data['sum'];  
            $coment = $data['coment']; 
                                       
                
        $conect = new DB();   
        $data = $conect -> set_db_data($table,$date,$kat,$item,$sum,$coment); 
                           
        $this->view->generate('save_view.php', 'template_view.php',$data);             
        }  
    
    
	    function action_dohod() {            
         
                      $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            $table = 'full_d';        
            
            $data = $this->model->get_data();            
            $date = $data['date']; 
            $kat= $data['kat'];  
            $item = $data['item'];
            $sum = $data['sum'];  
            $coment = $data['coment'];            
                    
        $conect = new DB();   
        $data = $conect -> set_db_data($table,$date,$kat,$item,$sum,$coment); 
                           
        $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
    
    
        function action_balance() {
            
         
                      $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
                                   
                      
            $data = $this->model->get_data();            
            $date = $data['date']; 
            $operation = $data['operation'];            
            $sum = $data['sum'];  
            $coment = $data['coment'];            
                    
        $conect = new DB();   
        $data = $conect -> set_db_data_balance($date,$operation,$sum,$coment); 
                           
        $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
                
    
        function action_cat() {
            
         
                     $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            // Нужно Записать данные в БД  
             $table = 'kat';        
            
            $data = $this->model->get_data();     
            $kat= $data['kat'];            
                   
        $conect = new DB();   
        $data = $conect ->         
            set_db_data_option($table,$kat);            
             
            $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
    
    
    function action_item() {
            
         
                      $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            // Нужно Записать данные в БД            
           
          $table = 'item';        
            
            $data = $this->model->get_data();     
            $kat= $data['kat'];            
                   
        $conect = new DB();   
        $data = $conect ->         
            set_db_data_option($table,$kat);            
             
            $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
    	 
    
    function action_card() {
            
         
            $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            // Нужно Записать данные в БД            
             $table = 'card_operation';        
            
            $data = $this->model->get_data();     
            $operation = $data['operation'];            
            $code_operation = $data['code_operation'];            
                   
        $conect = new DB();   
        $data = $conect ->         
            set_db_data_option_card ($table, $operation, $code_operation);            
             
            $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
    
	function action_index()
	{	
   
	}
}