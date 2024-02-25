<?php
include 'dbConnection.php';

$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$place = $_POST['place'];
$lno = $_POST['licence_no'];
$website = $_POST['website'];


$s = mysqli_query($connection,"insert into shop(name,place,lno,weblink,email,contact)values('$name','$place','$lno','$website','$email','$contact')");  
echo "<script>alert('Shop details added');window.location='form9-shop_details.html';</script>";

?>