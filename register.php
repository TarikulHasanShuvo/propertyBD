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
			
 
  
			 $firstname = mysqli_real_escape_string($con,$_POST['firstname']);
			 $lastname = mysqli_real_escape_string($con,$_POST['lastname']);
			 $email = mysqli_real_escape_string($con,$_POST['email']);
			 $password = mysqli_real_escape_string($con,$_POST['password']);
			 $area = mysqli_real_escape_string($con,$_POST['area']);
			 $city = mysqli_real_escape_string($con,$_POST['city']);
			 $type = mysqli_real_escape_string($con,$_POST['type']);
			 $phone = mysqli_real_escape_string($con,$_POST['phone']);
 
			 $date = date("m/d/y");
			 $time =  date("h:i:s a");
			 
   
 
 
$stmt = mysqli_query($con,"INSERT INTO c1(`firstname`, `lastname`, `email`,  `password`, `area`, `city`, `type`, `phone`,`date`,`time`) VALUES('$firstname','$lastname', '$email','$password','$area','$city','$type','$phone', '$date', '$time')");
   
   
   if(!$stmt)
   {
	   echo mysqli_error($con);
   }
   
   else
   {
	      
	  ?>
	  
	  <script>

	  	alert( "Sign Up was Succesful ! ...");
	  
	 window.location = "login.php";
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
    
   


    <div class="site-blocks-cover overlay" style="background-image: url(images/house.jpg); height: 10px" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 class="" data-aos="fade-up">Sign Up</h1>
                <p data-aos="fade-up" data-aos-delay="100">If you don't have any account you can sign up..</p>
              </div>
            </div>
          </div>
        </div>
      </div>


 <div class="site-section bg-light" style="background-image: url(images/mainbg.jpg); background-size: cover;">
      <div class="container">
 <h1 >Create Account...</h1>
 </br>     	
      
  <form action="register.php"  method="post">

  

  <div class="form-row">
	<div class="col-md-6 ">
<input type="text" class="input-lg form-control" name="firstname" placeholder="First Name">
</div>


<div class="col-md-6 ">
<input type="text" class="input-lg form-control" name="area" placeholder="Address" >
</div>

</div>

  </br>
  <div class="form-row">
	<div class="col-md-6 ">
<input type="text" class="input-lg form-control" name="lastname" placeholder="Last Name">
</div>


<div class="col-md-6 ">
<select class="dropdown"  name ="city" style="height: 42px ; width: 550px" required  >
	<option >Choose any City....</option>

<option value="Dhaka">Dhaka</option>
<option value="Chattogram">Chattogram</option>
<option value="Rajshahi">Rajshahi</option>
<option value="Sylhet">Sylhet</option>
<option value="Khulna">Khulna</option>
<option value="Barishal">Barishal</option>
<option value="Rangpur">Rangpur</option>
<option value="Mymensingh">Mymensingh</option>
<option value="Narail">Narail</option>
<option value="Narayanganj">Narayanganj</option>
<option value="Narsingdi">Narsingdi</option>
<option value="Natore">Natore</option>
<option value="Nawabganj">Nawabganj</option>
<option value="Netrakona">Netrakona</option>
<option value="Nilphamari">Nilphamari</option>
<option value="Noakhali">Noakhali</option>
<option value="Pabna">Pabna</option>
<option value="Panchagarh">Panchagarh</option>
<option value="Patuakhali">Patuakhali</option>
<option value="Pirojpur">Pirojpur</option>
<option value="Rajbari">Rajbari</option>
<option value="Rangamati">Rangamati</option>
<option value="Satkhira">Satkhira</option>
<option value="Shariatpur">Shariatpur</option>
<option value="Sherpur">Sherpur</option>
<option value="Sirajganj">Sirajganj</option>
<option value="Sunamganj">Sunamganj</option>
<option value="Tangail">Tangail</option>
<option value="Thakurgaon">Thakurgaon</option>
<option value="Naogaon">Naogaon</option>
<option value="Bagerhat">Bagerhat</option>
<option value="Bandarban">Bandarban</option>
<option value="Barguna">Barguna</option>
<option value="Bhola">Bhola</option>
<option value="Bogura">Bogura</option>
<option value="Brahmanbaria">Brahmanbaria</option>
<option value="Chandpur">Chandpur</option>
<option value="Chuadanga">Chuadanga</option>
<option value="Cumilla">Cumilla</option>
<option value="Coxs Bazar">Cox's Bazar</option>
<option value="Dinajpur">Dinajpur</option>
<option value="Faridpur">Faridpur</option>
<option value="Feni">Feni</option>
<option value="Gaibandha">Gaibandha</option>
<option value="Gazipur">Gazipur</option>
<option value="Gopalganj">Gopalganj</option>
<option value="Habiganj">Habiganj</option>
<option value="Jamalpur">Jamalpur</option>
<option value="Jashore">Jashore</option>
<option value="Jhalokati">Jhalokati</option>
<option value="Jhenaidah">Jhenaidah</option>
<option value="Joypurhat">Joypurhat</option>
<option value="Khagrachhari">Khagrachhari</option>
<option value="Kishoreganj">Kishoreganj</option>
<option value="Kurigram">Kurigram</option>
<option value="Kushtia">Kushtia</option>
<option value="Lakshmipur">Lakshmipur</option>
<option value="Lalmonirhat">Lalmonirhat</option>
<option value="Madaripur">Madaripur</option>
<option value="Magura">Magura</option>
<option value="Manikganj">Manikganj</option>
<option value="Meherpur">Meherpur</option>
<option value="Moulvibazar">Moulvibazar</option>
<option value="Munshiganj">Munshiganj</option>
	
	</select>

</div>

</div>
  </br>

    <div class="form-row">
	<div class="col-md-6 ">
<input type="text" class="input-lg form-control" name="email" placeholder="Email" required="">
</div>


<div class="col-md-6 ">
<select class="dropdown" name="type" style="height: 42px ; width: 550px" required  >

	<option>Yor are a Buyer / Seller....</option>
<option value="buyer">Buyer</option>
<option value="seller">Seller</option>

	
                    </select>

</div>

</div>
  </br>

    <div class="form-row">
	<div class="col-md-6 ">
<input type="text" class="input-lg form-control" name="password" placeholder="Password" required>
</div>


<div class="col-md-6 ">
<input type="text" class="input-lg form-control" name="phone" placeholder="Phone Number" >
</div>

</div>
  </br>

   
 			  <div class="row form-group">
                <div class="col-12">
                  <p style="color: black">Have an account? <a href="login.php" style="color: orange">Log In</a></p>
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