
<?php

session_start();
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
 include_once('crude.php');

    
 

        if($_SERVER['REQUEST_METHOD'] == "GET" )
        
        {
          
            
           
            if($_GET['id'] != ""   )
            {
               // alert('hi');
              
                $crud= new crud(); 
                $result1 = $crud->delete('services',$_GET['id']);
                
                if ($result1 = 1) {
                   echo '<script>alert("Record removed successfully");</script>';
                   echo'<script>window.location.href="services.php";</script>';
                   
               } 
               else {
                   echo '<script>alert("Failed to receive ID");</script>';
                   
               }
                 

                   
                  
                   
					
            }
			

    }
?>


