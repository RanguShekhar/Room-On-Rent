<?php
	$link=mysql_connect("localhost","root","");
	mysql_select_db("room");
	$query1 = "SELECT * FROM room_details WHERE room_type='Residential'";
	$query2 = "SELECT * FROM room_details WHERE room_type='Commercial'";
	$query3 = "SELECT * FROM room_details WHERE room_type='Paying Guest'";
	$query4 = "SELECT * FROM room_details WHERE room_type='Hotels'";	
	$query5 = "SELECT * FROM room_details WHERE room_type='Banquet Halls'";
	$query6 = "SELECT * FROM room_details WHERE room_type='Open Grounds'";
	$i1=mysql_query($query1);$j1=mysql_num_rows($i1);
	$i2=mysql_query($query2);$j2=mysql_num_rows($i2);
	$i3=mysql_query($query3);$j3=mysql_num_rows($i3);
	$i4=mysql_query($query4);$j4=mysql_num_rows($i4);
	$i5=mysql_query($query5);$j5=mysql_num_rows($i5);
	$i6=mysql_query($query6);$j6=mysql_num_rows($i6);

session_start();
echo "
<html>
	<head>
		<title>Room OnRent</title>
		<link rel='stylesheet' href='sources/semantic.min.css'>
		<link rel='stylesheet' href='sources/main.css'>
		<link rel='stylesheet' href='sources/owl.carousel.css'>
		<link rel='shortcut icon' href='sources/rel_icon.gif'/>		
<style>
</style>
	</head>
	<body>
<!--Header Begins-->
	<div class='ui fixed top menu' style='margin-top:-5;'>
			<a href='' class='icon item' id='trigger'>&#9776; Menu</a>
		<div class='center menu'>
			<a href='index.php' class='item'>Home</a>
			<a href='Rooms.php' class='active item'>Available Rooms</a>
			<a href='Owner.php' class='item'>Become Owner</a>
		</div>
		   <div class='right menu'>";
				if(!isset($_SESSION['user_id']))
		   	{
		   		echo '<a href="Login.php" class="item">Log In</a>';
		   		echo '<a href="Signup.php" class="item">Sign Up</a>';
		   	}	
		   else
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

echo "
		   </div>
	</div>
<!--Header Ends-->
	<!-- Collapse Navbar Menu -->
	<div class='ui fluid vertical menu collapse'></div>

<br><br>
<div class='ui container'>
	<div class='ui three column aligned stackable grid'>
		<div class='column'>	
					<div class='ui card'>
  					<div class='image'><img src='sources/images/1.png'></div>
					  <div class='content'>
					  <form action='Book.php' method='post'>
					  	<input type='hidden' name='room' value='1'>
					  	<input class='ui fluid button blue' type='submit' value='Residential' name='submit'></div>
					  </form>
					  <div class='extra content'><a>Available Rooms : $j1</a></div>
					</div>
		</div>
		<div class='column'>	
					<div class='ui card'>
  					<div class='image'><img src='sources/images/2.png'></div>
					  <div class='content'>
					  <form action='Book.php' method='post'>					  
					  	<input type='hidden' name='room' value='2'>
					  	<input class='ui fluid button blue' type='submit' value='Commercial' name='submit'></div>
					  </form>	
					  <div class='extra content'><a>Available Rooms : $j2</a></div>
					</div>
		</div>
	
		<div class='column'>	
					<div class='ui card'>
  					<div class='image'><img src='sources/images/3.png'></div>
					  <div class='content'>
					  <form action='Book.php' method='post'>
					  	<input type='hidden' name='room' value='3'>
					  	<input class='ui fluid button blue' type='submit' value='Paying Guest' name='submit'></div>
					  </form>	
					  <div class='extra content'><a>Available Rooms : $j3</a></div>
					</div>
		</div>
		<div class='column'>	
					<div class='ui card'>
  					<div class='image'><img src='sources/images/4.png'></div>
					  <div class='content'>
					  <form action='Hotels.php' method='post'>
					  	<input type='hidden' name='room' value='4'>
					  	<input class='ui fluid button blue' type='submit' value='Hotels' name='submit'></div>
					  </form>
					  <div class='extra content'><a>Available Rooms : $j4</a></div>
					</div>
		</div>
		<div class='column'>	
					<div class='ui card'>
  					<div class='image'><img src='sources/images/5.png'></div>
					  <div class='content'>
					  <form action='Book.php' method='post'>
						  <input type='hidden' name='room' value='5'>
						  <input class='ui fluid button blue' type='submit' value='Banquet Halls' name='submit'></div>
						</form>  
					  <div class='extra content'><a>Available Rooms : $j5</a></div>
					</div>
		</div>
		<div class='column'>	
					<div class='ui card'>
  					<div class='image'><img src='sources/images/6.png'></div>
					  <div class='content'>
					  <form action='Book.php' method='post'>
						  <input type='hidden' name='room' value='6'>
						  <input class='ui fluid button blue' type='submit' value='Open Grounds' name='submit'></div>
						</form>  
					  <div class='extra content'><a>Available Rooms : $j6</a></div>
					</div></form>
		</div>

	</div>
</div>
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
	<div class='copyright'>
		Room On Rent | One Platform for all type of room Bookings .
	</div>
<div id='hack1' style='display:none;'>	
	<script src='sources/jquery.min.js'></script>
	<script src='sources/semantic.min.js'></script>
	<script src='sources/owl.carousel.js'></script>
	<script src='sources/main.js'></script>
	</body>

</html>
";
?>
