<?php

class Controller_Rashod extends Controller    
{
        
	function __construct()
	{
		$this->model = new Model_Rashod();
		$this->view = new View();
	}
	
	    
    
	function action_index()
	{	
        $GLOBALS["balance"] =200;
        
        $data = $this->model->get_data();
		$this->view->generate('rashod_view.php', 'template_view.php',$data);
	}
}