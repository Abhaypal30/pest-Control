<?php
 session_start();
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
 include_once('crude.php');

if($_SERVER['REQUEST_METHOD'] == "POST" )
{

	if(isset($_POST["add"]))
	{

        $crud= new crud(); 
		$roleName = $crud->escape_string($_POST["role_name"]);

		$data= array(                               
					"role_name"  => $crud->escape_string($roleName),               
					"created_by"  => $crud->escape_string($_SESSION['user_id'])    
				); 
				$result1 = $crud->insert($data,'roles');
				//print_r($result1);
				
				if($result1 == 1)
				{
					   
					   echo'<script>window.location.href="../role.php?addr=1";</script>';
				}else
				{
					echo '<script>alert("Something went wrong. Please try again.");</script>';
					echo'<script>window.location.href="../role.php?addr=0";</script>';
				}
			
		
			        	
	}
	else if(isset($_POST["delete"]))
	{
		$id = $_POST["id"];
		$query = mysqli_query($conn,"delete from roles where `id` = '".$_POST["id"]."'");
		if($query == 1)
		{
			echo '<script>alert("Deleted");</script>';
				echo'<script>window.location.href="../role.php";</script>';
		}
		else
		{
			echo '<script>alert("Something went wrong. Please try again.");</script>';
				echo'<script>window.location.href="../role.php";</script>';
		}
	}
	else if(isset($_POST["edit"]))
	{
        $crud= new crud(); 
		$roleName = $crud->escape_string($_POST["role_name"]);
		
		$date = date("Y-m-d H:i:s"); 
		
			$data= array(                      
			
				"role_name"  => $crud->escape_string($roleName),  
				     
			 	"modified_by"  => $crud->escape_string($_SESSION['user_id']),            
				"modified_on"  => $crud->escape_string($date)          
			); 
			$result = $crud->update($data,'roles',$_POST['id']);
			if($result == 1) 
			{ 
				
				echo'<script>window.location.href="../role.php?editr=1";</script>';
			} 
			else 
			{ 
				echo '<script>alert("Something went wrong. Please try again.");</script>';
				echo'<script>window.location.href="../role.php?editr=0";</script>'; 
			} 
	}else
	{
			echo '<script>alert("Method Not Found.");</script>';
			//echo'<script>window.location.href="../edit-users.php?id='.$id.'";</script>';
	}
}
?>