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

	
		$patient_name = ((isset($_POST['patient_name']))?$_POST['patient_name']:'');
		$age = ((isset($_POST['age']))?$_POST['age']:'');
		$date = ((isset($_POST['date']))?$_POST['date']:'');
		$time_from = ((isset($_POST['time_from']))?$_POST['time_from']:'');
		$time_to = ((isset($_POST['time_to']))?$_POST['time_to']:'');
		$phone_number = ((isset($_POST['phone_number']))?$_POST['phone_number']:'');
		$appointment_id= ((isset($_POST['appointment_id']))?$_POST['appointment_id']:'');
		$speciality_id = ((isset($_POST['speciality_id']))?$_POST['speciality_id']:'');
		$doctor_id = ((isset($_POST['doctor_id']))?$_POST['doctor_id']:'');
		$patient_id = ((isset($_POST['patient_id']))?$_POST['patient_id']:'');
	
		
                                                                           
mysqli_query($con,"CREATE TABLE appointment(patient_name varchar(25),age int(25),date date,
time_from time,time_to time,phone_number int(15),
appointment_id int(5) NOT NULL, speciality_id int(5),doctor_id int(10),patient_id int(7),
 PRIMARY KEY(appointment_id),FOREIGN KEY(doctor_id) REFERENCES doctor(doctor_id),
 FOREIGN KEY(patient_id) REFERENCES patient(patient_id))");
		
		
		
		if(isset($_POST['doctor_id'])){
				
				$sql= mysqli_query($con, "INSERT INTO appointment(patient_name, age, date,time_from, time_to,phone_number,appointment_id,speciality_id,doctor_id, patient_id )
				VALUES('$patient_name','$age','$time_from','$time_to' ,'$phonr_number' ,'$appointment_id' ,'$speciality_id' ,'$doctor_id' , '$patient_id'");
				;
			}
		
		
?>

<form style="max-width:500px;padding:3%;margin:auto;">
  <h2>Appointment Form</h2>

    <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Patient Name" name="patient name">
  </div>


  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="Number" placeholder="Age" name="age">
  </div>



  <div class="form-group">
    <select style="width:100%;color:white;background:#AF2A2A;padding:4%;">
      <option>Doctor's Speciality</option>
      <option>Anesthesist</option>
  		<option>Mone marrow</option>
  		<option>Eye specialist</option>`
		<option>Brain</option>
		<option>Muscles</option>
		<option>Child specialist</option>
		<option>Cardiologist</option>
		<option>Endocrinologist</option>
	   </select>
  </div>

  
  
  
  <div class="input-container">
    <i class="fa fa-calendar icon"></i>
    <input class="input-field" type="date" placeholder="date" name="date">
  </div>

  <div class="input-container">
    <i class="fa fa-clock-o icon"></i>
    <input class="input-field" type="time" placeholder="time from" name="time from">
  </div>

  <div class="input-container">
    <i class="fa fa-clock-o icon"></i>
    <input class="input-field" type="time" placeholder="time to" name="time to">
  </div>

  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="number" placeholder="Phone number" name="Phone number">
  </div>


  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="number" placeholder="appointment_id" name="appointment_id">
  </div>


  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="number" placeholder="speciality_id" name="speciality_id">
  </div>
  
  
  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="number" placeholder="doctor_id" name="doctor_id">
  </div>
  

  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="number" placeholder="patient_id" name="patient_id">
  </div>
  
  
  <button type="submit" class="btn">Request an appointmnet</button>
</form>

</body>
</html>
