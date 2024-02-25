<?php
include 'dbConnection.php';

$sparepart = $_POST['sparepart_name'];
$desc = $_POST['description'];
// $file = $_POST['file'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$s = mysqli_query($connection,"insert into spareparts(pname,description,price,image,stock)values('$sparepart','$desc','$price','','$stock')");
echo "<script>alert('Details Added');window.location='form5-spareparts_details.html';</script>";

?>