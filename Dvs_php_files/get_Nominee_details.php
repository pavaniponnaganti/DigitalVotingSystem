<?php  
$servername = "localhost";
$username = "root";
$password = "hemnds";
$dbname = "dvs";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

		$res=mysqli_query($conn,"select * from election_data natural join nominee_data");
	$intNumField = mysqli_num_fields($res);
	
	 $fieldinfo=mysqli_fetch_fields($res);
	 $resultArray=array();
	while($obResult = mysqli_fetch_array($res))
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
