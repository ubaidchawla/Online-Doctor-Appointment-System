
<!DOCTYPE html>
<html>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color:#B6B6B4;">

<?php 
$con = mysqli_connect("localhost", "root","", "ilaaj");

	$error='';

	
		$name = ((isset($_POST['name']))?$_POST['name']:'');
		$username = ((isset($_POST['username']))?$_POST['username']:'');
		$password = ((isset($_POST['password']))?$_POST['password']:'');
		$email = ((isset($_POST['email']))?$_POST['email']:'');
		$gender = ((isset($_POST['gender']))?$_POST['gender']:'');
		$age = ((isset($_POST['height']))?$_POST['height']:'');
		$blood_type= ((isset($_POST['blood_type']))?$_POST['blood_type']:'');
		$patient_id = ((isset($_POST['patient_id']))?$_POST['patient_id']:'');
		$weight = ((isset($_POST['weight']))?$_POST['weight']:'');
		$allergy = ((isset($_POST['allergy']))?$_POST['allergy']:'');
        $allergy_type = ((isset($_POST['allergy_type']))?$_POST['allergy_type']:'');	
		$diabetic = ((isset($_POST['diabetic']))?$_POST['diabetic']:'');
		
		
			
		
		
		if(isset($_POST['patient_id'])){
				
				$sql= mysqli_query($con, "INSERT INTO patient(name, username, password, email,gender,height,blood_type, patient_id ,weight, allergy, allergy_type, diabetic)
				VALUES('$name','$username','$password','$email' ,'$gender' ,'$height' ,'$blood_type' ,'$patient_id' , '$weight' , '$allergy' , '$allergy_type' , '$diabetic'");
				;
			}
		
		
?>
<form style="max-width:500px;margin:auto">
  <h2>Patient Register Form</h2>

    <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Name" name="name">
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="username">
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="password" placeholder="password" name="password">
  </div>


  <div class="input-container">
    <i class="fa fa-tint icon"></i>
    <input class="input-field" type="text" placeholder="Blood type" name="Blood type">
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="email" name="email">
  </div>




  <div class="form-group">
    <select style="width:100%;color:white;background:#AF2A2A;padding:4%;">
      <option>Gender</option>
      <option>Male</option>
     <option>Female</option>
     <option>Other</option>`
    </select>
  </div>



  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="number" placeholder="Age" name="age">
  </div>

  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="number" placeholder="height" name="height">
  </div>



  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="text" placeholder="blood_type" name="blood_type">
  </div>


  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="number" placeholder="patient_id" name="patient_id">
  </div>
  
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="number" placeholder="weight" name="weight">
  </div>
  
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="text" placeholder="allergy" name="allergy">
  </div>
  
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="text" placeholder="allergy_type" name="allergy_type">
  </div>

  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="number" placeholder="diabetic?" name="diabetic">
  </div>



  <button type="submit" class="btn">Register</button>
</form>

</body>
</html>
