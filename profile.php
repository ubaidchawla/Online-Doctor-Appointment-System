<?php



 include 'header.php';
?>
<style type="text/css">
  
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
<!-- Header -->
  <div class="w3-container bug-header-container" id="showcase">
    <h1 class="w3-jumbo"><b>Improving healthcare</b></h1>
    <h1 class="w3-xxxlarge bug-text-red"><b>PATIENT PROFILE.</b></h1>
    <hr class="w3-round bug-line-red">
  </div>
 <div class="container">
  <div class="row">
    <div class="col-md-4" style="height:400px; border:1px solid grey;">
      <img src="src/images/man.png" width="100%" height="100%">
    </div>
    <div class="col-md-4" style="height:400px; border:1px solid grey;">
      <h3>Name:</h3><p><?php echo $login_session; ?></p>
      <h3>Age</h3><?php echo $login_session_age; ?>
      <h3>Gender:</h3><?php echo $login_session_gender; ?>
      <h3>Blood Type:</h3><?php echo $login_session_bloodtype; ?>
      <h3>Email:</h3><?php echo $login_session_email; ?>

    </div>

    <div class="col-md-4" style="height:400px; border:1px solid grey;text-align: center; ">
      <h1 style="font-size: 60px;">LOYALTY</h1>
       <h2 style="font-size: 45px;">POINTS</h2>
      <h1 style="font-size: 60px;">40</h1>
      <h2 style="font-size: 45px;">REMAINING</h2>
      <h2 style="font-size: 35px;">20</h2>


    </div>
    
    </div>
  </div>
  <div class="container">
  <h2>PATIENT RECORD TABLE</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped" id="myTable">
    <thead>
      <tr>
        <th onclick="sortTable(0)">patient_id</th>
        <th onclick="sortTable(1)">disease</th>
        <th onclick="sortTable(2)">loyalty_points</th>
    <th onclick="sortTable(3)">ongoing_treatment</th>
    <th onclick="sortTable(4)">doctor_id</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php
          $cnt = 0;
          $record = mysqli_query($conn, "SELECT * FROM record
            WHERE patient_id = $login_session_id");
          while($records = mysqli_fetch_assoc($record)){
          $cnt++;
        ?>
          <tr>
            <td><?=$records['patient_id'];?></td>
            <td><?=$records['disease'];?></td>
            <td><?=$records['loyalty_points'];?></td>
            <td><?=$records['ongoing_treatment'];?></td>
            <td><?=$records['doctor_id'];?></td>
          </tr>
        <?php
  }
?>  
    </tbody>
  </table>

</div>

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
<?php include 'footer.php';?>
