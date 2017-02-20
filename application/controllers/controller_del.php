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
            
            // Нужно удалить данные из БД    
            $id=  $GLOBALS["id"];
           
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