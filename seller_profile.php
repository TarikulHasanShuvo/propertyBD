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

   <?php  include('header.php');

      $get_c_id = $_GET['c_id'];

    $sl = mysqli_query($con,"SELECT *FROM c1 WHERE id='$get_c_id' ");
    $row = mysqli_fetch_array($sl);


   
      


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
                <h1 class="" data-aos="fade-up"><?php echo ($row['firstname']." ". $row['lastname']); ?></h1>
                <p data-aos="fade-up" data-aos-delay="100"><?php echo ($row['area'].", ".$row['city']); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

 

 
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            

            <table class="table table-bordered table-dark">

               <thead>
    
    <h3 style="color: orange">Information of Seller</h3></br>
   </thead>

              <tbody>
                <tr>
                  <th>Name </th>
                  <td><?php echo ($row['firstname']." ". $row['lastname']);?></td>
                </tr>

                <tr>
                  <th>Email </th>
                  <td><?php echo ($row['email']);?></td>
                </tr>

                 <tr>
                  <th>Phone No. </th>
                  <td><?php echo ($row['phone']);?></td>
                </tr>


                 <tr>
                  <th>Owner Type </th>
                  <td><?php echo ($row['type']);?></td>
                </tr>

                 <tr>
                  <th>Address </th>
                  <td><?php echo ($row['area'].", ".$row['city']);?></td>
                </tr>


                <tr>
                  <th>Sign up Date </th>
                  <td><?php echo ($row['time'].", ".$row['date']);?></td>
                </tr>






              </tbody>


            </table>



          </div>



          <div class="col-lg-6 ml-auto">

            <div class="mb-5">


          </div>

        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left border-primary">
            <h2 class="font-weight-light text-primary">Other Property</h2>
          </div>
        </div>

        <div class="row mb-5">
         
      

        <?php
          
          $today= mysqli_query($con,"SELECT * FROM `item` where c1='$get_c_id' ");
        
        while($r1 = mysqli_fetch_array($today)){

?>
        
             <div class="col-lg-6">
            <div class="d-block d-md-flex listing">
              <a href="single.php?item_id=<?php echo htmlentities($r1['id']); ?>" class="img d-block" style="background-image: url('dashboard/<?php echo htmlentities($r1['image1']); ?>')"></a>
              <div class="lh-content">
                  <address><?php echo htmlentities($r1['time'].", ".$r1['date']);?></address>
                <span class="category"><?php echo htmlentities($r1['main_category']);?></span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="single.php?item_id=<?php echo htmlentities($r1['id']); ?>"><?php echo htmlentities($r1['item_name']);?></a></h3>
                <address><?php echo htmlentities($r1['area'].", ".$r1['city']);?></address>
                
                <p class="mb-0" style="color: black"> Price : <?php echo htmlentities($r1['item_price']);?> tk
                </p>
               
              </div>
            </div>
          </div>
      

            
<?php }?>
             

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