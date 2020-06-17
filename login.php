<?php
session_start();

include("dbConfig.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>propertyBD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css2/fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/css2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css2/css/magnific-popup.css">
    <link rel="stylesheet" href="css/css2/css/jquery-ui.css">
    <link rel="stylesheet" href="css/css2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/css2/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/css2/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="css/css2/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/css2/css/aos.css">
    <link rel="stylesheet" href="css/css2/css/rangeslider.css">

    <link rel="stylesheet" href="css/css2/css/style.css">
    
  </head>
  <body>

   <?php 

    include('header.php');


       if(isset($_POST['submit']))
     {
          
        $username  =  $_POST['email'];
        $password = $_POST['password'];
         $type = $_POST['type'];
        
        //Test the login details...
        
        $msql = mysqli_query($con,"SELECT * FROM c1 where `email`='$username' and `password`='$password' and `type`='$type'");
                   
               $rq=mysqli_fetch_array($msql);
               if($rq>0){
            
                         
                       $_SESSION['id'] = $rq['id'];
                       $_SESSION['username'] = $rq['email'];
                        $_SESSION['password'] = $rq['password'];
                      $_SESSION['timeout'] = time();
                       
                      ?>
                      <script>
                    
                       window.location ="dashboard/index.php";
                      </script>
                      
                      <?php
                     }
                
                else
                {
                ?>
                
                <script>
              
                alert("Wrong Username or Password Or User Type");
                window.location ="login.php";

                </script>
                
                <?php
                
                }
        
     
     }
     
    
    
    ?>





  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
   


    <div class="site-blocks-cover overlay" style="background-image: url(images/house.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 class="" data-aos="fade-up">Log In</h1>
                <p data-aos="fade-up" data-aos-delay="100">If you don't have any account you can sign up..</p>
              </div>
            </div>
          </div>
        </div>
      </div>


 <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5"  data-aos="fade">

            

            <form action="login.php" class="p-5 bg-white"  method="post">
             
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label > 
                  <input type="email" name="email" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Password</label> 
                  <input type="password" name="password" class="form-control" required>
                </div>
              </div>
</br>
               <div class="row form-group">
                
                <div class="col-md-12">
                 <select  name="type" style="height: 40px ; width: 540px" required >

                 <option value="">Yor are a Buyer / Seller....</option>
                  <option value="buyer">Buyer</option>
                  <option value="seller">Seller</option>

  
                    </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-12">
                  <p style="color: black">No account yet? <a href="register.php">Register</a></p>
                </div>
              </div>

            
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          
        </div>
      </div>
    </div>

 

 
 


    
        
       
    
   
   

       
    
  
    
   <?php include('footer.php'); ?>
  </div>

  <script src="css/css2/js/jquery-3.3.1.min.js"></script>
  <script src="css/css2/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="css/css2/js/jquery-ui.js"></script>
  <script src="css/css2/js/popper.min.js"></script>
  <script src="css/css2/js/bootstrap.min.js"></script>
  <script src="css/css2/js/owl.carousel.min.js"></script>
  <script src="css/css2/js/jquery.stellar.min.js"></script>
  <script src="css/css2/js/jquery.countdown.min.js"></script>
  <script src="css/css2/js/jquery.magnific-popup.min.js"></script>
  <script src="css/css2/js/bootstrap-datepicker.min.js"></script>
  <script src="css/css2/js/aos.js"></script>
  <script src="css/css2/js/rangeslider.min.js"></script>

  <script src="css/css2/js/main.js"></script>
    
  </body>
</html>