<?php

$servername = "localhost";
$username = "thefound";
$password = "Je1Sn4m59n";
$dbname = "thefound_database";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
  die("Connection Failed: ".mysqli_connect_error());


}
