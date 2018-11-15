<?php
    include 'employerheader.php';
    include 'connection.php';
    $id = $_GET['id'];
?>

<div class="container" style="padding:20px;margin-top:10px;text-align:center;">
<h1>Applied Students</h1>
<table class="table table-hover" style="background-color:#ffffff;width:100%;">
  <thead class="thead-dark">
    <tr style="text-align:center;">
    <th scope="col">First Name</th>   
      <th scope="col">Last Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $checkquery = mysqli_query($connection,"SELECT `studentid` FROM `application` WHERE internshipid='$id'");
  while($checkdata = mysqli_fetch_array($checkquery)){
    $studentid = $checkdata['studentid'];
  $query = mysqli_query($connection,"SELECT * FROM `userdata` WHERE id='$studentid'");

  while($data = mysqli_fetch_array($query)){
  echo "<tr style="."text-align:center;".">";
  echo  "<td>".$data['firstname'] ."</td>";
  echo  "<td>".$data['lastname'] . "</td>";
  echo  "<td>".$data['phone'] . "</td>";
  echo  "<td>".$data['email'] . "</td>";
  echo "</tr>";
  }
  }
  ?>
  </tbody>
</table>
</div>
<?php include 'footer.php';?>
