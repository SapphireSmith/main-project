<?php
include 'dbConnection.php';

$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$place = $_POST['place'];
$lno = $_POST['licence_no'];
$website = $_POST['website'];
$p = $_POST['pass'];
$cp = $_POST['confirm_pass'];

if ($p === $cp) {
    $s = mysqli_query($connection,"insert into shop(name,place,lno,weblink,email,contact)values('$name','$place','$lno','$website','$email','$contact')");  
    $q = mysqli_query($connection, "select max(sid) as uid from shop");
    $rw = mysqli_fetch_array($q);
    $uid = $rw['uid'];
    $st = mysqli_query($connection, "insert into login(uid,uname,upass,utype)values($uid,'$email','$cp','shop')");

    echo "<script>alert('Registered');window.location='form1-login.html';</script>";
} else {
    echo "<script>alert('Password did not match')</script>";
    echo "<script>window.location='form9-shop_details.html';</script>";

}

?>