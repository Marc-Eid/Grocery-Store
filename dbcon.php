<?php

$dbhost = 'remotemysql.com:3306';
$dbuser = 'HTADFpjYkD';
$dbpass = 'Ng7fU9bD9m';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbuser);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>