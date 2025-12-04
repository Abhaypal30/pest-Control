<?php
include_once 'config.php';
class Crud extends Database 
{

        // Variable Declaration
        public $columns=""; 
        public $values=""; 
        public $column=""; 
        public $value=""; 

        // CONSTRUCTOR 
        public function __construct() 
        { 
        parent::__construct();        
        } 

        // SELECT ALL STATEMENT BY QUERY
        public function selectallquery($queryString) 
        { 
            //$select="SELECT * FROM $table where status=1"; 
            $select1=$this->connection->query($queryString); 
            return $select1; 
        } 
        // SELECT ALL STATEMENT
        public function selectalldata($table) 
        { 
            $select="SELECT * FROM $table"; 
            $select1=$this->connection->query($select); 
            return $select1; 
        } 
        public function selectalldataByGenre($table,$genre) 
        { 
            $select="SELECT * FROM $table where status=1 and show_genre=$genre order by sequence ASC"; 
            $select1=$this->connection->query($select); 
            return $select1; 
        } 

        // SELECT BY ID STATEMENT
        public function selectsingledata($query) 
        { 
            //$sel= "SELECT * FROM $table where id=$id"; 
            $sel1=$this->connection->query($query); 
           
            return mysqli_fetch_array($sel1);                     
        } 
        
        // SELECT BY ID STATEMENT
        public function selectbyid($table,$id) 
        { 
            $sel= "SELECT * FROM $table where id=$id"; 
            $sel1=$this->connection->query($sel); 
           
            return mysqli_fetch_array($sel1);                     
        } 

        // SELECT BY ID STATEMENT
        public function selectbyEmail($table,$email) 
        { 
            $sel= "SELECT * FROM $table where email='".$email."'"; 
            $sel1=$this->connection->query($sel); 
            //printf("Error: %s\n", mysqli_error($this->connection));
            //exit();
            //return ($this->connection);  
            return mysqli_num_rows($sel1);                   
           // return $sel1;                  
        } 

        public function selectbyEmailLogin($table,$email) 
        { 
            $sel= "SELECT * FROM $table where email='".$email."'"; 
            $sel1=$this->connection->query($sel); 
            return mysqli_fetch_array($sel1);                   
           // return $sel1;                  
        } 


        // INSERT STATEMENT
        public function insert($data,$table){
            foreach($data as $this->column => $this->value) 
            { 
                        
                $this->columns .= ($this->columns == "") ? "" : ", "; 
                $this->columns .= $this->column; 

                $this->values .= ($this->values == "") ? "" : ", "; 
                $this->values .= "'".$this->value ."'"; 
                
                //echo $this->values; 
            
            } 
            try {
                $insert= ("INSERT into $table ($this->columns) values ($this->values)"); 
                //echo $insert; 
                $insert1 = $this->connection->query($insert); 
                return $insert1;
            }
            catch(Exception $e) {
                
                return 0;
            }
           
        }

        // INSERT Return STATEMENT
        public function insertReturn($data,$table){
            foreach($data as $this->column => $this->value) 
            { 
                        
                $this->columns .= ($this->columns == "") ? "" : ", "; 
                $this->columns .= $this->column; 

                $this->values .= ($this->values == "") ? "" : ", "; 
                $this->values .= "'".$this->value ."'"; 
                
                //echo $this->values; 
            
            } 
            try {
                $insert= ("INSERT into $table ($this->columns) values ($this->values)"); 
                //echo $insert; 
                $insert1 = $this->connection->query($insert); 
                return $this->connection->insert_id;
            }
            catch(Exception $e) {
                
                return 0;
            }
           
        }

        // UPDATE STATEMENT
        public function update($data,$table,$id) 
        { 
            try {
                foreach ($data as $this->column => $this->value) 
                { 
                    $update=("UPDATE $table SET $this->column = '$this->value' WHERE id= '$id'"); 
                    // echo $update; 
                    $this->connection->query($update); 
                } 
                return true;
            }
            catch(Exception $e) {
                return false;
            }
           
        } 

        public function updateProducts($data,$table,$id) 
        { 
            try {
                foreach ($data as $this->column => $this->value) 
                { 
                    $update=("UPDATE $table SET $this->column = '$this->value' WHERE product_id= '$id'"); 
                    // echo $update; 
                    $this->connection->query($update); 
                } 
                return true;
            }
            catch(Exception $e) {
                return false;
            }
           
        }

        public function updateLeave($data,$table,$id) 
        { 
            try {
                foreach ($data as $this->column => $this->value) 
                { 
                    $update=("UPDATE $table SET $this->column = '$this->value' WHERE user_id = '$id' and leave_type_id = '1' "); 
                    // echo $update; 
                    $this->connection->query($update); 
                } 
                return true;
            }
            catch(Exception $e) {
                return false;
            }
           
        }



        // DELETE STATEMENT
        function delete($table,$where) 
        { 
            try {
                $delete=("DELETE FROM $table WHERE id='".$where."'"); 
                $this->connection->query($delete);
                return true;
            }
            catch(Exception $e) {
                return false;
            }          
        } 

        function deleteRole($table,$where) 
        { 
            try {
                $delete=("DELETE FROM $table WHERE role_id='".$where."'"); 
                $this->connection->query($delete);
                return true;
            }
            catch(Exception $e) {
                return false;
            }          
        } 

        // UNWANTED STRING REMOVAL STATEMENT
        public function escape_string($value) 
        { 
            return $this->connection->real_escape_string($value); 
        } 
}
?>