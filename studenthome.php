<?php include 'studentheader.php';
include 'connection.php';
$email=$_SESSION['email'];
$user="student";
?>


<div class="container" style="padding:20px;margin-top:10px;text-align:center;">
<h1>Dashboard</h1>
<table class="table table-hover" style="background-color:#ffffff;width:100%;">
  <thead class="thead-dark">
    <tr style="text-align:center;">
    <th scope="col">Profile</th>   
      <th scope="col">Title</th>
      <th scope="col">Employer</th>
      <th scope="col">Duration</th>
      <th scope="col">Stipend</th>
      <th scope="col">Posted On</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $checkquery = mysqli_query($connection,"SELECT `internshipid` FROM `application` WHERE studentemail='$email'");
  while($checkdata = mysqli_fetch_array($checkquery)){
  $internshipid = $checkdata['internshipid'];
  $query = mysqli_query($connection,"SELECT * FROM `internship` WHERE id='$internshipid'");

  while($data = mysqli_fetch_array($query)){
  echo "<tr style="."text-align:center;".">";
  echo  "<td>".$data['profile'] ."</td>";
  echo  "<td><a href="."internshipdetail.php?id=".$data['id']."&user=".$user."&email=".$email.">".$data['title'] . "</a></td>";
  echo  "<td>".$data['employername'] . "</td>";
  echo  "<td>".$data['duration'] . "</td>";
  echo  "<td>".$data['stipend'] . "</td>";
  echo  "<td>".$data['date'] . "</td>";
  echo "</tr>";
  }
}
  ?>
  </tbody>
</table>
     


</div>

<?php include 'footer.php';?>