<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = mysqli_connect($servername, $username, $password,"ilaaj");
                      


 
mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('heart ',50 )");


mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('eye',51 )");


mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('kidney',52 )");


mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('liver',53 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('skin',54 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('hair',55 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('bones ',56 )");


mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('child specialist ',57 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('Hematology ',58 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('pancreas ',59 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('cardiology ',60 )");




mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('neurology',61 )");


mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('dermatology',62 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('urology',63 )");

mysqli_query ($con, "INSERT INTO speciality(speciality_name, speciality_id )
VALUES('gynecology',64 )");



mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Multan', 1 )");


mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Lahore', 2 )");


mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Karachi', 3 )");


mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Islamabad', 4 )");


mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Faisalabad', 5 )");


mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Peshawar', 6 )");


mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Bahawalpur', 7 )");


mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Sahiwal', 8 )");


mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Quetta', 9 )");


mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Rawalpindi', 10 )");


mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Hyderabad', 11 )");


mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Sukkur', 12 )");


mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Sibi', 13 )");



mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Murree', 14 )");


mysqli_query ($con, "INSERT INTO city(name, city_id)
VALUES('Larkana', 15 )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Syed Ali','ali','123','male','1raza@gmail.com','multan',1,'mbbs','heart')");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Ali Bashir','ali1','123','male','2raza@gmail.com','Larkana',2,'mbbs','eye' )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Raja Nazir','raja','123','male','3raza@gmail.com','Murree',3,'mbbs','bones')");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Bilal Nazir','bilal','123','male','4raza@gmail.com','Sibi',4,'mbbs','skin')");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Ubaid Rehman','ubaid','123','male','5raza@gmail.com','Peshawar',5,'mbbs','liver' )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Saad Khan','saad','123','male','6raza@gmail.com','Lahore',6,'mbbs','heart' )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Daniale','m.daniale','123','male','7raza@gmail.com','Quetta',7,'mbbs','dermatology' )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Ahmad Raza','ahmad','123','male','8raza@gmail.com','lahore',8,'mbbs','gynecology')");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Mustafa Malik','mustafa','123','male','9raza@gmail.com','Hyderabad',9,'mbbs','urology')");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Hamza Qayyum','hamza','123','male','0raza@gmail.com','Karachi',10,'mbbs','pancreas' )");



mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Salman Raza','salman','123','male','99raza@gmail.com','Faisalabad',11,'fcprs','pancreas' )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Zubair Ghumman','zubair','123','male',98raza@gmail.com','lahore',12,'fcprs','eye' )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Applo Creed','creed','123','male','97raza@gmail.com','Karachi',13,'fcprs','heart' )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Shohaib Malik','malik','123','male','96raza@gmail.com','Multan',14,'fcprs','liver' )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Lex Luther','lex','123','male','91raza@gmail.com','Faisalabad',15,'fcprs','eye' )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Shahid Afridi','afridi','123','male','91raza@gmail.com','Faisalabad',16,'fcprs','eye' )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Muhammad Hafeez','hafeez','123','male','91raza@gmail.com','Faisalabad',17,'fcprs','eye' )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Misbah ul Haq','misbah','123','male','91raza@gmail.com','Faisalabad',18,'fcprs','eye' )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Imran Nazir','imran','123','male','91raza@gmail.com','Faisalabad',19,'fcprs','eye' )");


mysqli_query ($con, "INSERT INTO doctor(name, username,password,gender,email,city_name,doctor_id,degree_name,speciality_name )
VALUES('Sangakara ','sanga','123','male','91raza@gmail.com','Faisalabad',20,'fcprs','eye' )");



mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Syed Rahul','syed','000','raja@gmail.com','Multan','male',15,18,'A',1,59,1,'k2',0 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Zulfiqar Ali','zulfiqar','000','raja1@gmail.com','multan','male',15,18,'B',2,59,1,'k2',0)");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Ayesha Raza','raza','000','raja2@gmail.com','Sahiwal','female',15,18,'A',3,59,0,'none',0 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Taimoor Gardezi','gardezi','000','raja3@gmail.com','lahore','male',15,18,'B',4,59,0,'none',0 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Muhammad Amjad','amjad','000','raja4@gmail.com','Sibi','male',15,18,'B',5,59,0,'none',1 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Bashir Ghumman' , 'bashir','000','raja5@gmail.com','lahore','male',15,18,'A',6,59,1,'k2',1 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Farrukh Ghumman' , 'farrukh','000','raja5@gmail.com','lahore','male',15,18,'A',7,59,1,'k2',1 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Qadir Raja','qadir','000','raja6@gmail.com','Sukkur','male',15,18,'A',8,59,1,'k2',1 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Anwar Gondal','anwar','000','raja7@gmail.com','lahore','male',15,18,'B',9,59,1,'k2',0 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Bakhtawar Ali','bakhtawar','000','raja84@gmail.com','multan','female',15,18,'B',10,59,1,'k2',0 )");



mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Amna Malik','amna','000','raja86@gmail.com','karachi','female',16,18,'A',11,59,1,'k2',0 )");



mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Fatimah Afridi','fatimah','000','raja87@gmail.com','Faisalabad','female',17,18,'AB',12,59,1,'k2',0 )");



mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Hassan Anwar','hassan','000','raja89@gmail.com','Rawalpindi','male',18,22,'B',13,59,1,'k2',0 )");



mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Sadiq Shah','sadiq','000','raja80@gmail.com','Peshawar','male',11,23,'A',14,59,1,'k2',0 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Moiz Pervaiz' , 'moiz','000','raja5@gmail.com','lahore','male',15,18,'A',15,59,1,'k2',1 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Nohail Tariq' , 'nohail','000','raja5@gmail.com','lahore','male',15,18,'A',16,59,1,'k2',1 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Ibad Mughal' , 'ibad','000','raja5@gmail.com','lahore','male',15,18,'A',17,59,1,'k2',1 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Waqar Blaoch' , 'waqar','000','raja5@gmail.com','lahore','male',15,18,'A',18,59,1,'k2',1 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Umair Shah' , 'shah','000','raja5@gmail.com','lahore','male',15,18,'A',19,59,1,'k2',1 )");


mysqli_query ($con, "INSERT INTO patient(name, username,password,email,city,gender,age,height,blood_type,patient_id,weight,allergy,allergy_type,diabetic )
VALUES('Urwa Akmal' , 'urwa','000','raja5@gmail.com','lahore','male',15,18,'A',20,59,1,'k2',1 )");





mysqli_query ($con, "INSERT INTO appointment(patient_name, age,date,time_from,time_to,phone_number,appointment_id,speciality_id,doctor_id,patient_id )
VALUES('rai',22,'2018-11-20','08:30:00','19:00:00',033686699,1,50,1,1 )");


mysqli_query ($con, "INSERT INTO appointment(patient_name, age,date,time_from,time_to,phone_number,appointment_id,speciality_id,doctor_id,patient_id )
VALUES('kaka',23,'2018-12-20',07:30:00','19:00:00',0336875943,2,51,2,2 )");


mysqli_query ($con, "INSERT INTO appointment(patient_name, age,date,time_from,time_to,phone_number,appointment_id,speciality_id,doctor_id,patient_id )
VALUES('fraser',24,'2018-13-20','06:30:00','15:00:00',0336556943,3,52,3,3 )");


mysqli_query ($con, "INSERT INTO appointment(patient_name, age,date,time_from,time_to,phone_number,appointment_id,speciality_id,doctor_id,patient_id )
VALUES('george',25,'2018-14-20','05:30:00','14:00:00',0336866988,4,53,4,4 )");


mysqli_query ($con, "INSERT INTO appointment(patient_name, age,date,time_from,time_to,phone_number,appointment_id,speciality_id,doctor_id,patient_id )
VALUES('amjad',26,'2018-15-20','04:30:00','12:00:00',03368669896,5,54,5,5 )");


mysqli_query ($con, "INSERT INTO appointment(patient_name, age,date,time_from,time_to,phone_number,appointment_id,speciality_id,doctor_id,patient_id )
VALUES('bashir',27,'2018-16-20','03:30:00','11:00:00',033686543,6,55,6,6 )");


mysqli_query ($con, "INSERT INTO appointment(patient_name, age,date,time_from,time_to,phone_number,appointment_id,speciality_id,doctor_id,patient_id )
VALUES('qadir',28,'2018-17-20','01:30:00','11:00:00',0336866643,7,56,7,7 )");


mysqli_query ($con, "INSERT INTO appointment(patient_name, age,date,time_from,time_to,phone_number,appointment_id,speciality_id,doctor_id,patient_id )
VALUES('anwar',22,'2018-18-20','02:30:00','12:00:00',0336545453,8,57,8,8 )");


mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(1,1,1,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(2,2,1,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(3,3,1,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(4,4,1,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(5,5,1,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(1,6,2,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(2,1,2,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(3,8,2,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(4,9,3,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(5,10,3,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(1,11,3,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(2,12,3,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(3,13,4,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(4,14,4,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(5,14,4,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(1,1,4,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(2,2,5,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(3,3,5,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(4,4,5,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(5,5,6,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(1,6,6,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(2,1,6,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(3,8,7,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(4,9,7,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(5,10,7,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(1,11,8,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(2,12,8,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(3,13,8,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(4,14,8,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(4,14,9,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(1,1,9,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(2,2,9,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(3,3,9,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(4,4,10,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(3,5,10,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(1,6,10,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(2,1,10,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(3,8,11,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(4,9,11,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(1,10,11,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(1,11,11,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(2,12,12,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(3,13,12,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(4,14,12,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(5,14,12,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(3,14,12,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(4,14,12,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(2,14,12,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(1,14,13,'very nice doctor and cooperative')");

mysqli_query($con,"INSERT INTO review( rating, patient_id ,doctor_id , comment)
VALUES(3,14,13,'very nice doctor and cooperative')");



mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(1,'chickenpox',6,'measles',1)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(2,'chickenpox',3,'measles',2)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(3,'chickenpox',8,'measles',3)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(4,'chickenpox',10,'measles',4)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(5,'chickenpox',1,'measles',5)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(6,'acne',9,'heart stroke',6)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(7,'acne',9,'heart stroke',12)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(8,'alzheimer',6,'heart stroke',7)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(9,'bile duct cancer',16,'asthma',8)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(10,'blood poisoning',20,'blood cancer',9)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(11,'chickenpox',10,'measles',10)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(12,'acne',9,'heart stroke',13)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(13,'alzheimer',6,'heart stroke',14)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(14,'bile duct cancer',16,'asthma',11)");

mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(15,'bone cancer',9,'heart stroke',15)");


mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(16,'acne',18,'brain tumour',16)");


mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(17,'acne',23,'heart stroke',17)");


mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(18,'chest',15,'acne',18)");


mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(19,'cold sore',20,'common cold',19)");


mysqli_query($con,"INSERT INTO record(patient_id, disease, loyalty_points, ongoing_treatment, doctor_id) 
VALUES(20,'depression',9,'dehydration',20)");








?>