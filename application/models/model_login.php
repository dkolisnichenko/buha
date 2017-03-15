<?php 
class Model_Login extends Model
{
    
         
	public function get_data()
	{	
        
         $user = new User();   
        $auth = $user -> check_auth($_POST['user'],$_POST['pass']);
        
      if ($auth == true)
      { $data= true;  
       $_SESSION['auth'] ='Yes';
       $_SESSION['user'] = $_POST['user'];
    }else  $data = false;
	
        return $data;
	}
}