<?php

$conn=mysqli_connect("localhost","root","hemnds","dvs");
if($conn)
{
	echo "connected";
}
else echo "not connected";

$ddd="SELECT * FROM activities;";

$outp=mysqli_query($conn,$ddd);

$rown=mysqli_num_rows($outp);

while($row = mysqli_fetch_assoc($outp))
{
	echo "<br>",$row["act_id"],$row["act_title"],$row["act_data"],$row["user_id"];
}
?>
