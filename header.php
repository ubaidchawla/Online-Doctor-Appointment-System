<?php

 include 'database.php';


session_start();// Starting Session

// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT name from doctor where username = '$user_check'";

$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['name'];

if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html lang="en">
<title>Onlineheathcare.org</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="src/css/custom.css">

<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse bug-red w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Online<br>Healthcare</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
    <span><a href="profile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><?php echo $login_session; ?></a></span>
	
		
	<a href="appointmentlist.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Appointments</a>
    <a href="#" onclick="w3_close()" data-toggle="modal" data-target="#listdoctors" 
    class="w3-bar-item w3-button w3-hover-white" style="color: white;">List of doctors</a>
    <!-- <?php if($query) : ?>
      <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">LogOut</a>
    
<?php else: ?>
    <button type="button" class="btn bug-red-inverted" data-toggle="modal" data-target="#registerdoctor">
    Register as a Doctor</button>
  <?php endif; ?> -->
      <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">LogOut</a>
  <button type="button" class="btn bug-red-inverted" data-toggle="modal" data-target="#registerdoctor">
    Register as a Doctor</button>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large bug-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button bug-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Online healthcare</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main bug-page-content">

  <!-- Header -->
  <div class="w3-container bug-header-container" id="showcase">
    <h1 class="w3-jumbo"><b>Improving healthcare</b></h1>
    <h1 class="w3-xxxlarge bug-text-red"><b>Cooperating hospitals.</b></h1>
    <hr class="w3-round bug-line-red">
  </div>
