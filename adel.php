<?php
include("aconnect.php");
echo $q="delete from Appli_detail where appli_id=".$_GET['appli_id'];
$res=mysqli_query($con,$q);
header("location:adis.php");
?>
