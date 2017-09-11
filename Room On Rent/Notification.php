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
			<a href="index.php" class="active item">Home</a>
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
						$na=$arr[0];
		   		}
		 		echo "
		 			<div class='ui simple dropdown item'>
    				<i class='fa fa-users'></i><img src='sources/images/profile.png'></img> Welcome $arr[0] <i class='fa fa-caret-down'></i>&nbsp;&nbsp;";
   					$query = "select booked FROM room_details WHERE email='$email' and booked!='NULL'";
						$res=mysql_query($query);
						$arr=mysql_num_rows($res);
						if($arr!=0)
						{
						echo "
							<i class='fa fa-users'></i><img src='sources/images/not.png'></img><sup style='margin-left:-11;margin-top:-9;color:white'>$arr</sup> <i class='fa fa-caret-down'></i>";
						echo "
								<div class='menu'>
	        				<a class='item'  href='Logout.php'>Log Out</a>
	        				<a class='item'  href='Notification.php'>Check Notifications</a>
	    					</div>
							</div>";
						

						}
						else
						{
							echo "
								<div class='menu'>
	        				<a class='item'  href='Logout.php'>Log Out</a>
	    					</div>
							</div>";
						
						}

			  }
			?>
		   </div>
	</div>
<!--Header Ends-->
	<!-- Collapse Navbar Menu -->
<div class="ui fluid vertical menu collapse"></div>
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("room");
	$query = "SELECT * FROM room_details WHERE email='$email' and booked!='NULL'";
	$res=mysql_query($query);
	$Action="1";
	$Action1="2";
	
	$count = mysql_num_rows($res);
	if($count==0)
	{		echo "<center><div class='cen' style='background-color:#f2f2f2;border-radius:25px;width:80%';>";	
	  	echo "<br><br><br><span style='font-size:20px;color:#2cc36b;'>Dear $na you don't have any notifications</span>";
	  	echo "<br><br><br></center></div>";
	}  	
	else

		echo "<br><br><center><span style='font-size:20px;color:red;'>Dear $na your rooms are booked please confirm to checkout the room.</span><br><br><br><br>";
	
	 for($i=0;$i<$count;$i++)
   {
  	echo "<center>";
  	echo "<div class='cen' style='background-color:#f2f2f2;width:50%;box-shadow: 00px 00px 10px grey;';>";

		$arr=mysql_fetch_array($res);echo"<br>";
				 
echo "	
<br><br>
<table style='width:55%'>
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
		echo 
		"
  			<a class='ui button blue' href='Confirm.php?roomno=$arr[9]&action=$Action'>Confirm</a>
  			<a class='ui button blue' href='Confirm.php?roomno=$arr[9]&action=$Action1'>Reject</a>
  	";
  	echo "</center><br><br>";
  	echo "</div>";
  	echo "<br><br>";
}

?>
<div class="ui container">

</div>

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

