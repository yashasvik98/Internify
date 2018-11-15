<?php
  include 'connection.php';
  include 'redirect.php';
?>
<!doctype html>
<html lang="en">
  <head> 
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="img/icon.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>Internify</title>
  </head>
  <body background="img/homepage.jpg" style="background-size:cover;font-family: 'Montserrat', sans-serif;">
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark container-fluid" style="min-height: 100px">
        <a class="navbar-brand" href="index.php">Internify</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="viewinternshipout.php">Find Internship</a>
            </li>
            
           
            
          </ul>
          <form action="validate_login.php" method="POST" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="email" name="email" placeholder="Email" required>
                <input class="form-control mr-sm-2" type="password" name="password" placeholder="Password" required >

                <button class="btn btn-outline-primary mr-md-2" type="submit" name="login">Log In</button>
              </form>
          
        </div>
      </nav>
     