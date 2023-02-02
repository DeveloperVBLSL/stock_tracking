<?php include('header.php');

?>


<div class="w3-right w3-padding-32" style="margin-right: 30px;">
<a style="background-color: black; color: white;  padding: 5px 10px;text-align: center;text-decoration: none;display: inline-block;"  href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Upload</a>
</div>
<div class="w3-center w3-padding-32" style="margin-right: 30px;">
<center>
<div class="col-md-12" id="importFrm" style="display: none; border-style: outset; width:90%; background-color:beige; padding:5px;">
        <form action="importData.php" method="post" enctype="multipart/form-data">
            <input style="border: none; outline:none;background-color:transparent;" type='hidden' value='<?php echo $_GET['area'];  ?>' id="db" name="area" READONLY>
			<input style="width:80%;" type="file" name="doc" required/>
			 <?php       $year = date('Y');
			    $monthNo= date('m'); 
			    $date1 = $year."-".$monthNo."-".$_GET['date'];
			    
			    ?>
            <input style="border: none; outline:none;background-color:transparent;" type='hidden'  value='<?php echo $date1;?>' name="dateForm" required READONLY/>
            
            <input style="background-color:yellow;color:black;" type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
        </form>
</br>
		<p style="color:grey;">Template is here <a style="color:blue;" href="../download/sample-csv-products.xlsx" download>Download</a></p>
    </div></center>
</div>
      
   
<div class="w3-padding-large w3-padding-32 w3-margin-top" id="contact">


<form action="addTempory.php" method="POST">
    <?php       $year = date('Y');
			    $monthNo= date('m'); 
			    $date = $year."-".$monthNo."-".$_GET['date'];
			    
			    ?>
<input style="border: none; outline:none; background-color:transparent;" type='date' id='hasta' value='<?php echo $date;  ?>' name="date" required READONLY>
<input style="border: none; outline:none; background-color:transparent;" type='text' value='<?php echo $_GET['area'];  ?>' name="area" READONLY required >

<center>
 <div class="importData">
