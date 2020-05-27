<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "inventory";
  // Koble til databasen
  $conn = new mysqli($host,$user,$password,$database);
  if($conn->connect_error){
    die("Could'nt connect to database: ".$conn->connect_error);
  }
?>
