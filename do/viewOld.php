<?php include('header.php');

?>



  <form style="margin-top: 50px; margin-left:50px;">
  	<input 	type='date' id='hasta' value='<?php echo date('Y-m-d');?>' name="date">
    <button type="submit"><i class="fa fa-search"></i></button>
    <label style="color: red;">Please select the date and click search icon</label>
  </form>
  


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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='7 Up' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='7UP Lite' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='Aquafina' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='Cream Soda' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='Duke Soda' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='Evervess Soda' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='Ginger Beer' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='Mirinda Orange' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='Mountain Dew' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='Ole Soda' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='Pepsi' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='Pepsi Black' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='STING' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr> 



                <tr>
                <td>TROP MANGO</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='TROP MANGO' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr> 



                <tr>
                <td>TROP MIX FRUIT</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='TROP MIX FRUIT' AND `updateDate`='$date' AND `area`='$area'");
                   while($row=mysqli_fetch_array($query)){
                  ?>
                  
                      <td><?php echo $row['value_sum']; ?></td>
                      <?php

                        }
                        
                      ?>
                </tr> 




                <tr>
                <td>TROP ORANGE</td>

                <?php
                  include('../database/conn.php');
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='TROP ORANGE' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `brand`='Zingo' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='1000ml' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='1500ml' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='2000ml' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='200ml' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='207ml' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='2250ml' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='250ml - CANS' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='300ml' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='330ml' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='330ml - CANS' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='345ml' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='500ml' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='750ml' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='BIB - 05' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='BIB - 10' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='BIB - 20' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='PMX' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='20000ml' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='400ml' AND `updateDate`='$date' AND `area`='$area'");
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
                  $date=$_GET['date'];
                  $area = $_SESSION["uname"];
                  $query=mysqli_query($conn,"select SUM(amount) AS value_sum from `actualstock` where `pack`='250ml' AND `updateDate`='$date' AND `area`='$area'");
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
