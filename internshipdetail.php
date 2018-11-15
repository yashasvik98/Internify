<?php
if(isset($_GET['user'])){
        include 'studentheader.php';
         $user=$_GET['user'];
        $studentemail=$_GET['email'];
    
  }
else{
    include 'header.php';
    $user="";
    $studentemail="";

}





$id = $_GET['id'];
?>

<?php
if(isset($_POST['apply'])){

    $url ="application.php?id=".$_GET['id']."&user=".$user;
    redirect($url);
}
?>

<div class="container" style="background-color:#ffffff;text-align:center;padding:20px;margin-top:30px;border-radius:25px;">
<form action="" method="POST">
<?php
    $query = mysqli_query($connection,"SELECT * FROM `internship` WHERE id='$id'");
    $data = mysqli_fetch_array($query);
    echo "<h1>".$data['title']."</h1>";
    echo "<b style="."float:right;margin-right:25px;".">".$data['employername']."</b>";
    echo "<br>";
    echo "<p style="."float:right;margin-right:25px;".">".$data['date']."</p>";
    echo "<br>";
    echo "<hr>";
    
    echo "<br>";
    echo "<div style="."text-align:center;".">";
    echo "<p style="."".">".$data['description']."</p>";
    echo "</div>";
    echo "<br>";
    echo "<br>";
    echo "<p style="."float:left;margin-left:25px;"." ><b>Stipend:</b> ".$data['stipend']."</p>";
    echo "<p style="."float:right;margin-right:25px;"." ><b>Contact:</b> ".$data['employeremail']."</p>";
    echo "<br>";
    echo "<br>";
    $validatequery = mysqli_query($connection,"SELECT * FROM `application` WHERE studentemail='$studentemail' AND internshipid='$id'");
    $data = mysqli_fetch_array($validatequery);
    if(mysqli_num_rows($validatequery)==0){
        
        echo'
        <button class="btn btn-primary" type="submit" name="apply">Apply</button>
        ';
      } 
    else
    {
        echo'
        <button class="btn btn-primary" disabled>Applied</button>
        ';
    }
    

?>
</form>
</div>


<?php include 'footer.php';?>