<?php
$Room=$_GET["room"];
?>
<html>
<html>
	<head>
		<title>Room OnRent</title>
		<link rel="stylesheet" href="sources/semantic.min.css">
		<link rel="stylesheet" href="sources/dropdown.min.css">
		<link rel="stylesheet" href="sources/transition.min.css">		
		<link rel="stylesheet" href="sources/main.css">
		<link rel="stylesheet" href="sources/owl.carousel.css">
		<link rel="shortcut icon" href="sources/rel_icon.gif"/>		
		<style>
		.bottom
		{
			bottom:0px;
			width:100%;
		}
		.hello 
		{
 			display: inline-block;
  		padding:10px;
		}
		body
		{
			background-color:#FCFEFC;
		}
		</style>
	</head>
	<body background="">
<!--Header Begins-->
	<div class="ui fixed top menu" style="margin-top:-5;">
			<a href="" class="icon item" id="trigger">&#9776; Menu</a>
		<div class="center menu">
			<a href="#" class="active item">Home</a>
			<a href="Rooms.php" class="item">Available Rooms</a>
			<a href="Owner.php" class="item">Become Owner</a>
		</div>
		   <div class="right menu">
		  <?php 
		   	session_start(); 
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
			?>
		   </div>
	</div>
<!--Header Ends-->
	<!-- Collapse Navbar Menu -->
<div class="ui fluid vertical menu collapse"></div>
<center>
<div class="ui container">
<br><br><br>





<?php
echo "<br><br><center><span style='font-size:20px;color:red;'>Select type in which your room want to be displayed .</span><br><br><br><br>";

echo"	<form action='Update.php' method='POST'>
        <select class='ui selection dropdown' name='roomtype'>
					<option value=''>Select type of Room</option>
					<option>Single</option>
					<option>Double</option>
					<option>Triple</option>
					<option>Quad</option>
					<option>Queen</option>
					<option>King</option>
				</select>
				<input type='hidden' value='$Room' name='roomno'>
        <input class='hello ui button blue' type='submit' value='Search' name='submit'>
        </form>
        ";
?>
</div>
<br><br><br><br><br><br><br>

<!Footer Starts>
<div class="bottom" >
	<div class="container footer">
		<div class="ui container">
			<div class="ui four column stackable doubling grid">
				<div class="column">
					<div class="ui header">Rooms</div>
					<div class="ui list">
						<a href="#" class="item">Resedential</a>
						<a href="#" class="item">Commercial</a>
						<a href="#" class="item">Paying Guest</a>
						<a href="#" class="item">Hotels</a>
						<a href="#" class="item">Banquet Halls</a>
						<a href="#" class="item">Open Grounds</a>

					</div>
				</div>
				<div class="column">
					<div class="ui header">Our Team</div>
					<div class="ui list">
						<a class="item" id="hack">Rakesh</a>
						<a href="#" class="item">Ganesh</a>
						<a href="#" class="item">Shekhar</a>
						<a href="#" class="item">Mahesh</a>
						<a href="#" class="item">Gopi</a>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">Room On Rent | One Platform for all type of room Bookings .</div>
</div>
<!Footer Ends>
  <script src="sources/Address.js"></script>
	<script src="sources/jquery.min.js"></script>
	<script src="sources/indexdr.js"></script>	
	<script src="sources/semantic.min.js"></script>
	<script src="sources/owl.carousel.js"></script>
	<script src="sources/main.js"></script>
	</body>

</html>

</html>
