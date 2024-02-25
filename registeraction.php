
<?php
include 'dbConnection.php';
$n=$_POST['name'];
$c=$_POST['contact'];
$e=$_POST['email'];
$s=mysqli_query($connection,"insert into customer(name,email,cno)values('$n','$e','$c')");
echo "<script>alert('Registered');window.location='form1-login.html';</script>";
?>