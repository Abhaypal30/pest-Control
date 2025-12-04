<?php
$password = "Nexum@123#";
$encrypted = password_hash($password,PASSWORD_DEFAULT);
echo $encrypted ;
?>