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
$patient_name=$_POST['patient_name'];
$age = $_POST['age'];
$date = $_POST['date'];
$time_from=$_POST['time_from'];
$time_to=$_POST['time_to'];
$phone_number = $_POST['phone_number'];
$appointment_id =$_POST['appointment_id'];
$speciality_id= $_POST['speciality_id'];
$doctor_id = $_POST['doctor_id'];
$patient_id=$_POST['patient_id'];
$register_query = "INSERT INTO `appointment` (`patient_name`, `age`, `date`, `time_from`, `time_to`, `phone_number`, `appointment_id`, `speciality_id`, `doctor_id`, `patient_id`)
 VALUES ('$patient_name','$age','$date','$time_from','$time_to','$phone_number' ,'$appointment_id','$speciality_id','$doctor_id','$patient_id')";
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
<div class="modal fade" id="appoint" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h2>Patient Register Form</h2>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          
 <form style="max-width:500px;padding:3%;margin:auto;" action="" method="post">

  <h2>Appointment Form</h2>

    <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="patient_name" name="patient_name">
  </div>


  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="number" placeholder="age" name="age">
  </div>

  
    
  <div class="input-container">
    <i class="fa fa-calendar icon"></i>
    <input class="input-field" type="date" placeholder="date" name="date">
  </div>



  <div class="input-container">
    <i class="fa fa-clock-o icon"></i>
    <input class="input-field" type="time" placeholder="time from" name="time_from">
  </div>

  <div class="input-container">
    <i class="fa fa-clock-o icon"></i>
    <input class="input-field" type="time" placeholder="time to" name="time_to">
  </div>

  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="number" placeholder="phone_number" name="phone_number">
  </div>


  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="number" placeholder="appointment_id" name="appointment_id">
  </div>


  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="number" placeholder="speciality_id" name="speciality_id">
  </div>
  
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="number" placeholder="doctor_id" name="doctor_id">
  </div>
  

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="number" placeholder="patient_id" name="patient_id">
  </div>
  
  
  <button type="submit" name="submit" class="btn">Request an appointment</button>
</form>


      </div>

    </div>
  </div>
</div>
