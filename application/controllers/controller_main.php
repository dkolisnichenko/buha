<?php

class Controller_Main extends Controller    
{
    
    
   
	function __construct()
	{
		$this->model = new Model_Main();
		$this->view = new View();
       
	}
	
	    
    
	function action_index()
	{	
         $GLOBALS["balance"] =200;
        
        $data = $this->model->get_data();
        $bal = $this->model->get_balance();
		$this->view->generate('main_view.php', 'template_view.php',$data);
	}
}