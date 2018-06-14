<?php
$servername = "localhost";
$username = "root";
$password = "hemnds";
$dbname = "dvs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$one="SELECT E_id from election";

$res=mysqli_query($conn, $one);

while($row=mysqli_fetch_assoc($res))
{
	echo $row['E_id']."<br>";
	}
?>
