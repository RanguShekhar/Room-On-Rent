<?php
$DistErr="";
$MdlErr="";
$RoomErr="";
$addressErr="";
$flag=0;
$imgErr="";
$money="";
if(isset($_POST["submit"]))
{
	$District=$_POST["category"];
	$Mandal=$_POST["subcategory"];
	$Room=$_POST["roomtype"];
	$email=$_SESSION['user_id'];
	$roomtype=$_POST["roomtype"];
	$address=$_POST["address"];
	$Rent=$_POST["rent"];
	
	if($District=="")
	{
		$DistErr="*Select District";
		$flag=1;
	}
	if($Rent=="")
	{
		$money="*Rent is required";
		$flag=1;
	}
	if($Mandal=="")
	{
		$MdlErr="*Select Mandal";
		$flag=1;
	}
	if($Room=="")
	{
		$RoomErr="*Select room type";
		$flag=1;
	}
	if($address=="")
	{
		$addressErr="*Address is required";
		$flag=1;
	}
	
		mysql_connect("localhost","root","");
		mysql_select_db("room");
		$query=mysql_query("Select * from room_details");
		$roomn=mysql_num_rows($query);
		$roomno=$roomn+1;
	
		if($roomtype=="Residential")
			$RoomVal=1;
		if($roomtype=="Commercial")
			$RoomVal=2;
		if($roomtype=="Paying Guest")
			$RoomVal=3;
		if($roomtype=="Hotels")
			$RoomVal=4;
		if($roomtype=="Banquet Halls")
			$RoomVal=5;
		if($roomtype=="Open Grounds")
			$RoomVal=6;
		
		$Pic;
		$target_dir = "files/".$roomtype."/";
		for($i=1;$i<4;$i++)
		{
				$uploadOk = 1;
				$img_name="img".$i;
				
				$target_file = $target_dir .$roomno.basename($_FILES[$img_name]["name"]);
			if(basename($_FILES[$img_name]["name"])!="")
			{
				
				
				
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					$check = getimagesize($_FILES[$img_name]["tmp_name"]);
				if($check !== false) 
				{
					//echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else
				{
					//echo "File is not an image.";
					$uploadOk = 0;
				}
				if (file_exists($target_file)) 
				{
					//echo "Sorry, file already exists.";
					$uploadOk = 0;
				}
				if ($_FILES["$img_name"]["size"] > 500000) 
				{
					//echo "Sorry, your file is too large.";
					$uploadOk = 0;
				}
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" )
				{
				//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
				}
				
			}	
			else
			{
				$imgErr="*Upload all 3 images";
			} 	
		}
		if($flag==0 && $upload==1)
		{
			if (move_uploaded_file($_FILES["$img_name"]["tmp_name"], $target_file))
				{
					echo "The file ". basename( $_FILES[$img_name]["name"]). " has been uploaded.";
					echo "<br>";
					$Pic[$i]=$target_dir.$roomno.$_FILES["$img_name"]["name"];
				} 
			mysql_connect("localhost","root","");
			mysql_select_db("room");
			$roomn=rand();
			echo $roomn;
			$query="Insert into room_details values ('$email','$District','$Mandal','$Pic[1]','$Pic[2]','$Pic[3]','$Room','$address','$Rent','$roomn','','NULL')";
			mysql_query($query);
	
			if($Room=="Residential"||$Room=="Hotels")
				header("Location:Type.php?room=".urlencode("$roomn"));
			else
				header("Location:Book.php?room=".urlencode("$RoomVal"));
		}
	
}
?>
