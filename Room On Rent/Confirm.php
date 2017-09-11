<?php 
$Roomno=$_GET['roomno'];
$Action=$_GET['action'];
$link=mysql_connect("localhost","root","");	
mysql_select_db("room");

if($Action==1)
{
	$query = "select booked from room_details where roomno='$Roomno'";
	$res=mysql_query($query);	
	$arr=mysql_fetch_array($res);
	$email=$arr[0];

	echo $email;
	$query = "insert into user_notify values ('$Roomno','$email')";
	mysql_query($query);
	$query = "delete FROM room_details WHERE roomno='$Roomno'";
	mysql_query($query);
	header("location:Notification.php");
	
}
else
{
	$query="UPDATE room_details SET booked='NULL' WHERE roomno='$Roomno'";
	mysql_query($query);
	header("location:Notification.php");

}
?>
