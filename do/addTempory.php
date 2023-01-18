<?php  

    include ("../database/conn.php");

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
            mysqli_query($conn,"insert into temporystock (pack,brand,amount,updateDate,area) values('$pack','$brand','$nm','$date','$area')");
			

        }
        echo "Data added successfully...";
		header("location:view.php?dateNew=$date");
		
    }
?>