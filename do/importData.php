<?php

/*

//include('header.php');
// Load the database configuration file
include_once '../database/conn.php';

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'text/xls', 'text/xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $item   = $line[0];
                $pack  = $line[1];
                $brand  = $line[2];
                $amount = $line[3];
                $area = $_POST['area'];
                $date=$_POST['dateForm'];
                                
                // Insert member data in the database
                $conn->query("INSERT INTO temporystock (item, pack, brand, amount, updateDate,area) VALUES ('".$item."', '".$pack."', '".$brand."', '".$amount."', '".$date."', '".$area."')");
                
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';  
    }
}

// Redirect to the listing page
header("location:viewExcel.php?dateNew=$date");

*/

include_once '../database/conn.php';

if(isset($_POST['importSubmit'])){
	$file=$_FILES['doc']['tmp_name'];
	
	$ext=pathinfo($_FILES['doc']['name'],PATHINFO_EXTENSION);
	if($ext=='xlsx'){
		require('PHPExcel/PHPExcel.php');
		require('PHPExcel/PHPExcel/IOFactory.php');
		
		
		$obj=PHPExcel_IOFactory::load($file);
		foreach($obj->getWorksheetIterator() as $sheet){
			$getHighestRow=$sheet->getHighestRow();
			for($i=2;$i<=$getHighestRow;$i++){
				$item=$sheet->getCellByColumnAndRow(0,$i)->getValue();
				$pack=$sheet->getCellByColumnAndRow(1,$i)->getValue();
				$brand=$sheet->getCellByColumnAndRow(2,$i)->getValue();
				$amount=$sheet->getCellByColumnAndRow(3,$i)->getValue();
				$area = $_POST['area'];
                $date=$_POST['dateForm'];
				if($item!=''){
					mysqli_query($conn,"insert into temporystock(item,pack,brand,amount,area,updateDate) values('$item','$pack','$brand','$amount','$area','$date')");
				}
			}
		}
	}else{
		echo "Invalid file format";
	}
	header("location:viewExcel.php?dateNew=$date&area=$area");
}


?>