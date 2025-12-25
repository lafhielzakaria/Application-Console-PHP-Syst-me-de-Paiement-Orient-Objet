<?php
$dsn = "mysql:host=localhost;dbname=paymentsystem;charset=utf8mb4";
$conn = new PDO($dsn, 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($conn){
   echo 'connect';
}
?>
