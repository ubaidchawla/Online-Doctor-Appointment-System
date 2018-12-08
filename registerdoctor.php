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
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$doctor_id=$_POST['doctor_id'];
$degree_name=$_POST['degree_name'];
$degree_id=$_POST['degree_id'];
$speciality_id=$_POST['speciality_id'];
$speciality_name=$_POST['speciality_name'];

$register_query = "INSERT INTO `doctor` (`name`, `username`, `password`, `gender`, `email`, `doctor_id`, `degree_name`, `degree_id`, `speciality_id`, `speciality_name`)
								VALUES ('$name','$username','$password','$gender','$email','$doctor_id','$degree_name','$degree_id','$speciality_id','$speciality_name')";
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
 
?>
<html>
<head>
<meta charset="utf-8">
<title>Register a Doctor</title>
</head>
 
<body>
<form action="" method="post">
<table align="center">
<tr>
<td>Name:</td>
<td><input type="text" name="name" placeholder="enter your first name"></td>
</tr>
<tr>
<td>username</td>
<td><input type="text" name="username" placeholder="enter username"></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" name="password" placeholder="enter password"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>

<td>Gender</td>
 
 
<td><input type="radio" name="gender" value="Male">Male</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="gender" value="others">others</td>
</tr>
<tr>
<td>email:</td>
<td><input type="text" name="email" placeholder="enter your email"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td>doctor_id:</td>
<td><input type="number" name="doctor_id" placeholder="enter doc id"></td>
 
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td>degree_name:</td>
<td><input type="text" name="degree_name" placeholder="name your degree"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td>degree_id:</td>
<td><input type="number" name="degree_id" placeholder="enter degree_id"></td>
</tr>
<tr>
<td>speciality_id:</td>
<td><input type="number" name="speciality_id" placeholder="enter speciality_id"></td>
</tr>
<tr>
<td>speciality_name:</td>
<td><input type="text" name="speciality_name" placeholder="enter speciality_name"></td>
</tr>
 
<tr>
<td></td>
<td>  <button type="submit" name="submit">Register</button>
</td>
</tr>
</table>
</form>
</body>
</html>