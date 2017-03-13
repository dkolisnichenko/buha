<?php

class Controller_Edit extends Controller    
{
    
   
	function __construct()
	{
		$this->model = new Model_Edit();
		$this->view = new View();
       
	}
	
	    function action_rashod() {
            
                     $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $link = "rashod";   
              
            $data = $this->model->get_data_add($link);  
            $date = $data['date'];
            $kat=$data['kat'];
            $item = $data['item'];
            $sum = $data['sum'];
            $coment = $data['coment'];        
            $id=$GLOBALS['id'];        
            $this->view->generate_form('edit_view.php', 'template_view.php',$link,$kat,$item,$date,$sum,$coment,$id);
        }  
    
    	
	    function action_dohod() {
        $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $link = "dohod";   
              
            $data = $this->model->get_data_add($link);  
            $date = $data['date'];
            $kat=$data['kat'];
            $item = $data['item'];
            $sum = $data['sum'];
            $coment = $data['coment'];
            $id=$GLOBALS['id']; 
            $this->view->generate_form('edit_view.php', 'template_view.php',$link,$kat,$item,$date,$sum,$coment,$id);
          
        }  
           
    	    function action_balance() {
            
                       $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
                            
            $link = "balance";   
              
            $data = $this->model->get_data_add($link);  
            $date = $data['date'];
            $kat=$data['operation'];
            $sum = $data['sum'];
            $coment = $data['coment'];
                $id=$GLOBALS['id']; 
            $this->view->generate_form1('edit_view1.php', 'template_view.php',$link,$kat,$date,$sum,$coment,$id);
        
        }  
         
            function action_cat() {
                                $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $link = "cat";   
            $id=$GLOBALS['id']; 
            $data = $this->model->get_data_add($link);  
           
            $kat=$data['kat'];
           
            $this->view->generate_form('edit_view2.php', 'template_view.php',$link,$kat,$item,$date,$sum, $coment,$id);
                
        }  
    
       	    function action_item() {
                                $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $link = "item";   
            $id=$GLOBALS['id']; 
            $data = $this->model->get_data_add($link);  
        
            $item = $data['item'];           
            $this->view->generate_form('edit_view3.php', 'template_view.php',$link,$kat,$item,$date,$sum, $coment,$id);
        
        }  
    
    
       	    function action_card() {
                               $bal = new Balance();        
         $GLOBALS["balance"] = $bal -> get_balance();
            
            $link = "card";
              
            $data = $this->model->get_data_add($link);  
            $kat = $data['operation'];
            $item = $data['code_operation'];
            $id=$GLOBALS['id']; 
            $this->view->generate_form('edit_view4.php', 'template_view.php',$link,$kat,$item,$date,$sum, $coment,$id);
        }  
    
    	 
    
	function action_index()
	{	
   
	}
}