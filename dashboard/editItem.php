<?php session_start(); ?>

<?php include("../dbConfig.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $website_title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>



<?php


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

if ($filename1=="") {
  $folder1=$_POST['bs1'];
}
if ($filename2=="") {
  $folder2=$_POST['bs2'];
}
if ($filename3=="") {
  $folder3=$_POST['bs3'];
}


$pn= $_POST['pn'];
$pp= $_POST['pp'];
$pt= $_POST['pt'];
$pd= $_POST['pd'];
$city= $_POST['city'];
$area= $_POST['area'];
$id=$_POST['id'];

	$image1 =  $folder1;
	$image2 = $folder2;
	$image3 =  $folder3; 
	$c1 = $_SESSION['id'];


			 
			 $date = date("d/m/y");
			 $time = date("h:m:s a");
			 
		//	 $url = seoUrl($item_name);
       
  $ins = mysqli_query($con,"UPDATE item SET main_category='$pt', date ='$date', time='$time', c1='$c1', item_name='$pn', item_price='$pp',item_details='$pd',image1='$image1', image2='$image2', image3='$image3',city='$city',area='$area'  WHERE id='$id' ");



if($ins>0)
	{
?>
		<script> alert("ok") </script>
<?php		
	}

	else{
?>
		<script> alert("problem")</script>
<?php		
	}



}




?>




















  	

<div class="container">

	<nav class="navbar navbar-light bg-dark">
  <a href="../index.php"> <h4   style="color: white">propertyBD</h4></a>
</nav>

<div class="row"> 
<div class="col-3" > 

<?php include("nav.php"); ?>


   </div>

<div class="col-9" >
  <h3 class="page-header">Edit Property</h3>


   <?php
		   
		   $idy = $_GET['idy'];
		   $cat = $_GET['cat'];
		   
		   
		   $slt = mysqli_query($con,"SELECT * FROM item WHERE id='$idy' ");
		   
		     while($row = mysqli_fetch_array($slt))
			 {

		   ?>

  <form action="" method="post" enctype="multipart/form-data">
  	<div class="form-row" style="margin-top:20px ">
  		<div class="col-md-4">
  			<img src="<?php echo htmlentities($row['image1']); ?>" id="pre1" height="150px" width="180px">
  			<input type="file"  name="file1"  onchange="PreviewImage(event,1)">
         <input type="text" name ="bs1" style="display:none;" value="<?php echo htmlentities($row['image1']); ?>" />
  		</div>

  		<div class="col-md-4">
  			<img src="<?php echo htmlentities($row['image2']); ?>" id="pre2" height="150px" width="180px">
  			<input type="file"  name="file2"  onchange="PreviewImage(event,2)">
         <input type="text"  name="bs2" style="display:none;" value="<?php echo htmlentities($row['image2']); ?>" />
  		</div>

  		<div class="col-md-4">
  			<img src="<?php echo htmlentities($row['image1']); ?>" id="pre3" height="150px" width="180px">
  			<input type="file"  name="file3"  onchange="PreviewImage(event,3)">
         <input type="text"  name="bs3" style="display:none;"  value="<?php echo htmlentities($row['image3']); ?>" />
  		</div>
  			
 </div>


  </br>
  
<div class="form-row">
	<div class="col-md-6 ">
 <label>Property Name </label></br>
<input type="text" class="input-lg form-control" name="pn" value="<?php echo htmlentities($row['item_name']); ?>">
</div>


<div class="col-md-6 ">
 <label>Property Price </label></br>
<input type="text" class="input-lg form-control" name="pp" value="<?php echo htmlentities($row['item_price']); ?>">
</div>

</div>
  </br>

<div class="form-row">
<div class="col-md-6">
 <label>Property Type </label></br>
<select class="input-lg form-control" name="pt"  value="<?php echo htmlentities($row['main_category']); ?>">

	<option  selected> Choose any Option...   </option>
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
                                                        <option value="Showroom/Shop/Restaurant"
                                class="sub-" id="Showroom/Shop/Restaurant" >
                                Showroom/Shop/Restaurant                            </option> 
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
                                                        <option value="Agriculture/Farm Land"
                                class="sub-" id="Agriculture/Farm Land" >
                                Agriculture/Farm Land                            </option> 
                                                    </optgroup>
                    </select>
	



</div>



<div class="col-md-6">
 <label>City </label></br>
<select class="input-lg form-control"  name ="city"   value="<?php echo htmlentities($row['city']); ?>">
	<option >Choose any one...</option>
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
<input type="text" class="input-lg form-control" name="area"  value="<?php echo htmlentities($row['area']); ?>">
</div>
  </br>
<div class="col-xs-6">
 <label>Property Details </label></br>
<textarea type="text" class="input-lg form-control" name="pd" placeholder="Type here...."><?php echo htmlentities($row['item_details']); ?></textarea></br>
</div>

<?php 
}
?>

 <input type="text" name ="id" style="display:none;" value="<?php echo $idy; ?>" />
<input class="btn btn-success" type="submit" name="submit" value="Update">


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



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
     <script src="../js/bootstrap.min.js"></script> 
     <script src="uploaderr_script.js"></script> 
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>

	



  </body>

</html>
