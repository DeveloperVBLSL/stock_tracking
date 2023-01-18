<?php include('header.php');

?>


<div class="w3-padding-large w3-padding-32 w3-margin-top" id="contact">


<form action="addActually.php" method="POST">
<input style="border: none; outline:none;" type='date' id='hasta' value='<?php echo date('Y-m-d');?>' name="date" readonly>
<center>
<table border="1">
			<thead>
                
				<th>Item</th>
				<th>Pack</th>
				<th>Brand</th>
				<th>Stock</th>
				
			</thead>
			<tbody>
				<?php

						$n = 147;
						for($i=1;$i<=$n;$i++)
						{

					include('../database/conn.php');
					$query=mysqli_query($conn,"select * from `temporystock` where `tid`=$i AND `updateDate`=CURDATE()");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><input style="width: 100%; border: none; outline:none;" type="text" name="<?php echo $i.'item';  ?>"  value="<?php echo $row['item'];  ?>" readonly/></td>
							<td><input style="width: 100%; border: none; outline:none;" type="text" name="<?php echo $i.'pack';  ?>"  value="<?php echo $row['pack'];  ?>" readonly/></td>
							<td><input style="width: 100%; border: none; outline:none;" type="text" name="<?php echo $i.'brand';  ?>"  value="<?php echo $row['brand'];  ?>" readonly/></td>
							<td><input style="width: 100%;  border: none; outline:none;" type="text" name="<?php echo $i.'nm';  ?>" value="<?php echo $row['amount'];  ?>" readonly/></td>
						</tr>
						<?php
					}
						}
				?>
			</tbody>
           
</table>

<p>

</p>
<input style="background-color: green; color:aliceblue;" type="submit" name="ins" value="Confirm" />
</form>
</center>
</div>





</body>
</html>
