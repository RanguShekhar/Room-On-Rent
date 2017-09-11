<?php
$emailErr='';
$passErr='';
$cpassErr='';
$mobile='';
$NameErr='';
if(isset($_POST['submit']))
{
	//Name
	if (empty($_POST["name"])) 
  {
    $NameErr = "Name is required";
  }
  else 
  	$name=$_POST["name"];
  	
  //Email
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  }
  else 
  {
    $email = test_input($_POST["email"]);
   	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
    }
    else 
    {
	    $email=$_POST["email"];
    }
  }
  if (empty($_POST["password"])) 
  {
    $passErr = "Enter Password";
  }
  if (empty($_POST["cpassword"])) 
  {
    $cpassErr = "Confirm Password";
  }
  else 
  {
    $Pas=$_POST["cpassword"];$CPas=$_POST["password"];
   	if($Pas!=$CPas) 
    {
      $passErr = "Enter both passwords same";
    }
    else
    {
    	$password=$_POST["password"];
    }
  }
  if(!empty($_POST["mobile"])) // phone number is not empty
	{
    if(preg_match('/^\d{10}$/',$_POST["mobile"])) // phone number is valid
    {
			$mobilenum=$_POST["mobile"];
    }
    else
    {
      $mobile='Invalid mobile number';
    }
	}
	else
	{
  	$mobile='Mobile number is required';
	}

			if(isset($password))
				{
					if(isset($mobilenum))
					{
						if(isset($email))
						{
							if(isset($name))
							{
								mysql_connect("localhost","root","");
								mysql_select_db("room");
								$query="Insert into accounts values ('$name','$email','$mobilenum','$password')";
								mysql_query($query);	
								session_start();
								$_SESSION['user_id']=$email;
								header("Location:index.php");
							}
						}
					}
				}
} 
  
function test_input($data) 
{
	$data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>
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
		</style>
	</head>
	<body>
<!--Header Begins-->
	<div class="ui fixed top menu" style="margin-top:-5;">
			<a href="" class="icon item" id="trigger">&#9776; Menu</a>
		<div class="center menu">
			<a href="index.php" class="item">Home</a>
			<a href="Rooms.php" class="item">Available Rooms</a>
			<a href="Owner.php" class="item">Become Owner</a>
		</div>
		   <div class="right menu">
				<a href="Login.php" class="item">Log In</a>
				<a href="#" class="active item">Sign Up</a>
		   </div>
	</div>
<!--Header Ends-->

		<div class="ui middle aligned center aligned grid">
				<h2 class="ui black image header">
					

				<form style="width:400px;" class="ui form" action="Signup.php" method="post">
		   	   <div class="ui stacked segment">
	
        				<div class="field"><input type="text" name="name" placeholder="Full Name">
        				<span style="color:red"><?php echo $NameErr;?></span></div>
        
        				<div class="field"><input type="text" name="email" placeholder="Enter your Email">
        				<span style="color:red"><?php echo $emailErr;?></span></div>
			 
        				<div class="field"><input type="text" name="mobile" placeholder="Enter Mobile Number"></div>
								<span style="color:red"><?php echo $mobile;?></span>
        				<div class="field"><input type="password" name="password" placeholder="Password">
        				<span style="color:red"><?php echo $passErr;?></span></div>

        				<div class="field"><input type="password" name="cpassword" placeholder="Confirm Password">
        				<span style="color:red"><?php echo $cpassErr;?></span></div>
	
        				<div><input class="ui fluid large submit button" style="background-color:#2cc36b;color:white" type="submit" name="submit" value="Submit"></div>
		   	   </div>
				</form>
			</div>
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

