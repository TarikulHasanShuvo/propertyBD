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



if (isset($_POST['submit'])) {

  // For image1
        $filename1=$_FILES["file1"]["name"];
        $tempname1=$_FILES["file1"]["tmp_name"];
        $folder1="img/".$filename1;
        move_uploaded_file($tempname1,$folder1);

        // For image1
        $filename2=$_FILES["file2"]["name"];
        $tempname2=$_FILES["file2"]["tmp_name"];
        $folder2="img/".$filename2;
        move_uploaded_file($tempname2,$folder2);

        // For image1
        $filename3=$_FILES["file3"]["name"];
        $tempname3=$_FILES["file3"]["tmp_name"];
        $folder3="img/".$filename3;
        move_uploaded_file($tempname3,$folder3);

$pn= $_POST['pn'];
$pp= $_POST['pp'];
$pt= $_POST['pt'];
$pd= $_POST['pd'];
$city= $_POST['city'];
$area= $_POST['area'];

  $image1 =  $folder1;
  $image2 = $folder2;
  $image3 =  $folder3; 
  $c1 = $_SESSION['id'];
       
       $date = date("d/m/y");
       $time = date("h:m:s a");
       
    //   $url = seoUrl($item_name);
       
  $ins = mysqli_query($con,"INSERT INTO item 

(`main_category`,`date`,`time`,`item_name`,`item_price`,`item_details`,`image1`,`image2`,`image3`,`city`,`area`,`c1`) 

VALUES('$pt','$date','$time','$pn','$pp','$pd','$image1','$image2','$image3','$city','$area','$c1') ");



if($ins>0)
  {
?>
    <script>

     alert("Data insert Successfully") ;
     window.location = "index.php";
   </script>
<?php   
  }

  else{
?>
    <script> alert("problem")</script>
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
    
   


    </br>
      </br>
        </br>

 

 <div class="container">

  <nav class="navbar navbar-light bg-dark">
  <a href="index.php"> <h4>Dashboard</h4></a>
  
  <h4 style="color: yellow"> Welcome to : <a href="#"> <?php  echo ($rn['firstname']." ".$rn['lastname']);   ?></a></h4>
</nav>
<div class="row"> 
<div class="col-3" > 

<?php include("nav.php"); ?>


   </div>

<div class="col-9" >

</br> <h3 class="page-header" style="color : orange">Add New Property...</h3>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-row" style="margin-top:20px ">
      <div class="col-md-4">
        <img src="" id="pre1" height="150px" width="180px">
        <input type="file"  name="file1"  onchange="PreviewImage(event,1)" required>
      </div>

      <div class="col-md-4">
        <img src="" id="pre2" height="150px" width="180px">
        <input type="file"  name="file2"  onchange="PreviewImage(event,2)" required>
      </div>

      <div class="col-md-4">
        <img src="" id="pre3" height="150px" width="180px">
        <input type="file"  name="file3"  onchange="PreviewImage(event,3)" required>
      </div>
        
 </div>


  </br>
  
<div class="form-row">
  <div class="col-md-6 ">
 <label>Property Name </label></br>
<input type="text" class="input-lg form-control" name="pn" required>
</div>


<div class="col-md-6 ">
 <label>Property Price </label></br>
<input type="text" class="input-lg form-control" name="pp" required>
</div>

</div>
  </br>

<div class="form-row">
<div class="col-md-6">
 <label>Property Type </label></br>
<select class="input-lg form-control" name="pt"  required>

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



<div class="col-md-6">
 <label>City </label></br>
<select class="input-lg form-control"  name ="city" required>
  <option value=" " >Choose any one...</option>
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
<div class="col-xs-6">
 <label>Address </label></br>
<input type="text" class="input-lg form-control" name="area" required>
</div>
  </br>
<div class="col-xs-6">
 <label>Property Details </label></br>
<textarea type="text" class="input-lg form-control" name="pd" placeholder="Type here...." style="height: 150px" required></textarea></br>
</div>

<input class="btn btn-success" type="submit" name="submit">


</div>
        
  </div>  

  </form>


  </div>

  

  

<script >
  
      function PreviewImage(event,x) {

      var reader = new FileReader();
    
      var imageField = document.getElementById("pre"+x+"");

      reader.onload = function(){

        if (reader.readyState == 2){

          imageField.src = reader.result;
        }


      }
      
      reader.readAsDataURL(event.target.files[0]);
    }
</script>
</br>
</br>
</br>

<?php include("footer.php") ?>

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