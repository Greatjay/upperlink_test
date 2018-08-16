<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "batjay";
$mysql_database = "upperlink";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd, $mysql_database) or die("Could not select database");
?>