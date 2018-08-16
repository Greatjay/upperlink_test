<?php
session_start();
 
include('connection.php');
 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$contact=$_POST['contact'];
$email=$_POST['email']; 
mysqli_query($bd, "INSERT INTO member(fname, lname, contact, email, )VALUES('$fname', '$lname', '$contact', '$email')");
 
header("location: index.php?remarks=success");
 
mysqli_close($con);
?>