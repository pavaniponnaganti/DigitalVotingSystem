<?php
$servername = "localhost";
$username = "root";
$password = "hemnds";
$dbname = "dvs";


	//include("App_Config.php");
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$strSQL = "SELECT *
			   FROM notices";
	$objQuery = mysqli_query($conn,$strSQL);
	$intNumField = mysqli_num_fields($objQuery);
	$resultArray = array();
	while($obResult = mysqli_fetch_array($objQuery))
	{
		$arrCol = array();
		for($i=0;$i<$intNumField;$i++)
		{
			//$dd=mysqli_fetch_field_direct($objQuery,$i);
			//echo $dd."<br>";
			$arrCol[$i] = $obResult[$i];
		}
		array_push($resultArray,$arrCol);
	}
	
	mysqli_close($conn);
	
	echo json_encode($resultArray);
?>

