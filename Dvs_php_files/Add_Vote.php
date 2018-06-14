<?php

$eid=$_POST['eid'];
$nid=$_POST['nid'];
$uid=$_POST['uid'];
$servername = "localhost";
$username = "root";
$password = "hemnds";
$dbname = "dvs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$q1="SELECT Votes,E_voters from election_data where E_id='$eid' AND N_id='$nid'";
$q2="SELECT E_voters,E_title from election where E_id='$eid'";
 $res = mysqli_query($conn,$q1);
 $res2 = mysqli_query($conn,$q2);
 
 $kk=mysqli_fetch_assoc($res);
 //////////////  from election_data //////////////
 $c=$kk['Votes'];
 $c++;
 $voters=$kk['E_voters'];

 $voters=$voters."~".$uid;
 $update1="UPDATE election_data SET Votes='$c',E_voters='$voters' WHERE E_id='$eid' AND N_id='$nid';";
 
 ///////////// from election ////////////
 $kk2=mysqli_fetch_assoc($res2);
 $voters2=$kk2['E_voters'];
  $election_name="you participlated in ".$kk2['E_title'];
  
 $voters2=$voters2."~".$uid;
 $update2="UPDATE election SET E_voters='$voters2' WHERE E_id='$eid' ";
 $hid=rand(10000,100000);
 $insert_history="INSERT INTO userhistory(UID,HID,H_desc) values('$uid','$hid','$election_name');";
 if(mysqli_query($conn,$update1)&&mysqli_query($conn,$update2)&& mysqli_query($conn,$insert_history))
 {
	 
	 echo $eid,$uid,$nid;
 }
 else echo "0";
mysqli_close($conn);
?>
