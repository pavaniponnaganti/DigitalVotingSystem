
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
		$id=test_input($_POST['eid']);
		//$id="APMLA01";
		$query=mysql_query("select E_id from election where E_id='$id'")or die("sorry not excuted");
		$query=mysql_fetch_array($query);

		$result=$query['E_id'];
		echo $result;
	if($query['E_id']==NULL)
	echo 0;


?>
