<?php
    session_start();
    include_once('crude.php');

        if($_SERVER['REQUEST_METHOD'] == "GET" )
        {
            if($_GET['Type'] == "Product")
            {
                $crud = new crud();
                $result = $crud->selectallquery("select pm.id,pm.product_name from product_vendor_mapping pv,product_master pm where pv.product_id = pm.id 
                and pv.vendor_id = '".$_GET['id']."'");
                $numbRows = mysqli_num_rows($result);
                 
                if($numbRows > 0)
                {
                    while ($item = mysqli_fetch_array($result))
                    {
                        $table_data[]= array("id"=>$item['id'],"name"=>$item['product_name'],"status"=>"1");
                    }
                }else
                {
                    $table_data[]= array("id"=>"0","name"=>"","status"=>"0");
                }
                
                echo json_encode($table_data);
            }
            else if($_GET['Type'] == "History")
            {  
                if($_GET['stock_id'] != "" && $_GET['stock_type'] != "")
                {

                
                $crud = new crud();
                $result = $crud->selectallquery("select s.id,s.remark, CASE when s.status > 0 then (select description from header_description where id = s.status) else '' end as 'status', s.invoice_no, CASE when s.created_by > 0 then (select CONCAT(first_name, ' ',last_name) from users where id = s.created_by) else '' end as 'created_by',s.created_on,s.quantity,p.product_name,v.company_name from stock_history s left join product_master p on s.product_id = p.id left join vendor v on s.vendor_id = v.id where 
                s.stock_id = '".$_GET['stock_id']."' and s.stock_type = '".$_GET['stock_type']."'");
                $numbRows = mysqli_num_rows($result);
                 
                if($numbRows > 0)
                {
                    while ($item = mysqli_fetch_array($result))
                    {
                        $table_data[]= array("id"=>$item['id'],"product_name"=>$item['product_name'],"vendor_name"=>$item['company_name'],"invoice_no"=>$item['invoice_no'],"quantity"=>$item['quantity'],"remark"=>$item['remark'],"status"=>$item['status'],"updated_by"=>$item['created_by'],"updated_on"=>$item['created_on']);
                    }
                }else
                {
                    $table_data[]= array("id"=>"","product_name"=>"","vendor_name"=>"","invoice_no"=>"","quantity"=>"","remark"=>"","status"=>"","updated_by"=>"","updated_on"=>"");
                    $table_data[]= array("id"=>"0","name"=>"","status"=>"0");
                }
                
                echo json_encode($table_data);
                }
            }
            else if($_GET['Type'] == "History2")
            {  
                if($_GET['stock_id'] != "" && $_GET['stock_type'] != "")
                {

                
                $crud = new crud();
                $result = $crud->selectallquery("select s.id,s.remark, CASE when s.status > 0 then (select description from header_description where id = s.status) else '' end as 'status',CASE when s.created_by > 0 then (select CONCAT(first_name, ' ',last_name) from users where id = s.created_by) else '' end as 'created_by',s.created_on,s.quantity,p.product_name from stock_history s left join product_master p on s.product_id = p.idwhere 
                s.stock_id = '".$_GET['stock_id']."' and s.stock_type = '".$_GET['stock_type']."'");
                $numbRows = mysqli_num_rows($result);
                 
                if($numbRows > 0)
                {
                    while ($item = mysqli_fetch_array($result))
                    {
                        $table_data[]= array("id"=>$item['id'],"product_name"=>$item['product_name'],"quantity"=>$item['quantity'],"remark"=>$item['remark'],"status"=>$item['status'],"updated_by"=>$item['created_by'],"updated_on"=>$item['created_on']);
                    }
                }else
                {
                    $table_data[]= array("id"=>"","product_name"=>"","quantity"=>"","remark"=>"","status"=>"","updated_by"=>"","updated_on"=>"");
                    $table_data[]= array("id"=>"0","name"=>"","status"=>"0");
                }
                
                echo json_encode($table_data);
                }
            }

            else if($_GET['Type'] == "InvoiceNo")
            {  
                if($_GET['invoiceNo'] != "" )
                {
                    
                    $crud = new crud();


                    $inVoice = $_GET['invoiceNo'];
                     
                    $result = $crud->selectallquery("select * from stock_in where invoice_no = $inVoice");

                    $numbRows = mysqli_num_rows($result);
                    
                    if($numbRows > 0)
                    {
                        echo  $numbRows ;
                        
                    }else
                    {
                        echo 'valid';
                    }
                    
                   
               
                }
            }

          
            
         

    }
?>

