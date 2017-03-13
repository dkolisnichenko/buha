<?php

class Controller_Balance extends Controller    
{
    
    
   
	function __construct()
	{
		$this->model = new Model_Balance();
		$this->view = new View();
       
	}
	
	    
	function action_index()
	{	
        $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
        
           
       $data = $this->model->get_data();
        $title_table=$data[0];
        $data_table=$data[1];
        $this->view->generate_table('balance_view.php', 'template_view.php',$title_table,$data_table);
	}
	
}