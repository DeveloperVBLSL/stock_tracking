<?php include('header.php');

?>


<!--
  <form style="margin-top: 50px; margin-left:50px;">
  	<input 	type='date' id='hasta' value='<?php echo date('Y-m-d');?>' name="date">
    <button type="submit"><i class="fa fa-search"></i></button>
    <label style="color: red;">Please select the date and click search icon</label>
  </form>
  
-->

  <div class="row">
  <div class="column" style="background-color:beige;">
  
    <center>
  <h3>Brand Wise Summary</h3>


          <table border="1" style="width: 100%;">
              <thead>
                <th>Brand</th>
                <th>Total</th>
                
              </thead>
              <tbody>
              <tr>
                      <td>7 Up</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='7 Up' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


                <tr>
                <td>7UP Lite</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='7UP Lite' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr>  


                <tr>
                <td>Aquafina</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='Aquafina' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr>  
                

                <tr>
                <td>Cream Soda</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='Cream Soda' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr>  


                <tr>
                <td>Duke Soda</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='Duke Soda' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr>  

                <tr>
                <td>Evervess Soda</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='Evervess Soda' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr> 

                <tr>
                <td>Ginger Beer</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='Ginger Beer' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr> 


                <tr>
                <td>Mirinda Orange </td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='Mirinda Orange' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr> 
                


                
                <tr>
                <td>Mountain Dew</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='Mountain Dew' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr> 


                <tr>
                <td>Ole Soda</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='Ole Soda' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr> 


                <tr>
                <td>Pepsi</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='Pepsi' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr> 


                <tr>
                <td>Pepsi Black</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='Pepsi Black' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr> 


                
                <tr>
                <td>STING</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='STING' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr> 



                



                <tr>
                <td>Zingo</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `brand`='Zingo' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr> 

      
                   
              </tbody>
            </table>

<br/>
<!-- hidden form start    -->

<form action="addActually.php" method="POST">
<input style="border: none; outline:none;" type='hidden' id='hasta' value='<?php echo $_GET['dateNew'];?>' name="date" readonly>
<input type="hidden" name="area" value="<?php echo $_SESSION["uname"];  ?>" />
				<?php

						

					$area = $_SESSION["uname"];
					//echo $area;


        $date=$_GET['dateNew'];
        $filter1="`updateDate`='$date'";
        $filter2="AND `area`='$area'";


					//where `tid`=$i AND `updateDate`=CURDATE() AND `area`=$area");
					include('../database/conn.php');
					$q1="select * from temporystock where $filter1  $filter2 ";
					//echo $q1;

				 $query=mysqli_query($conn,$q1);
					

            $n = 280;
						
						for($i=1;$i<=$n;$i++)
						{
              $row=mysqli_fetch_array($query);

						?>
						
							
							<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="<?php echo $row['pack'];  ?>" readonly/>
							<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="<?php echo $row['brand'];  ?>" readonly/>
							<input style="width: 100%;  border: none; outline:none;" type="hidden" name="<?php echo $i.'nm';  ?>" value="<?php echo $row['amount'];  ?>" readonly/>
						
						<?php
					}
						
				?>
			
<input style="background-color: green; color:aliceblue;" type="submit" name="ins" value="Confirm" />
</form>

<!-- hidden form start  end  -->













  </center>

  </div>










  <div class="column" style="background-color:aquamarine;">
  <center>
    <h3>Pack Wise Summary</h3>
    


    <table border="1" style="width: 100%;">
              <thead>
                <th>Pack</th>
                <th>Total</th>
                
              </thead>
              <tbody>



              <tr>
                      <td>1000ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='1000ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


                <tr>
                      <td>1500ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='1500ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>

                <tr>
                      <td>2000ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='2000ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>

                <tr>
                      <td>200ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='200ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


                <tr>
                      <td>207ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='207ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>



                <tr>
                      <td>2250ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='2250ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>



                <tr>
                      <td>250ml - CANS</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='250ml - CANS' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>



                <tr>
                      <td>300ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='300ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


                <tr>
                      <td>330ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='330ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


                <tr>
                      <td>330ml - CANS</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='330ml - CANS' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


                <tr>
                      <td>345ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='345ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


                <tr>
                      <td>500ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='500ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


                <tr>
                      <td>750ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='750ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>



                <tr>
                      <td>BIB - 05</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='BIB - 05' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>



                <tr>
                      <td>BIB - 10</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='BIB - 10' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


                <tr>
                      <td>BIB - 20</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='BIB - 20' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


                <tr>
                      <td>PMX</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='PMX' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


                <tr>
                      <td>20000ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='20000ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


                <tr>
                      <td>400ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='400ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


                <tr>
                      <td>250ml</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['dateNew'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `temporystock` where `pack`='250ml' AND `updateDate`='$date' AND `area`='$area'");
                  while($row=mysqli_fetch_array($query)){
                  ?>
                   
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php
					
                        }
                        
                      ?>
                </tr>


               

      
                   
              </tbody>
            </table>





    </center>


  </div>


  </div>

</div>


















</body>
</html>
