<?php include 'header.php';
if(isset($_GET['city_name']))
  {
    $search=$_GET['city_name'];
    $search1=$_GET['speciality_name'];
?>

<div class="container">
  <h2>AVAILABLE DOCTORS FOR YOUR SEARCH</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped" id="myTable">
    <thead>
      <tr>
        <th onclick="sortTable(0)">DOCTOR NAME</th>
        <th onclick="sortTable(1)">GENDER</th>
        <th onclick="sortTable(2)">CITY</th>        
        <th onclick="sortTable(3)">SPECIALITY NAME</th>
        <th onclick="sortTable(4)">EMAIL</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php
          $cnt = 0;
          $doctor = mysqli_query($conn, "SELECT * FROM doctor where city_name='$search' AND speciality_name='$search1'");
          while($doctors = mysqli_fetch_assoc($doctor)){
          $cnt++;

        ?>
          <tr>
            <td><?=$doctors['name'];?></td>
            <td><?=$doctors['gender'];?></td>
            <td><?=$doctors['city_name'];?></td>
            <td><?=$doctors['speciality_name'];?></td>
            <td><?=$doctors['email'];?></td>
            <td><button type="button" class="btn bug-red" data-toggle="modal" data-target="#appoint">
    BOOK</button></td>
          </tr>
        <?php
  }
?>  
    </tbody>
  </table>

</div>
<?php include 'listdoctors.php';?>
<?php include 'appointment.php';?>

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
<?php 
}
include 'footer.php'; ?>
