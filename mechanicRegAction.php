<?php

include 'dbConnection.php';
$n = $_POST['name'];
// $id = $_POST['id_proof'];
$c = $_POST['contact'];
$e = $_POST['email'];
$p = $_POST['place'];
$exp = $_POST['Experience'];
$gender = $_POST['gender'];
$p = $_POST['pass'];
$cp = $_POST['confirm_pass'];


if ($p === $cp) {
    $s = mysqli_query($connection, "insert into mechanic(name,idproof,contact,place,gender,email,experience)values('$n',' ','$c','$p','$gender','$e','$exp')");
    $q = mysqli_query($connection, "select max(mid) as uid from mechanic");
    $rw = mysqli_fetch_array($q);
    $uid = $rw['uid'];
    $st = mysqli_query($connection, "insert into login(uid,uname,upass,utype)values($uid,'$e','$cp','mechanic')");

    echo "<script>alert('Registered');window.location='form1-login.html';</script>";
} else {
    echo "<script>alert('Password did not match')</script>";
    echo "<script>window.location='form4-mechanic_reg.html';</script>";
}


?>