<?php
$servername = "localhost";
$username = "root";
$password = "hemnds";
$dbname = "dvs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$kk="APMLA01";
$one="SELECT N_id from election_data where E_id='$kk'";

$res=mysqli_query($conn, $one);

$all_res=array();
while($row=mysqli_fetch_assoc($res))
{
	//echo $row['N_id']."<br>";
	
	$nomi=$row['N_id'];
	//echo $nomi;
	$two="SELECT * from nominee where N_id='$nomi'";
	$res2=mysqli_query($conn, $two);
	$resultArray = array();
	/*while($row2=mysqli_fetch_assoc($res2))
		{
			echo $row2['N_name']."<br>";
			echo $row2['N_age']."<br>";
			echo $row2['N_phno']."<br>";
			echo $row2['N_id']."<br>";
			echo $row2['N_email']."<br>";
			echo $row2['N_data']."<br>";
			echo $row2['N_party']."<br>";
	}*/
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
	array_push($all_res,$resultArray[0]);
//print_r ($resultArray);
}
mysqli_close($conn);
echo json_encode($all_res);

?>
