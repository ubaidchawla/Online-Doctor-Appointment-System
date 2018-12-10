<?php
 include 'header1.php';
// mysqli_connect() function opens a new connection to the MySQL server.


?>

  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="src/images/1.jpg" class="bug-main-img" onclick="onClick(this)" alt="Concrete meets bricks">
      <img src="src/images/2.jpg" class="bug-main-img" onclick="onClick(this)" alt="Light, white and tight scandinavian design">

    </div>

    <div class="w3-half">
      <img src="src/images/3.jpg" class="bug-main-img" onclick="onClick(this)" alt="Windows for the atrium">
      <img src="src/images/4.jpg" class="bug-main-img" onclick="onClick(this)" alt="Bedroom and office in one space">

    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black bug-img-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" class="bug-main-container">
    <h1 class="w3-xxxlarge bug-text-red"><b>Services we provide.</b></h1>
    <hr class="w3-round bug-line-red">
    <p>We are a interior design service that focus on what's best for your home and what's best for you!</p>
    <p>Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>

  <!-- Designers -->
  <div class="w3-container" id="designers" class="bug-main-container">
    <h1 class="w3-xxxlarge bug-text-red"><b>Doctors.</b></h1>
    <hr class="w3-round bug-line-red">
    <p>The best team in the world.</p>
    <p>We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    <p><b>Our most high profile doctors</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="src/images/d1.jpg" alt="John" class="bug-main-img">
        <div class="w3-container">
          <h3>Dr House</h3>
          <p class="w3-opacity">Cardiologist</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="src/images/d2.jpg" alt="Jane" class="bug-main-img">
        <div class="w3-container">
          <h3>Dr Bakhtawar</h3>
          <p class="w3-opacity">Neurosurgeon</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="src/images/d3.jpg" alt="Mike" class="bug-main-img">
        <div class="w3-container">
          <h3>Dr Mike Ross</h3>
          <p class="w3-opacity">Gynecologist</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Pricing Tables -->

  <!-- Contact -->
  <div class="w3-container" id="contact" class="bug-main-container">
    <h1 class="w3-xxxlarge bug-text-red"><b>Your experience.</b></h1>
    <hr class="w3-round bug-line-red">
    <p>Tell us about your last appointment so that we could improve our customer care services</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Doctor Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Your Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Your review</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large bug-red w3-margin-bottom">Send Message</button>
    </form>
  </div>

  
<?php include 'registerdoctor.php';?>
<?php include 'listdoctors.php';?>

<?php include 'footer.php';?>



