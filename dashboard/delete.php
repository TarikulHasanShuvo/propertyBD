<?php session_start(); ?>

<?php include("../dbConfig.php"); ?>


   <?php
		   
		   $idy = $_GET['idy'];
		   
		   
		   $slt = mysqli_query($con,"DELETE  FROM item WHERE id='$idy' ");


       if ($slt>0) {
         
?>

<script > 

  alert("DELETE Secssesful");

window.location="index.php";

</script>

<?php

       }

       else
       {
        echo "problem";
       }



     ?>
	



 