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
              
            $data = $this->model->get_data_add("rashod");    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('add_view.php', 'template_view.php',$link,$kat,$item);
        }  
    
    	
	    function action_dohod() {
            
            $GLOBALS["balance"] =200;
            
            $link = "dohod";   
              
            $data = $this->model->get_data_add("dohod");    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('add_view.php', 'template_view.php',$link,$kat,$item);
        }  
           
    	    function action_balance() {
            
            $GLOBALS["balance"] =200;
            
            $link = "balance";   
              
            $data = $this->model->get_data_add("balance");    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('add_view.php', 'template_view.php',$link,$kat,$item);
        }  
    
    
     
    
    
    	    function action_category() {
            
            $GLOBALS["balance"] =200;
            
            $link = "category";   
              
            $data = $this->model->get_data_add("category");    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('add_view.php', 'template_view.php',$link,$kat,$item);
        }  
    
       	    function action_item() {
            
            $GLOBALS["balance"] =200;
            
            $link = "item";   
              
            $data = $this->model->get_data_add("item");    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('add_view.php', 'template_view.php',$link,$kat,$item);
        }  
    
    
       	    function action_cat_balance() {
            
            $GLOBALS["balance"] =200;
            
            $link = "cat_balance";   
              
            $data = $this->model->get_data_add("cat_balance");    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('add_view.php', 'template_view.php',$link,$kat,$item);
        }  
    
    	 
    
	function action_index()
	{	
   
	}
}