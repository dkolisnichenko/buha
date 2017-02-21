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
        $title_table=$data[0];
        $data_table=$data[1];
        $this->view->generate_table('rashod_view.php', 'template_view.php',$title_table,$data_table);
	}
}