<?php
    if(isset($_GET['user'])){
        include 'studentheader.php';
        include 'connection.php';
        $internshipid = $_GET['id'];
        $email = $_SESSION['email'];
        $query = mysqli_query($connection, "SELECT * FROM userdata WHERE email='$email'");
        $data = mysqli_fetch_array($query);
        $studentname = $data['firstname'].' '.$data['lastname'];
        $email = $data['email'];
        $studentid = $data['id'];
        $insertquery = mysqli_query($connection, "INSERT INTO `application`(`id`, `internshipid`, `studentid`, `studentname`, `studentemail`) VALUES ('','$internshipid','$studentid','$studentname','$email')");
        $url = "studenthome.php";
        redirect($url);

    }
    else{
        $url = "login.php";
        redirect($url);
    }
?>