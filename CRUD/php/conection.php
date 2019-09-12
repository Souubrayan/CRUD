<?php
$servername = "localhost";
$username = "root";
$pass = "";
$db = "login_users";

//creates conection
$conn = mysqli_connect($servername,$username,$pass,$db);

// Check the connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>