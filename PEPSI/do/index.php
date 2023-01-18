<?php include('header.php');

?>

<div class="w3-right w3-padding-32" style="margin-right: 30px;">
<a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
</div>
<div class="w3-center w3-padding-32" style="margin-right: 30px;">
<div class="col-md-12" id="importFrm" style="display: none;">
        <form action="importData.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
        </form>
    </div>
</div>
      
   
<div class="w3-padding-large w3-padding-32 w3-margin-top" id="contact">

<form action="addTempory.php" method="POST">
<input style="border: none; outline:none;" type='date' id='hasta' value='<?php echo date('Y-m-d');?>' name="date" readonly>
<center>
<table id="customers">
			<thead>
                <th>No.</th>
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
					$query=mysqli_query($conn,"select * from `products` where `id`=$i");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><input style="width: 100%; border: none; outline:none;" type="text" name="<?php echo $i.'item';  ?>"  value="<?php echo $row['item'];  ?>"></td>
							<td><input style="width: 100%; border: none; outline:none;" type="text" name="<?php echo $i.'pack';  ?>"  value="<?php echo $row['pack'];  ?>"></td>
							<td><input style="width: 100%; border: none; outline:none;" type="text" name="<?php echo $i.'brand';  ?>"  value="<?php echo $row['brand'];  ?>"></td>
							<td><input style="width: 100%; border-top: none;" type="text" name="<?php echo $i.'nm';  ?>"/></td>
						</tr>
						<?php
					}
						}
				?>
			</tbody>
           
</table>

<p>

</p>
<input style="background-color: blue; color:aliceblue;" type="submit" name="ins" value=" SAVE " />
</form>
</center>
</div>


<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>


</body>
</html>
