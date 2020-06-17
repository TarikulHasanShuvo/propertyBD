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
                <h1 class="" data-aos="fade-up">Largest Property selling Company</h1>
                <p data-aos="fade-up" data-aos-delay="100">You can buy, sell Property you want.</p>
              </div>
            </div>

            <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
              <form action="search.php" method="post">
                <div class="row align-items-center">
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                    <input type="text" name="name" class="form-control rounded" placeholder="What are you looking for?">
                  </div>
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="wrap-icon">
                      <span class="icon icon-room"></span>
                      <select class="input-lg form-control"  name ="city" >
  <option value=" " >Location</option>
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
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                     <select class="input-lg form-control" name="pt"  >

  <option  value=" "> Choose Property Type   </option>
    <optgroup label="Residential">
                                                        <option value="Apartment/Flats"
                                class="sub-" id="Apartment/Flats" >
                                Apartment/Flats                            </option> 
                                                        <option value="Independent House"
                                class="sub-" id="Independent House" >
                                Independent House                            </option> 
                                                        <option value="Duplex Home"
                                class="sub-" id="Duplex Home" >
                                Duplex Home                            </option> 
                                                        <option value="Studio Apartment"
                                class="sub-" id="Studio Apartment" >
                                Studio Apartment                            </option> 
                                                        <option value="Sublet/Room"
                                class="sub-rent" id="Sublet/Room" >
                                Sublet/Room                            </option> 
                                                    </optgroup>
                        <optgroup label="Commercial">
                                                        <option value="Showroom/Shop"
                                class="sub-" id="Showroom/Shop" >
                                Showroom/Shop                           </option> 

                                <option value="Restaurant"
                                class="sub-" id="Restaurant" >
                                Restaurant                            </option> 
                                                        <option value="Office Space"
                                class="sub-" id="Office Space" >
                                Office Space                            </option> 
                                                        <option value="Industrial Space"
                                class="sub-" id="Industrial Space" >
                                Industrial Space                            </option> 
                                                    </optgroup>
                        <optgroup label="Land/Plot">
                                                        <option value="Residential Plot"
                                class="sub-" id="Residential Plot" >
                                Residential Plot                            </option> 
                                                        <option value="Commercial Plot"
                                class="sub-" id="Commercial Plot" >
                                Commercial Plot                            </option> 
                                                        <option value="Agriculture Land"
                                class="sub-" id="Agriculture Land" >
                                Agriculture Land                            </option> 
                                                    </optgroup>
                    </select>
  
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" name="search" class="btn btn-primary btn-block rounded" value="Search">
                  </div>
                  
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>  




  <?php  include('header.php'); 

 $res=0;
$com=0;
$lan=0;

$count= mysqli_query($con,"SELECT * FROM item ");
        
        while($row = mysqli_fetch_array($count))
        {
            if($row['main_category']==='Apartment/Flats'|| $row['main_category']==='Independent House'|| $row['main_category']==='Duplex Home'|| $row['main_category']==='Studio Apartment'|| $row['main_category']==='Sublet/Room' )

            {

              $res++;
            }


            if($row['main_category']==='Showroom/Shop'|| $row['main_category']==='Restaurant'|| $row['main_category']==='Office Space'|| $row['main_category']==='Industrial Space' )

            {

              $com++;
            }

             if($row['main_category']==='Residential Plot'|| $row['main_category']==='Commercial Plot'|| $row['main_category']==='Agriculture Land')

            {

              $lan++;
            }





        }






?>





    <div class="site-section bg-light" >
      <div class="container">
        
        <div class="overlap-category mb-5">
          <div class="row align-items-stretch no-gutters">

            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2" style="margin-left: 100px">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-house"></span></span>
                <span class="caption mb-2 d-block">Residential</span>
                <span class="number"><?php echo $res ?></span>
              </a>
            </div>
           
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2"  style="margin-left: 180px">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-house"></span></span>
                <span class="caption mb-2 d-block">Commercial</span>
                <span class="number"><?php echo $com ?></span>
              </a>
            </div>
           
          
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2" style="margin-left: 150px">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-house"></span></span>
                <span class="caption mb-2 d-block">Land / Plot </span>
                <span class="number"><?php echo $lan ?></span>
              </a>
            </div>
          </div>
        </div>
        
       
    
    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Popular Property</h2>
            <p class="color-black-opacity-5">For more details click the Image</p>
          </div>
        </div>

       
  <div class="row">
         
        
        <?php
          
          $main= mysqli_query($con,"SELECT * FROM `item` ORDER BY `id` DESC ");
        
        while($r = mysqli_fetch_array($main)){

?>
     
          <div class="col-md-6 mb-4 mb-lg-4 col-lg-6">
            
            <div class="listing-item">
              <div class="listing-image">
               <img src="dashboard/<?php echo htmlentities($r['image1']); ?>" alt="dashboard/<?php echo htmlentities($r['image2']); ?>" class="img-fluid" style="height: 350px" >
              </div>
              <div class="listing-item-content">
                <input class="btn btn-warning"  style="margin-bottom: 170px" value=" Price : <?php echo htmlentities($r['item_price']);?> tk"></br>
                <a class="px-3 mb-3 category" href="single.php?item_id=<?php echo htmlentities($r['id']); ?>"><?php echo htmlentities($r['main_category']);?></a>
                <h2 class="mb-1"><a href="single.php?item_id=<?php echo htmlentities($r['id']); ?>"><?php echo htmlentities($r['item_name']); ?></a></h2>

                <span class="address"><?php echo htmlentities($r['area'])?> , <?php echo htmlentities($r['city'])?>
                </span>


              </div>
            </div>
 </div>
 
        <?php }?> 

          

        </div>
      </div>
    </div>






  




    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left border-primary">
            <h2 class="font-weight-light text-primary">Trending Today</h2>
          </div>
        </div>

        <div class="row mb-5">
         
      

        <?php
          
          $today= mysqli_query($con,"SELECT * FROM `item` ORDER BY `id` DESC ");
        
        while($r1 = mysqli_fetch_array($today)){

?>
        
             <div class="col-lg-6">
            <div class="d-block d-md-flex listing">
              <a href="single.php?item_id=<?php echo htmlentities($r1['id']); ?>" class="img d-block" style="background-image: url('dashboard/<?php echo htmlentities($r1['image1']); ?>')"></a>
              <div class="lh-content">
                <span class="category"><?php echo htmlentities($r1['main_category']);?></span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="single.php?item_id=<?php echo htmlentities($r1['id']); ?>"><?php echo htmlentities($r1['item_name']);?></a></h3>
                <address><?php echo htmlentities($r1['area']);?></address>
                <p class="mb-0"> Price : <?php echo htmlentities($r1['item_price']);?> tk
                </p>
              </div>
            </div>
          </div>
      

            
<?php }?>
             

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