<?php

class Controller_Add extends Controller    
{
    
   
	function __construct()
	{
		$this->model = new Model_Add();
		$this->view = new View();
       
	}
	
	    function action_rashod() {
            
        $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
             
            
            $link = "rashod";  
            
              
            $data = $this->model->get_data_add($link );  
            $date = $data['date'];
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('add_view.php', 'template_view.php',$link,$kat,$item);
        }  
    
    	
	    function action_dohod() {
            
        $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $link = "dohod";   
              
            $data = $this->model->get_data_add($link );    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('add_view.php', 'template_view.php',$link,$kat,$item);
        }  
           
    	    function action_balance() {
            
                     $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $link = "balance";   
                
           $data = $this->model->get_data_add($link);  
            $kat=$data['operation'];
          
            $this->view->generate_form1('add_view1.php', 'template_view.php',$link,$kat);
        }  
    
        
    
    	    function action_cat() {
            
                    $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $link = "cat";   
              
            $data = $this->model->get_data_add($link );    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('add_view2.php', 'template_view.php',$link);
        }  
    
       	    function action_item() {
            
                   $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $link = "item";   
              
            $data = $this->model->get_data_add("item");    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('add_view3.php', 'template_view.php',$link);
        }  
    
    
       	    function action_card() {
            
            $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $link = "card";   
              
            $data = $this->model->get_data_add("cat_balance");    
            $kat=$data['kat'];
            $item = $data['item'];
            $this->view->generate_form('add_view4.php', 'template_view.php',$link,$kat,$item);
        }  
    
    	 
    
	function action_index()
	{	
   
	}
}