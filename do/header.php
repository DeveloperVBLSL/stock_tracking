<?php include('../error.php'); 
  include ("../database/conn.php");
session_start();



if(!isset($_SESSION["uname"]))
{
	header("location:../index.php");
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>stock</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  
}

#customers td, #customers th {
  border: 1px solid black;
  height: 20px;
  
 
}

#customers input{
  border: 0;
  width: 100%;
  background-color: transparent;

}

#customers tr:nth-child(even){background-color: lightblue;}

#customers tr:hover {background-color: yellow;}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: black;
  color: white;
  position: sticky;
 
  
}

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 100%; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>

</head>
<body>

<!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1500px;">
  <img class="w3-image" src="../resources/wallpaper.png" alt="Me" width="100%" >   
  </div>
  
  <!-- Navbar (placed at the bottom of the header image) -->
  <div class="w3-bar w3-blue w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px" >
    <a href="index.php" class="w3-bar-item w3-button">Home</a>
     <a href="viewOld.php" class="w3-bar-item w3-button">Summary</a>
     <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>    
   <!-- <a href="" class="w3-bar-item w3-button"></a>  -->
  </div>
</header>

<!-- Navbar on small screens -->
<div class="w3-center w3-light-grey w3-padding-8 w3-hide-large w3-hide-medium">
<div class="w3-bar w3-light-blue">
  <a href="index.php" class="w3-bar-item w3-button" style="padding: 3px;">Home</a>
 <a href="viewOld.php" class="w3-bar-item w3-button" style="padding: 3px;">Summary</a>
 <a href="../logout.php" class="w3-bar-item w3-button" style="padding: 3px;">Logout</a>
   <!--<a href="" class="w3-bar-item w3-button"></a>  -->
</div>
</div>