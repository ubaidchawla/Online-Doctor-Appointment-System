<div class="modal fade" id="listdoctors" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">LIST OF DOCTORS IN PAKISTAN</h2>
        </div>
        <div class="modal-body">
  <form style="max-width:500px;padding:3%;margin:auto;" method="get"action="doctorstable.php">
  <h2>Search for the doctor</h2>

 <div class="input-container" >
    <i class="fa fa-briefcase icon"></i>
    <select name="speciality_name" style="padding: 10px; width:100%;">
      <option>speciality</option>
        <?php
          $speciality = mysqli_query($conn, "SELECT * FROM speciality");
          while($specialities = mysqli_fetch_assoc($speciality))
          {
        ?>
          <option><?=$specialities['speciality_name'];?></option>
        <?php
          }
        ?>  
     </select>
  </div>

  <div class="input-container">
    <i class="fa fa-building icon"></i>
    <select name="city_name" style="padding: 10px; width:100%;">
      <option>CITY</option>
        <?php
          $city = mysqli_query($conn, "SELECT * FROM city");
          while($cities = mysqli_fetch_assoc($city))
          {
        ?>
          <option><?=$cities['name'];?></option>
        <?php
          }
        ?>  
    </select>
  </div>


 <button type="submit" name="submit" class="btn">Search</button>

</form>
      </div>

    </div>
  </div>
</div>