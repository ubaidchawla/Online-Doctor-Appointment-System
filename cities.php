<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = mysqli_connect($servername, $username, $password,"ilaaj");
mysqli_query($con,"CREATE TABLE cities(city_id int(10), name varchar(30),PRIMARY KEY(city_id))");

mysqli_query ($con, "
INSERT INTO `cities` (`name`, `city_id`) VALUES ('Multan', '001'), ('Lahore', '002'), ('Karachi', '003'), ('Islamabad', '004')
, ('Faisalabad', '005'), ('Peshawar', '006'), ('Bahawalpur', '007'), ('Sahiwal', '008'), ('Quetta', '009'), ('Hyderabad', '010')
, ('Sukkur', '011'), ('Haripur', '012'), ('Rawalpindi', '013'), ('Kashmir', '014'), ('Larkana', '015'), ('Murree', '016'), ('Dadu', '017'), ('Gwadar', '018')
, ('Topi', '019'), ('Abottabad', '020'), ('D.I Khan', '021');");

?>