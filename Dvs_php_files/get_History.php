<?php
$servername = "localhost";
$username = "root";
$password = "hemnds";
$dbname = "dvs";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//$uid=$_POST['user'];

$hs=mysqli_query($conn,"SELECT UID,H_desc,Time from userhistory");
$resultArray = array();
		$intNumField = mysqli_num_fields($hs);
		$fieldinfo=mysqli_fetch_fields($hs);
	while($obResult = mysqli_fetch_array($hs))
	{
		$arrCol = array();
			$arrCol["Time"] = $obResult[2];
			$arrCol["Hdesc"] = $obResult[1];
			$arrCol["UID"] = $obResult[0];
		array_push($resultArray,$arrCol);
	}
	mysqli_close($conn);

	echo json_encode($resultArray);
?>
