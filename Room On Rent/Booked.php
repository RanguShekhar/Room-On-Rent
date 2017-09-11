<?php
	if(isset($_POST['submit']))
	{
		$RoomNo=$_POST['roomno'];
		mysql_connect("localhost","root","");
		mysql_select_db("room");
		session_start();
		$UserBooked=$_SESSION['user_id'];
		$query="UPDATE room_details SET booked='$UserBooked' WHERE roomno='$RoomNo'";
		mysql_query($query);
		
		$query = "select * FROM room_details WHERE roomno='$RoomNo'";
		$res=mysql_query($query);
		$arr=mysql_fetch_array($res);echo"<br>";
  	$email=$arr[0];
		$District=$arr[1];
		$Mandal=$arr[2];
		$Address=$arr[7];
		$query = "select * FROM accounts WHERE email='$email'";
		$res=mysql_query($query);
		$arr=mysql_fetch_array($res);echo"<br>";

  	echo "<center>";
  	echo "<h3 style='font-size:25px;color:#2cc36b;'>You have booked this room</h3>";
  	echo "<span style='font-size:20px;color:#2cc36b;'>Notification has sent to owner wait for confirmation</span>";
  	echo "<h3>$arr[0]</h3>";
  	echo "<h3>$arr[2]</h3>";
  	echo "<span style='font-size:30px;color:#2cc36b;'>Address</span>";
		echo "<h3>$District</h3>";
		echo "<h3>$Mandal</h3>";
		echo "<h3>$Address</h3>";
  	echo "</center><br><br><br>";
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
		   {
		   		if(isset($_SESSION['user_id']))
		   		{
		   			$email=$_SESSION['user_id'];
						mysql_connect("localhost","root","");
						mysql_select_db("room");
   					$query = "select * FROM accounts WHERE email='$email'";
						$res=mysql_query($query);
						$arr=mysql_fetch_array($res);
		   		}
		 		echo "
		 			<div class='ui simple dropdown item'>
    				<i class='fa fa-users'></i><img src='sources/images/profile.png'></img> Welcome $arr[0] <i class='fa fa-caret-down'></i>
    					<div class='menu'>
        				<a class='item'  href='Logout.php'>Log Out</a>
    					</div>
					</div>";
			  }
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
