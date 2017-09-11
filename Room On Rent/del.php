<?php
	$Room=$_GET['ro'];
	$link=mysql_connect("localhost","root","");	
	mysql_select_db("room");
	echo $Room;
	$query = "delete from user_notify WHERE room='$Room'";
	mysql_query($query);
	header("location:index.php");
?>
