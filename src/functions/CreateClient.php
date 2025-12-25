<?php
include ".\src\Database\DatabaseConnection.php";
?>
<?php
$userName -> readline('Enter Client name : ');
$email -> readline('Enter Client email : ');
$sql = "INSERT INTO clients (name,email)
VALUES ('$userName',' $email')";
?>