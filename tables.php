<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password,"ilaaj");
 

	
mysqli_query($con,"CREATE TABLE city(name varchar(25),city_id int(25),PRIMARY KEY(city_id))");


mysqli_query($con,"CREATE TABLE speciality(speciality_name varchar(25),speciality_id int(25),PRIMARY KEY(speciality_id))");



mysqli_query($con, "CREATE TABLE doctor(name varchar(25),username varchar(25),password varchar(25),gender varchar(25),email varchar(25)
,city_name varchar(25),doctor_id int(25),
degree_name varchar(25),speciality_name varchar(25), PRIMARY KEY(doctor_id))");	


mysqli_query($con,"CREATE TABLE patient(name varchar(25),username varchar(25),password varchar(25),email varchar(25),city varchar(25),city_id int(25),
gender varchar(25),age int(5),height int(25),
blood_type varchar(25), patient_id int(10), weight int(5),
  allergy int(1), allergy_type varchar(25),
 diabetic int(1), 
 PRIMARY KEY(patient_id), FOREIGN KEY(city_id) REFERENCES city(city_id))"); 

mysqli_query($con,"CREATE TABLE appointment(patient_name varchar(25),age int(25),date date,
time_from time,time_to time,phone_number int(15),
appointment_id int(5) NOT NULL, speciality_id int(5),doctor_id int(10),patient_id int(7),
 PRIMARY KEY(appointment_id))");

mysqli_query($con,"CREATE TABLE patient_history(patient_id int(7) NOT NULL, appointment_id int(5), disease varchar(20) ,
ongoing_treatment varchar(20), doctor_id int(10), date_of_previous_treatment date, PRIMARY KEY(patient_id), FOREIGN KEY(patient_id) REFERENCES appointment(patient_id))"); 

                              
mysqli_query($con,"CREATE TABLE review(review_id int(10), rating int(3), patient_id int(10), comment text(500),PRIMARY KEY(review_id),FOREIGN KEY(patient_id) REFERENCES patient(patient_id))");

?>