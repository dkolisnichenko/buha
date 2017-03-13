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
                    $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
        
       $data = $this->model->get_data();
        $title_table=$data[0];
        $data_table=$data[1];
        $this->view->generate_table('dohod_view.php', 'template_view.php',$title_table,$data_table);
	}
}