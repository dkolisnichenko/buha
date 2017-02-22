<?php

class Controller_Add extends Controller    
{
    
   
	function __construct()
	{
		$this->model = new Model_Add();
		$this->view = new View();
       
	}
	
	    function action_rashod() {
            
             $GLOBALS["balance"] =200;
            
            $link = "rashod";  
            
              
            $data = $this->model->get_data_add($link );  
            $date = $data['date'];
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('add_view.php', 'template_view.php',$link,$kat,$item);
        }  
    
    	
	    function action_dohod() {
            
            $GLOBALS["balance"] =200;
            
            $link = "dohod";   
              
            $data = $this->model->get_data_add($link );    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('add_view.php', 'template_view.php',$link,$kat,$item);
        }  
           
    	    function action_balance() {
            
            $GLOBALS["balance"] =200;
            
            $link = "balance";   
                
           $data = $this->model->get_data_add($link);  
            $kat=$data['operation'];
          
            $this->view->generate_form1('edit_view1.php', 'template_view.php',$link,$kat);
        }  
    
        
    
    	    function action_cat() {
            
            $GLOBALS["balance"] =200;
            
            $link = "cat";   
              
            $data = $this->model->get_data_add($link );    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('edit_view2.php', 'template_view.php',$link);
        }  
    
       	    function action_item() {
            
            $GLOBALS["balance"] =200;
            
            $link = "item";   
              
            $data = $this->model->get_data_add("item");    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('edit_view3.php', 'template_view.php',$link);
        }  
    
    
       	    function action_card() {
            
            $GLOBALS["balance"] =200;
            
            $link = "card";   
              
            $data = $this->model->get_data_add("cat_balance");    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('edit_view4.php', 'template_view.php',$link,$kat,$item);
        }  
    
    	 
    
	function action_index()
	{	
   
	}
}