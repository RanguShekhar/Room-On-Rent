<?php
	$Room=$_GET['room'];
	echo $Room;
	$link=mysql_connect("localhost","root","");	
	mysql_select_db("room");
	$query = "delete from room_details WHERE roomno='$Room'";
	mysql_query($query);
	header("location:index.php");
?>	