<table id="customers">
	<thead style="font-size: x-small;">
		<th></th>
		<th>Pepsi</th>
		<th>Pepsi Black</th>
		<th>Mirinda Orange </th>
		<th>7 Up</th>
		<th>7UP Lite</th>
		<th>Mountain Dew</th>
		<th>STING</th>
		<th>Cream Soda</th>
		<th>Ginger Beer</th>
		<th>Zingo</th>
		<th>Evervess Soda</th>
		<th>Ole Soda</th>
		<th>Duke Soda</th>
		<th>Aquafina</th>
		
	
		
	</thead>

	<tbody style="font-size: x-small;">



		<tr>
			<td>200ml</td>


			<td>
			<?php

						$i = 1;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 2;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 3;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 4;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 5;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 6;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 7;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 8;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 9;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 10;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 11;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 12;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 13;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 14;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>


			
			

									
		</tr>



		<tr>
			<td>207ml</td>

			<td>
			<?php

						$i = 15;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 16;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 17;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 18;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 19;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 20;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 21;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 22;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 23;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 24;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 25;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 26;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 27;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 28;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>



		</tr>
		<tr>
			<td>250ml</td>

			<td>
			<?php

						$i = 29;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 30;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 31;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 32;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 33;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 34;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 35;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 36;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 37;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 38;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 39;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 40;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 41;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 42;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>

		</tr>
		<tr>
			<td>250ml - CANS</td>

			<td>
			<?php

						$i = 43;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 44;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 45;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 46;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 47;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 48;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 49;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 50;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 51;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 52;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 53;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 54;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 55;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 56;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>

		</tr>
		<tr>
			<td>300ml</td>

			<td>
			<?php

						$i = 57;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 58;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 59;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 60;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 61;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 62;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 63;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 64;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 65;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 66;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 67;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 68;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 69;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 70;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>

		</tr>
		<tr>
			<td>330ml</td>

			<td>
			<?php

						$i = 71;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 72;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 73;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 74;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 75;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 76;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 77;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 78;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 79;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 80;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 81;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 82;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 83;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 84;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>


		</tr>
		<tr>
			<td>330ml - CANS</td>

			<td>
			<?php

						$i = 85;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 86;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 87;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 88;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 89;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 90;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 91;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 92;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 93;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 94;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 95;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 96;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 97;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 98;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>


		</tr>
		<tr>
			<td>345ml</td>

			<td>
			<?php

						$i = 99;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 100;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 101;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 102;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 103;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 104;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 105;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 106;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 107;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 108;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 109;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 110;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 111;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 112;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>

		</tr>
		<tr>
			<td>400ml</td>

			<td>
			<?php

						$i = 113;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 114;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 115;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 116;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 117;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 118;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 119;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 120;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 121;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 122;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 123;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 124;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 125;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 126;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>

		</tr>
		<tr>
			<td>500ml</td>

			<td>
			<?php

						$i = 127;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 128;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 129;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 130;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 131;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 132;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 133;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 134;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 135;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 136;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 137;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 138;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 139;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 140;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>


		</tr>
		<tr>
			<td>750ml</td>

			<td>
			<?php

						$i = 141;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 142;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 143;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 144;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 145;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 146;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 147;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 148;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 149;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 150;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 151;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 152;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 153;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 154;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>

		</tr>
		<tr>
			<td>1000ml</td>
			<td>
			<?php

						$i = 155;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 156;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 157;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 158;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 159;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 160;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 161;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 162;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 163;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 164;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 165;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 166;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 167;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 168;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>

		</tr>
		<tr>
			<td>1500ml</td>

			<td>
			<?php

						$i = 169;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 170;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 171;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 172;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 173;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 174;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 175;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 176;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 177;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 178;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 179;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 180;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 181;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 182;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>

		</tr>
		<tr>
			<td>2000ml</td>

			<td>
			<?php

						$i = 183;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 184;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 185;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 186;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 187;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 188;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 189;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 190;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 191;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 192;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 193;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 194;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 195;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 196;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>

		</tr>
		<tr>
			<td>2250ml</td>

			<td>
			<?php

						$i = 197;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 198;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 199;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 200;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 201;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 202;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 203;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 204;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 205;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 206;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 207;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 208;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 209;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 210;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>


		</tr>
		<tr>
			<td>20000ml</td>

			<td>
			<?php

						$i = 211;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 212;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 213;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 214;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 215;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 216;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 217;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 218;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 219;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 220;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 221;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 222;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 223;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 224;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>


		</tr>
		<tr>
			<td>BIB - 05</td>

			<td>
			<?php

						$i = 225;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 226;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 227;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 228;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 229;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 230;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 231;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 232;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 233;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 234;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 235;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 236;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 237;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 238;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>


		</tr>
		<tr>
			<td>BIB - 10</td>

			<td>
			<?php

						$i = 239;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 240;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 241;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 242;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 243;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 244;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 245;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 246;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 247;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 248;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 249;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 250;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 251;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 252;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>


		</tr>
		<tr>
			<td>BIB - 20</td>

			<td>
			<?php

						$i = 253;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 254;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 255;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 256;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 257;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 258;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 259;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 260;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 261;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 262;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 263;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 264;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 265;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 266;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>


		</tr>
		<tr>
			<td>PMX</td>

			<td>
			<?php

						$i = 267;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal()" class="amount"/>
				</td>

				<td>
			<?php

						$i = 268;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal1()" class="amount1"/>
				</td>

				<td>
			<?php

						$i = 269;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal2()" class="amount2"/>
				</td>


				<td>
				<?php

						$i = 270;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal3()" class="amount3"/>
				</td>


				<td>
				<?php

						$i = 271;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal4()" class="amount4"/>
				</td>


				<td>
				<?php

						$i = 272;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal5()" class="amount5"/>
				</td>


				<td>
				<?php

						$i = 273;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal6()" class="amount6"/>
				</td>

			
				<td>
				<?php

						$i = 274;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal7()" class="amount7"/>
				</td>


				<td>
				<?php

						$i = 275;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal8()" class="amount8"/>
				</td>


				<td>
				<?php

						$i = 276;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal9()" class="amount9"/>
				</td>

				<td>
				<?php

						$i = 277;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal10()" class="amount10"/>
				</td>

				<td>
				<?php

						$i = 278;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal11()" class="amount11"/>
				</td>

				<td>
				<?php

						$i = 279;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal12()" class="amount12"/>
				</td>

				<td>
				<?php

						$i = 280;
						
			?>

				<input  type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input  type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input  type="text" name="<?php echo $i.'nm';  ?>" onblur="findTotal13()" class="amount13"/>
				</td>


		</tr>

		<tr style="background-color: grey;">
			<td style="color: wheat; text-align:center;">Total</td>
			<td><input style="color: wheat; text-align:center;"  type="text" name="sum" id="totalordercost" readonly /></td>
			<td><input  style="color: wheat; text-align:center;" type="text" name="sum" id="totalordercost1" readonly /></td>
			<td><input  style="color: wheat; text-align:center;" type="text" name="sum" id="totalordercost2" readonly /></td>
			<td><input  style="color: wheat; text-align:center;" type="text" name="sum" id="totalordercost3" readonly /></td>
			<td><input  style="color: wheat; text-align:center;" type="text" name="sum" id="totalordercost4" readonly /></td>
			<td><input  style="color: wheat; text-align:center;" type="text" name="sum" id="totalordercost5" readonly /></td>
			<td><input  style="color: wheat; text-align:center;" type="text" name="sum" id="totalordercost6" readonly /></td>
			<td><input  style="color: wheat; text-align:center;" type="text" name="sum" id="totalordercost7" readonly /></td>
			<td><input  style="color: wheat; text-align:center;" type="text" name="sum" id="totalordercost8" readonly /></td>
			<td><input  style="color: wheat; text-align:center;" type="text" name="sum" id="totalordercost9" readonly /></td>
			<td><input  style="color: wheat; text-align:center;" type="text" name="sum" id="totalordercost10" readonly /></td>
			<td><input  style="color: wheat; text-align:center;" type="text" name="sum" id="totalordercost11" readonly /></td>
			<td><input  style="color: wheat; text-align:center;" type="text" name="sum" id="totalordercost12" readonly /></td>
			<td><input  style="color: wheat; text-align:center;" type="text" name="sum" id="totalordercost13" readonly /></td>
		</tr>

	</tbody>
