<?php

class Controller_Edit extends Controller    
{
    
   
	function __construct()
	{
		$this->model = new Model_Edit();
		$this->view = new View();
       
	}
	
	    function action_rashod() {
            
             $GLOBALS["balance"] =200;
            
            $link = "rashod";   
              
            $data = $this->model->get_data_add($link);  
            $date = $data['date'];
            $kat=$data['kat'];
            $item = $data['item'];
            $sum = $data['sum'];
            $coment = $data['coment'];
            $this->view->generate_form('edit_view.php', 'template_view.php',$link,$kat,$item,$date,$sum,$coment);
        }  
    
    	
	    function action_dohod() {
                         $GLOBALS["balance"] =200;
            
            $link = "dohod";   
              
            $data = $this->model->get_data_add($link);  
            $date = $data['date'];
            $kat=$data['kat'];
            $item = $data['item'];
            $sum = $data['sum'];
            $coment = $data['coment'];
            $this->view->generate_form('edit_view.php', 'template_view.php',$link,$kat,$item,$date,$sum,$coment);
          
        }  
           
    	    function action_balance() {
                         $GLOBALS["balance"] =200;
                    
            
            $link = "balance";   
              
            $data = $this->model->get_data_add($link);  
            $date = $data['date'];
            $kat=$data['operation'];
            $sum = $data['sum'];
            $coment = $data['coment'];
            $this->view->generate_form1('edit_view1.php', 'template_view.php',$link,$kat,$date,$sum,$coment);
        
        }  
        
    
    	    function action_cat() {
                       $GLOBALS["balance"] =200;
            
            $link = "cat";   
              
            $data = $this->model->get_data_add($link);  
           
            $kat=$data['kat'];
           
            $this->view->generate_form('edit_view2.php', 'template_view.php',$link,$kat);
                
        }  
    
       	    function action_item() {
                         $GLOBALS["balance"] =200;
            
            $link = "item";   
              
            $data = $this->model->get_data_add($link);  
        
            $item = $data['item'];           
            $this->view->generate_form('edit_view3.php', 'template_view.php',$link,$item);
        
        }  
    
    
       	    function action_card() {
                       $GLOBALS["balance"] =200;
            
            $link = "card";   
              
            $data = $this->model->get_data_add($link);  
            $kat = $data['cat_balance'];
                
            $this->view->generate_form('edit_view4.php', 'template_view.php',$link,$kat);
        }  
    
    	 
    
	function action_index()
	{	
   
	}
}