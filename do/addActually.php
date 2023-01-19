<?php 

include ("../database/conn.php");

 error_reporting ( E_ALL & ~E_NOTICE);  

    if(isset($_POST['ins']))
    {
       

        $n=280;
        for($i=1;$i<=$n;$i++)
        {
            
			$pack=$_POST[$i."pack"];
			$brand=$_POST[$i."brand"];
			$nm=$_POST[$i."nm"];
			$date=$_POST['date'];
            $area=$_POST['area'];
            mysqli_query($conn,"insert into actualstock (pack,brand,amount,updateDate,area) values('$pack','$brand','$nm','$date','$area')");
			

        }
        
		header("location:index.php");
		
    }
?>