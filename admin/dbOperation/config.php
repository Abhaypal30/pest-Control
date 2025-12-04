<?php
   class Database{

   //   private $_localhost = 'localhost'; 
   //    private $_user = 'root'; 
   //    private $_password = ''; 
   //    private $_dbname = 'pest'; 


   // private $_localhost = 'localhost'; 
   // private $_user = 'a3sptgdk_pest_control'; 
   // private $_password = 'pest_control@123'; 
   // private $_dbname = 'a3sptgdk_pest_control'; 

   // New hosting password
      //  Db name = pest_control
      //  user name = pest_control
      //  password = pest_control@123


   private $_localhost = 'localhost'; 
   private $_user = 'root'; 
   private $_password = ''; 
   private $_dbname = 'pest_control'; 

   
   // pest_control@123
   
   // User: a3sptgdk_pest_control
   
   // Database: a3sptgdk_pest_control
       
      protected $connection; 
       
       public function __construct() 
       { 
       
       if(!isset($this-> connection)) 
       { 
                   
  $this->connection = new mysqli($this->_localhost , $this->_user , $this->_password , $this->_dbname); 
       } 
       return $this->connection; 
       } 
   }
?>