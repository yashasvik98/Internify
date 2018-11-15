<?php
session_start();
include 'connection.php';
include 'redirect.php';
$email = $_POST['email'];
$password = $_POST['password'];
$insert_query = "SELECT * from userdata where email='$email' AND password='$password'";
$query = mysqli_query($connection,$insert_query);
if(mysqli_num_rows($query)==0){
  redirect("login.php?e=1");
  
} 
else{
  $data = mysqli_fetch_array($query);
  $_SESSION['email'] = $data['email'];
  $_SESSION['user_id'] = $data['id'];
  $_SESSION['name'] = $data['firstname']." ".$data['lastname'];
  
  if($data['user']=="student"){
    redirect("studenthome.php");
  }
  else{
    redirect("employerhome.php");
  }
}

?>