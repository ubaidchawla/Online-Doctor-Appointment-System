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
$patient_id=$_POST['patient_id'];
$disease = $_POST['disease'];
$loyalty_points = $_POST['loyalty_points'];
$ongoing_treatment=$_POST['ongoing_treatment'];
$doctor_id=$_POST['doctor_id'];
$register_query = "INSERT INTO `record` (`patient_id`, `disease`, `loyalty_points`, `ongoing_treatment`, `doctor_id`)
 VALUES ('$patient_id','$disease','$loyalty_points','$ongoing_treatment','doctor_id')";
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
 
?><div class="modal fade" id="record" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Patient Record Form</h2>
        </div>
        <div class="modal-body">
          <form style="max-width:500px;padding:3%;margin:auto;" action="" method="post">

    <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="number" placeholder="patient id" name="patient_id">
  </div>


  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="disease" name="disease">
  </div>


  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="loyalty_points" name="loyalty_points">
  </div>


  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Ongoing treatment" name="ongoing_treatment">
  </div>

  
  <div class="input-container">
    <i class="fa fa-briefcase icon"></i>
    <input class="input-field" type="number" placeholder="Doctor_id" name="doctor_id">
  </div>

  
  
  
  <button type="submit" name="submit" class="btn">Register</button>
</form>

      </div>

    </div>
  </div>
</div>
