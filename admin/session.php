<?php
session_start();
   include("dbOperation/crude.php");
   
   $crud= new crud(); 
   $user_check = $_SESSION['login_email'];
   
   $data = $crud->selectbyEmailLogin('user',$user_check);
   
   
   if(empty($data)){
    //  echo'<script>window.location.href="./index.php";</script>';
     header("location:index.php");
      die();
   }
?>