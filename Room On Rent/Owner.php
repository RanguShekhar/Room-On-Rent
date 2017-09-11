<?php
session_start();
include 'Own.php'; 
if(!isset($_SESSION['user_id']))
{
	$_SESSION['Page'] = 'Owner.php';
	header("Location:Login.php?page=".urlencode("Owner.php"));
}
else
{
	echo"	
	<html>
		<head>
			<title>Room OnRent</title>
			<link rel='stylesheet' href='sources/semantic.min.css'>
			<link rel='stylesheet' href='sources/dropdown.min.css'>
			<link rel='stylesheet' href='sources/transition.min.css'>		
			<link rel='stylesheet' href='sources/main.css'>
			<link rel='stylesheet' href='sources/owl.carousel.css'>
			<link rel='shortcut icon' href='sources/rel_icon.gif'/>		
			<style>
			.bottom
			{
				position:fixed;
				bottom:0px;
				width:100%;
			}
			</style>
		</head>
		<body>
		<!--Header Begins-->
		<div class='ui fixed top menu' style='margin-top:-5;'>
			<a href='' class='icon item' id='trigger'>&#9776; Menu</a>
		<div class='center menu'>
			<a href='index.php' class='item'>Home</a>
			<a href='Rooms.php' class='item'>Available Rooms</a>
			<a href='Owner.php' class='active item'>Become Owner</a>
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

<center>
<div class='ui container'>
		
<form action='Owner.php' method='post' enctype='multipart/form-data'>
				<form action='Results.php' method='POST'>
        <div class='category_div' id='category_div'>
            <select name='category' class='required-entry ui selection dropdown' id='category' onchange='javascript: dynamicdropdown(this.options[this.selectedIndex].value);'>
                <option value=''>Select District</option>
                <option value='Adilabad'>Adilabad</option>
								<option value='Bhadradri'>Bhadradri</option>
								<option value='Hyderabad'>Hyderabad</option>
								<option value='Jagtial'>Jagtial</option>
								<option value='Jangaon'>Jangaon</option>
								<option value='Jayashankar'>Jayashankar</option>
            </select></div><font color='red'>";echo $DistErr;echo "</font><br><br>
        <div class='sub_category_div' id='sub_category_div'>
            <script type='text/javascript' language='JavaScript'>
                document.write(\"<select class='ui selection dropdown' name='subcategory' id='subcategory'><option value=''>Select Mandal</option></select>\")
            </script>
            <noscript>
                <select name='subcategory' id='subcategory' >
                    <option value=''></option>
                </select><br>
            </noscript>
        </div><font color='red'>";echo $MdlErr; echo "</font><br><br/>
        <select class='ui selection dropdown' name='roomtype'>
					<option value=''>Select type of Room</option>
					<option>Residential</option>
					<option>Commercial</option>
					<option>Paying Guest</option>
					<option>Hotels</option>
					<option>Banquet Halls</option>
					<option>Open Grounds</option>
				</select><br><font color='red'>";echo $RoomErr; echo "</font><br><br>
		<textarea placeholder='Enter Address' name='address' rows='5' cols='40'></textarea><br><font color='red'>";echo $addressErr; echo "</font><br>	<br>	
		<div class='field'><input type='number' placeholder='Enter Rent' name='rent'></div><font color='red'>";echo $money; echo "</font><br><br><font color='red'>";echo $imgErr; echo "</font><br>		
		<input type='file' name='img1' >
		<input type='file' name='img2' >
		<input type='file' name='img3' ><br><br>
		<input class='ui button blue' type='submit' value='Submit Details' name='submit'>
</form>		

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
  <script src='sources/Address.js'></script>
	</body>

	</html>";
	}
?>
