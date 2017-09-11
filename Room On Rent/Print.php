<?php

	session_start();
	$email=$_SESSION['user_id'];
	$link=mysql_connect("localhost","root","");	
	mysql_select_db("room");
	$query = "select room from user_notify where email='$email'";

	$res=mysql_query($query);	
	$arr=mysql_fetch_array($res);	
	$Romno=$arr[0];

	$query = "SELECT * FROM room_details WHERE roomno='$Romno'";
	$res=mysql_query($query);
	$arr=mysql_fetch_array($res);
	$em=$arr[0];
	echo $email;

	$query1 = "SELECT * FROM accounts WHERE email='$arr[0]'";
	$res1=mysql_query($query1);
	$arr1=mysql_fetch_array($res1);
	$mobile=$arr1[2];
	echo $mobile;
	$name=$arr1[0];

	echo 
	"
		<link rel='stylesheet' href='sources/semantic.min.css'>
		<script>
			function prints() 
			{
		    window.location='del.php?ro=$Romno';
		    window.print();
			}
		</script>
	";

	echo "<center>
	";
	echo 
 	"
 		<div>
 		</div><br>
 	";

 	echo 
 	"
 		<div class='cen' style='background-color:#ffffff;width:100%;box-shadow: 00px 00px 10px grey;'>
		<br>	<img src='sources/images/Ack.png'></img><br>
			<br><span style='font-size:20px;color:#2cc36b;'>Acknowledgment</span><br><br>
 	";
				 
echo "	
<br><br><center>
<table style='width:50%'>
  <tr>
    <td><span style='font-size:20px;color:#2cc36b;'>Owner Name </span></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$name</td>
  </tr>
  <tr>
    <td><span style='font-size:20px;color:#2cc36b;'>Mobile Number </span></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$mobile</td>
  </tr>

  <tr>
    <td><span style='font-size:20px;color:#2cc36b;'>Email </span></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$arr[0]</td>
  </tr>
  <tr>
    <td><span style='font-size:20px;color:#2cc36b;'>Rent </span></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#8377  $arr[8]/-</td>
  </tr>
  <tr>
    <td><span style='font-size:20px;color:#2cc36b;'>Address</span></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$arr[1]</td>
  </tr>
  <tr>
    <td><span style='font-size:20px;color:#2cc36b;'></span></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$arr[2]</td>
  </tr>
  <tr>  
    <td><span style='font-size:20px;color:#2cc36b;'></span></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$arr[7]</td>
  </tr>
</table><br>";

echo "<br><button class='ui button blue' onclick='prints()'>Print</button><br><br></div><br>		<h2 style='color:black;'>© Room On Rent 2017 .</h2>
";


?>
