<?php include('header.php');

?>


<div class="w3-padding-large w3-padding-32 w3-margin-top" id="contact">



<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">7 Up</h1>

	  <table border="1">
			<thead>
				<th>Item</th>
				<th>Pack</th>
				<th>Amount</th>
			</thead>
			<tbody>
				<?php
					include('../database/conn.php');
					$query=mysqli_query($conn,"select * from `temporystock` where `pack`= '1000ml' ");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['item']; ?></td>
							<td><?php echo $row['pack']; ?></td>
							<td><?php echo $row['amount']; ?></td>
							
						</tr>
						
						<?php
					
					}
					
				?>
				<td>Total</td>
				<td></td>
				<td>
				<?php
					include('../database/conn.php');
					$query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`= '1000ml' ");
					while($row=mysqli_fetch_array($query)){
						echo $row['value_sum'];
					}
					?>

				</td>
			</tbody>
		</table>

      </div>
    
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Heading</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Heading</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    
  </div>


















<!-- hidden form start    -->

<form action="addActually.php" method="POST">
<input style="border: none; outline:none;" type='hidden' id='hasta' value='<?php echo date('Y-m-d');?>' name="date" readonly>
<input type="hidden" name="area" value="<?php echo $_SESSION["uname"];  ?>" />
				<?php

						$n = 147;
						
						for($i=1;$i<=$n;$i++)
						{

					$area = $_SESSION["uname"];
					//echo $area;



$filter1="AND `updateDate`=CURDATE()";
$filter2="AND `area`='$area'";


					//where `tid`=$i AND `updateDate`=CURDATE() AND `area`=$area");
					include('../database/conn.php');
					$q1="select * from temporystock where tid= $i  $filter1  $filter2 ";
					//echo $q1;

				 $query=mysqli_query($conn,$q1);
					while($row=mysqli_fetch_array($query)){
						?>
						
							<input style="width: 100%; border: none; outline:none;" type="text" name="<?php echo $i.'item';  ?>"  value="<?php echo $row['item'];  ?>" readonly/>
							<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="<?php echo $row['pack'];  ?>" readonly/>
							<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="<?php echo $row['brand'];  ?>" readonly/>
							<input style="width: 100%;  border: none; outline:none;" type="hidden" name="<?php echo $i.'nm';  ?>" value="<?php echo $row['amount'];  ?>" readonly/>
						
						<?php
					}
						}
				?>
			
<input style="background-color: green; color:aliceblue;" type="submit" name="ins" value="Confirm" />
</form>

<!-- hidden form start  end  -->

</div>





</body>
</html>
