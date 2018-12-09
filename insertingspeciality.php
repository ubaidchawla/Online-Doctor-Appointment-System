<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = mysqli_connect($servername, $username, $password,"ilaaj");
                      
mysqli_query($con,"CREATE TABLE speciality(speciality_id int(10), speciality_name varchar(50), PRIMARY KEY(speciality_id))");

 
mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Anatomical Pathology ',50 )");


mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Medical Oncology',51 )");


mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Medical Microbiology',52 )");


mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Medical Genetics',53 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Medical Biochemistry',54 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Maternal-Fetal Medicine',55 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Internal Medicine ',56 )");


mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Infectious Diseases ',57 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Hematology ',58 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Hematological Pathology ',59 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Geriatric Medicine ',60 )");




mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('General Surgery ',61 )");


mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('General Surgical Oncology',62 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Gastroenterology',63 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Family Medicine',64 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Community Medicine  ',65 )");


mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Clinical Pharmacology  ',66 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Cardiac Surgery  ',67 )");


	?>