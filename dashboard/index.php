<?php
session_start();

include("../dbConfig.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>propertyBD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="../css2/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/css2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css2/css/magnific-popup.css">
    <link rel="stylesheet" href="../css/css2/css/jquery-ui.css">
    <link rel="stylesheet" href="../css/css2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/css2/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/css2/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../css/css2/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../css/css2/css/aos.css">
    <link rel="stylesheet" href="../css/css2/css/rangeslider.css">

    <link rel="stylesheet" href="../css/css2/css/style.css">
    
  </head>
  <body>

   <?php 

    include('header.php');


 $sid = $_SESSION['id'];

   // Fatch Customer Name
   $nam= mysqli_query($con,"SELECT * FROM c1 WHERE `id`='$sid' ");
   
   $rn= mysqli_fetch_array($nam);


    
    
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
    
   


    </br>
      </br>
        </br>

 

 <div class="container">

  <nav class="navbar navbar-light bg-dark">
  <a href="../index.php"> <h4>Dashboard</h4></a>
  
  <h4 style="color: yellow"> Welcome to : <a href="#"> <?php  echo ($rn['firstname']." ".$rn['lastname']);   ?></a></h4>
</nav>

<div class="row" > 
<div class="col-3" > 

<?php include("nav.php"); ?>


   </div>

<div class="col-9"  >

     </br>
      

          <h2>Property List</h2>
          <div class="table-responsive">
          
      
       <table class="table table-striped">
   
   <thead>
   <tr>
   
   <th>
   S/N
   </th>
   
   <th>
  Property Name
   </th>
   
 
   
   <th>
  Property Type
   </th>
   
   
 
   
   
   <th>
  Price
   </th>
  
   
   
   <th>
  Date Posted
   </th>
   
   
   
   
   <th>
   Actions
   </th>
   
   </thead>
    <tbody>
   <?php
   
   if(isset($_SESSION['id']) )
   {
   $sid = $_SESSION['id'];

   // Fatch Customer Name
   $nam= mysqli_query($con,"SELECT * FROM c1 WHERE `id`='$sid' ");

   $rn= mysqli_fetch_array($nam);
   
   $get  = mysqli_query($con,"SELECT * FROM item WHERE c1='$sid' ");
   
   $count=0;
   while($rw = mysqli_fetch_array($get))
   {
     
     $count++;
     
   ?>
   
   
   <tr>
   
   <th>
  <?php echo $count; ?>
   </th>
   
   <th>
   <?php echo $rw['item_name']; ?>
   </th>
 
   
   <th>
   <?php echo $rw['main_category']; ?>
   </th>
   
   
   
   <th>
   <?php echo $rw['item_price']; ?>
   </th>
   
   
   <th>
   <?php echo $rw['date']; ?>
   </th>
   
 
   
   
   <th colspan="5">
   <a title="view" target="_blank"  class="btn btn-success btn-sm" href="../single.php?item_id=<?php echo strip_tags($rw['id']);?>" class="btn3 pull-right">View </a>

  <a href="edit.php?idy=<?php echo $rw['id']; ?>" class="btn btn-primary btn-sm">Edit</a>

  <a href="delete.php?idy=<?php echo $rw['id']; ?>" class="btn btn-danger btn-sm">Delete</a>


   </th>
   
   </tr>
   
   <?php
   
   }
   
   
   }
   ?>
   
   </tbody>
   
   </table>
   
   
   
          </div>
        </div>
      </div>
    </div>
    
    </br>
      </br>
        </br>
  
    
   <?php include('footer.php'); ?>
  </div>

  <script src="../css/css2/js/jquery-3.3.1.min.js"></script>
  <script src="../css/css2/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../css/css2/js/jquery-ui.js"></script>
  <script src="../css/css2/js/popper.min.js"></script>
  <script src="../css/css2/js/bootstrap.min.js"></script>
  <script src="../css/css2/js/owl.carousel.min.js"></script>
  <script src="../css/css2/js/jquery.stellar.min.js"></script>
  <script src="../css/css2/js/jquery.countdown.min.js"></script>
  <script src="../css/css2/js/jquery.magnific-popup.min.js"></script>
  <script src="../css/css2/js/bootstrap-datepicker.min.js"></script>
  <script src="../css/css2/js/aos.js"></script>
  <script src="../css/css2/js/rangeslider.min.js"></script>

  <script src="../css/css2/js/main.js"></script>
    
  </body>
</html>