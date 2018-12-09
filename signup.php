<?php
 include 'database.php';

if(isset($_POST['submit'])){
$name=$_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email=$_POST['email'];
$city=$_POST['city'];
$city_id=$_POST['city_id'];
$gender=$_POST['gender'];
$age = $_POST['age'];
$height=$_POST['height'];
$blood_type = $_POST['blood_type'];
$patient_id = $_POST['patient_id'];
$weight=$_POST['weight'];
$allergy=$_POST['allergy'];
$allergy_type=$_POST['allergy_type'];
$diabetic=$_POST['diabetic'];
$register_query= "INSERT INTO `patient` (`name`, `username`, `password`, `email`,`city`,`city_id`, `gender`, `age`, `height`, `blood_type`, `patient_id`, `weight`, `allergy`, `allergy_type`, `diabetic`)
 VALUES ('$name','$username','$password','$email','$city','$city_id','$gender','$age' ,'$height','$blood_type','$patient_id','$weight','$allergy','$allergy_type','$diabetic')";

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
<style type="text/css">
  .switch {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 54px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #AF2A2A;
  -webkit-transition: .4s;
  transition: .4s;

}

.slider:before {
  position: absolute;
  content: "";
  height: 46px;
  width: 50%;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  text-align:center;
  content: "NO ALLERGY";
line-height:3;
}

input:checked + .slider {
  background-color: #A52A2A;
}

input:focus + .slider {
  box-shadow: 0 0 1px #A52A2A;
}

input:checked + .slider:before {
  -webkit-transform: translateX(96%);
  -ms-transform: translateX(96%);
  transform: translateX(96%);
  content: "ALLERGY";
}

.slider1 {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #AF2A2A;
  -webkit-transition: .4s;
  transition: .4s;

}

.slider1:before {
  position: absolute;
  content: "";
  height: 46px;
  width: 50%;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  text-align:center;
  content: "NOT DIABETIC";
line-height:3;
}

input:checked + .slider1 {
  background-color: #A52A2A;
}

input:focus + .slider1 {
  box-shadow: 0 0 1px #A52A2A;
}

input:checked + .slider1:before {
  -webkit-transform: translateX(96%);
  -ms-transform: translateX(96%);
  transform: translateX(96%);
  content: "DIABETIC";
}

</style>
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
  <h2>Patient Register Form</h2>

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

  
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="City" name="city">
  </div>
  
  
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="number" placeholder="city_id" name="city_id">
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
  
  

<label class="switch"><p style="width:100%;color:black;padding:3%;">allergy</p>
  <input type="checkbox" name="allergy" value="allergy">
  <span class="slider"></span>
</label>
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="allergy_type" name="allergy_type">
  </div>

  
  
  
<label class="switch" name="allergy"><p style="width:100%;color:black;padding:3%;">Diabeties</p>
  <input type="checkbox" name="diabetic" value="diabetic">
  <span class="slider1"></span>
</label>
  
   
 <button type="submit" name="submit" class="btn">Register</button>

 
</form>


      </div>

    </div>
  </div>
</div>
