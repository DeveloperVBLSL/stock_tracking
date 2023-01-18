<?php  
    if(isset($_POST['ins']))
    {
        $c = mysqli_connect("localhost","root","","stock");

        $n=147;
        for($i=1;$i<=$n;$i++)
        {
            $item=$_POST[$i."item"];
			$pack=$_POST[$i."pack"];
			$brand=$_POST[$i."brand"];
			$nm=$_POST[$i."nm"];
			$date=$_POST['date'];
            mysqli_query($c,"insert into actualStock (item,pack,brand,amount,updateDate) values('$item','$pack','$brand','$nm','$date')");
			

        }
        echo "Data added successfully...";
		header("location:index.php");
		
    }
?>