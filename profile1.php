<?php



 include 'header1.php';
?>
 
<!-- Header -->
  <div class="w3-container bug-header-container" id="showcase">
    <h1 class="w3-jumbo"><b>Improving healthcare</b></h1>
    <h1 class="w3-xxxlarge bug-text-red"><b>DOCTOR's PROFILE.</b></h1>
    <hr class="w3-round bug-line-red">
  </div>
   <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <div class="row">
              <div class="col-md-6">
              <div class="col-md-6 img ">
                <img src="src/images/doc.png"  alt="" class="img-rounded">
              </div>
              <div class="col-md-6 details">
                <blockquote>
                  <h5>Dr <?php echo $login_session; ?></h5>
                  <small><cite title="Source Title">Fasilabad, Pakistan  <i class="icon-map-marker"></i></cite></small>
                </blockquote>
                <p>
                  <?php echo $login_session_email; ?> <br>
                  <?php echo $login_session_degree; ?>,<?php echo $login_session_speciality; ?> <br>
                  July 4, 1996
                </p>
              </div>
            </div>
            <?php
          $cnt = 0;
          $total = 0;
          $rate = mysqli_query($conn, "SELECT rating FROM review WHERE doctor_id = $login_session_id");
          while($ratings = mysqli_fetch_assoc($rate))
          {
          $cnt++;
          $total+= $ratings['rating'];
            }
            
            $avg = 0 ;
            $avg = $total/$cnt;
        
  //  1.6

        $rounded=round( $avg, 1, PHP_ROUND_HALF_UP); 
        ?>
            <div class="col-md-6">
          
                    <div class="text-center">
                        <h1 class="rating-num"><?php echo $rounded; ?></h1>
                        <div>
                           <h3><span class="fa fa-user"></span><?php echo $cnt; ?> total votes</h3> 
                            <span class="stars" style="margin-left: 45%;"><?php echo $avg; ?></span>

                        </div>
                    </div>
                
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
<?php
$comment = mysqli_query($conn, "SELECT r.comment,p.name FROM review r join patient p on r.patient_id=p.patient_id
  WHERE doctor_id = $login_session_id");
          while($comments = mysqli_fetch_assoc($comment))
        {

            ?>
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="src/images/man.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">16 min</span>
        <h4><?=$comments['name'];?></h4><br>
        <hr class="w3-clear">
        <p><?=$comments['comment'];?></p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>  <?php }
      ?>

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
