<?php include 'employerheader.php';?>

<?php
      if(isset($_REQUEST['post'])){
        $title = $_POST['title'];
        $description = $_POST['description'];  
        $duration = $_POST['duration'];
        $stipend = $_POST['stipend'];
        $profile = $_POST['profile'];
        $name= $_SESSION['name'];
        $email = $_SESSION['email'];

        mysqli_query($connection,"INSERT INTO `internship`(`id`, `employername`, `employeremail`, `title`,`profile` ,`description`, `duration`,`stipend`, `date`) VALUES ('','$name','$email','$title','$profile','$description','$duration','$stipend',NOW())");
      
        $url="employerhome.php";
        redirect($url);

    }
      ?>
<div class="container" style="background-color:#ffffff;padding:20px;text-align:center;width:500px;border-radius:25px;margin-top:20px;">
<form action="postinternship.php" method="POST">

  <div class="row" style="padding:10px;text-align:center;">
    
  <h2 style="text-align: center;padding: 10px">Post an Internship</h2>
  </div>  
  <div class="row" style="padding:10px;">
    
    <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
  </div>
  <div class="row" style="padding:10px;">
    
    <input type="text" class="form-control" name="profile" id="profile" placeholder="Profile" required>
  </div>
  <div class="row" style="padding:10px;">
    
    <textarea type="text" class="form-control"name="description" id="description" placeholder="Description" rows="5" style="resize:none;" required></textarea>
  </div>
  <div class="row" style="padding:10px;">
    
    <input type="text" class="form-control" name="stipend" id="stipend" placeholder="Stipend" required>
  </div>
  <div class="row" style="padding:10px;">
    
    <input type="text" class="form-control" name="duration" id="duration" placeholder="Duration" required>
  </div>
  <div class="col-sm-0" style="text-align: center">
        <button class="btn btn-primary" type="submit" name="post">Post</button>

    </div>



</form>


</div>



<?php include 'footer.php';?>
      


    