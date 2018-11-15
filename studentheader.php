<?php
        session_start();
        include 'connection.php';
        include 'redirect.php';

        if(!isset($_SESSION['email'])){
          redirect("login.php");
        }

        
      ?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="internify/img/icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <title>Internify | Student</title>
  </head>
  <body style="background-color: #dcdcdc;font-family: 'Montserrat', sans-serif;
">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="min-height: 100px">
        <a class="navbar-brand" href="studenthome.php">Internify</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="studenthome.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="findinternship.php">Find Internship</a>
            </li>
          </ul>
          <?php  
          echo '<h5 style="padding:10px;color:#ffffff;"><b>Hello </b>'.$_SESSION['name'].' !</h5>';        
         ?>
        <form action="logout.php">
                <button class="btn btn-outline-primary mr-md-2" type="submit">Log Out</button>
        </form>
        </div>
        
      </nav>
 
      