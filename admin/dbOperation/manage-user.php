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
		$userName = $crud->escape_string($_POST["email_id"]);
		$password = $crud->escape_string($_POST["password"]);	
		$confirmPassword = $crud->escape_string($_POST["confirmPassword"]);
		$result = $crud->selectbyEmail("users",$userName); 
		if($result> 0)
		{
				echo '<script>alert("Email Id already taken.");</script>';
				echo'<script>window.location.href="../users.php";</script>';
		}else
		{
			if($password == $confirmPassword)
			{
				// $encrypted = password_hash($password,PASSWORD_DEFAULT);
				$data= array(         
					// "dept_id"  => $crud->escape_string($_POST['department_name']),   
					"designation_id"  => $crud->escape_string($_POST['designation_id']),       
					"first_name"  => $crud->escape_string($_POST['first_name']),            
					"last_name"  => $crud->escape_string($_POST['last_name']),            
					"user_role"  => $crud->escape_string($_POST['user_role']), 
					"password"  => $crud->escape_string($password) ,       
					"created_by"  => $crud->escape_string($_SESSION['user_id']) ,       
					"user_status"  => $crud->escape_string($_POST['user_status']) ,       
					"email_id"  => $crud->escape_string($_POST['email_id']) ,
					"contact_no"  => $crud->escape_string($_POST['contact_no'])
				); 
				$result1 = $crud->insert($data,'users');
				//print_r($result1);
				
				if($result1 == 1)
				{
					   
					   echo'<script>window.location.href="../users.php?addu=1";</script>';
				}else
				{
					echo '<script>alert("Something went wrong. Please try again.");</script>';
					echo'<script>window.location.href="../users.php";</script>';
				}
			}else
			{
					echo '<script>alert("Password & Confirm password should be same.");</script>';
					echo'<script>window.location.href="../users.php?addu=0";</script>';
			}
		}
			        	
	}
	else if(isset($_POST["delete"]))
	{
		$id = $_POST["id"];
		$query = mysqli_query($conn,"delete from user where `id` = '".$_POST["id"]."'");
		if($query == 1)
		{
			echo '<script>alert("Deleted");</script>';
				echo'<script>window.location.href="../users.php";</script>';
		}
		else
		{
			echo '<script>alert("Something went wrong. Please try again.");</script>';
				echo'<script>window.location.href="../users.php";</script>';
		}
	}
	else if(isset($_POST["edit"]))
	{
		
		$crud= new crud(); 
		$firstName = $crud->escape_string($_POST["first_name"]);
		$lastName = $crud->escape_string($_POST["last_name"]);
		$userRole = $crud->escape_string($_POST["user_role"]);
		//$emailID = $crud->escape_string($_POST["email_id"]);
		$date = date("Y-m-d H:i:s"); 
		
			$data= array(                      
				// "dept_id"  => $crud->escape_string($_POST['department_name']), 
				"designation_id"  => $crud->escape_string($_POST['designation_id']),
				"first_name"  => $crud->escape_string($firstName),  
				"last_name"  => $crud->escape_string($lastName), 
				"user_role"  => $crud->escape_string($userRole),  
			 	"modified_by"  => $crud->escape_string($_SESSION['user_id']),            
				"modified_on"  => $crud->escape_string($date)  ,
				//"email_id"  => $crud->escape_string($_POST['email_id']) 
				"contact_no"  => $crud->escape_string($_POST['contact_no'])       
			); 
			$result = $crud->update($data,'users',$_POST['id']);
			if($result == 1) 
			{ 
				echo'<script>window.location.href="../users.php?editu=1";</script>';
			} 
			else 
			{ 
				echo '<script>alert("Something went wrong. Please try again.");</script>';
				echo'<script>window.location.href="../users.php?editu=0";</script>'; 
			} 
	}else
	{
			echo '<script>alert("Method Not Found.");</script>';
			//echo'<script>window.location.href="../edit-users.php?id='.$id.'";</script>';
	}
}
?>