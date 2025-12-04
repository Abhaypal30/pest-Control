<?php
    session_start();
    include_once('crude.php');

    if($_SERVER['REQUEST_METHOD'] == "GET" )
    {

        if($id == '' &&  $CurrentStatus == '' &&  $type == '')
        {
                $crud= new crud(); 
                $data= array(          
                    "id"  => $crud->escape_string($_GET['id']),            
                    "current_status"  => $crud->escape_string($_GET['CurrentStatus'])                
                ); 
                $result = $crud->update($data,'vendor',$_GET['id']);
                if($result == 1) 
                { 
                    echo '<script>alert("Vendor Updated.");</script>';
                    echo'<script>window.location.href="../vendor.php?id='.$_GET['id'].'";</script>';
                } 
                else 
                { 
                    echo '<script>alert("Something went wrong. Please try again.");</script>';
                    echo'<script>window.location.href="../vendor.php";</script>'; 
                } 
        }
    }
    ?>