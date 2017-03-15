<?php

class Controller_Login extends Controller    
{
        
   
	function __construct()
	{
		$this->model = new Model_Login();
		$this->view = new View();
       
	}
		    
    
	function action_index()
	{	
        
    
        
        $data = $this->model->get_data();

        
        if ($data == true ) {
            
            Route::start(); // запускаем маршрутизатор
            
        } else {
        
		$this->view->generate('login_view.php', 'template_login_view.php',$data); 
        }
	}
    
    	function action_logout()
	{	
    unset($_SESSION['auth']);
    unset($_SESSION['user']);
    session_destroy();
        print("Вы успешно вышли из приложения.");
   // header ("Location: index.php");
    
 
	}
}