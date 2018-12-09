 <?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "ilaaj");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT username, password from doctor where username=? AND password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_user'] = $username; // Initializing Session
          header("location:index.php"); // Redirecting To Profile Page
        }
else {
       $error = "Username or Password is invalid";
     }
mysqli_close($conn); // Closing Connection
}
} // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location:index.php"); // Redirecting To Profile Page
}
?> 
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>ILAAJ - LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="src/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="src/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="src/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/css/util.css">
	<link rel="stylesheet" type="text/css" href="src/css/main.css">
	<link rel="stylesheet" type="text/css" href="src/css/custom.css">

<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					
				
					  <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						
						<input id="first-name" class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" value="Login" name="submit" class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div>

					<div class="w-full text-center">
						
						 <button type="button" class="btn bug-red" data-toggle="modal" data-target="#registerpatient">Sign Up
						 </button>

					</div>
				</form>

				<div class="login100-more"><img src="src/images/bg-02.jpg" height="100%" width="100%"></div>
			</div>
		</div>
	</div>
	

	<?php
 include 'signup.php';
?>
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="src/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="src/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="src/vendor/bootstrap/js/popper.js"></script>
	<script src="src/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="src/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="src/vendor/daterangepicker/moment.min.js"></script>
	<script src="src/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="src/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>