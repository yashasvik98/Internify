<?php
    include 'header.php';
    if(isset($_GET['e'])){
        echo '<div class="alert alert-danger alert-dismissible fade show" style="text-align:center;margin-top:5px;margin-left:5px;margin-right:5px;height:50px;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          User credentials are wrong! Please try again.
        </div>';
    }

?>
    <div class="container container-fluid" style="text-align: center">
            <div id="login" class="container" style="padding:30px;margin-top:30px;width:500px;height:400px;border-radius:25px;background-color: #ffffff;">
          
                    <h2 style="text-align: center;padding: 20px">Log In</h2>
                    <form action="validate_login.php" method="POST">
                       
                        
                        <div class="row-7" style="padding: 20px;">
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
            
                        </div>
                        <div class="row-7" style="padding: 20px;">
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
            
                        </div>
                        
                        <div class="col-sm-0" style="text-align: center;padding:10px" >
                        
                                <button class="btn btn-primary" type="submit">Log In</button>
            
                        </div>
                    </form>
                        <div class="col-sm-0" style="text-align: center;padding:10px">
                  
                          <form action="index.php">
                              <button class="btn btn-outline-primary" type="submit">Sign Up</button>
                          </form>
                                
                             
                        </div>
                        
                        
            
                   
                  </div>
    </div>
    
      

      

<?php include 'footer.php';?>