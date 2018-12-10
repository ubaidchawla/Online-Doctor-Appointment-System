  <?php


include 'database.php';

session_start();// Starting Session

// Storing Session
$user_check = @$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT * from doctor where username = '$user_check'";

$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['name'];
$login_session_id = $row['doctor_id'];
$login_session_email = $row['email'];
$login_session_degree = $row['degree_name'];
$login_session_speciality = $row['speciality_name'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Rating display</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="src/css/custom.css">
<link rel="stylesheet" href="src/css/rating.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>

<style type="text/css">
  span.stars, span.stars span {
    display: block;
    background: url(src/images/stars.png) 0 -16px repeat-x;
    width: 80px;
    height: 16px;
}

span.stars span {
    background-position: 0 0;
}
</style>
</head>






<?php
          $cnt = 0;
          $total = 0;
          $rate = mysqli_query($conn, "SELECT rating FROM review WHERE doctor_id = $login_session_id");
          while($ratings = mysqli_fetch_assoc($rate)){
          $cnt++;
          $total+= $ratings['rating'];
        }
        echo "<br>";echo "total = ", $total , "<br>";
        echo "count = ", $cnt;
        $avg = 0 ;
        $avg = $total/$cnt;
        
  //  1.6

        echo "<br>", "Average = ";
        $rounded=round( $avg, 1, PHP_ROUND_HALF_UP); 
        echo $rounded;
        ?>
<body>

<span class="stars"><?php echo $avg; ?></span>

<script type="text/javascript">
  $.fn.stars = function() {
    return $(this).each(function() {
        // Get the value
        var val = parseFloat($(this).html());
        // Make sure that the value is in 0 - 5 range, multiply to get width
        var size = Math.max(0, (Math.min(5, val))) * 16;
        // Create stars holder
        var $span = $('<span />').width(size);
        // Replace the numerical value with stars
        $(this).html($span);
    });
    val = Math.round(val * 4) / 4; /* To round to nearest quarter */
val = Math.round(val * 2) / 2; /* To round to nearest half */
}
</script>
<script type="text/javascript">
  
  $(function() {
    $('span.stars').stars();
});
</script>
</body>
</html>