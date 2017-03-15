<?php

class User {
    
  private $name;  
  private $groupe;  
    
        
public function check_auth($user,$pass) {
        
        $conect = new DB();   
        $data = $conect -> check_access($user);
        $user=$data['name'];
        $pass_hash = $data['pass'];
  
       if(!isset($user)) $auth =false; 
      else{
             $auth=password_verify($pass, $pass_hash);
       }
                
        return $auth;
    }
    
}