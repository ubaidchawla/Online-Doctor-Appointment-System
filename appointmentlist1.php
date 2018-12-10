<?php include 'header1.php';?>
<!-- Header -->
  <div class="w3-container bug-header-container" id="showcase">
    <h1 class="w3-jumbo"><b>Improving healthcare</b></h1>
    <h1 class="w3-xxxlarge bug-text-red"><b>Your Appointments.</b></h1>
    <hr class="w3-round bug-line-red">
  </div>
<div class="container">
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped" id="myTable">
    <thead>
      <tr>
        <th onclick="sortTable(0)">Patient Name</th>
        <th onclick="sortTable(1)">Appointment Date</th>
        <th onclick="sortTable(2)">Appointment Time</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php
          $cnt = 0;
          $appointment = mysqli_query($conn, "SELECT * FROM appointment WHERE doctor_id = $login_session_id");
          while($appointments = mysqli_fetch_assoc($appointment)){
          $cnt++;
        ?>
          <tr>
            <td><?=$appointments['patient_name'];?></td>
            <td><?=$appointments['date'];?></td>
            <td><?=$appointments['time_from'];?></td>
            <td><button class="btn" data-toggle="modal" data-target="#record">Patient Record</button></td>
          </tr>
        <?php
  }
  include 'record.php';
?>  
    </tbody>
  </table>

</div>
<?php include 'listdoctors.php';?>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
<?php include 'footer.php'; ?>
