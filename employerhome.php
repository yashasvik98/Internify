<?php include 'employerheader.php';
$email=$_SESSION['email'];
$user="employer";
?>


<div class="container" style="padding:20px;margin-top:10px;text-align:center;">
<h1>Dashboard</h1>
<table class="table table-hover" style="background-color:#ffffff;width:100%;">
  <thead class="thead-dark">
    <tr style="text-align:center;">
    <th scope="col">Profile</th>   
      <th scope="col">Title</th>
      <th scope="col">Duration</th>
      <th scope="col">Stipend</th>
      <th scope="col">Posted On</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $query = mysqli_query($connection,"SELECT * FROM `internship` WHERE employeremail='$email'");

  while($data = mysqli_fetch_array($query)){
  echo "<tr style="."text-align:center;".">";
  echo  "<td>".$data['profile'] ."</td>";
  echo  "<td><a href="."employerinternshipdetail.php?id=".$data['id'].">".$data['title'] . "</a></td>";
  echo  "<td>".$data['duration'] . "</td>";
  echo  "<td>".$data['stipend'] . "</td>";
  echo  "<td>".$data['date'] . "</td>";
  echo "</tr>";
  }

  ?>
  </tbody>
</table>
     


</div>

      


<?php include 'footer.php';?>