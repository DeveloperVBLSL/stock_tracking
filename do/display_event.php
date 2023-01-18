<?php                
require '../database/conn.php'; 
$display_query = "select updateDate from actualstock where pack='1000ml' AND brand='7 Up'";             
$results = mysqli_query($conn,$display_query);   
$count = mysqli_num_rows($results);  
if($count>0) 
{
	$data_arr=array();
    $i=1;
	while($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC))
	{	
	$data_arr[$i]['updateDate'] = $data_row['updateDate'];
	
	$data_arr[$i]['start'] = date("Y-m-d", strtotime($data_row['updateDate']));
	$data_arr[$i]['end'] = date("Y-m-d", strtotime($data_row['updateDate']));
	$data_arr[$i]['color'] = '#'.substr(uniqid(),-6); // 'green'; pass colour name
	
	$i++;
	}
	
	$data = array(
                'status' => true,
                'msg' => 'successfully!',
				'data' => $data_arr
            );
}
else
{
	$data = array(
                'status' => false,
                'msg' => 'Error!'				
            );
}
echo json_encode($data);
?>