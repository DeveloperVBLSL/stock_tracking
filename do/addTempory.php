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
            mysqli_query($conn,"INSERT INTO `temporystock` (`pack`, `brand`, `amount`, `updateDate`, `area`) VALUES ('$pack', '$brand', '$nm', '$date', '$area')");
            
			

        }
        
		header("location:view.php?dateNew=$date&area=$area");
		
    }
?>