<?php

class Controller_Logout extends Controller    
{
        
   
	function __construct()
	{
		//$this->model = new Model_Login();
		//$this->view = new View();
       
	}
	  
    
	function action_index()
	{	
      
     $conect =new DB();
    $del = $conect ->del_ip_access('127.0.0.1'); 
    unset($_SESSION['auth']);
    unset($_SESSION['user']);
        
    session_destroy();
    print("Вы успешно вышли из приложения.");
        
       
  
            

	}
    

}