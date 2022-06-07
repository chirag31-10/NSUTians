<?php
 $name = $_POST['name'];
 $e_mail = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];


$connection = mysqli_connect("localhost", "root", "", "database_form") or die("Connection Failed");
$sql= "INSERT INTO database_table(Name,E_Mail,Subject,Message)  VALUES('{$name}', '{$e_mail}', '{$subject}', '{$message}') " ;

$result = mysqli_query($connection,$sql) or die("Query Failed!");


header("Location: http://localhost/UnravelMe/contact.html");
mysqli_close($connection);
?>