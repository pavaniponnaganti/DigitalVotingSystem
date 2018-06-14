<?php  
$conn=mysqlI_connect("localhost","root","hemnds","dvs");




		$two="SELECT * FROM user;";
	$res2=mysqli_query($conn,$two);
	$resultArray = array();
	
	$intNumField = mysqli_num_fields($res2);
	
	 $fieldinfo=mysqli_fetch_fields($res2);
	while($obResult = mysqli_fetch_array($res2))
	{
		$arrCol = array();
		for($i=0;$i<$intNumField;$i++)
		{
			
			$arrCol[$fieldinfo[$i]->name] = $obResult[$i];
		}
		array_push($resultArray,$arrCol);
	}
echo json_encode($resultArray);
?>
