<?php

include ('error.php');


$host="localhost"; 
$user="root";
$password="";
$db="stock";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$uname=$_POST["uname"];
	$upassword=$_POST["upassword"];


	$sql="select * from users where uname='".$uname."' AND upassword='".$upassword."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["utype"]=="do")
	{	

		$_SESSION["uname"]=$uname;

		header("location:do/index.php");
	}

	elseif($row["type"]=="supplier")
	{

		$_SESSION["uname"]=$uname;
		
		header("location:supplier/index.php");
	}

	else
	{
		echo '<script>alert("Please try again")</script>';
    
	}

}

?>


<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="styles/style.css">    
</head>    
<body>
        
        
    <div class="login">    
    <form action="#" method="POST" id="login">    
    <h2>STOCK</h2><br>
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="upassword" id="Pass" placeholder="Password">    
        <br><br>    
       <center> <input type="submit" name="log" id="log" value="Log In Here">       </center>
       
        
    </form>     
</div>    
</body>    
</html>     