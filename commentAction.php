
<?php
include 'dbConnection.php';
$customer = $_POST['customer'];
$rating = $_POST['rating'];
$comment = $_POST['comments'];
$s=mysqli_query($connection,"insert into comments(uname,comments,rtn)values('$customer','$comment','$rating')");
echo "<script>alert('Registered');window.location='form8-comment.html';</script>";
?>