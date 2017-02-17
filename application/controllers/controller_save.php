<?php

class Controller_Save extends Controller    
{
    
   	function __construct()
	{
		$this->model = new Model_Save();
		$this->view = new View();
       
	}
	
	    function action_rashod() {
            
             $GLOBALS["balance"] =200;
            
            // Нужно Записать данные в БД            
           
            $data = $this->model->get_data();    
            $this->view->generate('save_view.php', 'template_view.php',$data); 
            
        }  
    
    	
	    function action_dohod() {
            
         
             $GLOBALS["balance"] =200;
            
            // Нужно Записать данные в БД            
           
            $data = $this->model->get_data();    
            $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
    
    
        function action_balance() {
            
         
             $GLOBALS["balance"] =200;
            
            // Нужно Записать данные в БД            
           
            $data = $this->model->get_data();    
            $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
                
    
        function action_category() {
            
         
             $GLOBALS["balance"] =200;
            
            // Нужно Записать данные в БД            
           
            $data = $this->model->get_data();    
            $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
    
    
    function action_item() {
            
         
             $GLOBALS["balance"] =200;
            
            // Нужно Записать данные в БД            
           
            $data = $this->model->get_data();    
            $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
    	 
    
    function action_cat_balance() {
            
         
             $GLOBALS["balance"] =200;
            
            // Нужно Записать данные в БД            
           
            $data = $this->model->get_data();    
            $this->view->generate('save_view.php', 'template_view.php',$data); 
        }  
    
	function action_index()
	{	
   
	}
}