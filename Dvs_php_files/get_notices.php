<?php
$servername = "localhost";
$username = "root";
$password = "hemnds";
$dbname = "dvs";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);



$hs=mysqli_query($conn,"SELECT * from notices");
$resultArray = array();
		$intNumField = mysqli_num_fields($hs);
		$fieldinfo=mysqli_fetch_fields($hs);
	while($obResult = mysqli_fetch_array($hs))
	{
		$arrCol = array();
			$arrCol["Title"] = $obResult[3];
			$arrCol["Body"] = $obResult[4];
			$arrCol["Time"] = $obResult[5];
			$arrCol["To_id"] = $obResult[2];
		array_push($resultArray,$arrCol);
	}
	mysqli_close($conn);

	echo json_encode($resultArray);
?>
