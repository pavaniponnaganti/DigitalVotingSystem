<?php
$servername = "localhost";
$username = "root";
$password = "hemnds";
$dbname = "dvs";


$hhh="1232";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
	echo "sucess";
}

$sql = "SELECT user_id FROM activities WHERE act_id=$hhh";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($row["user_id"]=="n120625")
        {
			echo "log in success";
		}
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
