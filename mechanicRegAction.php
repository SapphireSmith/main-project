<?php

include 'dbConnection.php';
$n = $_POST['name'];
// $id = $_POST['id_proof'];
$c = $_POST['contact'];
$e = $_POST['email'];
$p = $_POST['place'];
$exp = $_POST['Experience'];
$gender = $_POST['gender'];
$s=mysqli_query($connection,"insert into mechanic(name,idproof,contact,place,gender,email,experience)values('$n',' ','$c','$p','$gender','$e','$exp')");
echo "<script>alert('Registered');window.location='form1-login.html';</script>";
?>