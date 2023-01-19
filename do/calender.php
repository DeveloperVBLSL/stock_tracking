<?php include("header.php");
	include('../database/conn.php');
?>

</br>
<center>
<table style="width: 80%; height:50px;" border="1">
	<thead>
	<?php
                  include('../database/conn.php');
                  
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select updateDate from `temporystock` where `pack`='1000ml' AND `brand`='7 Up' AND `area`='$area' ");
                   while($row=mysqli_fetch_array($query)){
					$color = ( '#CCCCCC');
                  ?>
                  
				  <td style="background-color: <?=$color?>">1</td>
                      <?php

                        }
                        
                      ?>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	</thead>
</table>
</center>


</div>
</body>
</html>
