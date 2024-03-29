<?php

 include 'database.php';


session_start();// Starting Session


// Storing Session
$user_check = @$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT * from patient where username = '$user_check'";

$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['name'];
$login_session_id = $row['patient_id'];
$login_session_email = $row['email'];
$login_session_age = $row['age'];
$login_session_gender = $row['gender'];
$login_session_bloodtype = $row['blood_type'];


// if(!isset($_SESSION['login_user'])){
// header("location: login.php"); // Redirecting To Home Page
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Onlineheathcare.org</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="src/css/custom.css">
  <style type="text/css">
  span.stars, span.stars span {
    display: block;
    background: url(src/images/stars.png) 0 -16px repeat-x;
    width: 80px;
    height: 16px;
}

span.stars span {
    background-position: 0 0;
}
</style>
</head>
<body style="background: white !important;">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse bug-red w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Online<br>Healthcare</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
    <?php if($user_check) : ?>
      <a href="profile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">
        <?php echo $login_session ?></a>
      <a href="appointmentlist.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Appointments</a>
      <a href="#" onclick="w3_close()" data-toggle="modal" data-target="#listdoctors" 
    class="w3-bar-item w3-button w3-hover-white" style="color: white;">List of doctors</a>
            <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a>


<?php else: ?>
    <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">My Profile</a>
    <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Appointments</a>
    <a href="#" onclick="w3_close()" data-toggle="modal" data-target="#listdoctors" 
    class="w3-bar-item w3-button w3-hover-white" style="color: white;">List of doctors</a>
    <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Login</a>
    

  <?php endif; ?>

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

  
