<?php
if(isset($_POST['submit']))
{

$patient_id = $_POST['patient_id'];
$doctor_id = $_POST['doctor_id'];
$comment = $_POST['comment'];
$rating = $_POST['rating'];
$link = mysqli_connect("localhost", "root", "", "ilaaj");


/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$res = mysqli_query($link, "insert into review(patient_id, doctor_id, comment, rating) 
  values('$patient_id','$doctor_id','$comment', '$rating')");

    if($res)
    {
        echo "Your feedback is saved";
    }
    else
    {
        echo " OOPs!! there is some error. Please check the fields";
    }

}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="src/css/custom.css">
<link rel="stylesheet" href="src/css/rating.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#B6B6B4;">
  <div class="modal fade" id="review" role="dialog">
    <div class="modal-dialog">
 <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h2>Doctor Review Form</h2>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
	<form style="max-width:500px;padding:3%;margin:auto;" action="" method="post">
  

    <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="PATIENT ID" name="patient_id">
  </div>

  <div class="input-container">
    <i class="fa fa-briefcase icon"></i>
    <input class="input-field" type="text" placeholder="Doctor id" name="doctor_id">
  </div>
    <h3>Please Rate</h3>

  <fieldset class="rating">
        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
    </fieldset>
    
  
    
    <div class="input-container">
        <textarea name="comment" placeholder="Please give your suggestions for Doctor" id="comments" cols="60" rows="5" onchange="maxlength('comments', 500)"></textarea></td>
    </div>
  
 <button type="submit" name="submit" class="btn">Submit </button>
</form>

</body>
</html>
