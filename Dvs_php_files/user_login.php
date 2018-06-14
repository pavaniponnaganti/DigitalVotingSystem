<?php  mysql_connect("localhost","root","hemnds") or die("sorry!Unable to connect");
	   mysql_select_db("dvs") or die ("sorry database not exists");
 ?>
<?php

function test_input($data)
		 {
		$data = mysql_real_escape_string($data);
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = strip_tags($data);
		$data = htmlentities($data);
		return $data;
		}
		$id=test_input($_POST['userid']);
		$passwd=test_input($_POST['phno']);
		$query=mysql_query("select UID from user where UID='$id' AND U_phno='$passwd'")or die("sorry not excuted");
		$query=mysql_fetch_array($query);

		$result=$query['UID'];
		echo $result;
	if($query['name']==NULL)
	echo 0;


?>
