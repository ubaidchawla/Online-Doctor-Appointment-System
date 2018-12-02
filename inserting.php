<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = mysqli_connect($servername, $username, $password,"ilaaj");
                     
					 

mysqli_query ($con, "INSERT INTO person(person_id, title,name,gender,age,address,city )
VALUES(0001,'Dr', 'Ali','male',21, 'pakistan','Multan')");

mysqli_query ($con, "INSERT INTO person(person_id, title,name,gender,age,address,city )
VALUES(0002,'Dr', 'Ali','male',21, 'pakistan','Multan')");

mysqli_query ($con, "INSERT INTO person(person_id, title,name,gender,age,address,city )
VALUES(0003,'Dr', 'Ali','male',21, 'pakistan','Multan')");

mysqli_query ($con, "INSERT INTO person(person_id, title,name,gender,age,address,city )
VALUES(0004,'Dr', 'Ali','male',21, 'pakistan','Multan')");


mysqli_query($con,"CREATE TABLE doctor(doctor_id int(10),degree_name varchar(15),degree_id int(5),
speciality_id int(7), speciality_name varchar(15),PRIMARY KEY(doctor_id), FOREIGN KEY(doctor_id) REFERENCES person(person_id))");


		
mysqli_query ($con, "INSERT INTO doctor(doctor_id, degree_name,degree_id,speciality_id,speciality_name)
VALUES(0001, 'msg', 101,4 , 'eye speacilist')");

		
mysqli_query ($con, "INSERT INTO doctor(doctor_id, degree_name,degree_id,speciality_id,speciality_name)
VALUES(0002, 'msg', 101, 5 ,'eye speacilist')");

		
		
		
		
		
mysqli_query ($con, "INSERT INTO patient(patient_id, weight,height,allergy,allergy_type,diabetic, blood_type)
VALUES(0003,'22', 10,'feer','a', 0,'b+')");
		
		
mysqli_query ($con, "INSERT INTO patient(patient_id, weight,height,allergy,allergy_type,diabetic, blood_type)
VALUES(0004, 32, 10,'feer','a', 0,'b+')");


		
		
		
	?>