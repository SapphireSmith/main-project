<?php
include 'dbConnection.php';

$type = $_POST['types'];
$details = $_POST['details'];


$s = mysqli_query($connection,"insert into reports(type,details)values('$type','$details')");  
echo "<script>alert('Report added');window.location='form6-reports.html';</script>";

?>