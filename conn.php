<?php
$serverName="localhost";
$username="root";
$password="";
$databaseName="mytable";
$connection=mysqli_connect($serverName,$username,$password,$databaseName) or die("Could not connect !");


mysqli_select_db($databaseName,$connection) or die("Could not select database");


?>