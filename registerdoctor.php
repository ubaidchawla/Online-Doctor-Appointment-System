<!doctype html>
<?php
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
 
?><div class="modal fade" id="registerdoctor" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Doctor Register Form</h2>
        </div>
        <div class="modal-body">
          <form style="max-width:500px;padding:3%;margin:auto;" action="" method="post">

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
    <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>`
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