</table>
</div>
</br>

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

//horizontal
function findTotal(){
    var arr = document.getElementsByClassName('amount');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost').value = tot;
}


function findTotal1(){
    var arr = document.getElementsByClassName('amount1');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost1').value = tot;
}


function findTotal2(){
    var arr = document.getElementsByClassName('amount2');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost2').value = tot;
}

function findTotal3(){
    var arr = document.getElementsByClassName('amount3');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost3').value = tot;
}

function findTotal4(){
    var arr = document.getElementsByClassName('amount4');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost4').value = tot;
}

function findTotal5(){
    var arr = document.getElementsByClassName('amount5');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost5').value = tot;
}

function findTotal6(){
    var arr = document.getElementsByClassName('amount6');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost6').value = tot;
}

function findTotal7(){
    var arr = document.getElementsByClassName('amount7');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost7').value = tot;
}

function findTotal8(){
    var arr = document.getElementsByClassName('amount8');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost8').value = tot;
}

function findTotal9(){
    var arr = document.getElementsByClassName('amount9');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost9').value = tot;
}

function findTotal10(){
    var arr = document.getElementsByClassName('amount10');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost10').value = tot;
}

function findTotal11(){
    var arr = document.getElementsByClassName('amount11');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost11').value = tot;
}

function findTotal12(){
    var arr = document.getElementsByClassName('amount12');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost12').value = tot;
}

function findTotal13(){
    var arr = document.getElementsByClassName('amount13');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost13').value = tot;
}




</script>


</body>
</html>
