<?php include("header.php");
	include('../database/conn.php');
?>

</br>

<?php 
    $name = $_SESSION["uname"];
    $query ="SELECT * FROM areas WHERE name='$name'";
    $result = $conn->query($query);
    $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    ?>
    <div style="margin-left:10%;">
    <form action="#" method="POST">
    <select name="area">
    <option>Select Area</option>
    <?php 
    foreach ($options as $option) {
    ?>
    <option><?php echo $option['area']; ?> </option>
    <?php 
    }
   ?>
</select>
    <button type="submit"><i class="fa fa-search"></i></button>
    </form>

    </div>

<center>
    
    <div class="gfg">
    
    	<?php
					
					if($_SERVER["REQUEST_METHOD"]=="POST")
					{
					    ?>
					    
					    
<table border="1">
			<thead style="width:50px;">
			    
			    <?php
			    
			    $month = date('F');
			    $year = date('Y');
			    $monthNo= date('m');
			   
			    echo $month;
			    
			    



					$query=mysqli_query($conn,"select * from `calender` where `month`='$month'");
					while($row=mysqli_fetch_array($query)){
					   
					        if($row['holiday']=='1'){
					            $color = ( 'red');
					            $dis = ('disabled');
					        }
					        else{
					            
                                $dis = ('');
                                
                                $area = $_POST["area"];
                                

                                
                               
                                $date = $year."-".$monthNo."-".$row['date'];
			                    $stockQueryNew = "SELECT * FROM actualstock WHERE area='$area' AND updateDate='$date'";
                                $result_set1= mysqli_query($conn,$stockQueryNew);
                                $numrows = mysqli_num_rows($result_set1);
                                
                                if($numrows > 0){
                                    
                                        $color = ( '#98fb98');
                                        $dis = ('disabled');
                                                }
                                else {
                                     $color = ( 'white');
                                }
					        
					        }
					    
					    
						?>
					
									
							<th style="background-color: <?=$color?>">
							    
							    
							    
							    <a href="dataEntry.php?area=<?php echo $_POST["area"]?>&date=<?php echo $row["date"]?>">
                                <button style="background-color: <?=$color?>;" <?=$dis?>><?php echo $row['date']; ?></button>
                                </a> 
							    
							    
							    
							    </th>
							    
							
						
						<?php
					}
					
				?>
				
			</thead>
		
			
		</table></center>
		
			<div style="margin-left:10%;">
		    	<?php 
			    
			                    $area = $_POST["area"];
			                    $stockQuery = "SELECT SUM(amount) AS value_sum FROM actualstock WHERE area='$area'";
                                $result_set= mysqli_query($conn,$stockQuery);
                                
                                if($result_set){
                                    if(mysqli_num_rows($result_set) == 1){
                                        $result = mysqli_fetch_assoc($result_set);
                                        echo "Last stock qty = ". $result['value_sum'];
                                    }
                                }
			    
			    
			    ?>
		</div>
			</div>
		
		
						<?php
					}
					else{
					    echo "<h1 style='color:red;'>Importance</h1>
					    
					    <h3>Please select your area</h3>
					    
					    ";
					    $image='<img width="30%"  src="sign.gif"/>';
                        echo $image;
					}
					
				?>
		
		
		
		</br>
	
		
	
</div>

</body>
</html>
