<?php
include 'dbConnection.php';

$vehicle = $_POST['vehicle'];
$complaint = $_POST['complaint'];
$vno = $_POST['vehicle_no'];


$s = mysqli_query($connection,"insert into request(vehicle,complaint,vno)values('$vehicle','$complaint','$vno')");  
echo "<script>alert('request added');window.location='form7-request.html';</script>";

?>