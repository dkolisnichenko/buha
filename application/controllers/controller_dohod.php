<?php

class Controller_Dohod extends Controller    
{
    
    
   
	function __construct()
	{
		$this->model = new Model_Dohod();
		$this->view = new View();
       
	}
	
	    
    
	function action_index()
	{	
         $GLOBALS["balance"] =200;
        
        $data = $this->model->get_data();
     
		$this->view->generate('main_view.php', 'template_view.php',$data);
	}
}