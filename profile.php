<?php

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "company");

session_start();// Starting Session

// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT username from loginform where username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];

if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Your Home Page</title>
  <link href="style.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">  
</head>
<body>
 <div id="profile">
  <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
  <b id="logout"><a href="logout.php">Log Out</a></b>
 </div>
<div class="container">
    <div class="row user-menu-container square">
        <div class="col-md-7 user-details">
            <div class="row coralbg white">
                <div class="col-md-6 no-pad">
                    <div class="user-pad">
                        <h3>Welcome back, <?php echo $login_session; ?></h3>
                        <h4 class="white"><i class="fa fa-check-circle-o"></i> San Antonio, TX</h4>
                        <h4 class="white"><i class="fa fa-twitter"></i> CoolesOCool</h4>
                        <button type="button" class="btn btn-labeled btn-info" href="#">
                            <span class="btn-label"><i class="fa fa-pencil"></i></span>Update</button>
                    </div>
                </div>
                <div class="col-md-6 no-pad">
                    <div class="user-image">
                        <img src="https://farm7.staticflickr.com/6163/6195546981_200e87ddaf_b.jpg" class="img-responsive thumbnail">
                    </div>
                </div>
            </div>
            <div class="row overview">
                <div class="col-md-4 user-pad text-center">
                    <h3>FOLLOWERS</h3>
                    <h4>2,784</h4>
                </div>
                <div class="col-md-4 user-pad text-center">
                    <h3>FOLLOWING</h3>
                    <h4>456</h4>
                </div>
                <div class="col-md-4 user-pad text-center">
                    <h3>APPRECIATIONS</h3>
                    <h4>4,901</h4>
                </div>
            </div>
        </div>
            
        </div>
    </div>

</body>
</html>