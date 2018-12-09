<?php



 include 'header.php';
?>
 <div id="profile">
  <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
  <b id="logout"><a href="logout.php">Log Out</a></b>
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
                  hafizubaidchawala@outlook.com <br>
                  Eye specialist, FRCPS <br>
                  July 4, 1996
                </p>
              </div>
            </div>
            <div class="col-md-6">
          <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="row rating-desc">
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="fa fa-star"></span>6
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 19%">
                                        <span class="sr-only">19%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="fa fa-star"></span>5
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="fa fa-star"></span>4
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="fa fa-star"></span>3
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="fa fa-star"></span>2
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="fa fa-star"></span>1
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                        <span class="sr-only">15%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <div class="col-xs-12 col-md-6 text-center">
                        <h1 class="rating-num">5.1</h1>
                        <div class="rating">
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star-half"></span>
                        </div>
                        <div>
                            <span class="fa fa-user"></span>125888 total votes
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>


            </div>
          </div>
        </div>
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="src/images/man.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">16 min</span>
        <h4>Jane Doe</h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>  

<?php include 'footer.php';?>
