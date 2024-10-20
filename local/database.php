<?php
$servername ="localhost";
$username = "root";
$password = "";
$database ="orangehrm";
$conn = MySQLi_connect($servername,$username,$password,$database);
if(!$conn){
    die("connection was faild".mysqli_error());
}

?>