<?php
	$Roomno=$_POST["roomno"];
	$Room2=$_POST["roomtype"];
	mysql_connect("localhost","root","");
	mysql_select_db("room");	
	$query="UPDATE room_details SET roomty='$Room2' WHERE roomno='$Roomno'";
	mysql_query($query);
	header("Location:Rooms.php");	
?>
