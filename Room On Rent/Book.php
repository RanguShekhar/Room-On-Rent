<?php
	
	session_start(); 
	if(isset($_GET["room"]))
	{
    $Room=$_GET["room"];
	}
	else
	{
		$Room=$_POST["room"];	
	}
	mysql_connect("localhost","root","");
	mysql_select_db("room");
	if($Room==1)
			$query = "SELECT * FROM room_details WHERE room_type='Residential'";
	if($Room==2)
			$query = "SELECT * FROM room_details WHERE room_type='Commercial'";
	if($Room==3)
			$query = "SELECT * FROM room_details WHERE room_type='Paying Guest'";
	if($Room==4)
			$query = "SELECT * FROM room_details WHERE room_type='Hotels'";	
	if($Room==5)
			$query = "SELECT * FROM room_details WHERE room_type='Banquet Halls'";
	if($Room==6)
			$query = "SELECT * FROM room_details WHERE room_type='Open Grounds'";
	$res=mysql_query($query);
	$count = mysql_num_rows($res);
	if($count==0)
	{
	  	echo "<center><div class='cen' style='background-color:#f2f2f2;border-radius:25px;width:80%';>";	
	  	echo "<br><br><br><span style='font-size:20px;color:#2cc36b;'>No results found </span>";
	  	echo "<br><br><br></center></div>";
	}
	if(isset($_GET['err']))
	{
		echo "<br><br><center><span style='font-size:20px;color:red;'>You are the owner of this room . You cannot book your own room</span></center><br><br><br>";
	}
  for($i=0;$i<$count;$i++)
  {
  	echo "<center>";
  	echo "<div class='cen' style='background-color:#f2f2f2;border-radius:25px;width:50%;box-shadow: 00px 00px 10px grey;';>";
		$arr=mysql_fetch_array($res);echo"<br>";
				 
echo "	
<br><br>
<table style='width:55%'>
  <tr>
    <td><span style='font-size:20px;color:#2cc36b;'>Owner </span></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$arr[0]</td>
  </tr>
   
   <tr><td>&nbsp;</td></tr>
 
  <tr>
    <td><span style='font-size:20px;color:#2cc36b;'>Rent </span></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#8377  $arr[8]/-</td>
  </tr>
 
   <tr><td>&nbsp;</td></tr> 
 
  <tr>
    <td><span style='font-size:20px;color:#2cc36b;'>Address</span></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$arr[1]</td>
  </tr>
 
   <tr><td>&nbsp;</td></tr>
  
  <tr>
    <td><span style='font-size:20px;color:#2cc36b;'></span></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$arr[2]</td>
  </tr>

   <tr><td>&nbsp;</td></tr>  

  <tr>  
    <td><span style='font-size:20px;color:#2cc36b;'></span></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$arr[7]</td>
  </tr>

</table><br>";

  	echo "<span style='font-size:20px;color:#2cc36b;margin-left:-460px'>Rooms Pictures </span>";echo "<br><br>";		  	
   	echo "<center>";
  	echo "<img src='$arr[3]' style='height:200px;width:200px;'</img>";		
  	echo "<img src='$arr[4]' style='height:200px;width:200px;'</img>";
  	echo "<img src='$arr[5]' style='height:200px;width:200px;'</img><br><br><br>";
		echo "<a class='ui button blue' style='width:200px' href=\"Booking.php?room=$arr[9]&roomt=$Room\"/> Book</a>";
  	echo "</center><br><br>";
  	echo "</div>";
  	echo "<br><br>";
	}
?>

<html>
	<head>
		<title>Room OnRent</title>
		<link rel='stylesheet' href='css/style.css'>
		<link rel='stylesheet' href='sources/semantic.min.css'>
		<link rel='stylesheet' href='sources/dropdown.min.css'>
		<link rel='stylesheet' href='sources/transition.min.css'>		
		<link rel='stylesheet' href='sources/main.css'>
		<link rel='stylesheet' href='sources/owl.carousel.css'>
		<link rel='shortcut icon' href='sources/rel_icon.gif'/>		
	</head>
	<body>
<!--Header Begins-->
	<div class="ui fixed top menu" style="margin-top:-5;">
			<a href="" class="icon item" id="trigger">&#9776; Menu</a>
		<div class="center menu">
			<a href="index.php" class="active item">Home</a>
			<a href="Rooms.php" class="item">Available Rooms</a>
			<a href="Owner.php" class="item">Become Owner</a>
		</div>
		   <div class="right menu">
		  <?php
				if(!isset($_SESSION['user_id']))
		   	{
		   		echo '<a href="Login.php" class="item">Log In</a>';
		   		echo '<a href="Signup.php" class="item">Sign Up</a>';
		   	}	
		   else
				echo '<a href="Logout.php" class="item">Log Out</a>';
			?>
		   </div>
	</div>
<!--Header Ends-->
	<!-- Collapse Navbar Menu -->
	<div class='ui fluid vertical menu collapse'></div>

<center>
<div class='ui container'>
	



</div>


<!Footer Starts>
	<div class='container footer'>
		<div class='ui container'>
			<div class='ui four column stackable doubling grid'>
				<div class='column'>
					<div class='ui header'>Rooms</div>
						<div class='ui list'>
							<a href='#' class='item'>Resedential</a>
							<a href='#' class='item'>Commercial</a>
							<a href='#' class='item'>Paying Guest</a>
							<a href='#' class='item'>Hotels</a>
							<a href='#' class='item'>Banquet Halls</a>
							<a href='#' class='item'>Open Grounds</a>
						</div>
				</div>
				<div class='column'>
					<div class='ui header'>Our Team</div>
						<div class='ui list'>
							<a class='item' id='hack'>Rakesh</a>
							<a href='#' class='item'>Ganesh</a>
							<a href='#' class='item'>Shekhar</a>
							<a href='#' class='item'>Mahesh</a>
							<a href='#' class='item'>Gopi</a>
						</div>
				</div>
			</div>
		</div>
	</div>
<div class='copyright'>Room On Rent | One Platform for all type of room Bookings .</div>
<!Footer Ends>

	<script src='sources/jquery.min.js'></script>
	<script src='sources/indexdr.js'></script>	
	<script src='sources/semantic.min.js'></script>
	<script src='sources/owl.carousel.js'></script>
	<script src='sources/main.js'></script>
	</body>

</html>