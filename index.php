<?php 
      include 'header.php';
      if(isset($_REQUEST['register'])){
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $phone = $_POST['phone_number'];
        $email = $_POST['email'];
        $user = $_POST['user'];
        $password = $_POST['password'];
        $password1= $_POST['r_password'];

        $check = mysqli_query($connection, "SELECT * FROM userdata WHERE email='$email'");
        if( mysqli_num_rows($check)>=1 ){

          echo '<div class="alert alert-danger alert-dismissible fade show" style="text-align:center;margin-top:5px;margin-left:5px;margin-right:5px;height:50px;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          User with Email ID has already registered.
        </div>';

        }
        else{
          if($password==$password1){
            
            mysqli_query($connection,"INSERT INTO `userdata`(`id`, `firstname`, `lastname`, `phone`, `email`, `user`, `password`) VALUES ('','$firstname','$lastname','$phone','$email','$user','$password')");
        
            redirect("login.php");
          }
          else
          {
            echo '<div class="alert alert-danger alert-dismissible fade show" style="text-align:center;margin-top:5px;margin-left:5px;margin-right:5px;height:50px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Password not matched! Please try again.
          </div>';
          }
        }
      }
      ?>

      <div id="signup" class="container" style="padding:20px;margin:30px;width:600px;border-radius:25px;background-color: #ffffff;float:right;">
          
        <h2 style="text-align: center;padding: 10px">Create an account</h2>
        <form action="index.php" method="POST">
            <div class="row" style="padding: 10px;">
                <div class="col">
                    <input class="form-control" type="text" name="first_name" id="first_name" placeholder="First Name" required>
                </div>
                <div class="col">
                        <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Last Name" required>
                    </div>

            </div>
            <div class="row-7 input-group" style="padding: 10px;">
                    <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">+91</span>
                          </div>
                    <input class="form-control"  type="tel" name="phone_number" id="phone_number" placeholder="Phone Number" pattern="[0-9]{10}"
                    required>
    
            </div>
            <div class="row-7" style="padding: 10px;">
                <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>

            </div>
            <div class="row-7" style="padding: 10px;">
                    <select name="user" class="form-control" required>

                            <option value="student">Student</option>
                            <option value="employer">Employer</option>
                          </select>    
                </div>
            
            <div class="row-7" style="padding: 10px;">
                <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>

            </div>
            <div class="row-7" style="padding: 10px;">
                    <input class="form-control" type="password" name="r_password" id="r_password" placeholder="Re-Enter Password" required>
    
                </div>
            
            <div class="col-sm-0" style="text-align: center">
                    <button class="btn btn-primary" type="submit" name="register">Sign Up</button>

            </div>
            
            

        </form>
      </div>


<?php include 'footer.php';?>