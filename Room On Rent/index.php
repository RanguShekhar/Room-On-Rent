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
    				<i class='fa fa-users'></i><img src='sources/images/profile.png'></img> Welcome $arr[0] <i class='fa fa-caret-down'></i>&nbsp;&nbsp;";

   					$query = "select booked FROM room_details WHERE email='$email' and booked!='NULL'";
						$res=mysql_query($query);
						$arr=mysql_num_rows($res);
 
 						$query = "select * FROM user_notify WHERE email='$email'";
						$res=mysql_query($query);
						$arr1=mysql_num_rows($res);

   					$query = "select * FROM room_details WHERE email='$email'";
						$res=mysql_query($query);
						$arr2=mysql_num_rows($res);



						if($arr>0)
						{
							echo "<i class='fa fa-users'></i><img src='sources/images/not.png'></img><sup style='margin-left:-11;margin-top:-9;color:white'>$arr</sup> <i class='fa fa-caret-down'></i>";
							echo "<div class='menu'>
	        						<a class='item'  href='Notification.php'>Your rooms</a>
	        						<a class='item'  href='Notification.php'>Check Notifications</a>
	        						<a class='item'  href='Logout.php'>Log Out</a>
	    								</div>
										</div>";
						}
						else if($arr1>0)
						{
							echo "<i class='fa fa-users'></i><img src='sources/images/not.png'></img><sup style='margin-left:-11;margin-top:-9;color:white'>$arr1</sup> <i class='fa fa-caret-down'></i>";
							echo "<div class='menu'>
	        						<a class='item'  href='Print.php'>Check Notifications</a>
	        						<a class='item'  href='Logout.php'>Log Out</a>
	    								</div>
										</div>";
						}
						else if($arr2>0)
						{
							echo "<div class='menu'>
	        						<a class='item'  href='Ownrooms.php'>Your rooms</a>
	        						<a class='item'  href='Logout.php'>Log Out</a>
	    								</div>
										</div>";
						}

						else
						{
							echo "<div class='menu'>
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
<center>
<div class="ui container">

<br><br><img src='sources/images/roomon.png' height="150px"></img><br><br><br>
		
			<div class="hello" style="background: -moz-linear-gradient(left, rgb(184,225,252) 0%, rgb(107,168,229) 0%, rgb(144,186,228) 25%, rgb(144,188,234) 37%, rgb(144,191,240) 50%, rgb(162,218,245) 83%, rgb(189,243,253) 100%);box-shadow: 0px 0px 20px grey;"><br>
				<form action="Results.php" method="POST">
        <div class="hello category_div" id="category_div">
            <select name="category" class="required-entry ui selection dropdown" id="category" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
                <option value="">Select District</option>
                <option value="Adilabad">Adilabad</option>
								<option value="Bhadradri">Bhadradri</option>
								<option value="Hyderabad">Hyderabad</option>
								<option value="Jagtial">Jagtial</option>
								<option value="Jangaon">Jangaon</option>
								<option value="Jayashankar">Jayashankar</option>
            </select>
        </div>
        <div class="hello sub_category_div" id="sub_category_div">
            <script type="text/javascript" language="JavaScript">
                document.write('<select class="ui selection dropdown" name="subcategory" id="subcategory"><option value="">Select Mandal</option></select>')
            </script>
            <noscript>
                <select name="subcategory" id="subcategory" >
                    <option value=""></option>
                </select>
            </noscript>
        </div>
        <select class="ui selection dropdown" name="roomtype">
					<option value="">Select type of Room</option>
					<option>Residential</option>
					<option>Commercial</option>
					<option>Payin Guest</option>
					<option>Hotels</option>
					<option>Banquet Halls</option>
					<option>Open Grounds</option>
				</select>
        <input class="hello ui button blue" type="submit" value="Search" name="submit">
        </form>
</div>
</div>
<br><br><br><br>
<div class="ui horizontal divider" style="width:80%;"><span style='font-size:20px;color:#2cc36b;'>Rooms we provide</span></div><br><br><br><br>

<marquee style="display: inline-block;width:80%;background: -moz-linear-gradient(left, rgb(184,225,252) 0%, rgb(107,168,229) 0%, rgb(144,186,228) 25%, rgb(144,188,234) 37%, rgb(144,191,240) 50%, rgb(162,218,245) 83%, rgb(189,243,253) 100%);box-shadow: 0px 0px 20px grey;">
<div class="hello">
	<img src="sources/images/1.png" height="100" width="100">
</div> 

<div class="hello">
	<img src="sources/images/2.png" height="100" width="100">
</div> 

<div class="hello">
	<img src="sources/images/3.png" height="100" width="100">
</div> 

<div class="hello">
	<img src="sources/images/4.png" height="100" width="100">
</div> 

<div class="hello">
	<img src="sources/images/5.png" height="100" width="100">
</div> 

<div class="hello">
	<img src="sources/images/6.png" height="100" width="100">
</div>
<div> 
</marquee>
<br><br>
<br><br>
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

