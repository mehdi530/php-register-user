<?php

 include 'DataAccess.php';

  class BusinessLayer {
  
 public function user_add($name,$email,$tel){
    
    $a=new DataAccess ();
    

      if(!empty($name) && !empty($email)  &&!empty($tel) ) {

        return $a->user_add($name,$email,$tel); 

      } 
       else {
        return "Please insert all Items";
      }
    
      
   
    
      }
  
    
    
        
    
    
}
?>
