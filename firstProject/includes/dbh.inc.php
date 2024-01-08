<?php
//connecting to database
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName ="firstProject";

$conn = mysqli_connect($servername, $dBUsername, $dBName);

if(!conn){
    die("connection failed: ".mysqli_connect_error());
}
