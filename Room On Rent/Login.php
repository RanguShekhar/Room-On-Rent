<?php
session_start();
if(!isset($_SESSION['user_id']))
{
if(isset($_GET["page"]))
{
    $Page=$_GET["page"];
		if($Page=="Booking.php")
			$Erro="You must login to book the room";

		if($Page=="Owner.php")
			$Erro="You must login to Become Owner";

		if(isset($_GET['room']))
			$P=$_GET['room'];
}
if(isset($_POST['submit']))
{
	$link=mysql_connect("localhost","root","");
	$email=$_POST['email'];
	$Password=$_POST['password'];
	$PageRed=$_POST['pagehid'];
	$P=$_POST['room'];

	if(strlen($email)==0&&strlen($Password)==0)
	{
		echo "<center>";
		echo "Please Fill Details Correctly";	
		echo "</center>";
	}	
	mysql_select_db("room");
	$query = "SELECT * FROM accounts WHERE email='$email' and password='$Password'";
	$a = mysql_query($query);
  $n = mysql_num_rows($a);
  if ($n>=1)
	{
		session_start();
    $_SESSION['user_id']=$email;
    echo $P;
    if(isset($PageRed))
    	echo $PageRed;
    if($PageRed)
    {
			if($PageRed=="Booking.php")
    	{
				header("Location:$PageRed?room=$P");
  	  }
			else
			{
				header("Location:$PageRed");	
			}
    }

    else
    {
    		header("Location:index.php");
    }
	}
	else
		echo "<center>";
		echo "Username or Password is incorrect";
		echo "</center>";

}
echo "
<html>
	<head>
		<title>Room OnRent</title>
		<link rel='stylesheet' href='sources/semantic.min.css'>
		<link rel='stylesheet' href='sources/main.css'>
		<link rel='stylesheet' href='sources/owl.carousel.css'>
		<link rel='shortcut icon' href='sources/rel_icon.gif'/>		
		<script>
		function email()
		{
			alert('Hello');
			var name=document.getElementById('email').value;
			if(name=='')
			{
				document.getElementById('email_error').innerHTML='field is required';
			}
		}
		</script>
	</head>
	<body>
<!--Header Begins-->
	<div class='ui fixed top menu' style='margin-top:-5;'>
			<a href='' class='icon item' id='trigger'>&#9776; Menu</a>
		<div class='center menu'>
			<a href='index.php' class='item'>Home</a>
			<a href='Rooms.php' class='item'>Available Rooms</a>
			<a href='Owner.php' class='item'>Become Owner</a>
		</div>
		   <div class='right menu'>
				<a href='#' class='active item'>Log In</a>
				<a href='Signup.php' class='item'>Sign Up</a>
		   </div>
	</div>
<!--Header Ends-->
		<div class='ui middle aligned center aligned grid'>

				<form class='ui form' action='Login.php' method='post'>";
if(isset($Erro)){echo $Erro;echo "<br>";}
echo "
		   	   <div class='ui stacked segment'>							 						
		   	     <div class='field'><input id='email' onblur='email()' type='text' name='email' placeholder='E-mail address'></div>
	<span id='email_error'></span>
		   	     <div class='field'><input type='password' name='password' placeholder='Password'></div>";
	if(isset($Page))
	
		echo "<input value='$Page' type='hidden' name='pagehid'>";
	if(isset($P))
		echo "<input value='$P' type='hidden' name='room'>";
		echo "
        				<center><div><input type='submit' style='background-color:#2cc36b;color:white' name='submit' value='Submit'  class='ui teal submit button'></div><br>
						<div><a class='ui teal submit button' style='background-color:#2cc36b;color:white' href='Signup.php'>New to us ? Join Us .</a><div></center>
		   	   </div>
				</form>
			</div>
		</div>
<br><br>
<!Footer Starts>
<div class='bottom' >
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
</div>
<!Footer Ends>

</body>
</html>
";

}
else
{
	header("Location:logged.php");
}
?>
