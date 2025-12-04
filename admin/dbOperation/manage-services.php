<?php
    session_start();
    include_once('crude.php');

    if($_SERVER['REQUEST_METHOD'] == "POST" )
    {
        

        if(isset($_POST["addservice"]))
        {

            $crud= new crud(); 
            $description = $_POST["description"];
            $description = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $description);
            $data= array(                               
                        "name"  => $crud->escape_string($_POST["name"]),  
                        "price"  => $crud->escape_string($_POST["price"]),  
                       "payment_mode"  => $crud->escape_string($_POST["payment_mode"]),  
                        "type"  => $crud->escape_string($_POST["type"]),  
                        "pest_control"  => $crud->escape_string($_POST["pest_control"]),  
                        "home_cleaning"  => $crud->escape_string($_POST["home_cleaning"]),  
                        "bhk"  => $crud->escape_string($_POST["bhk"]),  
                        "service_type"  => $crud->escape_string($_POST["service_type"]), 
                        "last_booking_date"  => $crud->escape_string($_POST["last_booking_date"]),  
                        "description"  => $description,  
                        "created_by"  => $crud->escape_string($_SESSION['user_id'])    
                    ); 
                    $result1 = $crud->insert($data,'services');
                    
                    if($result1 == 1)
                    {
                        echo '<script>alert("Service Added");</script>';
                        echo'<script>window.location.href="../services.php";</script>';
                    }else
                    {
                        echo '<script>alert("Something went wrong. Please try again.");</script>';
                        echo'<script>window.location.href="../services.php";</script>';
                    }
                
            
                            
        }
       else if(isset($_POST["EditServices"]))
        {
           
           
            $MOdDate = date("Y-m-d"); 
            $description = $_POST["description"];
            $description = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $description);
                $crud= new crud(); 
                $data= array(                      
                    "name"  => $crud->escape_string($_POST["name"]),
                    "price"  => $crud->escape_string($_POST["price"]),  
                    "payment_mode"  => $crud->escape_string($_POST["payment_mode"]),  
                     "type"  => $crud->escape_string($_POST["type"]),  
                     "pest_control"  => $crud->escape_string($_POST["pest_control"]),  
                     "home_cleaning"  => $crud->escape_string($_POST["home_cleaning"]),  
                     "bhk"  => $crud->escape_string($_POST["bhk"]),  
                     "service_type"  => $crud->escape_string($_POST["service_type"]), 
                     "last_booking_date"  => $crud->escape_string($_POST["last_booking_date"]),  
                     "description"  => $description,  
                    "updated_on"  => $crud->escape_string($MOdDate),  
                    "updated_by"  => $crud->escape_string($_SESSION['user_id'])  
                ); 
                $result1 = $crud->update($data,'services',$_POST['id']);
                if($result1 == 1)
                {
                    echo '<script>alert("Service Updated");</script>';
                    //print_r($result1);
                    echo'<script>window.location.href="../services.php";</script>';
                }else
                {
                    echo '<script>alert("Something went wrong. Please try again.");</script>';
                    echo'<script>window.location.href="../services.php";</script>';
                }
           

                
        }
        else if(isset($_POST["EditMetaTags"]))
        {
            
            $MOdDate = date("Y-m-d"); 

                $crud= new crud(); 
                $data= array(                      
                    "meta_title"  => $crud->escape_string($_POST["meta_title"]),
                    "meta_description"  => $crud->escape_string($_POST["meta_description"]),  
                    "meta_author"  => $crud->escape_string($_POST["meta_author"]),  
                    "meta_viewport"  => $crud->escape_string($_POST["meta_viewport"]), 
                    "meta_keywords"  => $crud->escape_string($_POST["meta_keywords"]), 
                    "meta_charset"  => $crud->escape_string($_POST["meta_charset"]), 
                    "modified_by"  => $crud->escape_string($MOdDate),  
                    "modified_on"  => $crud->escape_string($_SESSION['user_id'])  
                ); 
                $result1 = $crud->update($data,'meta_tags',$_POST['id']);
                if($result1 == 1)
                {
                    echo '<script>alert("Meta Tags Updated");</script>';
                    //print_r($result1);
                    echo'<script>window.location.href="../meta-tags.php";</script>';
                }else
                {
                   // print_r($result1);
                   echo '<script>alert("rong.");</script>';
                   echo'<script>window.location.href="../meta-tags.php";</script>';
                }
           

                
        }
        else{
            echo 'hi';
        }
    }
?>