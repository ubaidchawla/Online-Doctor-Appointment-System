<?php

// mysqli_connect() function opens a new connection to the MySQL server.
$servername = "localhost";
$usernam="root";
$pwd="";
$dbname="ilaaj";
try{
$conn = mysqli_connect($servername, $usernam,$pwd,$dbname);
echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}

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


if(isset($_POST['submit'])){
$name=$_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$doctor_id = $_POST['doctor_id'];
$degree_name=$_POST['degree_name'];
$degree_id = $_POST['degree_id'];
$speciality_id = $_POST['speciality_id'];
$speciality_name=$_POST['speciality_name'];
$register_query = "INSERT INTO `doctor` (`name`, `username`, `password`, `gender`, `email`, `doctor_id`, `degree_name`, `degree_id`, `speciality_id`, `speciality_name`)
 VALUES ('$name','$username','$password','$gender','$email','$doctor_id' ,'$degree_name','$degree_id','$speciality_id','$speciality_name')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo("registration successful");
}else{
echo("error in registration");
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
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
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
    <span><a href="profile.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><?php echo $login_session; ?></a></span>
	<?php if($query) : ?>
    <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">LogOut</a>
<?php endif; ?>
		
	<a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Appointments</a>
    <a href="#doctorslist.html" onclick="w3_close()" data-toggle="modal" data-target="#listdoctors" 
    class="w3-bar-item w3-button w3-hover-white" style="color: white;">List of doctors</a>
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

  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="src/images/1.jpg" class="bug-main-img" onclick="onClick(this)" alt="Concrete meets bricks">
      <img src="src/images/2.jpg" class="bug-main-img" onclick="onClick(this)" alt="Light, white and tight scandinavian design">

    </div>

    <div class="w3-half">
      <img src="src/images/3.jpg" class="bug-main-img" onclick="onClick(this)" alt="Windows for the atrium">
      <img src="src/images/4.jpg" class="bug-main-img" onclick="onClick(this)" alt="Bedroom and office in one space">

    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black bug-img-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" class="bug-main-container">
    <h1 class="w3-xxxlarge bug-text-red"><b>Services we provide.</b></h1>
    <hr class="w3-round bug-line-red">
    <p>We are a interior design service that focus on what's best for your home and what's best for you!</p>
    <p>Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>

  <!-- Designers -->
  <div class="w3-container" id="designers" class="bug-main-container">
    <h1 class="w3-xxxlarge bug-text-red"><b>Doctors.</b></h1>
    <hr class="w3-round bug-line-red">
    <p>The best team in the world.</p>
    <p>We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    <p><b>Our most high profile doctors</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="src/images/d1.jpg" alt="John" class="bug-main-img">
        <div class="w3-container">
          <h3>Dr House</h3>
          <p class="w3-opacity">Cardiologist</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="src/images/d2.jpg" alt="Jane" class="bug-main-img">
        <div class="w3-container">
          <h3>Dr Bakhtawar</h3>
          <p class="w3-opacity">Neurosurgeon</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="src/images/d3.jpg" alt="Mike" class="bug-main-img">
        <div class="w3-container">
          <h3>Dr Mike Ross</h3>
          <p class="w3-opacity">Gynecologist</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Pricing Tables -->

  <!-- Contact -->
  <div class="w3-container" id="contact" class="bug-main-container">
    <h1 class="w3-xxxlarge bug-text-red"><b>Your experience.</b></h1>
    <hr class="w3-round bug-line-red">
    <p>Tell us about your last appointment so that we could improve our customer care services</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Doctor Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Your Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Your review</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large bug-red w3-margin-bottom">Send Message</button>
    </form>
  </div>

  <div class="modal fade" id="registerdoctor" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Doctor Register Form</h2>
        </div>
        <div class="modal-body">
          <form style="max-width:500px;padding:3%;margin:auto;" action="" method="post">
  <h2>Doctor Register Form</h2>

    <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Name" name="name">
  </div>


  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="username" name="username">
  </div>


  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="password" placeholder="password" name="password">
  </div>

  <div class="form-group">
    <select style="width:100%;color:white;background:#AF2A2A;padding:5%;" name="gender">
      <option>Gender</option>
		<option	value="Male">Male</option>
  		<option value="Female">Female</option>
  		<option	value="Other">Other</option>`
	   </select>
  </div>


  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="email">
  </div>

  <div class="input-container">
    <i class="fa fa-briefcase icon"></i>
    <input class="input-field" type="number" placeholder="Doctor_id" name="doctor_id">
  </div>

  <div class="input-container">
    <i class="fa fa-briefcase icon"></i>
    <input class="input-field" type="text" placeholder="degree_name" name="degree_name">
  </div>

  <div class="input-container">
    <i class="fa fa-briefcase icon"></i>
    <input class="input-field" type="number" placeholder="degree_id" name="degree_id">
  </div>

  <div class="input-container">
    <i class="fa fa-briefcase icon"></i>
    <input class="input-field" type="text" placeholder="speciality_id" name="speciality_id">
  </div>


  <div class="input-container">
    <i class="fa fa-briefcase icon"></i>
    <input class="input-field" type="text" placeholder="Speciality_name" name="speciality_name">
  </div>
  

  <button type="submit" name="submit" class="btn">Register</button>
</form>

      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="listdoctors" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">LIST OF DOCTORS IN PAKISTAN</h2>
        </div>
        <div class="modal-body">
  
           <form class="form-wrap mt-4">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <input type="text" placeholder="Doctors Spcilization" class="">
                                        <input type="text" placeholder="City" class="">
                                        <button type="submit" class="btn-form">SEARCH</button>
                                    </div>
                                </form>
      </div>

    </div>
  </div>
</div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
