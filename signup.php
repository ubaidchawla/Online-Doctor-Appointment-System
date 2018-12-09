<?php
 include 'database.php';

if(isset($_POST['submit'])){
$name=$_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$age = $_POST['age'];
$height=$_POST['height'];
$blood_type = $_POST['blood_type'];
$patient_id = $_POST['patient_id'];
$weight=$_POST['weight'];
$allergy=$_POST['allergy'];
$allergy_type=$_POST['allergy_type'];
$diabetic=$_POST['diabetic'];
$register_query= "INSERT INTO `patient` (`name`, `username`, `password`, `email`, `gender`, `age`, `height`, `blood_type`, `patient_id`, `weight`, `allergy`, `allergy_type`, `diabetic`)
 VALUES ('$name','$username','$password','$email','$gender','$age' ,'$height','$blood_type','$patient_id','$weight','$allergy','$allergy_type','$diabetic')";
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
}?>
<div class="modal fade" id="registerpatient" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h2>Patient Register Form</h2>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
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
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="password" name="password">
  </div>


  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="email" name="email">
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
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="number" placeholder="age" name="age">
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="number" placeholder="height" name="height">
  </div>



  <div class="input-container">
    <i class="fa fa-tint icon"></i>
    <input class="input-field" type="text" placeholder="blood_type" name="blood_type">
  </div>


  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="number" placeholder="patient_id" name="patient_id">
  </div>
  
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="number" placeholder="weight" name="weight">
  </div>
  
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="allergy" name="allergy">
  </div>
  
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="allergy_type" name="allergy_type">
  </div>

  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="number" placeholder="diabetic" name="diabetic">
  </div>

 <button type="submit" name="submit" class="btn">Register</button>

</form>


      </div>

    </div>
  </div>
</div>
