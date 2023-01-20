<?php
$conn = mysqli_connect("localhost","u428164805_db_system","Welcome@321#","u428164805_stock_tracking");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>